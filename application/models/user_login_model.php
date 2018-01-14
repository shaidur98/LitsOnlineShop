<?php 

class User_login_model extends CI_Model{
	
	public function check_user_login_info($email,$password){

	$email=$this->input->post('email',true);
	$password=md5($this->input->post('password',true));

	$this->db->select('*');
	$this->db->from('tbl_user');
	$this->db->where('email',$email);
	$this->db->where('password',$password);
	$query_result=$this->db->get();
	$result=$query_result->row();
	return $result;

	}
}