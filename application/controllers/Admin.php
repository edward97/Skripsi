<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * admin
 */
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}
		$this->load->model('admin_model');
	}

	function index() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));

			$data['admin'] =  $this->admin_model->tampil_admin()->result();
			$data['judul'] = "Admin";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_user');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}

	function add() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));
			$data['judul'] = "Tambah Admin";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_add_user');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}

	function add_act() {
		$id = null;
		$name = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));

		$data = array(
			'id_admin' => $id,
			'nm_admin' => $name,
			'email' => $email,
			'password' => $pass
		);
		$this->admin_model->add_admin('admins', $data);
		redirect('admin');
	}

	function edit($id) {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));

			$where = array('id_admin' => $id);
			$data['admin'] = $this->admin_model->edit_admin('admins', $where)->result();
			$data['judul'] = "Edit Admin";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_edit_user');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}

	function update_act() {
		$id = $this->input->post('id');
		$name = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));

		$data = array(
			'nm_admin' => $name,
			'email' => $email,
			'password' => $pass
		);

		$where = array(
			'id_admin' => $id
		);

		$this->admin_model->update_admin('admins', $where, $data);
		redirect('admin/edit/'.$id);
	}

	function delete($id) {
		$where = array('id_admin' => $id);
		$this->admin_model->delete_admin('admins', $where);
		redirect('admin');
	}
}