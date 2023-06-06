<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPengelola extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPengelola');
	}


	public function index()
	{
		$data = array(
			'pengelola' => $this->mPengelola->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Pengelola/vPengelola', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Pengelola', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon Pengelola', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Pengelola/vTambahPengelola');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_pengelola' => $this->input->post('nama'),
				'alamat_pengelola' => $this->input->post('alamat'),
				'no_hp_pengelola' => $this->input->post('no_hp')
			);
			$this->mPengelola->insert($data);
			$this->session->set_flashdata('success', 'Data Pengelola Berhasil Ditambahkan!!!');
			redirect('Admin/cPengelola', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Pengelola', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon Pengelola', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'pengelola' => $this->mPengelola->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Pengelola/vUpdatePengelola', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_pengelola' => $this->input->post('nama'),
				'alamat_pengelola' => $this->input->post('alamat'),
				'no_hp_pengelola' => $this->input->post('no_hp')
			);
			$this->mPengelola->update($id, $data);
			$this->session->set_flashdata('success', 'Data Pengelola Berhasil Diperbaharui!!!');
			redirect('Admin/cPengelola', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mPengelola->delete($id);
		$this->session->set_flashdata('success', 'Data Pengelola Berhasil Dihapus!!!');
		redirect('Admin/cPengelola', 'refresh');
	}
}

/* End of file cPengelola.php */
