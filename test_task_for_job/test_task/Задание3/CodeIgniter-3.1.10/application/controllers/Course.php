<?php

	class Course extends CI_Controller
	{

		public function index()
		{
			$this->output->cache(10);
			$this->load->model('CourseModel');
			$this->load->view('Courses.html');
			$this->load->model('Data');
			$this->Data->readCache();
		}
		public function history()
		{
			$this->load->model('HistoryCourses');
			$this->load->view('HistoryOfCourses.html');
		}
	}
