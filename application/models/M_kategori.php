<?php
class M_kategori extends CI_Model{

    public function data_ui_designer(){
       
        return $this->db->get_where('job', array('jabatan'=>'ui designer'));
    }

    public function data_web_design(){
       
        return $this->db->get_where('job', array('jabatan'=>'web design'));
    }

    public function data_data_analyst(){
       
        return $this->db->get_where('job', array('jabatan'=>'data analyst'));
    }

    public function data_graphic_design(){
       
        return $this->db->get_where('job', array('jabatan'=>'graphic design'));
    }

}