<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex mt-5">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<br><br><br><br><br>
								<h1><br><?= $foto['nama_product'] ?></h1>
								<p><?= $foto['deskripsi'] ?></p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<br><br><br><br><br>
								<img class="img-fluid" src="<?= base_url('assets/img/product/').$foto['foto']  ?>" alt="">
							</div>
						</div>
					</div>

					<!-- single-slide -->
					<div class="row single-slide">
						<div class="col-lg-5">
							<div class="banner-content">
								<br><br><br><br><br><br><br>
								<h1><br><?= $foto1['nama_product'] ?></h1>
								<p><?= $foto1['deskripsi'] ?></p>
								<div class="add-bag d-flex align-items-center">
									<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<br><br><br><br><br><br>
								<img class="img-fluid" src="<?= base_url('assets/img/product/').$foto1['foto']  ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- start features Area -->
<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/img/features/f-icon1.png') ?>" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/img/features/f-icon2.png') ?>" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/img/features/f-icon3.png') ?>" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?= base_url('assets/img/features/f-icon4.png') ?>" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- end features Area -->