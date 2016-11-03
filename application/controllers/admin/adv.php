<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adv extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['template'] = 'admin/adv/adv';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit(){
		$data['template'] = 'admin/adv/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
}