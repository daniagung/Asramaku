
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {


	public function get()
	{
        $this->db->order_by("tgl", "asc");
		$query = $this->db->get('report');
		return $query->result();
	}
	public function insert($nim,$status){
		$this->db->where('nim', $nim);
		$getmhs = $this->db->get('kamarmhs');
		if ($getmhs->num_rows() == 1){
			$datamhs = $getmhs->result();

			$data = array(
				'id_kamar' => $datamhs[0]->id_kamar,
				'nim' => $datamhs[0]->nim,
				'status' => $status
				);
            $this->db->insert('transaksi', $data);
            if ($this->db->affected_rows() > 0)
                return TRUE;
            else
                return FALSE;
		}
		else
		{
			return FALSE;
		}
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('transaksi', $data);
		if ($this->db->affected_rows() > 0)
		return TRUE;
		else
		return FALSE;
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $data['id']);
		$this->db->delete('transaksi');
		if ($this->db->affected_rows() > 0)
		return TRUE;
		else
		return FALSE;
	}
}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */
 ?>