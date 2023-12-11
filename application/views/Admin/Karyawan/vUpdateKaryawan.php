<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-account-circle font-24"></i> Karyawan</h4>
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
					<form action="<?= base_url('Admin/ckaryawan/update/' . $karyawan->id_karyawan) ?>" method="POST" class="form-horizontal">
						<div class="card-body">
							<h4 class="card-title">Update Data Karyawan</h4>
							<div class="form-group row">
								<label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama karyawan</label>
								<div class="col-sm-9">
									<input type="text" value="<?= $karyawan->nama_karyawan ?>" name="nama" class="form-control" id="fname" placeholder="Masukkan Nama karyawan">
									<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Jenis Kelamin</label>
								<div class="col-sm-9">
									<select class="form-control" name="jk">
										<option value="">---Pilih Jenis Kelamin---</option>
										<option value="Perempuan" <?php if ($karyawan->jk == 'Perempuan') {
																		echo 'selected';
																	} ?>>Perempuan</option>
										<option value="Laki - Laki" <?php if ($karyawan->jk == 'Laki - Laki') {
																		echo 'selected';
																	} ?>>Laki - Laki</option>
									</select>
									<?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Alamat karyawan</label>
								<div class="col-sm-9">
									<input type="text" name="alamat" value="<?= $karyawan->alamat ?>" class="form-control" id="lname" placeholder="Masukkan Alamat karyawan">
									<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">No Telepon</label>
								<div class="col-sm-9">
									<input type="text" name="no_hp" value="<?= $karyawan->no_hp ?>" class="form-control" id="lname" placeholder="Masukkan No Telepon karyawan">
									<?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="lname" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
								<div class="col-sm-9">
									<input type="text" name="divisi" value="<?= $karyawan->divisi ?>" class="form-control" id="lname" placeholder="Masukkan Divisi">
									<?= form_error('divisi', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
						</div>
						<div class="border-top">
							<div class="card-body">
								<button type="submit" class="btn btn-success"><i class="mdi mdi-bookmark-check"></i> Perbaharui</button>

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