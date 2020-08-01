<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class HtmltoPDFmodel extends CI_Model{
	
	public function fetch()
	{
		$this->db->order_by('date', 'desc');
		$query = $this->db->get('uses');
		return $query;
	}
}

?>