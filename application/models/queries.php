<?php
class queries extends CI_MODEL{
	
	public function add_user($data){
		return $this->db->insert('users',$data);
	}

	
}