<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>:. <?php echo $judul; ?> .:</title>

		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico') ?>"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin_page.css') ?>">
	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar Holder -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3>Seleksi Karyawan</h3>
					<strong>SK</strong>
				</div>

				<ul class="list-unstyled components">
					<!-- <li class="active">
						<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
							<i class="glyphicon glyphicon-home"></i>
							Home
						</a>

						<ul class="collapse list-unstyled" id="homeSubmenu">
							<li><a href="#">Home 1</a></li>
							<li><a href="#">Home 2</a></li>
							<li><a href="#">Home 3</a></li>
						</ul>
					</li> -->

					<li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Open Session</a></li>
					<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Tambah Admin</a></li>
					<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile User</a></li>
					<li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Input Kualifikasi</a></li>
					<li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Input Ujian</a></li>
					<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Input Nilai Interview</a></li>
					<li><a href="#"><i class="fa fa-clipboard" aria-hidden="true"></i> Soal Ujian</a></li>
					<li><a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Kualifikasi</a></li>
					<li><a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> Laporan Session</a></li>
				</ul>

				<ul class="list-unstyled components">
					<li><a class="nav-link" href="<?php echo site_url('login/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
				</ul>
			</nav>

			<!-- Page Content Holder -->
			<div id="content">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="nav navbar-nav">
						<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</button>
					</div>

					<div class="nav navbar-nav ml-auto">
						<!-- <a class="navbar-brand" href="#"> Navbar</a> -->
						<span>00/00/0000 | 00:00:00</span>
					</div>
				</nav>

				<h2>Collapsible Sidebar Using Bootstrap</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<div class="line"></div>

				<h2>Lorem Ipsum Dolor</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});
		</script>
	</body>
</html>