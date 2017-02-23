<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	
	public function employer()
	{	
		$this->load->view('partials/employer/header');
		$this->load->view('employer/employer');
		$this->load->view('partials/employer/footer');
	}

	public function employerProfile()
	{	
		$this->load->view('partials/employer/header');
		$this->load->view('employer/employerProfile');
		$this->load->view('partials/employer/footer');
	}

	public function employerInbox()
	{	
		$this->load->view('partials/employer/header');
		$this->load->view('employer/employerInbox');
		$this->load->view('partials/employer/footer');
	}
}