<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth Login
 */
class Login_model extends CI_Model
{
	function auth_admin($email, $password) {
		$query = $this->db->query("SELECT * FROM admins WHERE email='$email' AND password=md5('$password') LIMIT 1");
		return $query;
	}

	function auth_user($email, $password) {
		$query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password=md5('$password') LIMIT 1");
		return $query;
	}
}