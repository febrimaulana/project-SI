<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="all,follow">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="<?= base_url('asset') ?>/vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="<?= base_url('asset') ?>/vendor/font-awesome/css/font-awesome.min.css">
	<!-- Fontastic Custom icon font-->
	<link rel="stylesheet" href="<?= base_url('asset') ?>/css/fontastic.css">
	<!-- Google fonts - Poppins -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="<?= base_url('asset') ?>/css/style.default.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="<?= base_url('asset') ?>/css/custom.css">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url('asset') ?>/img/favicon.ico">
	<!-- datatable -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('asset') ?>/vendor/datatable/datatables.min.css" />
	<!-- jquery -->
	<script src="<?= base_url('asset') ?>/vendor/jquery/jquery.min.js"></script>

</head>

<body>
	<div class="flash-berhasil" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
	<div class="flash-gagal" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>
	<div class="page">
		<!-- Main Navbar-->
		<header class="header">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<!-- Navbar Header-->
						<div class="navbar-header">
							<!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
								<div class="brand-text d-none d-lg-inline-block"><span>E-Report</span><strong> TA/KP</strong></div>
								<div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
							</a>
							<!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
						</div>
						<!-- Navbar Menu -->
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<!-- Notifications-->
							<li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
								<ul aria-labelledby="notifications" class="dropdown-menu">
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification">
												<div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification">
												<div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification">
												<div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
												<div class="notification-time"><small>4 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item">
											<div class="notification">
												<div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
												<div class="notification-time"><small>10 minutes ago</small></div>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications </strong></a></li>
								</ul>
							</li>
							<!-- Messages                        -->
							<li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
								<ul aria-labelledby="notifications" class="dropdown-menu">
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="<?= base_url('asset') ?>/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="<?= base_url('asset') ?>/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item d-flex">
											<div class="msg-profile"> <img src="<?= base_url('asset') ?>/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
											<div class="msg-body">
												<h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
											</div>
										</a></li>
									<li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages </strong></a></li>
								</ul>
							</li>
							<!-- Logout    -->
							<li class="nav-item"><a href="<?= base_url('auth/logout') ?>" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
