<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class article extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['template'] = 'admin/article/article';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit(){
		$data['template'] = 'admin/article/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
}