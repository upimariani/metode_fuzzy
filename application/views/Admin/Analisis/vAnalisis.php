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
							<li class="breadcrumb-item active" aria-current="page">Karyawan Terbaik</li>
						</ol>
					</nav>

				</div>

			</div>

		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Karyawan Terbaik</h5>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<a href="<?= base_url('Admin/cAnalisis/create') ?>" class="btn btn-success mb-3"><i class="mdi mdi-archive font-24"></i> Tambah Data Analisis</a>
						<div class="table-responsive">
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tanggal Analisis</th>
										<th>Nama Karyawan</th>
										<th>Absensi</th>
										<th>Pengetahuan</th>
										<th>Kedisiplinan</th>
										<th>Keahlian</th>
										<th>Hasil</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($hasil as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->tgl_analisis ?></td>
											<td><?= $value->nama_karyawan ?></td>
											<td><?= $value->absensi ?></td>
											<td><?= $value->pengetahuan ?></td>
											<td><?= $value->kedisiplinan ?></td>
											<td><?= $value->keahlian ?></td>
											<td><?= $value->hasil ?></td>
											<td> <a href="<?= base_url('Admin/cAnalisis/delete/' . $value->id_lap) ?>" type="button" class="btn btn-outline-danger">Hapus</a>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Tanggal Analisis</th>
										<th>Nama Karyawan</th>
										<th>Absensi</th>
										<th>Pengetahuan</th>
										<th>Kedisiplinan</th>
										<th>Keahlian</th>
										<th>Hasil</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>