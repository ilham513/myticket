<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_index');
	}
	public function login()
	{
		$this->load->view('login_form');
	}
}
