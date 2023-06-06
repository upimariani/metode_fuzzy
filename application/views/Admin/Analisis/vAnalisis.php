<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><i class="mdi mdi-chart-bar"></i> Analisis Kelayakan Telur</h4>

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
						<h5 class="card-title">Informasi Analisis</h5>
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
										<th>Tanggal Panen</th>
										<th>Tanggal Analisis</th>
										<th>Pakan Bebek</th>
										<th>Umur Bebek</th>
										<th>Jenis Bebek</th>
										<th>Hasil</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>

								</tbody>
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Tanggal Panen</th>
										<th>Tanggal Analisis</th>
										<th>Pakan Bebek</th>
										<th>Umur Bebek</th>
										<th>Jenis Bebek</th>
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