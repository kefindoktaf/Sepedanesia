<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>EDIT BARANG</h1>
				<nav class="d-flex align-items-center">
					<a href="#">@SEPEDANESIA</a>
					<!-- <a href="<?= base_url('sepeda'); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a> -->
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<!--================End Home Banner Area =================-->
<setion>
	<div>
		<?= $this->session->flashdata('pesan'); ?>

	</div>
	<div class="billing_details  container">
		<div class="row">
			<div class="col-lg-4 mt-4">
				<div class="order_box">
					<form class="row contact_form" action="<?= base_url('admin/editbarang'); ?>" method="post" enctype="multipart/form-data">
						<h2>Foto Produk</h2>
						<a data-toggle="modal" data-target="#lihatfoto" id="btn-tambahUlasan" href=""><img src="<?= base_url('assets/img/product/').$detail['foto']; ?>" width="330dp" height="320dp" title="Lihat Foto"></a>
						<div class="text-center mt-5">
							<input type="file"  id="foto" name="foto" class="custom-file-input">
							<label for="foto" class="primary-btn">Ubah Foto</label>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<br><h3>DETAIL PRODUK</h3>
					<div class="col-md-12 mb-4 form-group p_star">
						<span>Id Produk</span><input type="text" class="form-control" id="id_produk" name="id_produk" placeholder="Nama" value="<?= $detail['id_product']; ?>"readonly>
					</div>
					<div class="col-md-12 mb-4 form-group p_star">
						<span>Nama Barang</span><input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $detail['nama_product']; ?>">
					</div>
					<div class="col-md-12 mb-4 form-group p_star">
						<span>Harga</span><input type="text" class="form-control" id="harga" name="harga" placeholder="Username" value="<?= $detail['harga']; ?>">
					</div>
					<div class="col-md-12 mb-4 form-group p_star">
						<span>Stok</span><input type="text" class="form-control" id="stok" name="stok" placeholder="Belum di atur" value="<?= $detail['stok']; ?>">
					</div>
					<div class="col-md-4 mb-4 form-group p_star">
						<span>Status <br></span>
						<select class="form-group" name="status" id="status">
							<option value="<?= $detail['status'];?>"><?= $detail['status'];?></option>
							<option value="on">on</option>
							<option value="off">off</option>
						</select>
					</div>
					<div class="col-md-4 mb-4 form-group p_star">
						<span>Kategori <br></span>
						<select class="form-group" name="kategori" id="kategori" required>
							<option value="<?=$detail['id_category']; ?>"><?=$detail['nama_category']; ?></option>
							<?php foreach ($kategory as $key): ?>
								<option value="<?=$key['id_category']; ?>"><?=$key['nama_category']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-md-12 mb-4 form-group p_star">
						<span>Deskripsi Produk</span>
						<textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Belum diatur"><?= $detail['deskripsi']; ?></textarea>
					</div>
					<div class="col-md-12 mb-4 form-group p_star">
						<button type="submit" name="submit" value="submit" class="btn primary-btn">Simpan</button>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
</section>

<div class="modal fade" id="lihatfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><?=$detail['nama_product']; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body ">
				<img src="<?= base_url('assets/img/product/').$detail['foto']; ?>" width="467dp" height="400dp" >
			</div>
		</div>
	</div>