<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title">Dashboard</h4>
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

		<div class="row">
			<div class="card-body border-top">
				<h5 class="card-title">Selamat Datang Pemilik</h5>
				<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Selamat!</h4>
					<?php
					$karyawan_terbaik = $this->db->query("SELECT * FROM `hasil_analisis` JOIN karyawan ON karyawan.id_karyawan=hasil_analisis.id_karyawan ORDER BY hasil DESC LIMIT 1")->row();
					?>
					<p>Kepada Karyawan atas nama, <strong><?= $karyawan_terbaik->nama_karyawan ?></strong> Divisi. <strong><?= $karyawan_terbaik->divisi ?></strong> dengan hasil analisis <strong><?= $karyawan_terbaik->hasil ?></strong></p>
					<hr>
					<p class="mb-0">Karyawan the best ever!</p>
				</div>

			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Recent comment and chats -->
		<!-- ============================================================== -->
	</div>