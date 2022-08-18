<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencaker extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_status_aktif');
        $this->load->model('m_status_perpanjangan');
        $this->load->model('m_status_verifikasi');
    }

    public function view_admin()
    {

        if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

            $data['user'] = $this->m_user->get_all_user()->result_array();
            $data['status_verifikasi_data'] = $this->m_status_verifikasi->get_all_status_verifikasi()->result_array();
            $data['status_aktif_data'] = $this->m_status_aktif->get_all_status_aktif()->result_array();
            $data['status_perpanjangan_data'] = $this->m_status_perpanjangan->get_all_status_perpanjangan()->result_array();

            $this->load->view('admin/pencaker', $data);

        } else {

            $this->session->set_flashdata('loggin_err', 'loggin_err');
            redirect('Login/login_user');

        }
    }

    public function view_admin_pencaker_perpanjang()
    {

        if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

            $data['user'] = $this->m_user->get_all_user_perpanjang()->result_array();
            $data['status_verifikasi_data'] = $this->m_status_verifikasi->get_all_status_verifikasi()->result_array();
            $data['status_aktif_data'] = $this->m_status_aktif->get_all_status_aktif()->result_array();
            $data['status_perpanjangan_data'] = $this->m_status_perpanjangan->get_all_status_perpanjangan()->result_array();

            $this->load->view('admin/pencaker_perpanjang', $data);

        } else {

            $this->session->set_flashdata('loggin_err', 'loggin_err');
            redirect('Login/login_user');

        }
    }

    public function view_perusahaan()
    {

        if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 2) {

            $data['perusahaan_data'] = $this->m_user->get_all_perusahaan_by_id($this->session->userdata('id_user'))->row_array();
            $data['user'] = $this->m_user->get_all_user()->result_array();
            $this->load->view('perusahaan/pencaker', $data);

        } else {

            $this->session->set_flashdata('loggin_err', 'loggin_err');
            redirect('Login/login_perusahaan');

        }
    }

    public function tambah_pencaker()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $no_pendaftaran = rand(10000000, 99999999);
        $nik = $this->input->post('nik');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jurusan = $this->input->post('jurusan');
        $pengalaman_kerja = $this->input->post('pengalaman_kerja');
        $no_hp = $this->input->post('no_hp');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $id = md5($username . $password . $alamat . $berat_badan);
        $id_status_verifikasi = 1;
        $id_status_perpanjangan = 1;
        $id_status_aktif = 1;
        $id_user_level = 3;
        $foto_name = md5($nama_lengkap . $nik . rand(1, 9999) . $nik . $jurusan);

        $path = './assets/berkas/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_saya';
        $this->upload->initialize($config);
        $foto_saya_upload = $this->upload->do_upload('foto_saya');

        if ($foto_saya_upload) {
            $foto_saya = $this->upload->data();
        } else {

            $this->session->set_flashdata('error_file_saya', 'error_file_saya');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_ktp';
        $this->upload->initialize($config);
        $foto_ktp_upload = $this->upload->do_upload('foto_ktp');
        if ($foto_ktp_upload) {
            $foto_ktp = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            $this->session->set_flashdata('error_file_ktp', 'error_file_ktp');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_ijazah';
        $this->upload->initialize($config);
        $foto_ijazah_upload = $this->upload->do_upload('foto_ijazah');
        if ($foto_ijazah_upload) {
            $foto_ijazah = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            $this->session->set_flashdata('error_file_ijazah', 'error_file_ijazah');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_akte';
        $this->upload->initialize($config);
        $foto_akte_upload = $this->upload->do_upload('foto_akte');
        if ($foto_akte_upload) {
            $foto_akte = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            @unlink($path . $foto_ijazah['file_name']);
            $this->session->set_flashdata('error_file_akte', 'error_file_akte');
            redirect('Daftar/view_user/' . $id);
        }

        if ($_FILES['foto_surat_pengalaman_kerja']['tmp_name'] != "") {

            $config['upload_path'] = './assets/berkas';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '20480'; //2MB max
            $config['max_width'] = '44800'; // pixel
            $config['max_height'] = '44800'; // pixel
            $config['file_name'] = $foto_name . '_foto_surat_pengalaman_kerja';
            $this->upload->initialize($config);
            $foto_surat_pengalaman_kerja_upload = $this->upload->do_upload('foto_surat_pengalaman_kerja');
            if ($foto_surat_pengalaman_kerja_upload) {
                $foto_surat_pengalaman_kerja_file = $this->upload->data();
                $foto_surat_pengalaman_kerja = $foto_surat_pengalaman_kerja_file['file_name'];
            } else {
                @unlink($path . $foto_saya['file_name']);
                @unlink($path . $foto_ktp['file_name']);
                @unlink($path . $foto_ijazah['file_name']);
                @unlink($path . $foto_akte['file_name']);
                $this->session->set_flashdata('error_foto_surat_pengalaman_kerja', 'error_foto_surat_pengalaman_kerja');
                redirect('Daftar/view_user/' . $id);
            }
        } else {
            $foto_surat_pengalaman_kerja = "";
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_foto_transkrip_nilai';
        $this->upload->initialize($config);
        $foto_transkrip_nilai_upload = $this->upload->do_upload('foto_transkrip_nilai');
        if ($foto_transkrip_nilai_upload) {
            $foto_transkrip_nilai = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            @unlink($path . $foto_ijazah['file_name']);
            @unlink($path . $foto_akte['file_name']);
            @unlink($path . $foto_surat_pengalaman_kerja['file_name']);
            $this->session->set_flashdata('error_foto_transkrip_nilai', 'error_foto_transkrip_nilai');
            redirect('Daftar/view_user/' . $id);
        }

        $hasil = $this->m_user->insert_user($id, $username, $password, $email, $no_pendaftaran, $nik, $nama_lengkap, $tempat_lahir,
            $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan, $tinggi_badan, $berat_badan,
            $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $provinsi, $kota, $kode_pos,
            $alamat, $foto_saya['file_name'], $foto_ktp['file_name'], $foto_ijazah['file_name'], $foto_akte['file_name'], $foto_surat_pengalaman_kerja, $foto_transkrip_nilai['file_name'], $id_status_verifikasi, $id_status_perpanjangan, $id_status_aktif, $id_user_level);

        if ($hasil == false) {

            $this->session->set_flashdata('eror', 'eror');
            redirect('Pencaker/view_admin');

        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Pencaker/view_admin');

        }

    }

    public function update_pencaker()
    {
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $nik = $this->input->post('nik');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jurusan = $this->input->post('jurusan');
        $pengalaman_kerja = $this->input->post('pengalaman_kerja');
        $no_hp = $this->input->post('no_hp');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $id = $this->input->post('id_user');
        $id_status_verifikasi = $this->input->post('id_status_verifikasi');
        $id_status_perpanjangan = $this->input->post('id_status_perpanjangan');
        $id_status_aktif = $this->input->post('id_status_aktif');
        $foto_name = md5($nama_lengkap . $nik . rand(1, 9999) . $kode_pos . $username);

        $path = './assets/berkas/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_saya';
        $this->upload->initialize($config);
        $foto_saya_upload = $this->upload->do_upload('foto_saya');

        if ($foto_saya_upload) {
            $foto_saya = $this->upload->data();
        } else {

            $this->session->set_flashdata('error_file_saya', 'error_file_saya');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_ktp';
        $this->upload->initialize($config);
        $foto_ktp_upload = $this->upload->do_upload('foto_ktp');
        if ($foto_ktp_upload) {
            $foto_ktp = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            $this->session->set_flashdata('error_file_ktp', 'error_file_ktp');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_ijazah';
        $this->upload->initialize($config);
        $foto_ijazah_upload = $this->upload->do_upload('foto_ijazah');
        if ($foto_ijazah_upload) {
            $foto_ijazah = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            $this->session->set_flashdata('error_file_ijazah', 'error_file_ijazah');
            redirect('Pencaker/view_admin');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_akte';
        $this->upload->initialize($config);
        $foto_akte_upload = $this->upload->do_upload('foto_akte');
        if ($foto_akte_upload) {
            $foto_akte = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            @unlink($path . $foto_ijazah['file_name']);
            $this->session->set_flashdata('error_file_akte', 'error_file_akte');
            redirect('Daftar/view_user/' . $id);
        }

        if ($_FILES['foto_surat_pengalaman_kerja']['tmp_name'] != "") {

            $config['upload_path'] = './assets/berkas';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['max_size'] = '20480'; //2MB max
            $config['max_width'] = '44800'; // pixel
            $config['max_height'] = '44800'; // pixel
            $config['file_name'] = $foto_name . '_foto_surat_pengalaman_kerja';
            $this->upload->initialize($config);
            $foto_surat_pengalaman_kerja_upload = $this->upload->do_upload('foto_surat_pengalaman_kerja');
            if ($foto_surat_pengalaman_kerja_upload) {
                $foto_surat_pengalaman_kerja_file = $this->upload->data();
                $foto_surat_pengalaman_kerja = $foto_surat_pengalaman_kerja_file['file_name'];
            } else {
                @unlink($path . $foto_saya['file_name']);
                @unlink($path . $foto_ktp['file_name']);
                @unlink($path . $foto_ijazah['file_name']);
                @unlink($path . $foto_akte['file_name']);
                $this->session->set_flashdata('error_foto_surat_pengalaman_kerja', 'error_foto_surat_pengalaman_kerja');
                redirect('Daftar/view_user/' . $id);
            }
        } else {
            $foto_surat_pengalaman_kerja = $this->input->post('foto_surat_pengalaman_kerja_old');
        }

        $config['upload_path'] = './assets/berkas';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_foto_transkrip_nilai';
        $this->upload->initialize($config);
        $foto_transkrip_nilai_upload = $this->upload->do_upload('foto_transkrip_nilai');
        if ($foto_transkrip_nilai_upload) {
            $foto_transkrip_nilai = $this->upload->data();
        } else {
            @unlink($path . $foto_saya['file_name']);
            @unlink($path . $foto_ktp['file_name']);
            @unlink($path . $foto_ijazah['file_name']);
            @unlink($path . $foto_akte['file_name']);
            @unlink($path . $foto_surat_pengalaman_kerja['file_name']);
            $this->session->set_flashdata('error_foto_transkrip_nilai', 'error_foto_transkrip_nilai');
            redirect('Daftar/view_user/' . $id);
        }

        $hasil = $this->m_user->update_user_detail($id, $no_pendaftaran, $nik, $nama_lengkap, $tempat_lahir,
            $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan, $tinggi_badan, $berat_badan,
            $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $provinsi, $kota, $kode_pos,
            $alamat, $foto_saya['file_name'], $foto_ktp['file_name'], $foto_ijazah['file_name'], $foto_akte['file_name'], $foto_surat_pengalaman_kerja, $foto_transkrip_nilai['file_name'], $id_status_verifikasi, $id_status_perpanjangan, $id_status_aktif);

        if ($hasil == false) {
            $this->session->set_flashdata('eror', 'eror');
            redirect('Pencaker/view_admin');
        } else {
            @unlink($path . $this->input->post('foto_saya_old'));
            @unlink($path . $this->input->post('foto_ktp_old'));
            @unlink($path . $this->input->post('foto_ijazah_old'));
            @unlink($path . $this->input->post('foto_akte_old'));

            if ($foto_surat_pengalaman_kerja != $this->input->post('foto_surat_pengalaman_kerja_old')) {
                @unlink($path . $this->input->post('foto_surat_pengalaman_kerja_old'));
            }

            @unlink($path . $this->input->post('foto_transkrip_nilai_old'));
            $this->session->set_flashdata('update', 'update');
            redirect('Pencaker/view_admin');
        }

    }

    public function hapus_pencaker()
    {

        $id_user = $this->input->post("id_user");

        $path = './assets/berkas/';

        $hasil = $this->m_user->delete_user($id_user);

        if ($hasil == false) {
            $this->session->set_flashdata('eror', 'eror');
            redirect('Pencaker/view_admin');
        } else {
            @unlink($path . $this->input->post('foto_saya_old'));
            @unlink($path . $this->input->post('foto_ktp_old'));
            @unlink($path . $this->input->post('foto_ijazah_old'));
            @unlink($path . $this->input->post('foto_akte_old'));
            @unlink($path . $this->input->post('foto_surat_pengalaman_kerja_old'));
            @unlink($path . $this->input->post('foto_transkrip_nilai_old'));
            $this->session->set_flashdata('delete', 'delete');
            redirect('Pencaker/view_admin');
        }

    }

    public function verifikasi_data()
    {
        $id_user = $this->input->post("id_user");
        $status_verifikasi = $this->input->post("status_verifikasi");
        $pesan = $this->input->post("pesan");
        $email = $this->input->post("email");

        $this->load->library('email');
        $this->load->config('email');

        $from = $this->config->item('smtp_user');

        $subject = 'Status Verifikasi Kartu AK1';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($pesan);

        if ($this->email->send()) {
            $hasil = $this->m_status_verifikasi->update_status_verifikasi_user($status_verifikasi, $id_user);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_status_verifikasi', 'eror_status_verifikasi');
                redirect('Pencaker/view_admin');
            } else {
                $this->session->set_flashdata('input_status_verifikasi', 'input_status_verifikasi');
                redirect('Pencaker/view_admin');
            }
        } else {
            $this->session->set_flashdata('error_send', 'error_send');
            redirect('Pencaker/view_admin');
        }

    }

    public function aktif_data()
    {
        $id_user = $this->input->post("id_user");
        $status_aktif = $this->input->post("status_aktif");
        $pesan = $this->input->post("pesan");
        $email = $this->input->post("email");
        $mulai_berlaku = $this->input->post("mulai_berlaku");
        $akhir_berlaku = $this->input->post("akhir_berlaku");

        if ($status_aktif == 1) {
            $id_status_perpanjangan = 2;
        } else {
            $id_status_perpanjangan = 1;
        }

        $this->load->library('email');
        $this->load->config('email');

        $from = $this->config->item('smtp_user');

        $subject = 'Status Verifikasi Kartu AK1';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($pesan. " , berlaku mulai $mulai_berlaku dan berakhir pada $akhir_berlaku, Trimakasih");

        if ($this->email->send()) {
            $hasil = $this->m_status_aktif->update_status_aktif_user($status_aktif, $id_user, $mulai_berlaku, $akhir_berlaku, $id_status_perpanjangan);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_status_aktif', 'eror_status_aktif');
                redirect('Pencaker/view_admin');
            } else {
                $this->session->set_flashdata('input_status_aktif', 'input_status_aktif');
                redirect('Pencaker/view_admin');
            }
        } else {
            $this->session->set_flashdata('error_send', 'error_send');
            redirect('Pencaker/view_admin');
        }

    }

    public function ubah_status_perpanjangan()
    {
        $id_user = $this->input->post("id_user");
        $status_perpanjangan = $this->input->post("status_perpanjangan");

        $pesan = $this->input->post("pesan");
        $email = $this->input->post("email");

        $this->load->library('email');
        $this->load->config('email');

        $from = $this->config->item('smtp_user');

        $subject = 'Status Verifikasi Kartu AK1';

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($pesan);

        if ($this->email->send()) {
            $hasil = $this->m_status_perpanjangan->update_status_perpanjangan_user($status_perpanjangan, $id_user);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_status_perpanjangan', 'eror_status_perpanjangan');
                redirect('Pencaker/view_admin');
            } else {
                $this->session->set_flashdata('input_status_perpanjangan', 'input_status_perpanjangan');
                redirect('Pencaker/view_admin');
            }
        } else {
            $this->session->set_flashdata('error_send', 'error_send');
            redirect('Pencaker/view_admin');
        }

    }

}
