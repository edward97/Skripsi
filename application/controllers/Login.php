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
				$this->session->set_flashdata(
					'msg_login', 
					'<div class="container alert alert-danger" role="alert">
						Email or Password is Incorrect!
					</div>');
				redirect($url);
			}
		}
	}

	function logout() {
		$this->session->sess_destroy();
		$url = base_url();
		redirect($url);
	}
	function register() {
		$this->load->view('v_register');
	}

	function register_act() {
		$full_name = $this->input->post('nama_lengkap');
		$ktp = $this->input->post('no_ktp');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$agama = $this->input->post('agama');
		$address = $this->input->post('address');
		$kota = $this->input->post('kota');
		$pos = $this->input->post('pos');
		$no_hp = $this->input->post('no_hp');
		$no_telp = $this->input->post('no_telp');
		$nama_kerabat = $this->input->post('nama_kerabat');
		$no_kerabat = $this->input->post('no_kerabat');
		$hubungan_kerabat = $this->input->post('hubungan_kerabat');
		$status = $this->input->post('status');
		$pendidikan = $this->input->post('pendidikan');
		$pengalaman = $this->input->post('pengalaman');
		
		$target['tar'] = $this->input->post('kemampuan');

		$data_user = array(
			'id_user' => null,
			'email' => $email,
			'password' => $password,
			'confirm_code' => null,
			'id_job' => 99,
			'id_stage' => 99
		);

		$idInsert = $this->user_model->add_user('users', $data_user);

		$detail_user = array(
			'id_d_user' => null,
			'full_name' => $full_name,
			'no_ktp' => $ktp,
			'birth_place' => $tempat_lahir,
			'birth_date' => $tgl_lahir,
			'address' => $address,
			'domisili' => $kota,
			'kode_pos' => $pos,
			'p_number' => $no_hp,
			't_number' => $no_telp,
			'age' => 99,
			'gender' => $jenis_kelamin,
			'religion' => $agama,
			'last_education' => $pendidikan,
			'status' => $status,
			'experience' => $pengalaman,
			'nama_kerabat' => $nama_kerabat,
			'nomor_kerabat' => $no_kerabat,
			'hubungan_kerabat' => $hubungan_kerabat,
			'id_user' => $idInsert
		);
		$this->user_model->add_user_detail('detail_users', $detail_users);

		redirect('login');
	}
}
