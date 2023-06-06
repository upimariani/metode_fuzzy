<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title">Hasil Status Kelayakan Telur Bebek</h4>
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
			<div class="col-md-12">
				<div class="card card-body printableArea">
					<h3>Laporan</h3>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="pull-left">
								<address>
									<p class="text-muted m-l-5">Pada hasil perhitungan sebelumnya dengan menggunakan
										<br /> kriteria dari pakan bebek, umur bebek dan jenis indukan didapatkan

									</p>
									<h3> &nbsp;<b class="text-danger">Status Telur: <?= $hasil_status ?></b></h3>
								</address>
							</div>
						</div>
						<div class="col-md-12">
							<div class="table-responsive m-t-40" style="clear: both;">
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th>Pakan Bebek</th>
											<th class="text-right">Umur Bebek</th>
											<th class="text-right">Jenis Indukan</th>
											<th class="text-right">Hasil</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">Nilai</td>
											<td><?= $pakan ?></td>
											<td class="text-right"><?= $umur ?></td>
											<td class="text-right"><?= $jenis ?></td>
											<td class="text-right"><?= $defuzifikasi ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-12">
							<div class="clearfix"></div>
							<hr>
							<div class="text-right">

								<form action="<?= base_url('Admin/cAnalisis/insert') ?>" method="POST">
									<input type="hidden" name="pakan" value="<?= $pakan ?>">
									<input type="hidden" name="umur" value="<?= $umur ?>">
									<input type="hidden" name="jenis" value="<?= $jenis ?>">
									<input type="hidden" name="defuzifikasi" value="<?= $defuzifikasi ?>">
									<input type="hidden" name="hasil" value="<?= $hasil_status ?>">
									<button class="btn btn-warning" onclick="window.print()" type="submit"><i class="fa fa-print"></i> Print </button>
									<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save </button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>