<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
    }

	public function update_akun_admin()
	{
		$id_user = $this->input->post("id_user");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $re_pass = $this->input->post("re_pass");


        if($password == $re_pass)
        {

            $hasil = $this->m_user->update_account($id_user, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Dashboard/view_admin');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Dashboard/view_admin');
            }
            

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('Dashboard/view_admin');
        }
    }
    
    public function update_akun_perusahaan()
	{
		$id_user = $this->input->post("id_user");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $re_pass = $this->input->post("re_pass");


        if($password == $re_pass)
        {

            $hasil = $this->m_user->update_account($id_user, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Dashboard/view_perusahaan');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Dashboard/view_perusahaan');
            }
            

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('Dashboard/view_perusahaan');
        }
    }
    
    public function update_akun_user()
	{
		$id_user = $this->input->post("id_user");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $re_pass = $this->input->post("re_pass");


        if($password == $re_pass)
        {

            $hasil = $this->m_user->update_account($id_user, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Dashboard/view_user');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Dashboard/view_user');
            }
            

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('Dashboard/view_user');
        }
	}

}