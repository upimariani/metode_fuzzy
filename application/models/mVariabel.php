<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mVariabel extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('variabel', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('variabel');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('variabel');
		$this->db->where('id_variabel', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_variabel', $id);
		$this->db->update('variabel', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_variabel', $id);
		$this->db->delete('variabel');
	}
}

/* End of file mPenghasilan.php */
