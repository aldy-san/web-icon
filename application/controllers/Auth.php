<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
		if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/auth_header');
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
	}
	public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
	private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // cek password
			if ($password == $user['password']) {
				$data = [
					'email' => $user['email'],
				];
				$this->session->set_userdata($data);
				redirect('user');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('auth');
			}
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Tidak ada akun!</div>');
            redirect('auth');
        }
    }
	
}
