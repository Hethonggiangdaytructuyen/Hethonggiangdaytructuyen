<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adv extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checklogout();
	}

	public function index()
	{
		$sql = "SELECT * FROM advertiser";
		$data['list'] = $this->m_model->get_list($sql);
		$data['list_position'] = $this->m_model->get_list("SELECT * FROM position");
		
		if($this->input->post('submit')){
		$arr['adv_title'] = $stext = $this->input->post('txt_title');
		$arr['adv_name'] = $this->input->post('txt_name');
		$arr['adv_content'] = $this->input->post('content');
		$arr['active'] = $this->input->post('active');
		$now = getdate();
		$arr['created_date'] = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
		$arr['can_delete'] = 1;
		$arr['position_id'] = $this->input->post('position');
		$arr['adv_description'] = $this->input->post('description');
		$num = $this->m_model->get_num("SELECT * FROM advertiser WHERE adv_title LIKE('$stext')");
			if($num>0){
				$data['error'] = "Quảng cáo đã tồn tại!";
			}
			else{
				
				$this->m_model->add('advertiser', $arr);
				header('location:./adv');
			}
		}
		$data['template'] = 'admin/adv/adv';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit($id){
		$data['item'] = $this->m_model->get_item("SELECT * FROM advertiser WHERE adv_id = $id");
		$data['list'] = $this->m_model->get_list("SELECT * FROM advertiser");

		if($this->input->post('submit')){
		$arr['adv_title'] = $stext = $this->input->post('txt_title');
		$arr['adv_name'] = $this->input->post('txt_name');
		$arr['adv_content'] = $this->input->post('content');
		$arr['active'] = $this->input->post('active');
		$arr['user_id'] = 4;
		$now = getdate();
		$arr['created_date'] = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
		$arr['can_delete'] = 1;
		$arr['position_id'] = $this->input->post('position');
		$arr['adv_description'] = $this->input->post('description');
			$num = $this->m_model->get_num("SELECT * FROM advertiser WHERE adv_title LIKE('$stext') AND adv_id != $id");
			if($num>0){
				$data['error'] = 'Tiêu đề "'. $stext .'" Đã Tồn Tại!';
			}
			else{
				$this->m_model->edit(array('adv_id'=>$id), 'advertiser', $arr);
				header('location:../adv');
			}
		}

		$data['template'] = 'admin/adv/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}
	public function del($id){
		$this->m_model->del(array('adv_id'=>$id), 'advertiser');
		header('location:../adv');
	}
}
