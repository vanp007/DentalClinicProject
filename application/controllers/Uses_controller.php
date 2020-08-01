<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Uses_controller extends CI_Controller{

	public function index()
	{
		$this->load->view('uses');
	}

	
	public function usesreg()
	{
		$this->form_validation->set_rules("usesdate", "Uses Date", 'required');
		$this->form_validation->set_rules("description", "Description", 'required|alpha');
		$this->form_validation->set_rules("amount", "Amount", 'required|numeric');
	
	if($this->form_validation->run())
	{
		$this->load->Model('UsesModel');
		$data = array(  'date'	      => $this->input->post('usesdate'),
						'description' => $this->input->post('description'),
						'amount'	  => $this->input->post('amount'), 


	);

	if($this->input->post('submit'))
	{
		$this->UsesModel->insert_data($data);
		redirect(base_url().'Uses_controller/inserted');

	}
	}
}

	public function inserted()
	{
		$this->index();
	}

	public function today_uses_summary()
	{
		$today = date('Y-m-d');
		$this->load->Model('UsesModel');
		$data['uses'] = $this->UsesModel->today_summary($today);
		$this->load->view('usespreview', $data);
	}

}


?>