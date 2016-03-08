<?php
	
	//check is user logined or not
	function is_user_logined(){
		$CI = &get_instance(); 
		if(!$CI->session->userdata('user_id')){
			redirect("pages/index");
		}
	}
	//get current user login
	function current_user($user_id){
		$CI = &get_instance();
		return $CI->Login->get_info($user_id);
	}

?>