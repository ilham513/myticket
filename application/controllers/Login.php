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
		$data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');
		$data['array_dokter'] = $this->crud_model->mengambil_data('dokter');
		$data['array_poli'] = $this->crud_model->mengambil_data('poli');

		$this->load->view('login_index',$data);
	}
	public function tambah_ticket_go()
	{


		//variabel data
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'id_poli' => $this->input->post('id_poli'),		
			'id_dokter' => $this->input->post('id_dokter')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('ticket', $data);
		
		//redirect
		redirect('login/ticket_success', 'refresh');
	}

	public function ticket_success()
	{
		$this->load->view('ticket_success');
	}

	public function login()
	{
		$this->load->view('login_form_index');
	}
	public function login_admin()
	{
		$this->load->view('login_form');
	}
	public function login_user()
	{
		$this->akun_model->menghapus_session();
		
		$this->load->view('login_form_user');
	}
	public function login_go()
	{
		//ambil id & password
		$id = $this->input->post('id');
		$password = md5($this->input->post('password')); //enkripsi md5

		//cek akun jika benar maka login
		$this->akun_model->cek_akun($id, $password);
	}
	public function login_user_go()
	{
		//ambil id & password
		$id = $this->input->post('id');
		$password = $this->input->post('password'); //enkripsi md5

		//cek akun jika benar maka login
		$cek = $this->akun_model->cek_entry($id, $password, 'pelanggan');

		#var_dump($cek[0]['id_pelanggan']);die();

		if (count($cek) > 0) {
			$this->session->set_userdata('user_nik', $cek[0]['nik']);
			$this->session->set_userdata('id_pelanggan', $cek[0]['id_pelanggan']);
			echo '<script>alert("Berhasil login!")</script>';
			redirect('user/index', 'refresh');
		} else {
			echo '<script>alert("data salah. Mohon tulis kembali!")</script>';
			redirect('login/login_user', 'refresh');
		}				
	}
}
