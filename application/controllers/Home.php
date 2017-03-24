<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');
		$this->load->model('Users_model');
	}

	public function index()
	{	

		$conf = [
			'base_url' => base_url(). "home/index",
			'total_rows' => $this->Student_model->countJob(),
			'per_page' => 5,
			'uri_segment' => 3
		];
		$this->pagination->initialize($conf);
		$data = [
			'results' => $this->Student_model->viewJob($conf['per_page'], $this->uri->segment(3)),
			'links'   => $this->pagination->create_links()

		];
		$this->renderView([
				'title' => 'Internhub',
			     'links' => $data,
			     'location' => $this->Student_model->viewLocations(),
			     'category' => $this->Student_model->viewCategory(),
 			     'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					// 'js/home/vue-home-vee',
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
			]);
	}


	public function getData($id) {
		$dataID = (int) $id;
		$results = $this->Users_model->find($dataID);
		
		$data = [
			"status" => "OK",
			"message" => "Success",
			"data" => $results
		];
		
		$this->response($data);
	}
	
	public function response($data = []) {
		$this->output
			->set_status_header(200)
			->set_content_type('application/json', 'utf-8')
			->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
			->_display();
		
		exit;
	}
	
	public function save() {
		$request = json_decode($this->input->raw_input_stream);
		$data = [
			"username" => $request->username,
			"password" => password_hash($request->password, PASSWORD_BCRYPT, array("cost" => 10)),
			"confirm_pass" => password_hash($request->confirm_pass, PASSWORD_BCRYPT, array("cost" => 10)),
			"email" => $request->email,
			"companyName" => $request->companyName,
			"companyDesc" => $request->companyDesc
		];
		
			$this->Users_model->create($data);
		
		
		if($this->db->affected_rows()) {
			$this->getData($this->db->insert_id());
		}



// //REGISTER???

// 			$data = [
			
// 				'emp_id'   => $id,
// 				'companyName' 	 => $this->input->post('companyName', TRUE),
// 				'username' 	 => $this->input->post('username', TRUE),
// 				'email'     => $this->input->post('email', TRUE),
// 				'password'		 => $this->input->post('password', TRUE),
// 				'confirm_pass' 	 => $this->input->post('confirm_pass', TRUE),
// 				'companyDesc'   => $this->input->post('companyDesc', TRUE)
				
// 			];
// 		$this->rules();
// 			$this->form_validation->set_rules($config);
//                 if ($this->form_validation->run() == FALSE)
//                 {
//                         $this->load->view('home/save');
//                 }
//                 else
//                 {
//                         $this->load->view('index');
//                 }
		
	
		
	}

	public function about()
	{	
		$this->renderView([
			'title' => 'Internhub',
			'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
		]);
		
	}

	public function contact()
	{	
		$this->renderView([
				'title' => 'Internhub',
				'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
			]);
	}
	
	public function main()
	{	
		$config = [
					'upload path'   => './uploads/',
					'allowed_types' => 'doc|docx|pdf',
					'max_size'	  => '5000',
				];
		$this->load->library('upload', $config);
		$this->renderView([
						'title' => 'Internhub',
						'results' => $this->Student_model->viewMainContent(),
						'location' => $this->Student_model->viewLocations(),
						'category' => $this->Student_model->viewCategory(),
						'courses' => $this->Student_model->viewCourses(),
						// 'message' => "SUCCESS MAKA INSERT NA!",
						'scripts'=> [
							'js/home/submit-resume'
						]
					]);

				
		// $this->rules();
		// 	if ($this->form_validation->run() == FALSE &&! $this->upload->do_upload('file')) {
		// 		$this->renderView([
		// 				'title' => 'Internhub',
		// 				'results' => $this->Student_model->viewMainContent(),
		// 				'location' => $this->Student_model->viewLocations(),
		// 				'category' => $this->Student_model->viewCategory(),
		// 				'courses' => $this->Student_model->viewCourses(),
		// 				'errors' => $this->upload->display_errors(),
		// 				'scripts'=> [
		// 					'js/home/home-index',
		// 					'js/home/submit_resume',
		// 					'js/home/submit-home',
		// 					'js/namespace',
		// 					'vendors/vue/vue',
		// 					'vendors/vue/vue-resource.min',
		// 					'js/user/user-registration'
		// 				]
		// 			]);
		// 	} else {
		// 		// $this->db->query("CALL insert_chairId(chair_id)");
		// 		$this->Student_model->applyOnline($data);
		// 		$this->renderView([
		// 				'title' => 'Internhub',
		// 				'results' => $this->Student_model->viewMainContent(),
		// 				'location' => $this->Student_model->viewLocations(),
		// 				'category' => $this->Student_model->viewCategory(),
		// 				'courses' => $this->Student_model->viewCourses(),
		// 				'message' => "SUCCESS MAKA INSERT NA!",
		// 				'scripts'=> [
		// 					'js/home/home-index',
		// 					'js/home/submit_resume',
		// 					'js/home/submit-home',
		// 					'js/namespace',
		// 					'vendors/vue/vue',
		// 					'vendors/vue/vue-resource.min',
		// 					'js/user/user-registration'
		// 				]
		// 			]);
		// 	}
		
	}

	public function submitResume()
	{
		
		$result = $this->Student_model->applyOnline();
		$message['status'] = false;
		$message['message'] = 'Application Submitted';
		if($result)
		{
			$message['status'] = true;
		
		}
	         $this->response($message);
		
	}
	public function location()
	{	
		$this->renderView([
				'title' => 'Internhub',
				'results' => $this->Student_model->filterLocation(),
				'location' => $this->Student_model->viewLocations(),
				'category' => $this->Student_model->viewCategory(),
				'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
			]);
	}
	
	public function category()
	{	
		$this->renderView([
				'title' => 'Internhub',
				'results' => $this->Student_model->filterCategory(),
				'location' => $this->Student_model->viewLocations(),
				'category' => $this->Student_model->viewCategory(),
				'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
			]);
	}

	public function search()
	{

		$conf = [
			'base_url' => base_url(). "home/search",
			'total_rows' => $this->Student_model->countJob(),
			'per_page' => 5,
			'uri_segment' => 3
		];
		$this->pagination->initialize($conf);

		$keyword = $this->input->post('keyword');
		$this->Student_model->search($keyword);
		$data = [
			'results' => $this->Student_model->viewJob($conf['per_page'], $this->uri->segment(3)),
			'links'   => $this->pagination->create_links()
		];

		$this->renderView([
				'title' => 'Internhub | Search Results',
				'keyword' => $keyword,
				'links'	=> $data,
				'location' => $this->Student_model->viewLocations(),
				'category' => $this->Student_model->viewCategory(),
				'scripts'=> [
					'js/home/home-index',
					'js/home/submit-home',
					'js/namespace',
					'vendors/vue/vue',
					'vendors/vue/vue-resource.min',
					'js/user/user-registration'
				]
			]);
	}
}
