<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function get_list($sql){
		return $this->db->query($sql)->result_array();
	}
	
	public function get_item($sql){
		return $this->db->query($sql)->row_array();
	}
	
	public function get_num($sql){
		return $this->db->query($sql)->num_rows();
	}
	
	public function add($table,$arr){
		$this->db->insert($table,$arr);
	}
	
	public function edit($where,$table,$arr){
		$this->db->where($where);
		$this->db->update($table,$arr);
	}
	
	public function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_user($user, $pass){
		$array = array('user_name'=>$user, 'user_password'=>$pass);
		$this->db->select('user_name');
		$this->db->from('user');
		$this->db->where($array);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
	
}
