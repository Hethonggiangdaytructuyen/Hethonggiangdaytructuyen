<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checklogout();
	}

	public function index(){
		$sql = "SELECT * FROM category";
		$data['list'] = $this->m_model->get_list($sql);

		$arr['category_name'] = $stext = $this->input->post('txt_title');
		$stextNew = trim($stext);
		$arr_stextNew = explode(' ', $stextNew);
		$stextNew = implode('%', $arr_stextNew);
		$stextNew = '%'.$stextNew.'%';

		$arr['active'] = $this->input->post('active');
		$now = getdate();
		$arr['created_date'] = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
		$arr['can_delete'] = 1;
		$arr['parent'] = $this->input->post('cat');
		$arr['category_description'] = $this->input->post('description');

		$num = $this->m_model->get_num("SELECT * FROM category WHERE category_name LIKE('$stextNew')");
		if($this->input->post('submit')){
			if($num>0){
				$data['error'] = "Ngành Đã Tồn Tại!";
			}
			else{
				$this->m_model->add('category', $arr);
				header('location:./category');
			}
		}

		$data['template'] = 'admin/category/category';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit($id){
		$data['item'] = $this->m_model->get_item("SELECT * FROM category WHERE category_id = $id");
		$data['list'] = $this->m_model->get_list("SELECT * FROM category");

		if($this->input->post('submit')){
			$arr['category_name'] = $stext = $this->input->post('txt_title');
			$stextNew = trim($stext);
			$arr_stextNew = explode(' ', $stextNew);
			$stextNew = implode('%', $arr_stextNew);
			$stextNew = '%'.$stextNew.'%';

			$arr['active'] = $this->input->post('active');
			$arr['created_date'] = $data['item']['created_date'];
			$arr['can_delete'] = 1;
			$arr['parent'] = $this->input->post('cat');
			$arr['category_description'] = $this->input->post('description');

			$num = $this->m_model->get_num("SELECT * FROM category WHERE category_name LIKE('$stextNew') AND category_id != $id");
			if($num>0){
				$data['error'] = 'Ngành "'. $stext .'" Đã Tồn Tại!';
			}
			else{
				$this->m_model->edit(array('category_id'=>$id), 'category', $arr);
				header('location:../category');
			}
		}

		$data['template'] = 'admin/category/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function del($id){
		$list = $this->m_model->get_list("SELECT * FROM category WHERE parent = $id");
		foreach($list as $key=>$val):
			$a = $val['category_id'];
			$this->m_model->edit(array('category_id'=>$a), 'subject', array('category_id'=>8));
			$this->m_model->del(array('category_id'=>$a), 'category');
		endforeach;
		$this->m_model->edit(array('category_id'=>$id), 'subject', array('category_id'=>8));
		$this->m_model->del(array('category_id'=>$id), 'category');
		header('location:../category');
	}
}
