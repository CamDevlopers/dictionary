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
		//var_dump($data['search_result']);
		$this->load->view('pages/search',$data);
	}

	function detail($keyword_id){
		$data['result'] = $this->Manage->get_keyword_by_id($keyword_id);
		$this->load->view('pages/detail',$data);
	}

}
