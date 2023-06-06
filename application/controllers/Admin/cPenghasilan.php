<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPenghasilan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPenghasilan');
		$this->load->model('mPengelola');
	}

	public function index()
	{
		$data = array(
			'penghasilan' => $this->mPenghasilan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Penghasilan/vPenghasilan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('pengelola', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('tgl', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('jml_telur', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('jml_bebek', 'Nama Pengelola', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'pengelola' => $this->mPengelola->select()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Penghasilan/vTambahPenghasilan', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_user' => '1',
				'id_pengelola' => $this->input->post('pengelola'),
				'tgl_panen' => $this->input->post('tgl'),
				'jml_panen' => $this->input->post('jml_telur'),
				'jml_bbk' => $this->input->post('jml_bebek')
			);
			$this->mPenghasilan->insert($data);
			$this->session->set_flashdata('success', 'Data Penghasilan Berhasilan Ditambahkan!!!');
			redirect('Admin/cPenghasilan', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('pengelola', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('tgl', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('jml_telur', 'Nama Pengelola', 'required');
		$this->form_validation->set_rules('jml_bebek', 'Nama Pengelola', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'pengelola' => $this->mPengelola->select(),
				'penghasilan' => $this->mPenghasilan->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Penghasilan/vUpdatePenghasilan', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_user' => '1',
				'id_pengelola' => $this->input->post('pengelola'),
				'tgl_panen' => $this->input->post('tgl'),
				'jml_panen' => $this->input->post('jml_telur'),
				'jml_bbk' => $this->input->post('jml_bebek')
			);
			$this->mPenghasilan->update($id, $data);
			$this->session->set_flashdata('success', 'Data Penghasilan Berhasilan Diperbaharui!!!');
			redirect('Admin/cPenghasilan', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mPenghasilan->delete($id);
		$this->session->set_flashdata('success', 'Data Penghasilan Berhasilan Dihapus!!!');
		redirect('Admin/cPenghasilan', 'refresh');
	}
}

/* End of file cPenghasilan.php */
