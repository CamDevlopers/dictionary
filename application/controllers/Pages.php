<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/*
   	 * @organization PNC
     * @package    Dictionary
     * @subpackage Pages
     * @author     Vannakpanha MAO <vannakpanha.mao@gmail.com>
   */

	function __contruct(){
		parrent::__contruct();
	}

	//this default function 
	public function index()
	{
		$this->load->view('pages/home');
	}
	// this function will view login form
	public function login(){
		check_login();
		$this->load->view('pages/login');
	}
	// this function will view page about
	public function word_list(){
		$this->load->view('pages/words');
	}

	public function search(){
		$data['search_result'] = $this->Manage->get_search($this->input->get('keyword'));
		$data['search_result_content'] = $this->Manage->get_search_content($this->input->get('keyword'));
		
		if($this->input->get('keyword')==''){
			$value['error'] = "Keyword can not be empty!";
			$this->load->view('pages/search_form',$value);
		}else{
			$this->load->view('pages/search',$data);
		}
	}

	function detail($keyword_id){
		$data['result'] = $this->Manage->get_keyword_by_id($keyword_id);
		$this->load->view('pages/detail',$data);
	}
	//this function is use for firefox only
	function view_search(){
		$this->load->view('pages/search_form');
	}

}
