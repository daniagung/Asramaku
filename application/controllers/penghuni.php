<?php

/**
 * Created by PhpStorm.
 * User: Motion Laboratory
 * Date: 8/30/2017
 * Time: 1:38 AM
 */
class penghuni extends CI_Controller
{
        public function index()
        {
            if ($this->session->userdata('logged_in')) {
                $this->load->model('penghuni_model');

                $data['content'] = 'penghuni';
                $data['penghuni'] = $this->penghuni_model->get();
                $this->load->view('layout', $data);
            } else {
                redirect('login/index', 'refresh');
            }
        }
        public function tambah(){
            $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('nokamar', 'Nomor Kamar', 'trim|required|numeric|max_length[3]');
            $this->form_validation->set_rules('nohp', 'Nomor HP', 'trim|required|numeric|min_length[10]|max_length[13]');
            $this->form_validation->set_rules('idline', 'ID LINE', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                $nim = $this->input->post('nim');
                $nama = $this->input->post('nama');
                $jurusan = $this->input->post('jurusan');
                $nokamar = $this->input->post('nokamar');
                $nohp = $this->input->post('nohp');
                $idline = $this->input->post('idline');
                $array = array(
                    'nim' => $nim,
                    'nama' => $nama,
                    'jurusan' => $jurusan,
                    'nokamar' => $nokamar,
                    'nohp' => $nohp,
                    'idline' => $idline
                    );
                $this->load->model('penghuni_model');
                $status = $this->penghuni_model->add($array);
                if ($status == FALSE){
                    echo "gagal";
                }
                else
                {
                    echo "Berhasil";
                }
            } else {
                   echo "gagal";
            }
        }
}
?>