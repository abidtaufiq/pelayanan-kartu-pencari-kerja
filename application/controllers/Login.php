<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function login_user()
	{
		$this->load->view('login_user');
	}

	public function login_perusahaan()
	{
		$this->load->view('login_perusahaan');
	}

	public function proses()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->m_user->cek_login($username);

		if($user->num_rows()>0){
			$user = $user->row_array();

			if($user['password'] == $password){

				if($user['id_user_level'] == 1){

					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
					
					redirect('Dashboard/view_admin');
	
				}else if($user['id_user_level'] == 2){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/view_perusahaan');
	
				}else if($user['id_user_level'] == 3){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/view_user');
	
				}else{
					$this->session->set_flashdata('loggin_err','loggin_err');
					redirect('Login/login_user');
				}

			}else{

			$this->session->set_flashdata('loggin_err_pass','loggin_err_pass');
			redirect('Login/login_user');

			}
		}else{
			$this->session->set_flashdata('loggin_err_no_user','loggin_err_no_user');
			redirect('Login/login_user');
		}
		
		

	}

	public function proses_perusahaan()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->m_user->cek_login($username);

		if($user->num_rows()>0){
			$user = $user->row_array();

			if($user['password'] == $password){

				if($user['id_user_level'] == 1){

					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
					
					redirect('Dashboard/view_admin');
	
				}else if($user['id_user_level'] == 2){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/view_perusahaan');
	
				}else if($user['id_user_level'] == 3){
	
					$this->session->set_userdata('logged_in', true);
					$this->session->set_userdata('id_user', $user['id_user']);
					$this->session->set_userdata('username', $user['username']);
					$this->session->set_userdata('id_user_level', $user['id_user_level']);
	
					redirect('Dashboard/view_user');
	
				}else{
					$this->session->set_flashdata('loggin_err','loggin_err');
					redirect('Login/login_perusahaan');
				}

			}else{

			$this->session->set_flashdata('loggin_err_pass','loggin_err_pass');
			redirect('Login/login_perusahaan');

			}
		}else{
			$this->session->set_flashdata('loggin_err_no_user','loggin_err_no_user');
			redirect('Login/login_perusahaan');
		}
		
		

	}

	public function log_out_user(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
        $this->session->set_flashdata('success_log_out','success_log_out');
        redirect('Login/login_user');
	}

	public function log_out_perusahaan(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
        $this->session->set_flashdata('success_log_out','success_log_out');
        redirect('Login/login_perusahaan');
	}

	

}