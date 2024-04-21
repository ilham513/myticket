<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}
	public function index()
	{
		$this->load->view('login_index');
	}
	public function login()
	{
		$this->load->view('login_form');
	}
	public function login_go()
	{
		//ambil id & password
		$id = $this->input->post('id');
		$password = md5($this->input->post('password')); //enkripsi md5

		//cek akun jika benar maka login
		$this->akun_model->cek_akun($id, $password);
	}
}
