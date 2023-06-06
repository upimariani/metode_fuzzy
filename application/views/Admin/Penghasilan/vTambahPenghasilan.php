<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-areaspline"></i> Pendapatan Per Panen</h4>
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
			<div class="col-md-6">
				<div class="card">
					<form action="<?= base_url('Admin/cPenghasilan/create') ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Tambah Pendapatan</h4>
							<div class="form-group row">
								<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Pengelola</label>
								<div class="col-sm-9">
									<select class="form-control" name="pengelola">
										<option value="">---Pilih Pengelola---</option>
										<?php
										foreach ($pengelola as $key => $value) {
										?>
											<option value="<?= $value->id_pengelola ?>"><?= $value->nama_pengelola ?></option>
										<?php
										}
										?>
									</select>
									<?= form_error('pengelola', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Tanggal Panen</label>
								<div class="col-sm-9">
									<input type="date" name="tgl" class="form-control" id="lname" placeholder="Last Name Here">
									<?= form_error('tgl', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Jumlah Telur</label>
								<div class="col-sm-9">
									<input type="text" name="jml_telur" class="form-control" id="lname" placeholder="Masukkan Jumlah Telur">
									<?= form_error('jml_telur', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="email1" class="col-sm-3 text-right control-label col-form-label">Jumlah Bebek</label>
								<div class="col-sm-9">
									<input type="text" name="jml_bebek" class="form-control" id="email1" placeholder="Masukkan Jumlah Bebek">
									<?= form_error('jml_bebek', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="border-top">
							<div class="card-body">
								<button type="submit" class="btn btn-success"><i class="mdi mdi-bookmark-check"></i> Save</button>

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