<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function get( $offset = 0 )
	{
		$query = $this->db->get('kamar');
		return $query->result();
	}

	// Add a new item
	public function add($data)
	{
		$result = $this->db->insert('kamar', $data);
		return $result;
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->update('kamar', $data);
		return $result;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->delete('kamar', $data);
		return $result;
	}
}

/* End of file kamar_model.php */
/* Location: ./application/models/kamar_model.php */
 ?>