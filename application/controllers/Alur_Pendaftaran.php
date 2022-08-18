<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Alur_Pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_user');  
    }
    public function view_user_perpanjangan()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
        
        $data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
		
		$this->load->view('user/alur_perpanjangan', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
	}

	public function view_user_pendaftaran()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
        
        $data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
		
		$this->load->view('user/alur_pendaftaran', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
	}
}