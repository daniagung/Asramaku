<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function check_login($username,$password)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		$result = $query->result();
		if ($query->num_rows() == 1){
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function getUser($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		if ($query->num_rows() > 0){
			$result = $query->result();
			$data_user =array(
				'id' => $result->id,
				'username' => $result->username,
				'nama' => $result->nama,
				'no_hp' => $result->no_hp 
				);
			return $data_user;
		}
		else
		{
			return FALSE;
		}
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */ ?>