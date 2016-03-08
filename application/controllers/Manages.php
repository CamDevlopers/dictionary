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
			$data['	users_id'] = $this->session->userdata('user_id');
			if($this->Manage->add_word($data)){
				redirect('manages/dashboard');
			}else{
				$this->load->view('pages/add_new_page');
			}
		}
	}

}
