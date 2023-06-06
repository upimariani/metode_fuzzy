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
			<div class="col-md-6">
				<div class="card">
					<form action="<?= base_url('Admin/cAnalisis/create') ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Tambah Data Analisis</h4>
							<div class="form-group row">
								<label for="fname" class="col-sm-3 text-right control-label col-form-label">Tanggal Panen</label>
								<div class="col-sm-9">
									<input type="date" name="date" class="form-control" id="fname" placeholder="Masukkan Nama Pengelola">
									<?= form_error('date', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Pakan Bebek</label>
								<div class="col-sm-9">
									<input type="text" name="pakan" class="form-control" id="lname" placeholder="Masukkan Nilai Pakan Bebek">
									<?= form_error('pakan', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Umur Bebek</label>
								<div class="col-sm-9">
									<input type="text" name="umur" class="form-control" id="lname" placeholder="Masukkan Umur Bebek">
									<?= form_error('umur', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Jenis Bebek</label>
								<div class="col-sm-9">
									<input type="text" name="jenis" class="form-control" id="lname" placeholder="Masukkan Nilai Jenis Indukan">
									<?= form_error('jenis', '<small class="text-danger">', '</small>'); ?>
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