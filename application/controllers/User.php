<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$data['array_ticket'] = $this->crud_model->mengambil_data_join_id('ticket',['poli','dokter','pelanggan'],'ticket.id_pelanggan',$this->session->userdata('id_pelanggan'));

		#var_dump($data);die();

		$this->load->view('user_dashboard', $data);
	}

	public function logout()
	{
		$this->akun_model->menghapus_session();

		//redirect
		redirect('', 'refresh');
	}
}
