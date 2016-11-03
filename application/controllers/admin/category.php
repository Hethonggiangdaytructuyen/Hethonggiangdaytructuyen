<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['template'] = 'admin/category/category';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit(){
		$data['template'] = 'admin/category/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
}