<?php defined('BASEPATH') OR exit('No direct script access allowed');


class UsesModel extends CI_MOdel{
	
	
public function insert_data($data)
{
	$this->db->insert('uses', $data);
}

public function today_summary($today)
{
	$this->db->where('date', $today);
	$query = $this->db->get('uses');
	return $query;
}


}