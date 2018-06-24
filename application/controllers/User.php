<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * user
 */
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}
		$this->load->model('user_model');
	}

	function index() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));

			$data['user'] =  $this->user_model->tampil_user()->result();
			$data['judul'] = "User";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_user');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}
}