<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User
 */
class User_model extends CI_Model
{
	function tampil_user() {
		return $this->db->get('users');
	}

	function add_user($table, $data) {
		$this->db->insert($table, $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	function add_user_detail($table, $data) {
		$this->db->insert($table, $data);
	}
}
