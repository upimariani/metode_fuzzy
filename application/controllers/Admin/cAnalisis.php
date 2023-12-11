<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
		$this->load->model('mKaryawan');
	}


	public function index()
	{
		$data = array(
			'hasil' => $this->mAnalisis->select_hasil()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('karyawan', 'Karyawan', 'required');
		$this->form_validation->set_rules('absensi', 'Absensi', 'required');
		$this->form_validation->set_rules('pengetahuan', 'Pengetahuan', 'required');
		$this->form_validation->set_rules('kedisiplinan', 'Kedisiplinan', 'required');
		$this->form_validation->set_rules('keahlian', 'Keahlian', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'karyawan' => $this->mAnalisis->karyawan()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Analisis/vTambahAnalisis', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'karyawan' => $this->input->post('karyawan'),
				'absensi' => $this->input->post('absensi'),
				'pengetahuan' => $this->input->post('pengetahuan'),
				'kedisiplinan' => $this->input->post('kedisiplinan'),
				'keahlian' => $this->input->post('keahlian')
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Analisis/vDefuzifikasi', $data);
			$this->load->view('Admin/Layouts/footer');
		}
	}
	public function defuzifikasi()
	{
		$total_d_hasil = 0;
		for ($i = 1; $i <= 8; $i++) {
			$hasil = $this->input->post('d_hasil' . $i);
			$total_d_hasil += $hasil;
		}
		// echo $total_d_hasil;

		$total_min = 0;
		for ($j = 1; $j <= 8; $j++) {
			$min = $this->input->post('min' . $j);
			$total_min += $min;
		}
		// echo '<br>';
		// echo $total_min;
		// echo '<br>';

		$defuzifikasi = 0;
		if ($total_d_hasil != 0) {
			$defuzifikasi = round($total_d_hasil / $total_min, 2);
		}


		// echo $defuzifikasi;
		if ($defuzifikasi >= 0 && $defuzifikasi <= 1) {
			$hasil_status = 'Tidak Layak';
		} else if ($defuzifikasi > 1) {
			$hasil_status = 'Layak';
		}



		$data = array(
			'defuzifikasi' => $defuzifikasi,
			'hasil_status' => $hasil_status,
			'absensi' => $this->input->post('absensi'),
			'pengetahuan' => $this->input->post('pengetahuan'),
			'kedisiplinan' => $this->input->post('kedisiplinan'),
			'keahlian' => $this->input->post('keahlian'),
			'karyawan' => $this->input->post('karyawan'),
			'periode' => date('Y-m-d'),

		);

		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vHasil', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function insert($id_karyawan)
	{
		$data = array(
			'id_karyawan' => $id_karyawan,
			'absensi' => $this->input->post('absensi'),
			'pengetahuan' => $this->input->post('pengetahuan'),
			'kedisiplinan' => $this->input->post('kedisiplinan'),
			'keahlian' => $this->input->post('keahlian'),
			'hasil' => $this->input->post('defuzifikasi'),
			'tgl_analisis' => date('Y-m-d')
		);
		$this->mAnalisis->insert($data);
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!!!');
		redirect('Admin/cAnalisis', 'refresh');
	}
	public function delete($id_lap)
	{
		$this->mAnalisis->delete($id_lap);
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Dihapus!!!');
		redirect('Admin/cAnalisis', 'refresh');
	}
}

/* End of file cAnalisis.php */
