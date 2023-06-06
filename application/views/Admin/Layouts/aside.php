<body>
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
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin5">
					<!-- This is for the sidebar toggle which is visible on mobile only -->
					<a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand" href="index.html">
						<!-- Logo icon -->
						<b class="logo-icon p-l-10">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="<?= base_url('asset/matrix-admin-master/') ?>assets/images/logo-icon.png" alt="homepage" class="light-logo" />

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							<img src="<?= base_url('asset/matrix-admin-master/') ?>assets/images/logo-text.png" alt="homepage" class="light-logo" />

						</span>
						<!-- Logo icon -->
						<!-- <b class="logo-icon"> -->
						<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
						<!-- Dark Logo icon -->
						<!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

						<!-- </b> -->
						<!--End Logo icon -->
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- Toggle which is visible on mobile only -->
					<!-- ============================================================== -->
					<a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-left mr-auto">
						<li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
						<!-- ============================================================== -->
						<!-- create new -->
						<!-- ============================================================== -->

						<!-- ============================================================== -->
						<!-- Search -->
						<!-- ============================================================== -->
						<li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
							<form class="app-search position-absolute">
								<input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
							</form>
						</li>
					</ul>
					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav float-right">
						<!-- ============================================================== -->
						<!-- Comment -->
						<!-- ============================================================== -->

						<!-- ============================================================== -->
						<!-- End Comment -->
						<!-- ============================================================== -->
						<!-- ============================================================== -->
						<!-- Messages -->
						<!-- ============================================================== -->

						<!-- ============================================================== -->
						<!-- End Messages -->
						<!-- ============================================================== -->

						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('asset/matrix-admin-master/') ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
							<div class="dropdown-menu dropdown-menu-right user-dd animated">

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('cLogin/logout') ?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin5">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav" class="p-t-30">
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Admin/cDashboardAdmin') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Admin/cUser') ?>" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">User</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Admin/cPengelola') ?>" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Pengelola</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Admin/cPenghasilan') ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Penghasilan Per Panen</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= base_url('Admin/cAnalisis') ?>" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Analisis Fuzzy Logic</span></a></li>

					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->