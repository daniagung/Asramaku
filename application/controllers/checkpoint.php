<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkpoint extends CI_Controller
{

    public function index()
    {
        $this->load->view('checkpoint');
    }

    public function check()
    {
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric|min_length[10]|max_length[10]');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Format Salah!',
                'tipe' => 'error',
                'pesan' => 'NIM harus berisikan angka dan panjangnya 10 karakter!'
            );
            echo json_encode($data);
        } else {
            $this->load->model('transaksi_model');
            $nim = $this->input->post('nim');
            $status = $this->input->post('status');
            $status = strtolower($status);
            $insert = $this->transaksi_model->insert($nim,$status);
        	if ($insert != FALSE) {
        	    $data = array(
        	      'judul' => 'Berhasil!',
        	      'tipe' => 'success',
        	      'pesan' => $insert['nim']. "\n" . $insert['nama'] . "\n" . $insert['jurusan'] . "\nKamar " . $insert['kamar'] . "\nSilahkan ". $status
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'judul' => 'Gagal!',
                    'tipe' => 'error',
                    'judul' => $nim." gagal " . $status . " mohon periksa NIM atau koneksi anda"
                );
                echo json_encode($data);
            }
        }
    }

}

/* End of file checkpoint.php */
/* Location: ./application/controllers/checkpoint.php */
?>