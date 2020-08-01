<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function loginValidation()
	{
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			//model function
			$this->load->model('LoginModel');
			if($this->LoginModel->can_login($username, $password))
			{
				$session_data = array('username' => $username );
				$this->session->set_userdata($session_data);
				redirect(base_url(). 'Welcome/enter');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				redirect(base_url(). 'Welcome/index');
			}

		}
		else
		{
			//false
			$this->index();
		}
	}

	function enter()
	{
		if($this->session->userdata('username') != '')
		{
			$this->load->view('admini.php');
			//echo '<h2>Welcome - ' .$this->session->userdata('username').'</h2>';
			//echo '<label><a href="'.base_url().'Welcome/logout">logout'.'</a></label>';
		}
		else
		{
			redirect(base_url(). 'Welcome/index');
		}
	}


	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url().'Welcome/index');
	}


}
