
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
        $this->load->model('kamar_model');
        $this->db->where('nim', $nim);
		$getmhs = $this->db->get('kamarmhs');

        if ($getmhs->num_rows() == 1) {
            $datamhs = $getmhs->result();
//            $cekkamar = $this->kamar_model->checkAvailable($datamhs[0]->id_kamar);
            $data = array(
                'id_kamar' => $datamhs[0]->id_kamar,
                'nim' => $datamhs[0]->nim,
                'status' => $status
            );
            $this->db->insert('transaksi', $data);
            if ($this->db->affected_rows() > 0) {
                $data = array(
                    'nim' => $datamhs[0]->nim,
                    'nama' => $datamhs[0]->nama,
                    'jurusan' => $datamhs[0]->jurusan,
                    'kamar' => $datamhs[0]->nomor
                );
                return $data;
            }
        }
        return FALSE;
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
	public function delete($data)
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