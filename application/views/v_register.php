<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>:. Register .:</title>

		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico') ?>"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap-select-1.13.1/css/bootstrap-select.min.css'); ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	</head>
	<body>
		<header style="margin-bottom: 82px;">
			<!-- Navigation -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
				<div class="container">
					<a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('login') ?>">Seleksi Karyawan</a>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="<?php echo site_url('login') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<section>
			<div class="container">
				<h1 class="text-center">Register</h1><br>

				<?php echo form_open('register/register_act'); ?>
					<div class="form-group">
						
						<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nama_lengkap">Nama Lengkap<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
						</div>

						<div class="form-group col-md-6">
							<label for="no_ktp">No. KTP<span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="No. KTP">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email<span class="text-danger">*</span></label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						</div>

						<div class="form-group col-md-6">
							<label for="password">Password<span class="text-danger">*</span></label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="1234 Main St">
						</div>

						<div class="form-group col-md-3">
							<label for="tgl_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
							<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
						</div>

						<div class="form-group col-md-3">
							<label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option selected>Choose...</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>

						<div class="form-group col-md-3">
							<label for="agama">Agama<span class="text-danger">*</span></label>
							<select name="agama" id="agama" class="form-control">
								<option selected>Choose...</option>
								<option value="Buddha">Buddha</option>
								<option value="Hindu">Hindu</option>
								<option value="Islam">Islam</option>
								<option value="Konghucu">Konghucu</option>
								<option value="Kristen">Kristen</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-5">
							<label for="address">Alamat Domisili<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
						</div>

						<div class="form-group col-md-4">
							<label for="kota">Kota<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
						</div>

						<div class="form-group col-md-3">
							<label for="pos">Kode Pos<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="pos" id="pos" placeholder="Kode Pos">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="no_hp">Nomor Handphone<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone">
						</div>

						<div class="form-group col-md-6">
							<label for="no_telp">Nomor Telepon</label>
							<input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telepon">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nama_kerabat">Nama Kerabat</label>
							<input type="text" class="form-control" name="nama_kerabat" id="nama_kerabat" placeholder="Nama Kerabat">
							<small id="emailHelp" class="form-text text-muted">Kerabat yang dapat dihubungi.</small>
						</div>

						<div class="form-group col-md-3">
							<label for="no_kerabat">Nomor Hp / Telp</label>
							<input type="text" class="form-control" name="no_kerabat" id="no_kerabat" placeholder="Nomor Hp / Telp">
						</div>

						<div class="form-group col-md-3">
							<label for="hubungan_kerabat">Hubungan</label>
							<select name="hubungan_kerabat" id="hubungan_kerabat" class="form-control">
								<option selected>Choose...</option>
								<option value="Saudara">Saudara</option>
								<option value="Sepupu">Sepupu</option>
								<option value="Teman">Teman</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-5">
							<label for="status">Status</label>
							<select name="status" id="status" class="form-control">
								<option selected>Choose...</option>
								<option value="Saudara">Lajang</option>
								<option value="Sepupu">Menikah</option>
							</select>
						</div>

						<div class="form-group col-md-5">
							<label for="pendidikan">Pendidikan Terakhir</label>
							<select name="pendidikan" id="pendidikan" class="form-control">
								<option selected>Choose...</option>
								<option value="Saudara">SMA</option>
								<option value="Sepupu">S1</option>
								<option value="Teman">S2</option>
								<option value="Teman">S3</option>
							</select>
						</div>

						<div class="form-group col-md-2">
							<label for="pengalaman">Pengalaman<span class="text-danger">*</span></label>
							<input type="number" class="form-control" name="pengalaman" id="pengalaman" placeholder="Pengalaman">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="job_required">Dibutuhkan</label>
							<select name="job_required" id="job_required" class="form-control">
								<option selected>Choose...</option>
								<option value="1">IT</option>
								<option value="2">ADMIN</option>
								<option value="3">LOGISTIK</option>
								<option value="4">ADM PIUTANG</option>
							</select>
						</div>

						<div class="form-group col-md-6">
							<label for="kemampuan">Kemampuan</label>
						<select name="kemampuan[]" id="kemampuan" class="selectpicker form-control" multiple data-max-options="2">
							<option value="Koding">Koding</option>
							<option value="B Inggris">B Inggris</option>
							<option value="B Indonesia">B Indonesia</option>
							<option value="B Jepang">B Jepang</option>
						</select>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
							Saya menyetujui <a href="#">syarat dan ketentuan</a> yang berlaku
							</label>
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-success">Register</button>
				<?php echo form_close(); ?>
			</div>
		</section>

		<footer class="py-5 bg-dark" style="margin-top: 2%;">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Seleksi Karyawan 2018</p>
			</div>
		</footer>

		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select-1.13.1/js/bootstrap-select.min.js"></script>
	</body>
</html>