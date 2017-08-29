<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni_model extends CI_Model {

	public function get()
	{
		$query = $this->db->get('kamarmhs');
		return $query->result();
	}	
	public function add($array){
		$this->db->where('nomor', $array['nokamar']);
		$query = $this->db->get('kamar');
        $this->load->model('mahasiswa_model');
        $this->load->model('kamar_model');
		if ($query->num_rows() == 1){
			$data = array(
				'nim' => $array['nim'],
				'nama' => $array['nama'],
				'jurusan' => $array['jurusan'],
				'nohp' => $array['nohp'],
				'line' => $array['idline']
				);
			$result = $this->mahasiswa_model->add($data);
			if ($this->db->rows_affected() > 0){
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{

            $data = array(
                'nim' => $array['nim'],
                'nama' => $array['nama'],
                'jurusan' => $array['jurusan'],
                'nohp' => $array['nohp'],
                'line' => $array['idline']

            );
            $result = $this->mahasiswa_model->add($data);
            if ($this->db->affected_rows() > 0){
                return TRUE;
            }
            else
            {
                return FALSE;
            }
		}
	}

}

/* End of file penghuni_model.php */
/* Location: ./application/models/penghuni_model.php */ ?>