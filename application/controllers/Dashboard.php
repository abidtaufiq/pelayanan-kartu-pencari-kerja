<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_loker');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['pencaker'] = $this->m_user->count_all_user()->row_array();
		$data['pencaker_acitve'] = $this->m_user->count_all_user_active()->row_array();
		$data['pencaker_no_active'] = $this->m_user->count_all_user_no_active()->row_array();
		$data['perusahaan'] = $this->m_user->count_all_perusahaan()->row_array();
		$data['perusahaan_active'] = $this->m_user->count_all_perusahaan_active()->row_array();
		$data['perusahaan_no_active'] = $this->m_user->count_all_perusahaan_no_active()->row_array();
		$this->load->view('admin/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
    }
    
    public function view_perusahaan()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$data['perusahaan_data'] = $this->m_user->get_all_perusahaan_by_id($this->session->userdata('id_user'))->row_array();
		$data['pencaker'] = $this->m_user->count_all_user()->row_array();
		$data['perusahaan'] = $this->m_user->count_all_perusahaan()->row_array();
		$data['loker'] = $this->m_loker->count_all_loker_by_id($this->session->userdata('id_user'))->row_array();
		
		// echo var_dump($data);
		// die();

		$this->load->view('perusahaan/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_perusahaan');

		}

    }
    
    public function view_user()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
		$data['pencaker'] = $this->m_user->count_all_user()->row_array();
		$data['perusahaan'] = $this->m_user->count_all_perusahaan()->row_array();
		$this->load->view('user/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
	}

}
