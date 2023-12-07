<?php
class M_login extends CI_Model{

    public function cek_admin($u,$p){
       
        return $this->db->get_where('admin', array('username'=>$u, 'pw'=>$p));
    }

    public function current_user()
	{
		if (!$this->session->has_userdata('username')) {
			return null;
		}

		$id_adm = $this->session->userdata('username');
		$query = $this->db->get_where('admin', array('username'));
		return $query->row();
	}

}