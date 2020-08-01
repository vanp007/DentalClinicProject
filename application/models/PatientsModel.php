<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientsModel extends CI_Model{
	
	public function getAllpatients()
	{
		$query = $this->db->get('patients');
			return $query;
		
	}

	public function insert_data($data)
	{
		$this->db->insert('patients', $data);
	}

	public function edit_data($patient_id)
	{
		$this->db->where('id', $patient_id);
		$query = $this->db->get('patients');
		return $query;
	}

	public function update_data($data, $patient_id)
	{
		$this->db->where('id', $patient_id);
		$this->db->update('patients', $data);
	}

	public function delete_data($id)
	{
		//$this->db->where("id", $id);
		return $this->db->delete('patients', array('id' => $id));
	}
}