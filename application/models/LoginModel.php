<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{
	
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admini_tbl');

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}