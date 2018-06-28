<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * soal
 */
class Soal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}
		$this->load->model('soal_model');
	}

	function input() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));
			$data['judul'] = "Input Soal";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_soal_input');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}

	function list() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));
			$data['judul'] = "List Soal";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_soal_list');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}
}
