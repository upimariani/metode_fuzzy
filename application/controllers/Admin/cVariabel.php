<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cVariabel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mVariabel');
	}

	public function index()
	{
		$data = array(
			'variabel' => $this->mVariabel->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Variabel/vVariabel', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Variabel', 'required');
		$this->form_validation->set_rules('sub', 'Sub Kriteria', 'required');
		$this->form_validation->set_rules('bobot', 'Bobot', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'variabel' => $this->mVariabel->select()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Variabel/vTambahVariabel', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_user' => '1',
				'nama_variabel' => $this->input->post('nama'),
				'sub_kriteria' => $this->input->post('sub'),
				'bobot' => $this->input->post('bobot')
			);
			$this->mVariabel->insert($data);
			$this->session->set_flashdata('success', 'Data Variabel Berhasil Ditambahkan!!!');
			redirect('Admin/cVariabel', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Variabel', 'required');
		$this->form_validation->set_rules('sub', 'Sub Kriteria', 'required');
		$this->form_validation->set_rules('bobot', 'Bobot', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'variabel' => $this->mVariabel->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Variabel/vUpdateVariabel', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_user' => '1',
				'nama_variabel' => $this->input->post('nama'),
				'sub_kriteria' => $this->input->post('sub'),
				'bobot' => $this->input->post('bobot')
			);
			$this->mVariabel->update($id, $data);
			$this->session->set_flashdata('success', 'Data Variabel Berhasilan Diperbaharui!!!');
			redirect('Admin/cVariabel', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mVariabel->delete($id);
		$this->session->set_flashdata('success', 'Data Variabel Berhasilan Dihapus!!!');
		redirect('Admin/cVariabel', 'refresh');
	}
}

/* End of file cVariabel.php */
