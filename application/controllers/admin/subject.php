<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subject extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['template'] = 'admin/subject/subject';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit(){
		$data['template'] = 'admin/subject/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
}