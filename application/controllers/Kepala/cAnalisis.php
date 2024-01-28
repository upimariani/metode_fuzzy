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
		$data = array(
			'hasil' => $this->mAnalisis->select_hasil()
		);
		$this->load->view('Pemilik/Layouts/head');
		$this->load->view('Pemilik/Layouts/aside');
		$this->load->view('Pemilik/vAnalisis', $data);
		$this->load->view('Pemilik/Layouts/footer');
	}
	public function cetak()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', '', 12);
		$pdf->Cell(200, 10, 'Lampiran', 0, 1, 'L');

		$pdf->SetFont('Times', 'B', 12);

		$pdf->Cell(200, 10, 'Berita Acara Karyawan Terbaik', 0, 1, 'L');
		$pdf->SetFont('Times', '', 12);
		$pdf->Cell(200, 10, 'Nomor : ', 0, 1, 'L');
		$pdf->Cell(200, 10, 'Tanggal :' . date('d/m/Y'), 0, 1, 'L');

		$pdf->SetFont('Times', 'B', 13);
		$pdf->Cell(200, 10, 'LAPORAN HASIL KARYAWAN TERBAIK PT LONG RICH INDONESIA', 0, 1, 'C');




		$pdf->Cell(10, 15, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
		$pdf->Cell(35, 7, 'Nama Karyawan', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Jenis Kelamin', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Divisi', 1, 0, 'C');
		$pdf->Cell(30, 7, 'No Telepon', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Hasil', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);
		$no = 1;
		$karyawan = $this->mAnalisis->select_hasil();
		foreach ($karyawan as $key => $value) {
			$pdf->Cell(10, 7, $no++, 1, 0, 'C');
			$pdf->Cell(35, 7, $value->nama_karyawan, 1, 0, 'C');
			$pdf->Cell(40, 7, $value->jk, 1, 0, 'C');
			$pdf->Cell(30, 7, $value->divisi, 1, 0, 'C');
			$pdf->Cell(30, 7, $value->no_hp, 1, 0, 'C');
			$pdf->Cell(40, 7, $value->hasil, 1, 1, 'R');
		}

		$pdf->SetFont('Times', 'B', 10);
		$juara = $this->mAnalisis->juara();
		$pdf->Cell(200, 20, '*)Berdasarkan hasil analisis maka rekomendasi sebagai karyawan terbaik adalah ' . $juara->nama_karyawan, 0, 1, 'L');



		$pdf->Output();
	}
}

/* End of file cAnalisis.php */
