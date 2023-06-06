<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-areaspline"></i> Penghasilan Per Panen</h4>

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
						<h5 class="card-title">Informasi Panen</h5>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<a href="<?= base_url('Admin/cPenghasilan/create') ?>" class="btn btn-success mb-3"><i class="mdi mdi-archive font-24"></i> Tambah Data Panen</a>
						<div class="table-responsive">
							<table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No.</th>
										<th>Pengelola</th>
										<th>Tanggal Panen</th>
										<th>Jumlah Panen</th>
										<th>Jumlah Bebek</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($penghasilan as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_pengelola ?></td>
											<td><?= $value->tgl_panen ?></td>
											<td><?= $value->jml_panen ?></td>
											<td><?= $value->jml_bbk ?></td>
											<td> <a href="<?= base_url('Admin/cPenghasilan/update/' . $value->id_pendapatan) ?>" class="btn btn-outline-warning">Edit</a>
												<a href="<?= base_url('Admin/cPenghasilan/delete/' . $value->id_pendapatan) ?>" type="button" class="btn btn-outline-danger">Hapus</a>
											</td>
										</tr>
									<?php
									}
									?>


								</tbody>
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Pengelola</th>
										<th>Tanggal Panen</th>
										<th>Jumlah Panen</th>
										<th>Jumlah Bebek</th>
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