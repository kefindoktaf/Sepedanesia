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
							<!-- <p><?=$user['nama']; ?></p> -->
						</div>
						<div class="float-right">
							<ul class="right_side">
								<li>
									<!-- <?php if($user['username']){ ?>
										<a href="<?= base_url('auth/logout'); ?>">
											Log Out
										</a>
									<?php } 
									else{?>
										<a href="<?= base_url('auth'); ?>">
											Login/Register
										</a>
									<?php } ?> -->
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
						<a class="navbar-brand logo_h" href="<?= base_url('Sepeda'); ?>"><img src="<?= base_url('assets/img/bike/'); ?>bike.png" alt="" width="40px"><B>  SEPEDANESIA</B></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Beranda</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Toko</a>
								<ul class="dropdown-menu">
									<!-- <li class="nav-item"><a class="nav-link" href="category.html">Kategori</a></li> -->
									<li class="nav-item"><a class="nav-link" href="<?= base_url('Sepeda/checkout/').$id_user; ?>">Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= base_url('Sepeda/keranjang/').$id_user; ?>">Keranjang</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pesanan (  <?php $data['pesanan']=$this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.id_user='.$id_user.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->num_rows(); 
									echo $data['pesanan'];
									?>  )</a>
									<ul class="dropdown-menu">
										<li class="nav-item">
											<a class="nav-link" href="<?= base_url('sepeda/pesanan/').$id_user; ?>">Proses ( <?php $data['pesanan']=$this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="0" or tb_pemesan.status_pesanan="1" and tb_pemesan.id_user='.$id_user.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->num_rows(); 
												echo $data['pesanan'];
												?> )</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="<?= base_url('sepeda/pesanandikemas/').$id_user; ?>">Dikemas ( <?php $data['pesanan']=$this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="2" and tb_pemesan.id_user='.$id_user.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->num_rows(); 
													echo $data['pesanan'];
													?> )</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="<?= base_url('sepeda/pesanandikirim/').$id_user; ?>">Dikirim ( <?php $data['pesanan']=$this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="3" and tb_pemesan.id_user='.$id_user.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->num_rows(); 
													echo $data['pesanan'];
													?> )</a>
										</li>
										<li class="nav-item">
												<a class="nav-link" href="<?= base_url('sepeda/pesananselesai/').$id_user; ?>">Selesai ( <?php $data['pesanan']=$this->db->query('select * from tb_pemesan join tb_pesanan on tb_pemesan.id_pemesan=tb_pesanan.id_pesanan join tb_user on tb_pemesan.id_user=tb_user.id_user join tb_product on tb_pesanan.id_barang=tb_product.id_product where tb_pemesan.status_pesanan="4" and tb_pemesan.id_user='.$id_user.' group by tb_pesanan.id_pesanan order by tb_pesanan.id_pesanan desc;')->num_rows(); 
													echo $data['pesanan'];
													?> )</a>
										</li>
										</ul>
									</li>

						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<a href="<?= base_url('Sepeda/keranjang/').$id_user; ?>" class="cart"><span class="ti-bag"></span> ( <?php $data['keranjang']=$this->db->query("select * from tb_keranjang where id_user='$id_user'")->num_rows(); echo $data['keranjang']; ?> ) </a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('sepeda/profile/'); ?>" class="ac"><span class="ti-user"></span></a></li>
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
				<form class="d-flex justify-content-between" action="<?= base_url('sepeda/search/'); ?>">
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