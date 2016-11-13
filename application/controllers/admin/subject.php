<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subject extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checklogout();
	}

	public function index(){
		$sql = "SELECT * FROM subject INNER JOIN category ON subject.category_id = category.category_id ORDER BY subject_id DESC";
		$data['list'] = $this->m_model->get_list($sql);

		$sql_cat = "SELECT * FROM category";
		$data['cat'] = $this->m_model->get_list($sql_cat);

		$arr['subject_name'] = $stext = $this->input->post('txt_title');
		$stextNew = trim($stext);
		$arr_stextNew = explode(' ', $stextNew);
		$stextNew = implode('%', $arr_stextNew);
		$stextNew = '%'.$stextNew.'%';

		$now = getdate();
		$arr['subject_created_date'] = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"];
		$arr['subject_active'] = $this->input->post('active');
		$arr['can_delete'] = 1;
		$arr['category_id'] = $this->input->post('cat');
		$arr['subject_description'] = $this->input->post('description');

		$num = $this->m_model->get_num("SELECT * FROM subject WHERE subject_name LIKE('$stextNew')");
		if($this->input->post('submit')){
			if($num>0){
				$data['error'] = "Môn Học Đã Tồn Tại!";
			}
			else{
				$this->m_model->add('subject', $arr);
				header('location:./subject');
			}
		}

		$data['template'] = 'admin/subject/subject';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function edit($id){
		// $this->checkrole();
		$data['item'] = $this->m_model->get_item("SELECT * FROM subject WHERE subject_id = $id");
		$data['cat'] = $this->m_model->get_list("SELECT * FROM category");
		
		if($this->input->post('submit')){
			$arr['subject_name'] = $stext = $this->input->post('txt_subject_name');
			$stextNew = trim($stext);
			$arr_stextNew = explode(' ', $stextNew);
			$stextNew = implode('%', $arr_stextNew);
			$stextNew = '%'.$stextNew.'%';

			$arr['subject_created_date'] = $data['item']['subject_created_date'];
			$arr['subject_active'] = $this->input->post('active');
			$arr['can_delete'] = 1;
			$arr['category_id'] = $this->input->post('cat');
			$arr['subject_description'] = $this->input->post('description');
			
			$num = $this->m_model->get_num("SELECT * FROM subject WHERE subject_name LIKE('$stextNew') AND subject_id != $id");
			if($num>0){
				$data['error'] = 'Môn Học "'. $stext .'" Đã Tồn Tại!';
			}
			else{
				$this->m_model->edit(array('subject_id'=>$id), 'subject', $arr);
				header('location:../subject');
			}
		}

		$data['template'] = 'admin/subject/edit';
		$this->load->view('admin/admin',isset($data)?$data:NULL);
	}

	public function del($id){
		$this->m_model->del(array('subject_id'=>$id), 'subject');
		header('location:../subject');
	}
}
