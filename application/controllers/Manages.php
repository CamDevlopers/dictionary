<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manages extends CI_Controller {

	/*
   	 * @organization PNC
     * @package    Dictionary
     * @subpackage Pages
     * @author     Vannakpanha MAO <vannakpanha.mao@gmail.com>
   */

	//this default function 
	public function dashboard()
	{
	
		is_user_logined();
		//die($this->session->userdata('user_id'));
		$data['result'] = $this->Manage->get_keywords($this->session->userdata('user_id'));
		$this->load->view('pages/dashboard',$data);
	}

	public function add_new(){
		is_user_logined();
		$this->load->view('pages/add_new_page');
	}

	public function add_process(){
		is_user_logined();
		$this->form_validation->set_rules('title','Key words','required');
		$this->form_validation->set_rules('desc_en','Description','required|min_length[50]');
		$this->form_validation->set_rules('desc_kh','Description','min_length[50]');
		$this->form_validation->set_rules('category','Category','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('pages/add_new_page');
		}else{
			$data['keyword_title'] = $this->input->post('title');
			$data['keyword_category'] = $this->input->post('category');
			$data['keyword_desc_en'] = $this->input->post('desc_en');
			$data['keyword_desc_kh'] = $this->input->post('desc_kh');
			$data['users_id'] = $this->session->userdata('user_id');

			if($data['keyword_category']=='networking'){
				$data['color'] = 'CE93D8';
			}else if($data['keyword_category']=='programming'){
				$data['color'] = 'FFCC80';
			}else{
				$data['color'] = 'A5D6A7';
			}

			if($this->Manage->add_word($data)){
				redirect('manages/dashboard');
			}else{
				$this->load->view('pages/add_new_page');
			}
		}
	}

	public function update_form($keyword_id){
		is_user_logined();
		$data['result'] = $this->Manage->get_keyword_by_id($keyword_id);
		$this->load->view('pages/update_page',$data);
	}

	public function update_word(){
		is_user_logined();
		
		$this->form_validation->set_rules('title','Key words','required');
		$this->form_validation->set_rules('desc_en','Description','required|min_length[50]');
		$this->form_validation->set_rules('desc_kh','Description','min_length[50]');
		$this->form_validation->set_rules('category','Category','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('pages/update_page');
		}else{
			$data['keyword_title'] = $this->input->post('title');
			$data['keyword_category'] = $this->input->post('category');
			$data['keyword_desc_en'] = $this->input->post('desc_en');
			$data['keyword_desc_kh'] = $this->input->post('desc_kh');
			$data['users_id'] = $this->session->userdata('user_id');
			if($data['keyword_category']=='networking'){
				$data['color'] = 'CE93D8';
			}else if($data['keyword_category']=='programming'){
				$data['color'] = 'FFCC80';
			}else{
				$data['color'] = 'A5D6A7';
			}
			$id = $this->input->post('id');
			if($this->Manage->update_word($data,$id)){
				$result['result'] = $this->Manage->get_keyword_by_id($id);
				$result['success'] = "Update success!";
				$this->load->view('pages/update_page',$result);
			}else{
				$this->load->view('pages/update_page');
			}
		}
	}

	function delete($id){
		is_user_logined();
		if($this->Manage->delete_word($id)){
			redirect('manages/dashboard');
		}else{
			echo "You have no permission to delete this word!";
		}
	}

	function profile(){
		is_user_logined();
		$data['profile'] = $this->Login->get_info($this->session->userdata('user_id'));
		$this->load->view('pages/profile',$data);
	}

	function update_profile(){
		is_user_logined();
		$data['profile'] = $this->Login->get_info($this->session->userdata('user_id'));
		$this->form_validation->set_rules('full_name','Full Name','required');
		$this->form_validation->set_rules('user_name','User Name','required|min_length[4]');
		$this->form_validation->set_rules('password','Password','min_length[5]');
		$this->form_validation->set_rules('re-password','Re-type Password','matches[password]');

		if($this->form_validation->run()==FALSE){
			$this->load->view('pages/profile',$data);
		}else{
			if($this->input->post('password')!=''){
				$value['users_password'] = md5($this->input->post('password'));
			}
			$value['users_full_name'] = $this->input->post('full_name');
			$value['users_name'] = $this->input->post('user_name');
			$id = $this->session->userdata('user_id');
			if($this->Login->update_profile($value,$id)){
				$data['success'] = "Update success!";
				$this->load->view('pages/profile',$data);
			}else{
				echo "You have no permission to update user!";
			}
		}
	}

}
