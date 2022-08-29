<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>EDIT STATUS PESANAN</h1>
				</div>
			</div>
		</div>
	</section>
<!-- End Banner Area -->
<section>
		<div class="container">
			<div>
    		<?= $this->session->flashdata('pesan'); ?>
  			</div>
  			<br>
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
						<h3>Status</h3>
						<form class="row contact_form" action="<?= base_url('admin/editstatus'); ?>" method="post" enctype="multipart/form-data">
							<div class="col-md-6 form-group">
								<span>ID Pesanan</span><input type="text" class="form-control" id="idpemesan" name="idpemesan" value="<?= $pesanan['id_pemesan']; ?>" readonly>
							</div>
							<div class="col-md-6 mt-4 mb-4">
								<select class="form-group" name="status" id="status">
									<option value="<?= $pesanan['status_pesanan']; ?>"><?= $this->sepeda_models->arrayPesananadm($pesanan[
										'status_pesanan']); ?></option>
										<?php 
										$no=2;
										foreach ($this->sepeda_models->arraystatus() as $status ): ?>
									<option value="<?= $no; ?>"><?= $status; ?></option>
										<?php 
										$no++;
										endforeach; ?>
								</select>
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