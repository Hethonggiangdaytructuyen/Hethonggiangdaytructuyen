<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public $menu;
	public $featured;
	public $recent;
	public $num;
	
	public function __construct(){
		parent::__construct();
	// 	$this->menu = $this->m_model->get_list("SELECT * FROM dmsanpham WHERE parent = 0");
	// 	$this->featured = $this->m_model->get_list("SELECT * FROM sanpham WHERE publish_sp = 1 AND dac_biet = 1 ORDER BY id_sp DESC LIMIT 0,6");
	// 	$this->recent = $this->m_model->get_list("SELECT * FROM sanpham WHERE publish_sp = 1 ORDER BY id_sp DESC LIMIT 0,6");
		
	// 	function slug($str){
	// 		return strtolower(url_title(removesign($str)));
	// 	}
		
	// 	function url_title($str, $separator = '-', $lowercase = FALSE){
	// 		if($separator == 'dash'){
	// 			$separator = '-';
	// 		}
	// 		else if($separator == 'underscore'){
	// 			$separator = '_';
	// 		}
	// 		$q_separator = preg_quote($separator);
	// 		$trans = array(
	// 			'&.+?;'                 => '',
	// 			'[^a-z0-9 _-]'          => '',
	// 			'\s+'                   => $separator,
	// 			'('.$q_separator.')+'   => $separator
	// 		);
	// 		$str = strip_tags($str);
	// 		foreach ($trans as $key => $val){
	// 			$str = preg_replace("#".$key."#i", $val, $str);
	// 		}
	// 		if ($lowercase === TRUE){
	// 			$str = strtolower($str);
	// 		}
	// 		return trim($str, $separator);
	// 	}
		
	// 	function removesign($str){
	// 		$coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
	// 		,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
	// 		"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
	// 		,"ờ","ớ","ợ","ở","ỡ",
	// 		"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
	// 		"ỳ","ý","ỵ","ỷ","ỹ",
	// 		"đ",
	// 		"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
	// 		,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
	// 		"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
	// 		"Ì","Í","Ị","Ỉ","Ĩ",
	// 		"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
	// 		,"Ờ","Ớ","Ợ","Ở","Ỡ",
	// 		"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
	// 		"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
	// 		"Đ","ê","ù","à");
	// 		$khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
	// 		,"a","a","a","a","a","a",
	// 		"e","e","e","e","e","e","e","e","e","e","e",
	// 		"i","i","i","i","i",
	// 		"o","o","o","o","o","o","o","o","o","o","o","o"
	// 		,"o","o","o","o","o",
	// 		"u","u","u","u","u","u","u","u","u","u","u",
	// 		"y","y","y","y","y",
	// 		"d",
	// 		"A","A","A","A","A","A","A","A","A","A","A","A"
	// 		,"A","A","A","A","A",
	// 		"E","E","E","E","E","E","E","E","E","E","E",
	// 		"I","I","I","I","I",
	// 		"O","O","O","O","O","O","O","O","O","O","O","O"
	// 		,"O","O","O","O","O",
	// 		"U","U","U","U","U","U","U","U","U","U","U",
	// 		"Y","Y","Y","Y","Y",
	// 		"D","e","u","a");
	// 		return str_replace($coDau,$khongDau,$str);
	// 	}
	}
	
	public function checklogin(){
		$user = $this->session->userdata('user_name');
		$pass = $this->session->userdata('user_password');
		$sql = "SELECT * FROM user WHERE user_name = '$user' AND user_password = '$pass' AND user_active = 1";
		$num = $this->m_model->get_num($sql);
		if($num>0){
			header("location:./admin");
		}
	}
	
	public function checklogout(){
		$user = $this->session->userdata('user_name');
		$pass = $this->session->userdata('user_password');
		$sql = "SELECT * FROM user WHERE user_name = '$user' AND user_password = '$pass' AND user_active = 1";
		$num = $this->m_model->get_num($sql);
		if($num == 0){
			header("location:./login");
		}
	}
	
	// public function checkrole(){
	// 	if(($this->session->userdata('quyen_truy_cap') == 3) || $this->session->userdata('quyen_truy_cap') == 1){
	// 		$this->session->set_flashdata('error','Bạn không đủ quyền');
	// 		header('location:./../quantri');
	// 	}
	// }
}