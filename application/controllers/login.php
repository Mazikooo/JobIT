<?php

class Login extends CI_Controller {

	
	function __construct(){
                parent::__construct();
                $this->load->model('M_login');
	}

	 public function index()
	{
        $this->load->view('form_login');
	}

    public function aksi_login()
	{
        $username= $this->input->post('username');
        $password= $this->input->post('pw');

        $cek = $this->M_login->cek_admin($username,$password)->num_rows();
        if($cek > 0){
            $data_session = array(
                'username'=> $username,
                'status'=>"login"
            );
            $this->session->set_userdata($data_session,'username');
            redirect('admin/menu_job');
        }else{
            $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('form_login');
    
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }


}