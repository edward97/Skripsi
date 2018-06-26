<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin
 */
class Admin_model extends CI_Model
{
	function tampil_admin() {
		return $this->db->get('admins');
	}

	function add_admin($table, $data) {
		$this->db->insert($table, $data);
	}

	function edit_admin($table, $where) {
		return $this->db->get_where($table, $where);
	}

	function update_admin($table, $where, $data) {
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete_admin($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);
	}
}
