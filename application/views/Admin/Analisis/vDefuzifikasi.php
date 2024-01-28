<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-bar"></i> Analisis Karyawan Terbaik</h4>
				<div class="ml-auto text-right">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-md-12">
				<div class="card card-body printableArea">
					<h3>Hasil Keanggotaan Fuzzyfikasi</h3>
					<form action="<?= base_url('Admin/cAnalisis/defuzifikasi') ?>" method="POST">
						<?php
						$absensi = $absensi;
						$pengetahuan = $pengetahuan;
						$kedisiplinan = $kedisiplinan;
						$keahlian = $keahlian;

						// echo '<br>' . $absensi;
						// echo '<br>' . $pengetahuan;
						// echo '<br>' . $kedisiplinan;
						$a_absensi = array();
						$a_pengetahuan = array();
						$a_kedisiplinan = array();
						$a_keahlian = array();

						$v_absensi = array();
						$v_pengetahuan = array();
						$v_kedisiplinan = array();
						$v_keahlian = array();


						//absensi
						if ($absensi >= '0' && $absensi <= '70') {
							$v_absensi[] = 'Kurang';
							if ($absensi <= 60) {
								$a_absensi[] = 1;
							} else if ($absensi > 60 && $absensi <= 70) {
								$a_absensi[] = (70 - $absensi) / 10;
							} else if ($absensi > 70) {
								$a_absensi[] = 0;
							}
						}
						if ($absensi > '60' && $absensi <= '80') {
							$v_absensi[] = 'Cukup';
							if ($absensi <= 60 || $absensi >= 80) {
								$a_absensi[] = 0;
							} else if ($absensi > 60 && $absensi <= 70) {
								$a_absensi[] = ($absensi - 60) / 10;
							} else if ($absensi > 70 && $absensi < 80) {
								$a_absensi[] = (80 - $absensi) / 10;
							}
						}
						if ($absensi > '70' && $absensi <= '80') {
							$v_absensi[] = 'Baik';
							if ($absensi <= 60) {
								$a_absensi[] = 0;
							} else if ($absensi > 70 && $absensi <= 80) {
								$a_absensi[] = ($absensi - 70) / 10;
							} else if ($absensi > 80) {
								$a_absensi[] = 1;
							}
						}

						// echo '<br>';

						//pengetahuan
						if ($pengetahuan >= '0' && $pengetahuan <= '70') {
							$v_pengetahuan[] = 'Kurang';
							if ($pengetahuan <= 60) {
								$a_pengetahuan[] = 1;
							} else if ($pengetahuan > 60 && $pengetahuan <= 70) {
								$a_pengetahuan[] = (70 - $pengetahuan) / 10;
							} else if ($pengetahuan > 70) {
								$a_pengetahuan[] = 0;
							}
						}
						if ($pengetahuan > '60' && $pengetahuan <= '80') {
							$v_pengetahuan[] = 'Cukup';
							if ($pengetahuan <= 60 || $pengetahuan >= 80) {
								$a_pengetahuan[] = 0;
							} else if ($pengetahuan > 60 && $pengetahuan <= 70) {
								$a_pengetahuan[] = ($pengetahuan - 60) / 10;
							} else if ($pengetahuan > 70 && $pengetahuan < 80) {
								$a_pengetahuan[] = (80 - $pengetahuan) / 10;
							}
						}
						if ($pengetahuan > '70' && $pengetahuan <= '80') {
							$v_pengetahuan[] = 'Baik';
							if ($pengetahuan <= 60) {
								$a_pengetahuan[] = 0;
							} else if ($pengetahuan > 70 && $pengetahuan <= 80) {
								$a_pengetahuan[] = ($pengetahuan - 70) / 10;
							} else if ($pengetahuan > 80) {
								$a_pengetahuan[] = 1;
							}
						}

						// echo '<br>';
						//kedisiplinan
						if ($kedisiplinan >= '0' && $kedisiplinan <= '70') {
							$v_kedisiplinan[] = 'Kurang';
							if ($kedisiplinan <= 60) {
								$a_kedisiplinan[] = 1;
							} else if ($kedisiplinan > 60 && $kedisiplinan <= 70) {
								$a_kedisiplinan[] = (70 - $kedisiplinan) / 10;
							} else if ($kedisiplinan > 70) {
								$a_kedisiplinan[] = 0;
							}
						}
						if ($kedisiplinan > '60' && $kedisiplinan <= '80') {
							$v_kedisiplinan[] = 'Cukup';
							if ($kedisiplinan <= 60 || $kedisiplinan >= 80) {
								$a_kedisiplinan[] = 0;
							} else if ($kedisiplinan > 60 && $kedisiplinan <= 70) {
								$a_kedisiplinan[] = ($kedisiplinan - 60) / 10;
							} else if ($kedisiplinan > 70 && $kedisiplinan < 80) {
								$a_kedisiplinan[] = (80 - $kedisiplinan) / 10;
							}
						}
						if ($kedisiplinan > '70' && $kedisiplinan <= '80') {
							$v_kedisiplinan[] = 'Baik';
							if ($kedisiplinan <= 60) {
								$a_kedisiplinan[] = 0;
							} else if ($kedisiplinan > 70 && $kedisiplinan <= 80) {
								$a_kedisiplinan[] = ($kedisiplinan - 70) / 10;
							} else if ($kedisiplinan > 80) {
								$a_kedisiplinan[] = 1;
							}
						}

						//keahlian
						if ($keahlian >= '0' && $keahlian <= '70') {
							$v_keahlian[] = 'Kurang';
							if ($keahlian <= 60) {
								$a_keahlian[] = 1;
							} else if ($keahlian > 60 && $keahlian <= 70) {
								$a_keahlian[] = (70 - $keahlian) / 10;
							} else if ($keahlian > 70) {
								$a_keahlian[] = 0;
							}
						}
						if ($keahlian > '60' && $keahlian <= '80') {
							$v_keahlian[] = 'Cukup';
							if ($keahlian <= 60 || $keahlian >= 80) {
								$a_keahlian[] = 0;
							} else if ($keahlian > 60 && $keahlian <= 70) {
								$a_keahlian[] = ($keahlian - 60) / 10;
							} else if ($keahlian > 70 && $keahlian < 80) {
								$a_keahlian[] = (80 - $keahlian) / 10;
							}
						}
						if ($keahlian > '70' && $keahlian <= '80') {
							$v_keahlian[] = 'Baik';
							if ($keahlian <= 60) {
								$a_keahlian[] = 0;
							} else if ($keahlian > 70 && $keahlian <= 80) {
								$a_keahlian[] = ($keahlian - 70) / 10;
							} else if ($keahlian > 80) {
								$a_keahlian[] = 1;
							}
						}

						// echo 'absensi Bebek <br>';
						// for ($i = 0; $i < sizeof($a_absensi); $i++) {
						// 	echo $a_absensi[$i];
						// 	echo $v_absensi[$i];
						// 	echo '<br>';
						// }
						// echo '<br>';
						// echo 'pengetahuan Bebek <br>';
						// for ($j = 0; $j < sizeof($a_pengetahuan); $j++) {
						// 	echo $a_pengetahuan[$j];
						// 	echo $v_pengetahuan[$j];
						// 	echo '<br>';
						// }
						// echo '<br>';
						// echo 'pengetahuan Bebek <br>';
						// for ($k = 0; $k < sizeof($a_kedisiplinan); $k++) {
						// 	echo $a_kedisiplinan[$k];
						// 	echo $v_kedisiplinan[$k];
						// 	echo '<br>';
						// }
						// echo '<br>';

						$min = array();

						$hasil = 1;
						$min = 1;
						for ($a = 0; $a < sizeof($a_absensi); $a++) {
							for ($b = 0; $b < sizeof($a_pengetahuan); $b++) {
								for ($c = 0; $c < sizeof($a_kedisiplinan); $c++) {
									for ($d = 0; $d < sizeof($a_keahlian); $d++) {
						?>
										<table class="table">
											<tr>
												<th><?= $a_absensi[$a] . ' / ' . $a_pengetahuan[$b] . ' / ' . $a_kedisiplinan[$c] . ' / ' . $a_keahlian[$d] ?></th>
												<td>Data min: <?= round(min($a_absensi[$a], $a_pengetahuan[$b], $a_kedisiplinan[$c], $a_keahlian[$d]), 3) ?></td>
												<td><?= $v_absensi[$a] . ' / ' . $v_pengetahuan[$b] . ' / ' . $v_kedisiplinan[$c] . ' / ' . $v_keahlian[$d] ?></td>
											</tr>

											<?php

											// echo $a_absensi[$a] . ' / ' . $a_pengetahuan[$b] . ' / ' . $a_kedisiplinan[$c] . '<br> Data min: ' . round(min($a_absensi[$a], $a_pengetahuan[$b], $a_kedisiplinan[$c]), 3);
											if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Kurang' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Cukup' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Kurang' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Cukup' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Kurang' && $v_keahlian[$d] == 'Baik') {
												$status = 'Kurang Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Cukup' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Kurang') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Cukup') {
												$status = 'Layak';
											} else if ($v_absensi[$a] == 'Baik' && $v_pengetahuan[$b] == 'Baik' && $v_kedisiplinan[$c] == 'Baik' && $v_keahlian[$d] == 'Baik') {
												$status = 'Layak';
											} ?>
											<td><?= $status ?></td>
										</table>
										<?php

										$data_min = min($a_absensi[$a], $a_pengetahuan[$b], $a_kedisiplinan[$c],  $a_keahlian[$d]);


										if ($status == 'Layak') {
											$h_rules = round(4 - ($data_min * 1), 3);
										} else if ($status == 'Kurang Layak') {
											$h_rules = round(5 - ($data_min * 1), 3);
										}

										?>
										<input class="form-control" name="d_hasil<?= $hasil++ ?>" type="hidden" value="<?= round($h_rules * $data_min, 3) ?>">
										<input class="form-control" type="hidden" name="min<?= $min++ ?>" value="<?= round($data_min, 3) ?>">
										<input class="form-control" type="hidden" name="date" value="<?= date('Y-m-d') ?>">

						<?php
										// echo $v_absensi[$a] . ' / ' . $v_pengetahuan[$b] . ' / ' . $v_kedisiplinan[$c];

									}
								}
							}
						}

						?>
						<input type="hidden" name="absensi" value="<?= $absensi ?>">
						<input type="hidden" name="pengetahuan" value="<?= $pengetahuan ?>">
						<input type="hidden" name="kedisiplinan" value="<?= $kedisiplinan ?>">
						<input type="hidden" name="keahlian" value="<?= $keahlian ?>">
						<input type="hidden" name="karyawan" value="<?= $karyawan ?>">
						<button type="submit" class="btn btn-success">Proses Hasil Defuzifikasi</button>
					</form>
				</div>
				<!-- editor -->

				<!-- ============================================================== -->
				<!-- End PAge Content -->
				<!-- ============================================================== -->
				<!-- ============================================================== -->
				<!-- Right sidebar -->
				<!-- ============================================================== -->
				<!-- .right-sidebar -->
				<!-- ============================================================== -->
				<!-- End Right sidebar -->
				<!-- ============================================================== -->
			</div>
		</div>
	</div>