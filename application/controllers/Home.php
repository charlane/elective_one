<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->view('partials/header');
		$this->load->view('home/index');
		$this->load->view('partials/footer');
	}

	public function about()
	{	
		$this->load->view('partials/header');
		$this->load->view('home/about');
		$this->load->view('partials/footer');
	}


	public function login()
	{	
		$this->load->view('partials/header');
		$this->load->view('home/login');
		$this->load->view('partials/footer');
	}
}
