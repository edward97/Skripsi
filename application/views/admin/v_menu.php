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
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style4.css') ?>">
		<!--===============================================================================================-->

		<script type="text/javascript">
			function confirmDialog() {
				return confirm('Are you sure want to delete this record?')
			}
		</script>
	</head>
	<body>
		<div class="wrapper">
			<!-- Sidebar Holder -->
			<nav id="sidebar">
				<div class="sidebar-header">
					<h3><a href="<?php echo site_url('/page'); ?>">Seleksi Karyawan</a></h3>
					<strong><a href="<?php echo site_url('/page'); ?>">SK</a></strong>
				</div>

				<ul class="list-unstyled components">
					<li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> Open Session</a></li>
					<li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-user-plus" aria-hidden="true"></i> Manage Admin</a></li>
					<li><a href="<?php echo site_url('user') ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile User</a></li>
					<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Input Nilai Interview</a></li>

					<li>
						<a href="#soalMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
							<i class="fa fa-clipboard" aria-hidden="true"></i> Soal Ujian
						</a>

						<ul class="collapse list-unstyled" id="soalMenu">
							<li><a href="<?php echo site_url('soal/input') ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Input Soal Ujian</a></li>
							<li><a href="<?php echo site_url('soal/list') ?>"><i class="fa fa-list" aria-hidden="true"></i> List Soal Ujian</a></li>
						</ul>
					</li>

					<li><a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Kualifikasi</a></li>
					<li><a href="<?php echo site_url('setting') ?>"><i class="fa fa-handshake-o" aria-hidden="true"></i> Abilites & Jobs</a></li>
					<li><a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> Laporan Session</a></li>
				</ul>

				<ul class="list-unstyled components">
					<li><a class="nav-link" href="<?php echo site_url('login/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
				</ul>
			</nav>

			<!-- Page Content Holder -->
			<div class="container-fluid" id="content">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="nav navbar-nav">
						<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
							<i class="fa fa-bars" aria-hidden="true"></i> <?php echo $judul ?>
						</button>
					</div>

					<div class="nav navbar-nav ml-auto">
						<!-- <a class="navbar-brand" href="#"> Navbar</a> -->
						<!-- <span id="hour"></span>&nbsp;<span id="min">&nbsp;</span>&nbsp;<span id="sec"></span> -->
						<span><small class="text-muted">Welcome! <?php echo $this->session->userdata('ses_nm')." | ".$format; ?></small></span>
					</div>
				</nav>
