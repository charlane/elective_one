<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function dashboard()
	{	
		$this->load->view('partials/admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('partials/admin/footer');
	}

	public function employer()
	{	
		$this->load->view('partials/admin/header');
		$this->load->view('admin/employer');
		$this->load->view('partials/admin/footer');
	}

	public function chairman()
	{	
		$this->load->view('partials/admin/header');
		$this->load->view('admin/chairman');
		$this->load->view('partials/admin/footer');
	}
	
	public function location()
	{	
		$this->load->view('partials/admin/header');
		$this->load->view('admin/location');
		$this->load->view('partials/admin/footer');
	}

	public function categories()
	{	
		$this->load->view('partials/admin/header');
		$this->load->view('admin/categories');
		$this->load->view('partials/admin/footer');
	}
}
