<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}


	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/User/vUser', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat User', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('level', 'Level User', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/User/vTambahUser');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level')
			);
			$this->mUser->insert($data);
			$this->session->set_flashdata('success', 'Data User Berhasil Ditambahkan!!!');
			redirect('Admin/cUser');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat User', 'required');
		$this->form_validation->set_rules('no_hp', 'No Telepon User', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('level', 'Level User', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'user' => $this->mUser->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/aside');
			$this->load->view('Admin/User/vUpdateUser', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('no_hp'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level')
			);
			$this->mUser->update($id, $data);
			$this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!!!');
			redirect('Admin/cUser');
		}
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User Berhasil Dihapus!!!');
		redirect('Admin/cUser');
	}
}

/* End of file cUser.php */
