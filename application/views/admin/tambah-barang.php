	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>TAMBAH BARANG</h1>
					<!-- <nav class="d-flex align-items-center">
						<a href="<?= base_url('sepeda'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#"></a>
					</nav> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<!--================End Home Banner Area =================-->
	<section class="checkout_area">
		<div class="container">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-4 mt-4">
						<div class="order_box">
							<form class="row contact_form" action="<?= base_url('admin/tambah_barang'); ?>" method="post" enctype="multipart/form-data">
								<h2>Foto Produk</h2>
								<a data-toggle="modal" data-target="#lihatfoto" id="btn-tambahUlasan" href=""><img src="" width="330dp" height="320dp" title="Lihat Foto"></a>
								<div class="text-center mt-5">
									<input type="file"  id="foto" name="foto" class="-btn btn-warning">
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<h3><br><br>Isi Detail Produk</h3>
							<div class="col-md-12 mb-4 form-group p_star">
								<span>Nama Barang</span><input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" value="">
							</div>
							<div class="col-md-12 mb-4 form-group p_star">
								<span>Harga</span><input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="">
							</div>
							<div class="col-md-6 mb-4 form-group p_star">
								<span>Stok</span>
								<input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="">
							</div>
							<div class="col-md-6 mb-4 form-group p_star">
								<span>Kategori</span><br>
								<select class="form-group" name="kategori" id="kategori" required>
									<option value="pilihkategori">Pilih kategori</option>
									<?php foreach ($kategory as $key): ?>
										<option value="<?=$key['id_category']; ?>"><?=$key['nama_category']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-12 mb-4 form-group p_star">
								<span>Deskripsi Produk</span>
								<textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Deskripsi"></textarea>
							</div>
							<div class="col-md-3 form-group p_star">
								<button type="submit" name="submit" value="submit" class="btn primary-btn">Simpan</button>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</section>