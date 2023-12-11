<!DOCTYPE html>
<html dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('asset/matrix-admin-master/') ?>assets/images/favicon.png">
	<title>Matrix Template - The Ultimate Multipurpose admin template</title>
	<!-- Custom CSS -->
	<link href="<?= base_url('asset/matrix-admin-master/') ?>dist/css/style.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="main-wrapper">
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="lds-pos"></div>
				<div class="lds-pos"></div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Preloader - style you can find in spinners.css -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
			<div class="auth-box bg-dark border-top border-secondary">
				<div id="loginform">
					<div class="text-center p-t-20 p-b-20">
						<span class="db"><img src="<?= base_url('asset/matrix-admin-master/') ?>assets/images/logo.png" alt="logo" /></span>
					</div>
					<?php
					if ($this->session->userdata('success')) {
					?>
						<div class="alert alert-success" role="alert">
							<?= $this->session->userdata('success') ?>
						</div>
					<?php
					}
					?>

					<?php
					if ($this->session->userdata('error')) {
					?>
						<div class="alert alert-danger" role="alert">
							<?= $this->session->userdata('error') ?>
						</div>
					<?php
					}
					?>
					<!-- Form -->
					<form class="form-horizontal m-t-20" id="loginform" action="<?= base_url('cLogin') ?>" method="POST">
						<div class="row p-b-30">
							<div class="col-12">
								<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
									</div>
									<input type="text" class="form-control form-control-lg" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">

								</div>
								<?= form_error('password', '<small class="text-danger">', '</small>') ?>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
									</div>
									<input type="password" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
						<div class="row border-top border-secondary">
							<div class="col-12">
								<div class="form-group">
									<div class="p-t-20">
										<button class="btn btn-success float-right" type="submit">Login</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
		<!-- ============================================================== -->
		<!-- Login box.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper scss in scafholding.scss -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right Sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- All Required js -->
	<!-- ============================================================== -->
	<script src="<?= base_url('asset/matrix-admin-master/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="<?= base_url('asset/matrix-admin-master/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
	<script src="<?= base_url('asset/matrix-admin-master/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugin js -->
	<!-- ============================================================== -->
	<script>
		$('[data-toggle="tooltip"]').tooltip();
		$(".preloader").fadeOut();
		// ============================================================== 
		// Login and Recover Password 
		// ============================================================== 
		$('#to-recover').on("click", function() {
			$("#loginform").slideUp();
			$("#recoverform").fadeIn();
		});
		$('#to-login').click(function() {

			$("#recoverform").hide();
			$("#loginform").fadeIn();
		});
	</script>

</body>

</html>
