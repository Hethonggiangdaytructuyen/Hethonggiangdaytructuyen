<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->checklogin();
	}
	
	public function login(){
		$this->form_validation->set_rules('txt_username','txt_username','required');
		$this->form_validation->set_rules('txt_password','txt_password','required');
		if($this->form_validation->run() == TRUE){
			$user = $this->input->post('txt_username');
			$pass = $this->input->post('txt_password');
			$result = $this->m_model->get_user($user, $pass);
			if($result){
				$this->session->set_userdata($result);
				if($this->input->post('check')){
					setcookie('user',$user,time()+20);
					setcookie('pass',$this->input->post('txt_password'),time()+20);
				}
				header("location:./admin");
			}
			else{
				$data['error'] = "Đăng nhập thất bại";
			}
		}
		$this->load->view("admin/login",isset($data)?$data:NULL);
	}
	
	
}
