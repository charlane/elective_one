<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database('default');
	}	


	public function search($data = [])
	{
		$array = array(
			'categoryName' => $data,
			'locationName' => $data,
			'positionTitle' => $data
		);

		return $this->db->or_like($array);
	}

	// public function viewSearchJob()
	// {
	// 	$query = $this->db->get('posted_job');
	// 	return $query->result();
	// }

	public function countJob()
	{
		return $this->db->count_all('posted_job');
	}

	public function viewJob($limit, $page)
	{
		$this->db->limit($limit,$page);
		$query = $this->db->get('posted_job');

		return $query->result();
	}

	public function viewMainContent()
	{                                                             
		if(isset($_GET['job_id'])) {
			$query = $this->db->select('*')->from('posted_job')->where('job_id', $_GET['job_id'])->get();
		}
		return $query->result();
	}

	public function viewLocations()
	{
		$query = $this->db->select('locationName, total_loc')->from('total_location')->get();
		return $query->result();
	}

	public function viewCategory()
	{
		$query = $this->db->select('categoryName, total_cat')->from('total_category')->get();
		return $query->result();
	}

	public function viewCourses()
	{
		$query = $this->db->select('courseName')->from('course')->get();
		return $query->result();
	}
	public function applyOnline()
	{
		@$id = $this->db->select('course_id')->from('chairman')->where('courseName', $this->input->post('course'))
										    ->get()->row()->course_id;
		@$name = $_FILES['file']['name'];
		@$type = $_FILES['file']['type'];
		@$data = file_get_contents($_FILES['file']['tmp_name']);
		@$size = intval($_FILES['file']['size']);
		$tblstudents_data = [
			'fname' 	 =>  $this->input->post('fname', TRUE),
			'lname' 	 => $this->input->post('lname', TRUE),
			'year'		 => $this->input->post('year', TRUE),
			'email'             =>    $this->input->post('email', TRUE),
			'contact_no'   => $this->input->post('phone_no', TRUE),
			'status'   => $this->input->post('statuss', TRUE),
			'course_id'   => $id,
			'courseName'     => $this->input->post('course', TRUE)
		];
		@$res_id = $this->db->select('student_id')->from('students')->where('email', $this->input->post('email')) ->get()->row()->student_id;
		$tblresume_data = [
			'student_id' => $res_id,
			'coverLetter'=> $this->input->post('coverLetter', TRUE),
			'resume_name'=> $name,
			'resume_type'=> $type,
			'resume_data'=> $data,
			'resume_size'=> $size
		];
		$this->db->insert('students', $tblstudents_data);
		$this->db->insert('tblresume', $tblresume_data);
		if($this->db->affected_rows())
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// public function rowCounts()
	// {
	// 	$query = $this->db->select('locationName')->from('posted_job')->get()->result();
	// 	foreach($query as $row) {
	// 		if($row->locationName != $row->locationName) {
	// 		$query = $this->db->select('locationName')->from('posted_job')->where('locationName', $row->locationName)->get();
	// 		var_dump($query->num_rows());
	// 	}
	// 	}
	// 	// return $query->num_rows();
	// }

	public function filterLocation()
	{
		$query = $this->db->select('locationName')->from('posted_job')->get();
		$result = $query->result();
		foreach ($result as $location) {
			if($_GET['job'] == $location->locationName) {
				$query = $this->db->select('*')->from('posted_job')->where('locationName', $location->locationName)->get();
			}
		}
		return $query->result();
	}

	
	public function filterCategory()
	{
		$query = $this->db->select('categoryName')->from('posted_job')->get();
		$result = $query->result();
		foreach ($result as $location) {
			if($_GET['job'] == $location->categoryName) {
				$query = $this->db->select('*')->from('posted_job')->where('categoryName', $location->categoryName)->get();
			}
		}
		return $query->result();
	}
}
