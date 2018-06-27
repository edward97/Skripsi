<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Setting
 */
class Setting extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Validasi jika user belum login
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}
		$this->load->model('setting_model');
	}

	function index() {
		if ($this->session->userdata('akses') ==  '1') {
			$data['format'] = mdate('%d-%M-%Y %H:%i %a', now('Asia/Jakarta'));
			$data['ability'] = $this->setting_model->tampil_ability()->result();
			$data['job'] = $this->setting_model->tampil_job()->result();
			$data['judul'] = "Abilites & Jobs";

			$this->load->view('admin/v_menu', $data);
			$this->load->view('admin/v_setting');
			$this->load->view('admin/v_footer');
		}
		else {
			$this->load->view('index.html');
		}
	}


	function add_act_abt() {
		$nm = $this->input->post('nm_abt');

		$data = array(
			'id_ability' => null,
			'nm_ability' => $nm
		);

		$this->setting_model->add_ability('ability', $data);
		$this->session->set_flashdata('msg_ability', '<p class="card-text"><small class="text-success">Data berhasil ditambah!</small></p>');
		redirect('setting');
	}

	function add_act_job() {
		$nm = $this->input->post('nm_job');

		$data = array(
			'id_job' => null,
			'nm_job' => $nm
		);

		$this->setting_model->add_job('job', $data);
		$this->session->set_flashdata('msg_job', '<p class="card-text"><small class="text-success">Data berhasil ditambah!</small></p>');
		redirect('setting');
	}

	function update_act_abt() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nm_abt');

		$data = array(
			'nm_ability' => $nama
		);

		$where = array(
			'id_ability' => $id
		);

		$this->setting_model->update_ability('ability', $where, $data);
		$this->session->set_flashdata('msg_ability', '<p class="card-text"><small class="text-success">Data berhasil diupdate!</small></p>');
		redirect('Setting');
	}

	function update_act_job() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nm_job');

		$data = array(
			'nm_job' => $nama
		);

		$where = array(
			'id_job' => $id
		);

		$this->setting_model->update_job('job', $where, $data);
		$this->session->set_flashdata('msg_job', '<p class="card-text"><small class="text-success">Data berhasil diupdate!</small></p>');
		redirect('Setting');
	}

	function delete_act_abt($id) {
		$where = array('id_ability' => $id);
		$this->setting_model->delete_ability('ability', $where);

		$this->session->set_flashdata('msg_ability', '<p class="card-text"><small class="text-success">Data berhasil dihapus!</small></p>');
		redirect('setting');
	}

	function delete_act_job($id) {
		$where = array('id_job' => $id);
		$this->setting_model->delete_job('job', $where);

		$this->session->set_flashdata('msg_job', '<p class="card-text"><small class="text-success">Data berhasil dihapus!</small></p>');
		redirect('setting');
	}
}