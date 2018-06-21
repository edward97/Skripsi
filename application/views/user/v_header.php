<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
	<html>
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
	</head>
	<body>
		<header style="margin-bottom: 82px;">
			<!-- Navigation -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="#page-top">Seleksi Karyawan</a>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('page') ?>">Dashboard</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('#') ?>">Lorem</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('#') ?>">Lorem</a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('login/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
