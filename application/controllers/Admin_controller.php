<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_controller extends CI_Controller{

	public function admini()
	{
		$this->load->view('admini');
	}

	public function pregistration()
	{
		$this->load->view('pregistration');
	}


	public function uses()
	{
		$this->load->view('uses');
	}

	public function summary()
	{
		$this->load->view('summary');
	}

	public function patients()
	{
		$this->load->view('patients');
	}
}