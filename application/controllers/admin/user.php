<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['template'] = 'admin/user/user';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit(){
		$data['template'] = 'admin/user/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
}