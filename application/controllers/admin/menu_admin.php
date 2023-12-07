<?php

class menu_admin extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model('M_admin');
}

	public function index()
	{
		$data['admin']=$this->M_admin->get_admin()->result_array();
        $this->load->view('templates_menu_admin/header');
		$this->load->view('admin/dashboard_admin',$data);
        $this->load->view('templates_menu_admin/footer');
	}

    
    public function tambah_admin()
	{
        $this->load->view('templates_menu_admin/header');
		$this->load->view('admin/form_tambah_admin');
        $this->load->view('templates_menu_admin/footer');
                
    }


    public function aksi_simpan()
	{
                $id_adm = $this->input->post('id_adm');
                $username = $this->input->post('username');
               $pw = $this->input->post('pw');
               $email = $this->input->post('email');
               
               $data=array(
                'id_adm'=>$id_adm,
                'username'=>$username,
                'pw'=>$pw,
                'email'=>$email,
            
               );
            $this->M_admin->insert_admin($data);
            if($this->db->affected_rows()){
                redirect('admin/menu_admin');
            }else{
                redirect('admin/admin/tambah_admin');
            }
    }

    public function editadm($id)
	{
                $data['admin'] = $this->M_admin->get_data_by_idadm($id)->row_array();
                //$where=array('id_adm'=>$id);
                //$data['admin'] = $this->M_admin->edit_admin($where,'admin')->result();
                //$data['admin'] = $this->M_admin->getAdminById($id);
                $this->load->view('templates_menu_admin/header');
                $this->load->view('admin/form_edit_admin', $data);
                $this->load->view('templates_menu_admin/footer');
    }

    /*public function edit($id)
	{
                $data['admin'] = $this->M_admin->get_data_by_id($id)->row_array();
                //$where=array('id'=>$id);
                //$data['job'] = $this->M_job->edit_job($where,'job')->result();
                $this->load->view('templates_admin/header');
                $this->load->view('admin/form_edit_admin', $data);
                $this->load->view('templates_admin/footer');
    }*/

    public function aksi_edit()
	{
        $id= $this->input->post('id_adm');
        $username = $this->input->post('username');
       $pw = $this->input->post('pw');
       $email = $this->input->post('email');
       
       $data=array(
        'id_adm'=>$id,
        'username'=>$username,
        'pw'=>$pw,
        'email'=>$email,
    
       );
            
        /*$where = array(
            'id_adm'=> $id
        );

        $this->M_admin->updateyt($where,$data,'admin');
                redirect('admin/menu_admin');*/

            $this->M_admin->update_admin($data,$id);
            if($this->db->affected_rows()){
                redirect('admin/menu_admin');
            }else{
                redirect('admin/menu_admin/editadm/'.$id);
            }
    }

    public function hapus($id)
	{
            $this->M_admin->hapus_admin($id);
            if($this->db->affected_rows()){
                redirect('admin/menu_admin');
            }else{
               echo "Gagal dihapus";
            }
    }

    
}
