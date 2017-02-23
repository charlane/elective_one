<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chairman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function chairmanhome()
	{	
		$this->load->view('partials/chairman/header');
		$this->load->view('chairman/chairmanhome');
		$this->load->view('partials/chairman/footer');
	}

	public function chairmanprofile()
	{	
		$this->load->view('partials/chairman/header');
		$this->load->view('chairman/chairmanprofile');
		$this->load->view('partials/chairman/footer');
	}

}
