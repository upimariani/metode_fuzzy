<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}


	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vAnalisis');
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('date', 'Tanggal Panen', 'required');
		$this->form_validation->set_rules('pakan', 'Pakan Bebek', 'required');
		$this->form_validation->set_rules('umur', 'Umur Bebek', 'required');
		$this->form_validation->set_rules('jenis', 'Jenis Bebek', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/Analisis/vTambahAnalisis');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'pakan' => $this->input->post('pakan'),
				'umur' => $this->input->post('umur'),
				'jenis' => $this->input->post('jenis')
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

		$defuzifikasi = round($total_d_hasil / $total_min, 2);
		// echo $defuzifikasi;
		if ($defuzifikasi >= 0 && $defuzifikasi <= 5) {
			$hasil_status = 'Tidak Layak';
		} else if ($defuzifikasi > 5 && $defuzifikasi <= 10) {
			$hasil_status = 'Layak';
		}

		$data = array(
			'defuzifikasi' => $defuzifikasi,
			'hasil_status' => $hasil_status,
			'pakan' => $this->input->post('pakan'),
			'umur' => $this->input->post('umur'),
			'jenis' => $this->input->post('jenis')
		);

		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vHasil', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function insert()
	{
		$data = array(
			'pakan_bbk' => $this->input->post('pakan'),
			'umur_bbk' => $this->input->post('umur'),
			'jenis' => $this->input->post('jenis'),
			'hasil' => $this->input->post('defuzifikasi'),
			'status' => $this->input->post('hasil')
		);
		$this->mAnalisis->insert($data);
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!!!');
		redirect('Admin/cAnalisis', 'refresh');
	}
}

/* End of file cAnalisis.php */
