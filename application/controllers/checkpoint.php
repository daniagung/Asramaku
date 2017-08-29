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
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[10]|max_length[10]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('checkpoint');
        } else {
            $this->load->model('transaksi_model');
            $nim = $this->input->post('nim');
            $status = $this->input->post('status');
            $status = strtolower($status);
            $insert = $this->transaksi_model->insert($nim,$status);
        	if ($insert == TRUE) {
                $this->session->set_flashdata('success', 'BERHASIL HORE!!');
                redirect('checkpoint');
            } else {
                $this->session->set_flashdata('error', 'NIM anda tidak terdaftar');
                redirect('checkpoint');
            }
        }
    }

}

/* End of file checkpoint.php */
/* Location: ./application/controllers/checkpoint.php */
?>