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

    public function checkKamar($nomor)
    {
        $this->db->where('nomor', $nomor);
        $query = $this->db->get('kamar');
        if ($query->num_rows() == 1) {
            return $query->result()[0]->id;
        } else {
            return 0;
        }
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
        $this->db->update('kamar', $data);
        return $this->db->affected_rows() > 0;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
        $this->db->where('id', $id);
        $result = $this->db->delete('kamar');
		return $result;
	}

    public function checkAvailable($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kamar')->result();
        if ($query[0]->status_kunci == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
//        return $query[0]->status_kunci == 0;
    }

    public function updateKunci($id, $status)
    {
        $data = array(
            'status_kunci' => $status
        );
        $this->db->where('id', $id);
        $this->db->update('kamar', $data);
        return $this->db->affected_rows() > 0;
    }
}

/* End of file kamar_model.php */
/* Location: ./application/models/kamar_model.php */
 ?>