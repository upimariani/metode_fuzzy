<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('hasil_analisis', $data);
	}
}

/* End of file mAnalisis.php */
