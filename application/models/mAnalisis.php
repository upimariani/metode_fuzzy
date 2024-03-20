<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function karyawan()
	{
		$this->db->select('*, karyawan.id_karyawan');
		$this->db->from('karyawan');
		$this->db->join('hasil_analisis', 'karyawan.id_karyawan = hasil_analisis.id_karyawan', 'left');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('hasil_analisis', $data);
	}
	public function select_hasil()
	{
		$this->db->select('*');
		$this->db->from('hasil_analisis');
		$this->db->join('karyawan', 'hasil_analisis.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->order_by('hasil', 'desc');
		return $this->db->get()->result();
	}
	public function hasil_cetak($jml)
	{
		$this->db->select('*');
		$this->db->from('hasil_analisis');
		$this->db->join('karyawan', 'hasil_analisis.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->order_by('hasil', 'desc');
		$this->db->limit($jml);
		return $this->db->get()->result();
	}
	public function juara()
	{
		$this->db->select('*');
		$this->db->from('hasil_analisis');
		$this->db->join('karyawan', 'hasil_analisis.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->order_by('hasil', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}
	public function delete($id)
	{
		$this->db->where('id_lap', $id);
		$this->db->delete('hasil_analisis');
	}
}

/* End of file mAnalisis.php */
