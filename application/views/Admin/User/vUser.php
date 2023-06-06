<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-account-circle font-24"></i> User</h4>

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
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi User</h5>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>

						<a href="<?= base_url('Admin/cUser/create') ?>" class="btn btn-success mb-3"><i class="mdi mdi-archive font-24"></i> Tambah Data User</a>
						<div class="table-responsive">
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama User</th>
										<th>Alamat</th>
										<th>No Telepon</th>
										<th>Akun</th>
										<th>Level User</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $key => $value) {
									?>
										<tr>
											<th><?= $no++ ?></th>
											<th><?= $value->nama_user ?></th>
											<th><?= $value->alamat ?></th>
											<th><?= $value->no_hp ?></th>
											<th><?= $value->username ?> <?= $value->password ?></th>
											<th><?php if ($value->level_user == '1') {
												?>
													<span class="badge badge-primary">Admin</span>
												<?php
												} else {
												?>
													<span class="badge badge-warning">Kepala UPT</span>
												<?php
												}  ?>
											</th>
											<th> <a href="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" class="btn btn-outline-warning">Edit</a>
												<a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" type="button" class="btn btn-outline-danger">Hapus</a>
											</th>
										</tr>
									<?php
									}
									?>

								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama User</th>
										<th>Alamat</th>
										<th>No Telepon</th>
										<th>Akun</th>
										<th>Level User</th>
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