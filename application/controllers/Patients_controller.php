<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Patients_controller extends CI_Controller{

	public function index()
	{
		$this->load->view('pregistration');
	}

	public function viewAllpatients()
	{
		$this->load->Model('PatientsModel');
		$data['patients'] = $this->PatientsModel->getAllpatients();
		$this->load->view('patients', $data);
	}

	public function pregistration()
	{
		$this->form_validation->set_rules("regDate", "Registration Date", 'required');
		$this->form_validation->set_rules("fname", "First Name", 'required');
		$this->form_validation->set_rules("mname", "Middle Name", 'required|alpha');
		$this->form_validation->set_rules("lname", "Last Name", 'required|alpha');
		$this->form_validation->set_rules("gender", "Gender", 'required|alpha');
		$this->form_validation->set_rules("address", "Address", 'required');
		$this->form_validation->set_rules("contact", "Contact", 'required|numeric');
		$this->form_validation->set_rules("treatment", "Treatment", 'required|alpha');
		$this->form_validation->set_rules("cost", "Cost", 'required|numeric');

		if($this->form_validation->run())
		{
			//model function
			$this->load->Model('PatientsModel');
			$data = array('regDate' 	=> $this->input->post('regDate'),
						  'fname' 		=> $this->input->post('fname'),
						  'mname' 		=> $this->input->post('mname'),
						  'lname' 		=> $this->input->post('lname'),
						  'gender' 		=> $this->input->post('gender'),
						  'address' 	=> $this->input->post('address'),
						  'contact' 	=> $this->input->post('contact'),
						  'treatment' 	=> $this->input->post('treatment'),
						  'cost' 		=> $this->input->post('cost'),
			);

			if($this->input->post('update'))
			{
				$this->PatientsModel->update_data($data, $this->input->post('hidden_id'));
				redirect(base_url().'Patients_controller/updated');
			}

			if($this->input->post('submit'))
			{
				$this->PatientsModel->insert_data($data);
				redirect(base_url().'Patients_controller/inserted');
			}

		}
		else
		{
			$this->index();
		}
	}

	public function inserted()
	{
		$this->index();
	}

	public function pedit($id)
	{
		//$pid = $this->uri->segment(3);
		$this->load->Model('PatientsModel');
		$data['patients_data'] = $this->PatientsModel->edit_data($id);
		$data['patients'] = $this->PatientsModel->getAllpatients();
		$this->load->view('pedit', $data);
	}

	public function updated()
	{
		$this->viewAllpatients();
	}

	public function pdelete($id)
	{
		$this->load->Model('PatientsModel');
		if($this->PatientsModel->delete_data($id))
		{
			$this->session->set_flashdata('response', 'Deleted');
		}
		else
		{
			$this->session->set_flashdata('response', 'Failed');
		}
		redirect(base_url().'Patients_controller/pdeleted');
	}

	public function pdeleted()
	{
		$this->viewAllpatients();
	}

}