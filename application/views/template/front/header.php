<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?= base_url('assets/front/img/ball.png') ?>" type="image/png">
	<title>Reservasi Futsal</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/vendors/linericon/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/vendors/owl-carousel/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/vendors/nice-select/css/nice-select.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/vendors/animate-css/animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/front/vendors/flaticon/flaticon.css') ?>">
	<!-- main css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/css/style.css') ?>">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li  class="nav-item"><a style="font-size:24px" class="nav-link" href="<?= base_url('front/index') ?>">RESERVASI FUTSAL</a></li>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item"><a style="font-size:16px" class="nav-link" href="<?= base_url('front/index') ?>">HOME</a></li>
							<li class="nav-item"><a style="font-size:16px" class="nav-link" href="<?= base_url('front/list_lapangan') ?>">JADWAL LAPANGAN</a></li>
							<li class="nav-item"><a style="font-size:16px"class="nav-link" href="<?= base_url('front/booking') ?>">BOOKING</a></li>
							<li class="nav-item"><a style="font-size:16px" class="nav-link" href="<?= base_url('front/about') ?>">ABOUT</a></li>
							<li class="nav-item"><a style="font-size:16px" class="nav-link" href="<?= base_url('front/profile') ?>">PROFILE</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php if(!$this->session->userdata('idusr')){ ?>
							<li class="nav-item"><a href="<?=base_url('authfront') ?>" class="primary_btn">LOGIN</a></li>
						<?php }else{ ?>
							<li class="nav-item"><a href="<?=base_url('authfront/logout') ?>" class="primary_btn">LOGOUT</a></li>
						<?php }?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->