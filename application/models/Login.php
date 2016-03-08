<?php
	/*
   	 * @organization PNC
     * @package    Dictionary
     * @subpackage Login
     * @author     Vannakpanha MAO <vannakpanha.mao@gmail.com>
    */
class Login extends CI_Model{
	//get user from database where username = username in database
	function check_username($uname){
		$this->db->from('users');
		$this->db->where('users_name',$uname);
		$data = $this->db->get();
		if($data->num_rows()> 0){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	//get user from database where password = password in database
	function check_password($password){
		$this->db->from('users');
		$this->db->where('users_password',md5($password));
		$data = $this->db->get();
		if($data->num_rows()> 0){
			return TRUE;
		}else{
			return FALSE;
		}

	}
	//this function will get the user information 
	function get_user_by_username_password($user_name,$password){
		$this->db->from('users');
		$this->db->where('users_name',$user_name);
		$this->db->where('users_password',md5($password));
		$data = $this->db->get();
		if($data->num_rows()> 0){
			$this->session->set_userdata('user_id',$data->row()->users_id);
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//get info of user
	function get_info($person_id){
		$this->db->where('users_id',$person_id);
		return $this->db->get('users')->row();
	}

	function update_profile($data,$id){
		$this->db->where('users_id',$id);
		return $this->db->update('users',$data);
	}
}