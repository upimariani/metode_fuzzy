<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vAnalisis');
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/Analisis/vTambahAnalisis');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cAnalisis.php */
