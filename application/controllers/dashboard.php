<?php

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['job']=$this->M_job->get_job()->result_array();
        $this->load->view('templates/header');
		$this->load->view('dashboard',$data);
        $this->load->view('templates/footer');
	}

	public function apply()
	{
		
        $this->load->view('templates/header_apply');
		$this->load->view('form_apply');
        $this->load->view('templates/footer');
	}
}
