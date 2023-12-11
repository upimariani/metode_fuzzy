<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKaryawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKaryawan');
	}


	public function index()
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Karyawan/vKaryawan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Karyawan', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon Karyawan', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin Karyawan', 'required');
		$this->form_validation->set_rules('divisi', 'Divisi Karyawan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Karyawan/vTambahKaryawan');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_karyawan' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'divisi' => $this->input->post('divisi'),
				'jk' => $this->input->post('jk')
			);
			$this->mKaryawan->insert($data);
			$this->session->set_flashdata('success', 'Data Karyawan Berhasil Ditambahkan!!!');
			redirect('Admin/cKaryawan', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Karyawan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Karyawan', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon Karyawan', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin Karyawan', 'required');
		$this->form_validation->set_rules('divisi', 'Divisi Karyawan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'karyawan' => $this->mKaryawan->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Karyawan/vUpdateKaryawan', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_karyawan' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'divisi' => $this->input->post('divisi'),
				'jk' => $this->input->post('jk')
			);
			$this->mKaryawan->update($id, $data);
			$this->session->set_flashdata('success', 'Data Karyawan Berhasil Diperbaharui!!!');
			redirect('Admin/cKaryawan', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mKaryawan->delete($id);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Dihapus!!!');
		redirect('Admin/cKaryawan', 'refresh');
	}
}

/* End of file cKaryawan.php */
