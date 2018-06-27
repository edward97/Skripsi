<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>:. Login .:</title>
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico') ?>"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css') ?>">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css') ?>">
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css') ?>">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css') ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
		<!--===============================================================================================-->
	</head>
	<body style="background-color: #999999;">
		<div class="limiter">
			<div class="container-login100">
				<div class="login100-more" style="background-image: url('<?php echo base_url("assets/images/bg-01.jpg") ?>');"></div>

				<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
					<?php echo $this->session->flashdata('msg_register'); ?>

					<!-- <form class="login100-form validate-form"> -->
					<?php echo form_open('login/auth', 'class="login100-form validate-form"'); ?>
						<span class="login100-form-title p-b-59">
							Sign In
						</span>

						<?php echo $this->session->flashdata('msg_login'); ?>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<span class="label-input100">Email</span>
							<input class="input100" type="text" name="email" placeholder="Email addess...">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="pass" placeholder="*************">
							<span class="focus-input100"></span>
						</div>

						<div class="flex-m w-full p-b-33">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									<span class="txt1">
										I agree to the
										<a href="#" class="txt2 hov1">
											Terms of User
										</a>
									</span>
								</label>
							</div>

							
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit">
									Sign In
								</button>
							</div>

							<a href="<?php echo site_url('register') ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
								Sign up
								<i class="fa fa-long-arrow-right m-l-5"></i>
							</a>
						</div>
					<?php echo form_close(); ?>
					<!-- </form> -->
				</div>
			</div>
		</div>
		
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	</body>
</html>