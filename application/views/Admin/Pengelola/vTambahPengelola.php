<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-account-circle font-24"></i> Pengelola</h4>
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
					<form action="<?= base_url('Admin/cPengelola/create') ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Tambah Data Pengelola</h4>
							<div class="form-group row">
								<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Pengelola</label>
								<div class="col-sm-9">
									<input type="text" name="nama" class="form-control" id="fname" placeholder="Masukkan Nama Pengelola">
									<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Alamat Pengelola</label>
								<div class="col-sm-9">
									<input type="text" name="alamat" class="form-control" id="lname" placeholder="Masukkan Alamat Pengelola">
									<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">No Telepon</label>
								<div class="col-sm-9">
									<input type="text" name="no_hp" class="form-control" id="lname" placeholder="Masukkan No Telepon">
									<?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
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