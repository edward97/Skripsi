<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login
 */
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index() {
		$this->load->view('v_login');
	}

	function auth() {
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('pass', TRUE), ENT_QUOTES);

		$cek_admin = $this->login_model->auth_admin($email, $password);

		if ($cek_admin->num_rows() > 0) { // Jika login sebagai Admin
			$data = $cek_admin->row_array();
			// Apakah admin sudah login
			$this->session->set_userdata('masuk', TRUE);

			$this->session->set_userdata('akses', '1');
			$this->session->set_userdata('ses_id', $data['id_admin']);
			$this->session->set_userdata('ses_nm', $data['nm_admin']);
			redirect('page');
		}
		else { // Jika login sebagai User
			$cek_user = $this->login_model->auth_user($email, $password);

			if ($cek_user->num_rows() > 0) {
				$data = $cek_user->row_array();
				// Apakah user sudah login
				$this->session->set_userdata('masuk', TRUE);

				$this->session->set_userdata('akses', '2');
				$this->session->set_userdata('ses_id', $data['id_user']);
				$this->session->set_userdata('ses_nm', $data['email']);
				redirect('page');
			}
			else {
				$url = base_url();
				echo $this->session->set_flashdata('msg', 'Email atau Password salah!');
				redirect($url);
			}
		}
	}

	function logout() {
		$this->session->sess_destroy();
		$url = base_url();
		redirect($url);
	}

}
