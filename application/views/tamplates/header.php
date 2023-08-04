<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?= $title; ?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/logo.png">
	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" type="text/css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/line-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	<style>
		@font-face {
			font-family: 'Material Icons';
			font-style: normal;
			font-weight: 400;
			src: url(<?= base_url('assets/'); ?>fonts/MaterialIcons-Regular.eot);
			/* For IE6-8 */
			src: local('Material Icons'),
				local('MaterialIcons-Regular'),
				url(<?= base_url('assets/'); ?>fonts/MaterialIcons-Regular.woff2) format('woff2'),
				url(<?= base_url('assets/'); ?>fonts/MaterialIcons-Regular.woff) format('woff'),
				url(<?= base_url('assets/'); ?>fonts/MaterialIcons-Regular.ttf) format('truetype');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: normal;
			font-weight: 400;
			src: local('Circular Std Book'), url('<?= base_url('assets/'); ?>fonts/CircularStd-Book.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: italic;
			font-weight: 400;
			src: local('Circular Std Book Italic'), url('<?= base_url('assets/'); ?>fonts/CircularStd-BookItalic.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: normal;
			font-weight: 500;
			src: local('Circular Std Medium'), url('<?= base_url('assets/'); ?>fonts/CircularStd-Medium.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: italic;
			font-weight: 500;
			src: local('Circular Std Medium Italic'), url('<?= base_url('assets/'); ?>fonts/CircularStd-MediumItalic.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: normal;
			font-weight: 600;
			src: local('Circular Std Bold'), url('<?= base_url('assets/'); ?>fonts/CircularStd-Bold.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: italic;
			font-weight: 600;
			src: local('Circular Std Bold Italic'), url('<?= base_url('assets/'); ?>fonts/CircularStd-BoldItalic.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: normal;
			font-weight: 800;
			src: local('Circular Std Black'), url('<?= base_url('assets/'); ?>fonts/CircularStd-Black.woff') format('woff');
		}

		@font-face {
			font-family: 'CircularStd';
			font-style: italic;
			font-weight: 800;
			src: local('Circular Std Black Italic'), url('<?= base_url('assets/'); ?>fonts/CircularStd-BlackItalic.woff') format('woff');
		}

		@font-face {
			font-family: "Line Awesome Brands";
			font-style: normal;
			font-weight: 400;
			font-display: auto;
			src: url(<?= base_url('assets/'); ?>fonts/la-brands-400.eot);
			src: url(<?= base_url('assets/'); ?>fonts/la-brands-400.eot?#iefix) format("embedded-opentype"),
				url(<?= base_url('assets/'); ?>fonts/la-brands-400.woff2) format("woff2"),
				url(<?= base_url('assets/'); ?>fonts/la-brands-400.woff) format("woff"),
				url(<?= base_url('assets/'); ?>fonts/la-brands-400.ttf) format("truetype"),
				url(<?= base_url('assets/'); ?>fonts/la-brands-400.svg#lineawesome) format("svg");
		}

		@font-face {
			font-family: "Line Awesome Free";
			font-style: normal;
			font-weight: 400;
			font-display: auto;
			src: url(<?= base_url('assets/'); ?>fonts/la-regular-400.eot);
			src: url(<?= base_url('assets/'); ?>fonts/la-regular-400.eot?#iefix) format("embedded-opentype"),
				url(<?= base_url('assets/'); ?>fonts/la-regular-400.woff2) format("woff2"),
				url(<?= base_url('assets/'); ?>fonts/la-regular-400.woff) format("woff"),
				url(<?= base_url('assets/'); ?>fonts/la-regular-400.ttf) format("truetype"),
				url(<?= base_url('assets/'); ?>fonts/la-regular-400.svg#lineawesome) format("svg");
		}

		@font-face {
			font-family: "Line Awesome Free";
			font-style: normal;
			font-weight: 900;
			font-display: auto;
			src: url(<?= base_url('assets/'); ?>fonts/la-solid-900.eot);
			src: url(<?= base_url('assets/'); ?>fonts/la-solid-900.eot?#iefix) format("embedded-opentype"),
				url(<?= base_url('assets/'); ?>fonts/la-solid-900.woff2) format("woff2"),
				url(<?= base_url('assets/'); ?>fonts/la-solid-900.woff) format("woff"),
				url(<?= base_url('assets/'); ?>fonts/la-solid-900.ttf) format("truetype"),
				url(<?= base_url('assets/'); ?>fonts/la-solid-900.svg#lineawesome) format("svg");
		}

		@font-face {
			font-family: "FontAwesome";
			src: url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.eot?v=4.7.0");
			src: url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"),
				url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"),
				url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"),
				url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"),
				url("<?= base_url('assets/'); ?>fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg");
			font-weight: normal;
			font-style: normal;
		}
	</style>




</head>


</ul>

</div>
</aside>
</div> -->

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Loader -->
		<!-- <div id="loader-wrapper">
			<div id="loader">
				<div class="loader-ellips">
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
					<span class="loader-ellips__dot"></span>
				</div>
			</div>
		</div> -->
		<!-- /Loader -->

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="admin-dashboard.html" class="logo">
					<img src="<?= base_url('assets/'); ?>img/logo.png" width="40" height="40" alt="">
				</a>
			</div>
			<!-- /Logo -->

			<a id="toggle_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<!-- Header Title -->
			<div class="page-title-box">
				<h3>Test</h3>
			</div>
			<!-- /Header Title -->

			<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

			<!-- Header Menu -->
			<ul class="nav user-menu">
				<!-- Notifications -->
				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="fa fa-bell-o"></i> <span class="badge rounded-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-17.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media d-flex">
											<span class="avatar flex-shrink-0">
												<img alt="" src="assets/img/profiles/avatar-13.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="activities.html">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<span class="user-img"><img src="<?= base_url('assets/'); ?>img/default.png" alt="">
							<span class="status online"></span></span>
						<span><?= $this->session->userdata('username') ?></span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
					</div>
				</li>
			</ul>
			<!-- /Header Menu -->

			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
				</div>
			</div>
			<!-- /Mobile Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<span>Menu</span>
						</li>
						<li class="<?= isset($dashboard_active) ? $dashboard_active : ''; ?>">
							<a  href="<?= base_url('auth/dashboard') ?>"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
							<a  href="<?= base_url('deposits') ?>"><i class="la la-bomb"></i> <span> Deposit</span></a>
							<a  href="<?= base_url('withdraw') ?>"><i class="la la-money"></i> <span> Withdraw</span></a>
							<a  href="<?= base_url('transfer') ?>"><i class="la la-money"></i> <span> Transfer</span></a>
							<a  href="<?= base_url('summary') ?>"><i class="la la-money"></i> <span> Ringkasan Saldo</span></a>
							<a  href="<?= base_url('graph') ?>"><i class="la la-money"></i> <span> Grafik dan Grafis</span></a>
							<a  href="<?= base_url('history') ?>"><i class="la la-money"></i> <span> History Transaksi</span></a>
							<a  href="<?= base_url('expense') ?>"><i class="la la-money"></i> <span> Rekapitulasi pengeluaran</span></a>
							<a  href="<?= base_url('savings') ?>"><i class="la la-money"></i> <span> Proyeksi</span></a>
							<a  href="<?= base_url('savings/show_savings_page') ?>"><i class="la la-money"></i> <span> Peringatan Batas Saldo Minimum</span></a>
							<a  href="<?= base_url('expense/manage_categories') ?>"><i class="la la-money"></i> <span> Kategory</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">