

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function check()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

        $username = $this->input->post('username');
        $password = $this->input->post('password');
		if ($this->form_validation->run() == FALSE) {
		    $this->session->set_flashdata('errors', validation_errors());
			redirect('login');
		} else {
			$id = $this->user_model->check_login($username,$password);
			if ($id == FALSE){
			    $this->session->set_flashdata('errors', 'gagal salah');
			   redirect('login');
			}
			else
			{
				$data = array(
					'username' => $username,
					'logged_in' => TRUE
					);
				$this->session->set_userdata($data);
				redirect('welcome','refresh');
			}
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
 ?>