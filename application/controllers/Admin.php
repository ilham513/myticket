<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('admin_dashboard');
	}
	public function ticket()
	{
		$this->load->view('admin_ticket');
	}
	public function ticket_add()
	{
		$this->load->view('admin_ticket_add');
	}
	public function dokter()
	{
		$this->load->view('admin_dokter');
	}
	public function pelanggan()
	{
		$data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');

		$this->load->view('admin_pelanggan',$data);
	}
	public function pelanggan_edit($id)
	{
		//load model crud
		$data['array_pelanggan'] = $this->crud_model->mengambil_data_id('pelanggan','id_pelanggan',$id);
		$data['obj_pelanggan'] = $data['array_pelanggan'][0];

		$this->load->view('admin_pelanggan_edit',$data);
	}
	public function pelanggan_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('pelanggan', $data,'id_pelanggan',$this->input->post('id_pelanggan'));

		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}
	public function pelanggan_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('pelanggan','id_pelanggan',$id);

		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}	
	public function pelanggan_add()
	{
		$this->load->view('admin_pelanggan_add');
	}
	public function pelanggan_add_go()
	{
		//variabel data
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelanggan', $data);
		
		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}
	public function logout()
	{
		// $this->load->view('admin_dashboard');
	}
}
