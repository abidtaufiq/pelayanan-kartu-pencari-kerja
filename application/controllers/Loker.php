<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_loker');
        $this->load->model('m_user');
    }

    
    public function view_perusahaan($id_user)
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

            $data['perusahaan_data'] = $this->m_user->get_all_perusahaan_by_id($this->session->userdata('id_user'))->row_array();
        $data['loker'] = $this->m_loker->get_all_loker_by_id($id_user)->result_array();
        
        $this->load->view('perusahaan/loker', $data);

        }else{

            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/login_perusahaan');

        }
    }

    

    public function tambah_loker()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $posisi = $this->input->post('posisi');
        $jumlah_rekrut = $this->input->post('jumlah_rekrut');
        $salary = $this->input->post('salary');
        $batas_akhir = $this->input->post('batas_akhir');
        $id = md5($judul.$deskripsi.$posisi);
        $id_user = $this->session->userdata('id_user');

        $hasil = $this->m_loker->insert_loker($id, $id_user, $judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir);

			if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('Loker/view_perusahaan/'.$id_user);
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Loker/view_perusahaan/'.$id_user);
			}
    }

    public function edit_loker()
    {

        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $posisi = $this->input->post('posisi');
        $jumlah_rekrut = $this->input->post('jumlah_rekrut');
        $salary = $this->input->post('salary');
        $batas_akhir = $this->input->post('batas_akhir');
        $id_loker = $this->input->post('id_loker');
        $id_user = $this->session->userdata('id_user');

        $hasil = $this->m_loker->update_loker($judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir, $id_loker);

        if($hasil==false){

            $this->session->set_flashdata('eror_edit','eror_edit');
            redirect('Loker/view_perusahaan/'.$id_user);
  
        }else{
                  
            $this->session->set_flashdata('edit','edit');
            redirect('Loker/view_perusahaan/'.$id_user);
          
        }
        
    }

    public function hapus_loker()
    {

        $id_loker = $this->input->post('id_loker');
        $id_user = $this->session->userdata('id_user');


        $hasil = $this->m_loker->delete_loker($id_loker);

        if($hasil==false){

            $this->session->set_flashdata('eror_delete','eror_delete');
            redirect('Loker/view_perusahaan/'.$id_user);
  
        }else{
                  
            $this->session->set_flashdata('delete','delete');
            redirect('Loker/view_perusahaan/'.$id_user);
          
        }
        
    }

    
    
   

}