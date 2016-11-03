<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['template'] = 'admin/quantri';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function logout(){
		$this->session->sess_destroy();
		header('location:'.baseUrl.'login');
	}
}