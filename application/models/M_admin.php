<?php
class M_admin extends CI_Model{
    public function get_admin(){
       
            return $this->db->get('admin');
            
    }
  
    public function insert_admin($data){
        
            $this->db->insert('admin', $data);
    }

    public function update_admin($data,$id){
        
            $this->db->where('id_adm', $id);
            $this->db->update('admin', $data);
    }

    public function hapus_admin($id){
        
            $this->db->where('id_adm', $id);
            $this->db->delete('admin');
    }

    public function get_data_by_idadm($id){
        
        return $this->db->get_where('admin', array('id_adm'=>$id));
    }

    public function edit_admin($where,$table){
        
        return $this->db->get_where($table,$where );
    }

    public function updateyt($where,$data,$table){
        
        $this->db->where($where);
        $this->db->update($data,$table);
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_adm' => $id])->row_array();
    }

    
    public function ubahAdmin()
    {
        $id = $this->input->post('id_adm', true);
        $admin = $this->input->post('admin', true);
        $this->db->set($data, $admin);
        $this->db->where('id_adm', $id);
        $this->db->update('admin');
    }


    
}