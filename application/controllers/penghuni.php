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
            $data['jurusan'] = $this->jurusan_model->getJurusanAll();
            $this->load->view('layout', $data);
        } else {
            redirect('login/index', 'refresh');
        }
    }

    public function editpenghuni($id)
    {
        $this->load->model('penghuni_model');
        $data['content'] = 'edit_penghuni';
        $data['mahasiswa'] = $this->penghuni_model->getMhs($id);
        $data['jurusan'] = $this->jurusan_model->getJurusanAll();
        $this->load->view('layout', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('nokamar', 'Nomor Kamar', 'trim|required|numeric|max_length[3]');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'trim|required|numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('idline', 'ID LINE', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $nokamar = $_POST['nokamar'];
            $nohp = $this->input->post('nohp');
            $idline = $this->input->post('idline');
            $cek = $this->mahasiswa_model->checkMahasiswa($nim);
            $idkamar = $this->kamar_model->checkKamar($nokamar);

            if ($cek == 0 && $idkamar != 0) {

                $array = array(
                    'nim' => $nim,
                    'nama' => $nama,
                    'jurusan' => $jurusan,
                    'id_kamar' => $idkamar,
                    'nohp' => $nohp,
                    'idline' => $idline
                );
                $this->load->model('penghuni_model');
                $status = $this->penghuni_model->add($array);
                if ($status == FALSE) {
                    $this->session->set_flashdata('error', 'Gagal Menambah Penghuni!');
                    redirect('penghuni');
                } else {
                    $this->session->set_flashdata('success', 'Berhasil menambah penghuni');
                    redirect('penghuni');
                }
            } else {
                $this->session->set_flashdata('error', 'Gagal Menambah Penghuni, data sudah ada');
                redirect('penghuni');
            }
        } else {
            $this->session->set_flashdata('error', 'Gagal Menambah Penghuni');
            redirect('penghuni');
        }

    }

    public function hapus($nim)
    {
        $this->load->model('penghuni_model');
//            echo "hapus";
        $status = $this->penghuni_model->hapus($nim);
        if ($status) {
            redirect('penghuni');
        } else {
            $this->session->set_flashdata('error', 'Gagal Menghapus ' . $nim);
            redirect('penghuni');
        }

    }

    public function simpan()
    {

        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
        $this->form_validation->set_rules('nokamar', 'Nomor Kamar', 'trim|required|numeric|max_length[3]');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'trim|required|numeric|min_length[10]|max_length[13]');
        $this->form_validation->set_rules('idline', 'ID LINE', 'trim|required');
        var_dump($_POST);
        if ($this->form_validation->run() == FALSE) {
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
            $nokamar = $this->input->post('nokamar');
            $nohp = $this->input->post('nohp');
            $idline = $this->input->post('idline');
            $idkamar = $this->kamar_model->checkKamar($nokamar);
            echo $idkamar;
            if ($idkamar != 0) {
                $array = array(
                    'nim' => $nim,
                    'nama' => $nama,
                    'jurusan' => $jurusan,
                    'id_kamar' => $idkamar,
                    'nohp' => $nohp,
                    'line' => $idline
                );
                $this->load->model('penghuni_model');
                $status = $this->penghuni_model->update($array);
                if ($status == FALSE) {
                    $this->session->set_flashdata('error', 'Gagal Menyunting Penghuni!');
                    redirect('penghuni');
                } else {
                    $this->session->set_flashdata('success', 'Berhasil Menyunting penghuni');
                    redirect('penghuni');
                }
            } else {
                $this->session->set_flashdata('error', 'Gagal Menyunting Penghuni, data sudah ada');
//                redirect('penghuni');
            }
        } else {
            $this->session->set_flashdata('error', 'Data salah');
            redirect('penghuni');
        }

    }
}

?>