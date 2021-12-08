
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FTI - Travel Umroh dan Haji Plus</title>
	 <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FTI - Travel Umroh dan Haji Plus" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/listing/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/listing/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/listing/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/listing/css/superfish.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>template/listing/css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>template/listing/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?php echo base_url('Welcome'); ?>">FTI</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a  href="<?php echo base_url('Welcome'); ?>">Beranda</a>
								</li>
								<li class="active">
									<a  href="<?php echo base_url('Harga'); ?>">Paket</a>
								</li>
								<li>
									<a href="<?php echo base_url('Tentanguser'); ?>">Tentang Kami</a>
								</li>
								<li>
									<a href="<?php echo base_url('Galeri'); ?>" >Gallery</a>
								</li>
								<li><a  href="<?php echo base_url('Kontak'); ?>">Kontak</a></li>
								<li>
								    <a href="https://ujicobaandri.000webhostapp.com/">Karyawan</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		
		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(template/listing/images/2.jpg);">
				<div class="desc animate-box">
					<h2>Daftar Harga Paket</h2>
				</div>
			</div>

		</div>


		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<?php foreach ($katalog as $row) : ?>
					<div class="col-md-4 fh5co-item-wrap">
						<a href="<?php echo base_url().'Detail/lengkap/'.$row->idpaket; ?>"  class="fh5co-listing-item" >
							<img src="<?php echo base_url().'assets/upload/images/'.$row->image;?>" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2><?php echo $row->namapaket;?></h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>


		
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6  text-center" >
							<p style="color: #000000">Metode Pembayaran</p>
							<p class="fh5co-social-icons" style=" margin: 1px 1px 1px 1px">
								<a><img src="template/listing/images/bca.png" width="10%" ></a>
								<a><img src="template/listing/images/bri.png" width="20%" ></i></a>
								<a><img src="template/listing/images/bsi.png" width="20%" ></i></a>
								<a><img src="template/listing/images/mandiri.png" width="10%" ></i></a>
							</p>
						</div>
						<div class="col-md-6 text-center">
							<p class="fh5co-social-icons" >
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p style=" margin: 1px 1px 1px 1px; color: #000000">Copyright &copy; 2021</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo base_url(); ?>template/listing/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>template/listing/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>template/listing/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>template/listing/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url(); ?>template/listing/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url(); ?>template/listing/js/hoverIntent.js"></script>
	<script src="<?php echo base_url(); ?>template/listing/js/superfish.js"></script>

	<!-- Main JS -->
	<script src="<?php echo base_url(); ?>template/listing/js/main.js"></script>

	</body>
</html>

