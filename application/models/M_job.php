<?php
class M_job extends CI_Model{
    public function get_job(){
       
            return $this->db->get('job');
            
    }
  
    public function insert_job($data){
        
            $this->db->insert('job', $data);
    }

    public function update_job($data,$id){
        
            $this->db->where('id', $id);
            $this->db->update('job', $data);
    }

    public function hapus_job($id){
        
            $this->db->where('id', $id);
            $this->db->delete('job');
    }

    public function get_data_by_id($id){
        
        return $this->db->get_where('job', array('id'=>$id));
    }

    public function edit_job($where,$table){
        
        return $this->db->get_where($where,$table );
    }

    public function updateyt($where,$data,$table){
        
        $this->db->where($where);
        $this->db->update($data,$table);
    }


    
}