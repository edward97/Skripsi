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
			// pagination
			$data['jumlah_admin'] = $this->admin_model->jumlah_admin();
			$config['base_url'] = base_url().'index.php/admin/index';
			$config['total_rows'] = $data['jumlah_admin'];
			$config['per_page'] = 10;
			$from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			// bari nomor yang di munculkan
			$config['num_links'] = 5;

			// menggunakan nomor page; bukan id
			$config['use_page_numbers'] = TRUE;

			// bootstrap 4 pagination
			$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-end">';
			$config['full_tag_close'] = '</ul></nav>';

			$config['attributes'] = array('class' => 'page-link');

			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';

			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li class="page-item">';
			$config['last_tag_close'] = '</li>';

			$config['prev_link'] = 'Prev';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';

			$config['next_link'] = 'Next';
			$config['next_tag_open'] = '<li class="page-item">';
			$config['next_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close'] = '</span></li>';

			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';

			
			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();
			
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));

			$data['admin'] = $this->admin_model->tampil_ability('admins', $config['per_page'], $from)->result();
			$data['judul'] = "Admin";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_admin');
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
		$level = $this->input->post('level');
		$status = $this->input->post('partisipasi');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_admin' => $id,
			'nm_admin' => $name,
			'email' => $email,
			'password' => $pass,
			'level' => $level,
			'status_partisipasi' => $status,
			'keterangan' => $keterangan
		);
		$this->admin_model->add_admin('admins', $data);
		$this->session->set_flashdata('msg_admin', '<div class="alert alert-success" role="alert">Data berhasil ditambah!</div>');
		redirect('admin');
	}

	function update_act() {
		$id = $this->input->post('id');
		$name = $this->input->post('username');
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));
		$level = $this->input->post('level');
		$status = $this->input->post('partisipasi');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'nm_admin' => $name,
			'email' => $email,
			'password' => $pass,
			'level' => $level,
			'status_partisipasi' => $status,
			'keterangan' => $keterangan
		);

		$where = array(
			'id_admin' => $id
		);

		$this->admin_model->update_admin('admins', $where, $data);
		$this->session->set_flashdata('msg_admin', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
		redirect('admin');
	}

	function delete($id) {
		$where = array('id_admin' => $id);
		$this->admin_model->delete_admin('admins', $where);
		$this->session->set_flashdata('msg_admin', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('admin');
	}
}