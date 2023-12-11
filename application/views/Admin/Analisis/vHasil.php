<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title">Hasil Nilai Karyawan</h4>
				<div class="ml-auto text-right">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Nilai</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-body printableArea">
					<h3>Laporan</h3>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="pull-left">
								<address>
									<p class="text-muted m-l-5">Pada hasil perhitungan sebelumnya dengan menggunakan
										<br /> kriteria dari absensi, pengetahuan, kedisiplinan dan keahlian didapatkan

									</p>
									<h3> &nbsp;<b class="text-danger">Penilaian Karyawan: <?= $hasil_status ?> <small>menjadi kandidat karyawan terbaik</small></b> </h3>
								</address>
							</div>
						</div>
						<div class="col-md-12">
							<div class="table-responsive m-t-40" style="clear: both;">
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th>Absensi</th>
											<th class="text-right">Pengetahuan</th>
											<th class="text-right">Kedisiplinan</th>
											<th class="text-right">Keahlian</th>
											<th class="text-right">Hasil</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">Nilai</td>
											<td><?= $absensi ?></td>
											<td class="text-right"><?= $pengetahuan ?></td>
											<td class="text-right"><?= $kedisiplinan ?></td>
											<td class="text-right"><?= $keahlian ?></td>
											<td class="text-right"><?= $defuzifikasi ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-12">
							<div class="clearfix"></div>
							<hr>
							<div class="text-right">

								<form action="<?= base_url('Admin/cAnalisis/insert/' . $karyawan) ?>" method="POST">
									<input type="hidden" name="absensi" value="<?= $absensi ?>">
									<input type="hidden" name="pengetahuan" value="<?= $pengetahuan ?>">
									<input type="hidden" name="kedisiplinan" value="<?= $kedisiplinan ?>">
									<input type="hidden" name="keahlian" value="<?= $keahlian ?>">
									<input type="hidden" name="defuzifikasi" value="<?= $defuzifikasi ?>">
									<input type="hidden" name="hasil" value="<?= $hasil_status ?>">
									<input type="hidden" name="date" value="<?= $periode ?>">
									<button class="btn btn-warning" onclick="window.print()" type="submit"><i class="fa fa-print"></i> Print </button>
									<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>