<?php

class Kategori extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_kategori');
   
}

	public function ui_designer()
	{
		$data['ui_designer']=$this->M_kategori->data_ui_designer()->result_array();

        $this->load->view('templates_kategori/header');
		$this->load->view('kategori/ui_designer',$data);
        $this->load->view('templates_kategori/footer');
	}

    public function web_design()
	{
		$data['web_design']=$this->M_kategori->data_web_design()->result_array();

        $this->load->view('templates_kategori/header');
		$this->load->view('kategori/web_design',$data);
        $this->load->view('templates_kategori/footer');
	}

    public function data_analyst()
	{
		$data['data_analyst']=$this->M_kategori->data_data_analyst()->result_array();

        $this->load->view('templates_kategori/header');
		$this->load->view('kategori/data_analyst',$data);
        $this->load->view('templates_kategori/footer');
	}

    public function graphic_design()
	{
		$data['graphic_design']=$this->M_kategori->data_graphic_design()->result_array();

        $this->load->view('templates_kategori/header');
		$this->load->view('kategori/graphic_design',$data);
        $this->load->view('templates_kategori/footer');
	}
}
