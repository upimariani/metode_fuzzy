<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPengelola extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('pengelola', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('pengelola');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('pengelola');
		$this->db->where('id_pengelola', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_pengelola', $id);
		$this->db->update('pengelola', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_pengelola', $id);
		$this->db->delete('pengelola');
	}
}

/* End of file mPengelola.php */
