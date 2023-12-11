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
							<li class="breadcrumb-item active" aria-current="page">Analisis</li>
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
			<div class="col-md-6">
				<div class="card">
					<form action="<?= base_url('Admin/cAnalisis/create') ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Tambah Data Analisis</h4>
							<div class="form-group row">
								<label for="fname" class="col-sm-3 text-right control-label col-form-label">Karyawan</label>
								<div class="col-sm-9">
									<select class="form-control" name="karyawan">
										<option value="">---Pilih Karyawan---</option>
										<?php
										foreach ($karyawan as $key => $value) {
											if ($value->hasil == NULL) {
										?>
												<option value="<?= $value->id_karyawan ?>"><?= $value->nama_karyawan ?></option>
										<?php
											}
										}
										?>
									</select>
									<?= form_error('karyawan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Absensi</label>
								<div class="col-sm-9">
									<input type="number" name="absensi" max="80" class="form-control">
									<?= form_error('absensi', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Pengetahuan</label>
								<div class="col-sm-9">
									<input type="number" name="pengetahuan" max="80" class="form-control">
									<?= form_error('pengetahuan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Kedisiplinan</label>
								<div class="col-sm-9">
									<input type="number" name="kedisiplinan" max="80" class="form-control">
									<?= form_error('kedisiplinan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Keahlian</label>
								<div class="col-sm-9">
									<input type="number" name="keahlian" max="80" class="form-control">
									<?= form_error('keahlian', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="border-top">
							<div class="card-body">
								<button type="submit" class="btn btn-success"><i class="mdi mdi-bookmark-check"></i> Analisis</button>

							</div>
						</div>
					</form>
				</div>


			</div>

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