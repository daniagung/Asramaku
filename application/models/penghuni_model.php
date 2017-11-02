<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghuni_model extends CI_Model
{

    public function get()
    {
        $query = $this->db->get('kamarmhs');
        return $query->result();
    }

    public function getMhs($id)
    {
        $this->db->where('nim', $id);
        $query = $this->db->get('kamarmhs');
        return $query->result()[0];
    }

    public function add($array)
    {
        $data = array(
            'nim' => $array['nim'],
            'nama' => $array['nama'],
            'jurusan' => $array['jurusan'],
            'nohp' => $array['nohp'],
            'line' => $array['idline'],
            'id_kamar' => $array['id_kamar']
        );
        $this->mahasiswa_model->add($data);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function update($array)
    {

        $this->mahasiswa_model->update($array);
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function hapus($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }


    }

}

/* End of file penghuni_model.php */
/* Location: ./application/models/penghuni_model.php */ ?>