<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_dashboard');
	}
	public function ticket()
	{
		$this->load->view('admin_ticket');
	}
	public function dokter()
	{
		$this->load->view('admin_dokter');
	}
	public function pelanggan()
	{
		$this->load->view('admin_pelanggan');
	}
	public function logout()
	{
		// $this->load->view('admin_dashboard');
	}
}