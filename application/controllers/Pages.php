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
		$this->load->view('pages/login');
	}
	// this function will view page about
	public function about(){
		$this->load->view('pages/about');
	}

}
