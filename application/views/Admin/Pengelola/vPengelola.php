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
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Informasi Pengelola</h5>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<a href="<?= base_url('Admin/cPengelola/create') ?>" class="btn btn-success mb-3"><i class="mdi mdi-archive font-24"></i> Tambah Data Pengelola</a>
						<div class="table-responsive">
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Pengelola</th>
										<th>Alamat Pengelola</th>
										<th>No Telepon</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($pengelola as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?>.</td>
											<td><?= $value->nama_pengelola ?></td>
											<td><?= $value->alamat_pengelola ?></td>
											<td><?= $value->no_hp_pengelola ?></td>
											<td> <a href="<?= base_url('Admin/cPengelola/update/' . $value->id_pengelola) ?>" class="btn btn-outline-warning">Edit</a>
												<a href="<?= base_url('Admin/cPengelola/delete/' . $value->id_pengelola) ?>" type="button" class="btn btn-outline-danger">Hapus</a>
											</td>
										</tr>
									<?php
									}
									?>

								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama Pengelola</th>
										<th>Alamat Pengelola</th>
										<th>No Telepon</th>
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