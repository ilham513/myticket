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
		$data['array_dokter'] = $this->crud_model->mengambil_data_join('dokter',['poli']);

		$this->load->view('admin_dokter',$data);
	}
	public function dokter_edit($id)
	{
		//load model crud
		$data['array_dokter'] = $this->crud_model->mengambil_data_id('dokter','id_dokter',$id);
		$data['array_poli'] = $this->crud_model->mengambil_data('poli');
		$data['obj_dokter'] = $data['array_dokter'][0];

		$this->load->view('admin_dokter_edit',$data);
	}
	public function dokter_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_dokter' => $this->input->post('nama_dokter'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'id_poli' => $this->input->post('id_poli'),
			'no_telp' => $this->input->post('no_telp')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('dokter', $data,'id_dokter',$this->input->post('id_dokter'));

		//redirect
		redirect('/admin/dokter', 'refresh');
	}
	public function dokter_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('dokter','id_dokter',$id);

		//redirect
		redirect('/admin/dokter', 'refresh');
	}	
	public function dokter_add()
	{
		$data['array_poli'] = $this->crud_model->mengambil_data('poli');

		$this->load->view('admin_dokter_add',$data);
	}
	public function dokter_add_go()
	{
		//variabel data
		$data = array(
			'nama_dokter' => $this->input->post('nama_dokter'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_poli' => $this->input->post('id_poli'),
			'no_telp' => $this->input->post('no_telp')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('dokter', $data);
		
		//redirect
		redirect('/admin/dokter', 'refresh');
	}
	public function poli()
	{
		$data['array_poli'] = $this->crud_model->mengambil_data('poli');

		$this->load->view('admin_poli',$data);
	}
	public function poli_edit($id)
	{
		//load model crud
		$data['array_poli'] = $this->crud_model->mengambil_data_id('poli','id_poli',$id);
		$data['obj_poli'] = $data['array_poli'][0];

		$this->load->view('admin_poli_edit',$data);
	}
	public function poli_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_poli' => $this->input->post('nama_poli')	
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('poli', $data,'id_poli',$this->input->post('id_poli'));

		//redirect
		redirect('/admin/poli', 'refresh');
	}
	public function poli_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('poli','id_poli',$id);

		//redirect
		redirect('/admin/poli', 'refresh');
	}	
	public function poli_add()
	{
		$this->load->view('admin_poli_add');
	}
	public function poli_add_go()
	{
		//variabel data
		$data = array(
			'nama_poli' => $this->input->post('nama_poli')	
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('poli', $data);
		
		//redirect
		redirect('/admin/poli', 'refresh');
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
