<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checklogout();
	}

	public function index(){
		$sql = "SELECT * FROM user INNER JOIN role ON user.user_role_id = role.role_id ORDER BY user_id DESC";
		$data['list'] = $this->m_model->get_list($sql);

		$sql_role = "SELECT * FROM role";
		$data['list_role'] = $this->m_model->get_list($sql_role);

		$arr['user_name'] = $username = $this->input->post('txt_username');
		$arr['user_avatar'] = '';
		$arr['user_password'] = $this->input->post('txt_pass');
		$arr['user_fullname'] = $this->input->post('txt_name');
		$arr['user_email'] = $this->input->post('txt_email');
		$arr['user_address'] = $this->input->post('txt_address');
		$arr['user_phone'] = $this->input->post('txt_phone');
		$arr['user_listsub'] = '';
		$arr['user_active'] = $this->input->post('active');
		$arr['user_role_id'] = $this->input->post('role');
		$arr['user_gender'] = $this->input->post('gender');
		$now = getdate();
		$arr['user_created_date'] = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
		$arr['user_description'] = $this->input->post('description');
		$arr['user_birthday'] = $this->input->post('txt_date');
		$arr['user_can_delete'] = '1';
		$arr['user_permission_id'] = '2';
		
		$num = $this->m_model->get_num("SELECT * FROM user WHERE user_name='$username'");
		if($this->input->post('submit')){
			if($num > 0){
				$data['error'] = 'Tài Khoản Đã Tồn Tại';
			}
			else{
				$this->m_model->add('user', $arr);
				header('location:./user');
			}
		}

		$data['template'] = 'admin/user/user';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit($id){
		// $this->checkrole();
		$data['item'] = $this->m_model->get_item("SELECT * FROM user WHERE user_id = $id");
		$data['list'] = $this->m_model->get_list("SELECT * FROM role");
		
		if($this->input->post('submit')){
			$arr['user_name'] = $username = $this->input->post('txt_username');
			$arr['user_avatar'] = '';
			$arr['user_password'] = $this->input->post('txt_pass');
			$arr['user_fullname'] = $this->input->post('txt_name');
			$arr['user_email'] = $this->input->post('txt_email');
			$arr['user_address'] = $this->input->post('txt_address');
			$arr['user_phone'] = $this->input->post('txt_phone');
			$arr['user_listsub'] = '';
			$arr['user_active'] = $this->input->post('active');
			$arr['user_role_id'] = $this->input->post('role');
			$arr['user_gender'] = $this->input->post('gender');
			$arr['user_created_date'] = $data['item']['user_created_date'];
			$arr['user_description'] = $this->input->post('description');
			$arr['user_birthday'] = $this->input->post('txt_date');
			$arr['user_can_delete'] = '1';
			$arr['user_permission_id'] = '2';
			
			$num = $this->m_model->get_num("SELECT * FROM user WHERE user_name = '$username' AND user_id != $id");
			if($num>0){
				$data['error'] = 'Tài Khoản "'. $username .'" Đã Tồn Tại';
			}
			else{
				$this->m_model->edit(array('user_id'=>$id), 'user', $arr);
				header('location:../user');
			}
		}

		$data['template'] = 'admin/user/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function del($id){
		// $this->checkrole();
		if(($this->session->userdata('user_role_id') == 2) || ($this->session->userdata('user_role_id') == 3) || ($this->session->userdata('user_role_id') == 4)){
			$this->session->set_flashdata('error','Bạn không đủ quyền');
			// header('location:./../quantri');
		}
		else{
			$this->m_model->del(array('user_id'=>$id), 'user');
			header("location:../user");
		}
	}
}
