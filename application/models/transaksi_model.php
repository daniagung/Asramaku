
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {


	public function get()
	{

		$query = $this->db->get('report');
		return $query->result();
	}
	// Add a new item
	public function add($data)
	{
		$result = $this->db->insert('transaksi', $data);
		return $result;
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->update('transaksi', $data);
		return $result;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $data['id']);
		$result = $this->db->delete('transaksi');
		return $result;
	}
}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */
 ?>