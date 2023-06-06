<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-bar"></i> Analisis Kelayakan Telur Bebek</h4>
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
						$pakan = $pakan;
						$umur = $umur;
						$jenis = $jenis;

						// echo '<br>' . $pakan;
						// echo '<br>' . $umur;
						// echo '<br>' . $jenis;
						$a_pakan = array();
						$a_umur = array();
						$a_jenis = array();

						$v_pakan = array();
						$v_umur = array();
						$v_jenis = array();

						if ($pakan >= '0' && $pakan <= '10') {
							$v_pakan[] = 'Bekatul';
							if ($pakan <= 5) {
								$a_pakan[] = 1;
							} else if ($pakan > 5 && $pakan <= 10) {
								$a_pakan[] = (10 - $pakan) / 5;
							} else if ($pakan > 10) {
								$a_pakan[] = 0;
							}
						}
						if ($pakan > '5' && $pakan <= '20') {
							$v_pakan[] = 'Jagung';
							if ($pakan <= 5 || $pakan >= 20) {
								$a_pakan[] = 0;
							} else if ($pakan > 5 && $pakan <= 10) {
								$a_pakan[] = ($pakan - 5) / 5;
							} else if ($pakan > 10 && $pakan <= 20) {
								$a_pakan[] = (20 - $pakan) / 10;
							}
						}
						if ($pakan > '10' && $pakan <= '20') {
							$v_pakan[] = 'Kepala Giling';
							if ($pakan <= 10) {
								$a_pakan[] = 0;
							} else if ($pakan > 10 && $pakan <= 20) {
								$a_pakan[] = ($pakan - 10) / 10;
							} else if ($pakan > 20) {
								$a_pakan[] = 1;
							}
						}

						// echo '<br>';

						if ($umur >= '0' && $umur <= '24') {
							$v_umur[] = 'Fase 1';
							if ($umur <= 7) {
								$a_umur[] = 1;
							} else if ($umur > 7 && $umur <= 24) {
								$a_umur[] = (24 - $umur) / 17;
							} else if ($umur > 24) {
								$a_umur[] = 0;
							}
						}
						if ($umur > '7' && $umur <= '96') {
							$v_umur[] = 'Fase 2';
							if ($umur <= 7 || $umur >= 96) {
								$a_umur[] = 0;
							} else if ($umur > 7 && $umur <= 24) {
								$a_umur[] = ($umur - 7) / 17;
							} else if ($umur > 24 && $umur < 96) {
								$a_umur[] = (96 - $umur) / 72;
							}
						}
						if ($umur > '24' && $umur <= '96') {
							$v_umur[] = 'Fase 3';
							if ($umur <= 24) {
								$a_umur[] = 0;
							} else if ($umur > 24 && $umur <= 96) {
								$a_umur[] = ($umur - 24) / 72;
							} else if ($umur > 96) {
								$a_umur[] = 1;
							}
						}

						// echo '<br>';
						if ($jenis >= '0' && $jenis <= '20') {
							$v_jenis[] = 'Tegal';
							if ($jenis <= 15) {
								$a_jenis[] = 1;
							} else if ($jenis > 15 && $jenis <= 20) {
								$a_jenis[] = (20 - $jenis) / 5;
							} else if ($jenis < 20) {
								$a_jenis[] = 0;
							}
						}
						if ($jenis > '15' && $jenis <= '30') {
							$v_jenis[] = 'Alabio';
							if ($jenis <= 15 || $jenis >= 30) {
								$a_jenis[] = 0;
							} else if ($jenis > 15 && $jenis <= 20) {
								$a_jenis[] = ($jenis - 15) / 5;
							} else if ($jenis > 20 && $jenis < 30) {
								$a_jenis[] = (30 - $jenis) / 10;
							}
						}
						if ($jenis > '20' && $jenis <= '30') {
							$v_jenis[] = 'Mojosari';
							if ($jenis <= 20) {
								$a_jenis[] = 0;
							} else if ($jenis >= 15 && $jenis < 20) {
								$a_jenis[] = ($jenis - 20) / 5;
							} else if ($jenis > 15 && $jenis < 30) {
								$a_jenis[] = (30 - $jenis) / 10;
							}
						}

						// echo 'Pakan Bebek <br>';
						// for ($i = 0; $i < sizeof($a_pakan); $i++) {
						// 	echo $a_pakan[$i];
						// 	echo $v_pakan[$i];
						// 	echo '<br>';
						// }
						// echo '<br>';
						// echo 'Umur Bebek <br>';
						// for ($j = 0; $j < sizeof($a_umur); $j++) {
						// 	echo $a_umur[$j];
						// 	echo $v_umur[$j];
						// 	echo '<br>';
						// }
						// echo '<br>';
						// echo 'Umur Bebek <br>';
						// for ($k = 0; $k < sizeof($a_jenis); $k++) {
						// 	echo $a_jenis[$k];
						// 	echo $v_jenis[$k];
						// 	echo '<br>';
						// }
						// echo '<br>';

						$min = array();

						$hasil = 1;
						$min = 1;
						for ($a = 0; $a < sizeof($a_pakan); $a++) {
							for ($b = 0; $b < sizeof($a_umur); $b++) {
								for ($c = 0; $c < sizeof($a_jenis); $c++) {
						?>
									<table class="table">
										<tr>
											<th><?= $a_pakan[$a] . ' / ' . $a_umur[$b] . ' / ' . $a_jenis[$c] ?></th>
											<td>Data min: <?= round(min($a_pakan[$a], $a_umur[$b], $a_jenis[$c]), 3) ?></td>
											<td><?= $v_pakan[$a] . ' / ' . $v_umur[$b] . ' / ' . $v_jenis[$c] ?></td>
										</tr>
									</table>
									<?php

									// echo $a_pakan[$a] . ' / ' . $a_umur[$b] . ' / ' . $a_jenis[$c] . '<br> Data min: ' . round(min($a_pakan[$a], $a_umur[$b], $a_jenis[$c]), 3);
									if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Alabio') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Alabio') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Alabio') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Bekatul' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Alabio') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Alabio') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Alabio') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Jagung' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Alabio') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 1' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Alabio') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 2' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Tegal') {
										$status = 'Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Alabio') {
										$status = 'Kurang Layak';
									} else if ($v_pakan[$a] == 'Kepala Giling' && $v_umur[$b] == 'Fase 3' && $v_jenis[$c] == 'Mojosari') {
										$status = 'Kurang Layak';
									}
									$data_min = min($a_pakan[$a], $a_umur[$b], $a_jenis[$c]);


									if ($status == 'Layak') {
										$h_rules = round(4 - ($data_min * 1), 3);
									} else if ($status == 'Tidak Layak') {
										$h_rules = round(5 - ($data_min * 1), 3);
									}

									?>
									<input class="form-control" name="d_hasil<?= $hasil++ ?>" type="hidden" value="<?= round($h_rules * $data_min, 3) ?>">
									<input class="form-control" type="hidden" name="min<?= $min++ ?>" value="<?= round($data_min, 3) ?>">

						<?php
									// echo $v_pakan[$a] . ' / ' . $v_umur[$b] . ' / ' . $v_jenis[$c];

								}
							}
						}

						?>
						<input type="hidden" name="pakan" value="<?= $pakan ?>">
						<input type="hidden" name="umur" value="<?= $umur ?>">
						<input type="hidden" name="jenis" value="<?= $jenis ?>">
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