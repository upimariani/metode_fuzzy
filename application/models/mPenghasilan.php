<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPenghasilan extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('pendapatan', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('pendapatan');
		$this->db->join('pengelola', 'pendapatan.id_pengelola = pengelola.id_pengelola', 'left');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('pendapatan');
		$this->db->join('pengelola', 'pendapatan.id_pengelola = pengelola.id_pengelola', 'left');
		$this->db->where('id_pendapatan', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_pendapatan', $id);
		$this->db->update('pendapatan', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_pendapatan', $id);
		$this->db->delete('pendapatan');
	}
}

/* End of file mPenghasilan.php */
