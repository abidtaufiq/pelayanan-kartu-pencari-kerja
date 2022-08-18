<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
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

            $data['perusahaan'] = $this->m_user->get_all_perusahaan()->result_array();
            $data['status_verifikasi_data'] = $this->m_status_verifikasi->get_all_status_verifikasi()->result_array();
            $data['status_aktif_data'] = $this->m_status_aktif->get_all_status_aktif()->result_array();
            $data['status_perpanjangan_data'] = $this->m_status_perpanjangan->get_all_status_perpanjangan()->result_array();
            $this->load->view('admin/perusahaan', $data);

        } else {

            $this->session->set_flashdata('loggin_err', 'loggin_err');
            redirect('Login/login_user');

        }

    }

    public function tambah_perusahaan()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $jenis_perusahaan = $this->input->post('jenis_perusahaan');
        $npwp_perusahaan = $this->input->post('npwp_perusahaan');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $alamat = $this->input->post('alamat');
        $kode_pos = $this->input->post('kode_pos');
        $deskripsi = $this->input->post('deskripsi');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $id_status_verifikasi = 1;
        $id_status_aktif = 1;
        $id_user_level = 2;
        $id_user = md5($nama_perusahaan . $kode_pos . $email);
        $foto_name = md5($nama_perusahaan . $npwp_perusahaan . $id_user);

        $path = './assets/logo/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/logo';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_logo';
        $this->upload->initialize($config);
        $logo_upload = $this->upload->do_upload('logo');

        if ($logo_upload) {
            $logo = $this->upload->data();
        } else {

            $this->session->set_flashdata('error_file_saya', 'error_file_saya');
            redirect('Perusahaan/view_admin');
        }

        $hasil = $this->m_user->insert_perusahaan($id_user, $username, $password, $email, $nama_perusahaan,
            $jenis_perusahaan, $npwp_perusahaan, $provinsi, $kota, $alamat, $kode_pos, $deskripsi, $nomor_telepon, $logo['file_name'], $id_status_aktif, $id_status_verifikasi, $id_user_level);

        if ($hasil == false) {
            $this->session->set_flashdata('eror', 'eror');
            redirect('Perusahaan/view_admin');
        } else {
            $this->session->set_flashdata('input', 'input');
            redirect('Perusahaan/view_admin');
        }
    }

    public function update_perusahaan()
    {

        $id_user = $this->input->post('id_user');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $jenis_perusahaan = $this->input->post('jenis_perusahaan');
        $npwp_perusahaan = $this->input->post('npwp_perusahaan');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $alamat = $this->input->post('alamat');
        $kode_pos = $this->input->post('kode_pos');
        $deskripsi = $this->input->post('deskripsi');
        $nomor_telepon = $this->input->post('nomor_telepon');
        $foto_name = md5($nama_perusahaan . $npwp_perusahaan . $id_user);

        $path = './assets/logo/';

        $this->load->library('upload');
        $config['upload_path'] = './assets/logo';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '20480'; //2MB max
        $config['max_width'] = '44800'; // pixel
        $config['max_height'] = '44800'; // pixel
        $config['file_name'] = $foto_name . '_logo';
        $this->upload->initialize($config);
        $logo_upload = $this->upload->do_upload('logo');

        if ($logo_upload) {
            $logo = $this->upload->data();
        } else {

            $this->session->set_flashdata('error_file_saya', 'error_file_saya');
            redirect('Perusahaan/view_admin');
        }

        $hasil = $this->m_user->update_perusahaan($id_user, $nama_perusahaan,
            $jenis_perusahaan, $npwp_perusahaan, $provinsi, $kota, $alamat, $kode_pos, $deskripsi, $nomor_telepon, $logo['file_name']);

        if ($hasil == false) {
            $this->session->set_flashdata('eror', 'eror');
            redirect('Perusahaan/view_admin');
        } else {
            @unlink($path . $this->input->post('logo_old'));
            $this->session->set_flashdata('update', 'update');
            redirect('Perusahaan/view_admin');
        }

    }

    public function hapus_perusahaan()
    {

        $id_user = $this->input->post("id_user");

        $path = './assets/logo/';

        $hasil = $this->m_user->delete_perusahaan($id_user);

        if ($hasil == false) {
            $this->session->set_flashdata('eror', 'eror');
            redirect('Perusahaan/view_admin');
        } else {
            @unlink($path . $this->input->post('logo_old'));
            $this->session->set_flashdata('delete', 'delete');
            redirect('Perusahaan/view_admin');
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
            $hasil = $this->m_status_verifikasi->update_status_verifikasi_perusahaan($status_verifikasi, $id_user);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_status_verifikasi', 'eror_status_verifikasi');
                redirect('Perusahaan/view_admin');
            } else {
                $this->session->set_flashdata('input_status_verifikasi', 'input_status_verifikasi');
                redirect('Perusahaan/view_admin');
            }
        } else {
            $this->session->set_flashdata('error_send', 'error_send');
            redirect('Perusahaan/view_admin');
        }

    }

    public function aktif_data()
    {
        $id_user = $this->input->post("id_user");
        $status_aktif = $this->input->post("status_aktif");

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
            $hasil = $this->m_status_aktif->update_status_aktif_perusahaan($status_aktif, $id_user);

            if ($hasil == false) {
                $this->session->set_flashdata('eror_status_aktif', 'eror_status_aktif');
                redirect('Perusahaan/view_admin');
            } else {
                $this->session->set_flashdata('input_status_aktif', 'input_status_aktif');
                redirect('Perusahaan/view_admin');
            }
        } else {
            $this->session->set_flashdata('error_send', 'error_send');
            redirect('Perusahaan/view_admin');
        }

    }

}
