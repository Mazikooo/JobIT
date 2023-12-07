<?php

class menu_job extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->model('M_job');
        $this->load->model('M_login');
   
       
}

	public function index()
	{
        
        $data['username'] = $this->session->userdata('username');

		$data['job']=$this->M_job->get_job()->result_array();
        $this->load->view('templates_menu_job/header');
		$this->load->view('job/dashboard_job',$data);
        $this->load->view('templates_menu_job/footer');


        
	}

    
    public function tambah_job()
	{
        $this->load->view('templates_menu_job/header');
		$this->load->view('job/form_tambah_job');
        $this->load->view('templates_menu_job/footer');
                
    }


    public function aksi_simpan()
	{
                $id = $this->input->post('id');
                $nama = $this->input->post('nama');
               $jabatan = $this->input->post('jabatan');
               $lokasi = $this->input->post('lokasi');
               $gaji = $this->input->post('gaji');
               $keterangan = $this->input->post('keterangan');
               $batas = $this->input->post('batas');
               $logo = $_FILES['logo'];
               if ($logo =''){}else{
                $config['upload_path']='./uploads';
                $config['allowed_types']='jpg|jpeg|png';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('logo')){
                    echo "Gambar gagal diupload!";
                }else{
                    $logo=$this->upload->data('file_name');
                }
               }
               

               $data=array(
                'id'=>$id,
                'nama'=>$nama,
                'jabatan'=>$jabatan,
                'lokasi'=>$lokasi,
                'gaji'=>$gaji,
                'keterangan'=>$keterangan,
                'batas'=>$batas,
                'logo'=>$logo
               );
            $this->M_job->insert_job($data);
            if($this->db->affected_rows()){
                redirect('admin/menu_job');
            }else{
                redirect('admin/menu_job/tambah_job');
            }
    }

    public function edit($id)
	{
                $data['job'] = $this->M_job->get_data_by_id($id)->row_array();
                //$where=array('id'=>$id);
                //$data['job'] = $this->M_job->edit_job($where,'job')->result();
                $this->load->view('templates_menu_job/header');
                $this->load->view('job/form_edit_job', $data);
                $this->load->view('templates_menu_job/footer');
    }

    public function aksi_edit()
	{
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
       $jabatan = $this->input->post('jabatan');
       $lokasi = $this->input->post('lokasi');
       $gaji = $this->input->post('gaji');
       $keterangan = $this->input->post('keterangan');
       $batas = $this->input->post('batas');
       $logo = $_FILES['logo'];
       if ($logo =''){}else{
        $config['upload_path']='./uploads';
        $config['allowed_types']='jpg|jpeg|png';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('logo')){
            echo "Gambar gagal diupload!";
        }else{
            $logo=$this->upload->data('file_name');
        }
       }

       $data=array(
        'nama'=>$nama,
        'jabatan'=>$jabatan,
        'lokasi'=>$lokasi,
        'gaji'=>$gaji,
        'keterangan'=>$keterangan,
        'batas'=>$batas,
        'logo'=>$logo,
       );
            
        /*$where = array(
            'id'=>$id
        );

        $this->M_job->updateyt($where,$data,'job');
                redirect('admin/admin');*/

            $this->M_job->update_job($data,$id);
            if($this->db->affected_rows()){
                redirect('admin/menu_job');
            }else{
                redirect('admin/menu_job/edit/'.$id);
            }
    }

    public function hapus($id)
	{
            $this->M_job->hapus_job($id);
            if($this->db->affected_rows()){
                redirect('admin/menu_job');
            }else{
               echo "Gagal dihapus";
            }
    }

    
}
