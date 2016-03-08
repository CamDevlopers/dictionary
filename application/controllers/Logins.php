<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/*
   	 * @organization PNC
     * @package    Dictionary
     * @subpackage Login
     * @author     Vannakpanha MAO <vannakpanha.mao@gmail.com>
   */ 
class Logins extends CI_Controller {

// this function is use for process form login 
	public function do_login(){
		$user_name = $this->input->post('username');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('username','Username','required|min_length[5]|callback_validate_user');
		$this->form_validation->set_rules('password','Password','required|min_length[5]|callback_validate_password');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pages/login');
		}else{
			//get current user and set session
			if($this->Login->get_user_by_username_password($user_name,$password)){
				redirect('manages/dashboard');
			}else{
				$this->load->view('pages/login');	
			}
		}
	}

	//this function is use for validate username
	function validate_user($uname){
		$result = $this->Login->check_username($uname);
		if ($result == FALSE) {
			$this->form_validation->set_message('validate_user', "The %s field doesn't match!");
			return FALSE;
		}else{
			return TRUE;
		}
	}
	//this function will validate your password with database record 
	function validate_password($password){
		$result = $this->Login->check_password($password);
		if ($result == FALSE) {
			$this->form_validation->set_message('validate_password', "The %s field doesn't match!");
			return FALSE;
		}else{
			return TRUE;
		}
	}

	function logout(){
		$this->session->unset_userdata('user_id');
		redirect('pages/index');
	}
}