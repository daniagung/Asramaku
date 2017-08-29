<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {


	// List all your items
	public function get( $offset = 0 )
	{
		$query = $this->db->get('mahasiswa');
		return $query->result();
	}

	// Add a new item
	public function add($data)
	{
		$result = $this->db->insert('mahasiswa', $data);
		return $result;
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->update('mahasiswa', $data);
		return $result;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->delete('mahasiswa');
		return $result;
	}
}

/* End of file mahasiswa_model.php */
/* Location: ./application/models/mahasiswa_model.php */
 ?>