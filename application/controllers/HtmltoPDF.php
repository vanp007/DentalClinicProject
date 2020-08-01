<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class HtmltoPDF extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('HtmltoPDFmodel');
		//$this->load->Library('pdf');
	}

	public function index()
	{
		$data['uses_data'] = $this->HtmltoPDFmodel->fetch();
		$this->load->view('HtmltoPDF', $data);
	}

	public function pdfdetails()
	{
			$html_content = $this->HtmltoPDFmodel->fetch();
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream();

	
		
	}
}


?>