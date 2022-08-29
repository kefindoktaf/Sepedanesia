	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>EDIT KATEGORI</h1>
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
	<section>
		<div class="container">
		<div>
			<?= $this->session->flashdata('pesan'); ?>

		</div>
		<div class="billing_details">
			<div class="row">
				<div class="col-lg-8">
					<br><br>
					<h3>Kategori</h3>
					<form class="row contact_form" action="<?= base_url('admin/editkategori'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-6 form-group">
							<span>Id Kategori</span><input type="text" class="form-control" id="idkategori" name="idkategori" value="<?= $kategory['id_category']; ?>"readonly>
						</div>
						<div class="col-md-12 mb-4">
							<span>Nama Kategori</span><input type="text" class="form-control" id="nama" name="nama" value="<?= $kategory['nama_category']; ?>">
						</div>
						
						<div class="col-md-3 form-group p_star">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</form>
	</div>
</div>
</section>