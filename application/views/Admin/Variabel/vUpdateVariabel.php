<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-areaspline"></i> Variabel Perhitungan</h4>
				<div class="ml-auto text-right">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Variabel</li>
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
					<form action="<?= base_url('Admin/cVariabel/update/' . $variabel->id_variabel) ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Tambah Variabel Perhitungan</h4>

							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Nama Variabel</label>
								<div class="col-sm-9">
									<input type="text" name="nama" value="<?= $variabel->nama_variabel ?>" class="form-control" id="lname" placeholder="Masukkan Nama Variabel">
									<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="email1" class="col-sm-3 text-right control-label col-form-label">Sub Kriteria</label>
								<div class="col-sm-9">
									<input type="text" name="sub" value="<?= $variabel->sub_kriteria ?>" class="form-control" id="email1" placeholder="Masukkan Sub Kriteria">
									<?= form_error('sub', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="email1" class="col-sm-3 text-right control-label col-form-label">Bobot</label>
								<div class="col-sm-9">
									<input type="text" name="bobot" value="<?= $variabel->bobot ?>" class="form-control" id="email1" placeholder="Masukkan Bobot">
									<?= form_error('bobot', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="border-top">
							<div class="card-body">
								<button type="submit" class="btn btn-warning"><i class="mdi mdi-bookmark-check"></i> Perbaharui</button>

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