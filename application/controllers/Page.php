<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Page
 */
class Page extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		}
	}

	function index() {
		$data['judul'] = "Dashboard";

		// Load halaman index | cek admin atau user
		if ($this->session->userdata('akses') ==  '1') {
			// $this->load->view('admin/v_header', $data);
			$this->load->view('admin/v_dashboard', $data);
		}
		else {
			$this->load->view('user/v_header', $data);
			$this->load->view('user/v_dashboard');
			$this->load->view('user/v_footer');
		}
	}
}