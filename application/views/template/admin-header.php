<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SepedaNesia</title>
	<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/linearicons.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/themify-icons.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nice-select.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nouislider.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ion.rangeSlider.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/ion.rangeSlider.skinFlat.css" />
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/main.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
		<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	</head>

	<body>

		<header class="header_area sticky-header">
			<div class="main_menu">
				
				<div class="top_menu row m0 main_box">
					<div class="container-fluid">
						<div class="float-left">
							<p><?=$user['nama']; ?></p>
						</div>
						<div class="float-right">
							<ul class="right_side">
								<li>
									<?php if($user['username']){ ?>
										<a href="<?= base_url('auth/logout'); ?>">
											Log Out
										</a>
									<?php } 
									else{?>
										<a href="<?= base_url('auth'); ?>">
											Login/Register
										</a>
									<?php } ?>
								</li>
								<li>
									<a href="contact.html">
										Contact Us
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?= base_url('admin'); ?>"><img src="<?= base_url('assets/img/bike/'); ?>bike.png" alt="" width="40px"><B>  SEPEDANESIA</B></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="<?= base_url('admin'); ?>">Beranda</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Toko</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/barang') ;?>">Produk</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/kategori') ;?>">Kategori</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"aria-expanded="false">Pesanan ( <?= $this->sepeda_models->countallpesanan(); ?> )</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/pesanan')?>">Pesanan Masuk ( <?= $this->sepeda_models->countpesanan(); ?> )</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/pesanandikemas');?>">DiKemas ( <?= $this->sepeda_models->countkemasan(); ?> )</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/pesanandikirim');?>">Dikirim   ( <?= $this->sepeda_models->countkiriman(); ?> )</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('admin/pesananselesai');?>">Selesai  ( <?= $this->sepeda_models->countselesai(); ?> )</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class=""></span></a></li>
							<li class="nav-item"><a href="<?= base_url('admin/profile'); ?>" class="ac"><span class="ti-user"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	
	


	<script src="<?= base_url('assets/'); ?>js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?= base_url('assets/'); ?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
		<script src="<?= base_url('assets/'); ?>js/vendor/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/jquery.nice-select.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/jquery.sticky.js"></script>
		<script src="<?= base_url('assets/'); ?>js/nouislider.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/countdown.js"></script>
		<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
		<!--gmaps Js-->
		<script src="<?= base_url('assets/'); ?>https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="<?= base_url('assets/'); ?>js/gmaps.min.js"></script>
		<script src="<?= base_url('assets/'); ?>js/main.js"></script>