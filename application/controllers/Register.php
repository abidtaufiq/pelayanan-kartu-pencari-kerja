<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function register_user()
	{
		$this->load->view('register_user');
	}

	public function register_perusahaan()
	{
		$this->load->view('register_perusahaan');
	}


	public function proses_user()
	{

		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$re_pass = $this->input->post('re_pass');

		

		$id_user_level = 3;
		$id_status_verifikasi = 1;
		$id_status_aktif = 1;
		$id_status_perpanjangan = 1;
        $id = md5($username.$email.$pass.rand(1, 999999));

		if($pass == $re_pass)
        {
			$hasil = $this->m_user->pendaftaran_user($id, $username, $email, $pass, $id_user_level, $id_status_verifikasi, $id_status_aktif, $id_status_perpanjangan);

			if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('register/register_user');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/login_user');
			}
			
		}else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('register/register_user');
        }

	
	}

	public function proses_perusahaan()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$re_pass = $this->input->post('re_pass');
		$id_user_level = 2;
		$id_status_verifikasi = 1;
		$id_status_aktif = 1;
        $id = md5($username.$email.$pass.rand(1, 999999));

		if($pass == $re_pass)
        {
			$hasil = $this->m_user->pendaftaran_perusahaan($id, $username, $email, $pass, $id_user_level, $id_status_verifikasi, $id_status_aktif);

			if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('register/register_perusahaan');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/login_perusahaan');
			}
			
		}else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('register/register_perusahaan');
        }

	}
}