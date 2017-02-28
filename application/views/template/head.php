<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Kantor Pelayanan Terpadu</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url('template/img/favicon.ico')?>" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url('template/img/apple-touch-icon.png')?>" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url('template/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css" />
		<link rel="stylesheet" href="<?= base_url('template/vendor/font-awesome/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/simple-line-icons/css/simple-line-icons.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/owl.carousel/assets/owl.carousel.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/owl.carousel/assets/owl.theme.default.min.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/magnific-popup/magnific-popup.min.css') ?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url('template/css/theme.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/css/theme-elements.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/css/theme-blog.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/css/theme-shop.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/css/theme-animate.css')?>">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?= base_url('template/vendor/rs-plugin/css/settings.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/rs-plugin/css/layers.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/rs-plugin/css/navigation.css')?>">
		<link rel="stylesheet" href="<?= base_url('template/vendor/circle-flip-slideshow/css/component.css')?>">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url('template/css/skins/default.css')?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url('template/css/custom.css')?>">

		<!-- Head Libs -->
		<script src="<?= base_url('template/vendor/modernizr/modernizr.min.js')?>"></script>
	<?php if($this->session->userdata('logged_in')=="78jhk39"){?>
		<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 148, "stickySetTop": "-130px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<img alt="Porto" width="100" height="80" data-sticky-width="70" data-sticky-height="60" data-sticky-top="35" src="<?= base_url('template/img/ipr/logo_gowa.jpg')?>">
								</div>
							</div>
							<div class="header-column">
								<div class="header hidden-xs">
								<h2 class="col-md-12 col-sm-12 col-xs-6"><strong>KANTOR PELAYANAN TERPADU</strong></h2>
									
								</div>
							</div>
							<div class="header-column">
								<ul class="header-extra-info hidden-xs">
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">0411-887188 </h4>
												<p><small>Get in touch with us</small></p>
											</div>
										</div>
									</li>
									<li>
										<div class="feature-box feature-box-style-3">
											<div class="feature-box-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none">kpt.gowa@gmail.com</h4>
												<p><small>Send us an e-mail</small></p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container">

							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active">
											<a  href="<?= base_url('user/beranda')?>">Beranda</a>
										</li>
										
										<li class="">
											<a  href="<?= base_url('user/beranda/daftar-pengajuan')?>">Tabel Pengajuan</a>
										</li>
										<li class="">
											<a href="<?= base_url('user/beranda/pengajuan')?>">Pengajuan</a>
										</li>
										<li class="">
											<a href="<?= base_url('user/beranda/profil')?>">Profil</a>
										</li>

										<li class="">
											<a href="<?= base_url('user/beranda/keluar')?>">Log Out</a>
										</li>
										
									</ul>
								</nav>

							</div>
						</div>
					</div>


				</div>
			</header>
			<?php } ?>

				