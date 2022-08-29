<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('sepeda'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
<!-- End Banner Area -->
<style type='text/css'>
	input.input{
		border-bottom: none;
		border-left: none;
		border-right: none;
		border-top: none;
		outline: none;
		background-color: #F9F9FF;
	}
	input.input1{
		border-bottom: none;
		border-left: none;
		border-right: none;
		border-top: none;
	}
	input.input2{
		border-bottom: none;
		border-left: none;
		border-right: none;
		border-top: none;
		color: white;
	}
</style>

<section class="order_details">
		<div class="container"><br>
		<h3 class="title_confirmation">Orderan kamu segera selesai. Segera lakukan pembayaran!</h3>
		<div class="row order_d_inner">
			<div class="col-lg-4">
				<div class="details_item">
					<h4>Informasi Order</h4>
					<ul class="list">
						<form class="row contact_form" action="<?= base_url('sepeda/multiinsertpesanan'); ?>" method="post" enctype="multipart/form-data">
						<li>
							<a href="#">
								<span>Id Transaksi</span> : 
								<input class="input1" type="text" name="id_transaksi" value="<?= $id_transaksi; ?>" readonly></a>
						</li>
						<li>
							<a href="#">
								<span>Tanggal</span> : 
								<input class="input1" type="text" name="tgl" value="<?= date('d M Y') ?>" readonly></a>
						</li>
						<li>
							<a href="#">
								<span>Jasa kirim</span> : 
								<input class="input1" type="text" id="jasa" name="jasa" value="<?= $paket; ?>" readonly></a>
						</li>
						<li>
							<a href="#">
							<span>Pembayaran</span> : 
							<input class="input1" type="text" name="pembayaran" value="<?= $pembayaran; ?>"></a>
						</li>
					</ul>
				</div>
			</div>

		<div class="col-lg-4">
			<div class="details_item">
				<h4>Data Pemesan</h4>
				<ul class="list">
					<li>
						<a href="#">
						<span>Id</span> : 
						<input class="input1" type="text" name="hari" value="<?= $id_user; ?>"></a>
					</li>
					<li>
						<a href="#">
						<span>Username</span> : 
						<input class="input1" type="text" name="user" value="<?= $username;?>"></a>
					</li>
					<li>
						<a href="#">
						<span>Nama</span> : 
						<input class="input1" type="text" name="nama" value="<?= $nama; ?>"></a>
					</li>
					<li>
						<a href="#">
						<span>No Telepon</span> : 
						<input class="input1" type="text" name="nohp" value="<?= $nohp; ?>"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="details_item">
				<h4>Data Penerima</h4>
				<ul class="list">
					<li>
						<a href="#">
						<span>Nama</span> : 
						<input class="input1" type="text" name="nama_penerima" value="<?= $namapenerima; ?>"></a>
					</li>
					<li>
						<a href="#">
						<span>No Telepon</span> : 
						<input class="input1" type="text" name="nohp1" value="<?= $nohp1; ?>"></a>
					</li>
					<li>
						<a href="#">
						<span>Alamat</span> : 
						<input class="input1" type="text" name="kecamatan" value="<?= $alamat ?> " readonly>
						<input class="input1" type="text" name="provinsi" value="<?= $provinsi ?>" readonly>
						
						</a>
					</li>
					<li>
						<a href="#">
						<span>Kode Pos</span> : 
						<input class="input1" type="hidden" name="kodepos" value="<?= $kodepos; ?>"></a>
					</li>
				</ul>
			</div>
		</div>
		</div>
		
		<div class="order_details_table">
			<h2>Detail Pesanan</h2>
			<div class="table-responsive">
				<table class="table">
				<thead>
				<tr>
					<th scope="col">Produk</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Total</th>
				</tr>
				</thead>
					<tbody>
						<?php $subtotal = 0;
						foreach ($keranjang as $kr ) :
							$nama_product = $kr['nama_product'];
							$quantity = $kr['jumlah'];
							$harga = $kr['harga'];
							$total = $quantity * $harga;
							$subtotal = $subtotal + $total; 
							$sub = $subtotal + $ongkos?>
					<tr>
						<td>
							<p><input class="input" type="text" name="nama" value="<?= $nama_product ?>" placeholder="" readonly></p>
						</td>
						<td>
							<h5><input class="input" type="text" name="qty22[]" value="<?= $quantity; ?>" placeholder="" readonly></h5>
						</td>
						<td>
							<p><input class="input" type="text" name="total" value="<?= $this->sepeda_models->rupiah($total); ?>" placeholder="" readonly></p>
						</td>
					</tr>
					<input class="input1" type="hidden" name="idproduct[]" value="<?= $kr['id_product'] ?>" readonly size="11" >
								<input class="input1" type="hidden" name="harga[]" value="<?= $kr['harga'] ?>" readonly size="1" >
								<input class="input1" type="hidden" name="hargaxjumlah[]" value="<?= $total ?>" readonly size="1" >
					<?php endforeach; ?>

					<tr>
						<td>
							<h5>Ongkos kirim</h5>
						</td>
						<td>
							<h5></h5>
						</td>
						<td>
							<p><input class="input" type="text" name="ongkos" value="<?= $this->sepeda_models->rupiah($ongkos); ?>" placeholder="" readonly></p>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Total</h4>
						</td>
						<td>
							<h5></h5>
						</td>
						<td>
							<p><input class="input" type="text" name="subtotal" value="<?= $this->sepeda_models->rupiah($sub); ?>" placeholder="" readonly></p>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>

<!-- 			<input class="input2" type="text" name="idproduct" value="<?= $id ?>" readonly> -->
			
			<input class="input2" type="text" name="alamat" value="<?= $alamat ?>" readonly>
			<input class="input1" type="text" name="kota" value="<?= $kota ?>" readonly>
			<input class="input2" type="text" name="ongkos" value="<?= $ongkos ?>" readonly>
			<input class="input2" type="text" name="total" value="<?= $total ?>" readonly>
			<input class="input2" type="text" name="harga" value="<?= $harga ?>" readonly>
			<input class="input2" type="text" name="subtotal" value="<?= $sub ?>" readonly>

 			<div class="row order_d_inner mt-5">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Pembayaran</h4>
						<ul class="list">
							<li>
								<span>Transfer ke Rekening berikut</span> : 
							</li>
							<li>
								<?php foreach ($rekening as $rek ): 
									$norekening1 = $rek['norek']; 
									$atasnama = $rek['an']; 
								endforeach ;?>
								<a href="#">
									<span>No Rekeneing</span> : <?= $norekening1; ?></a>
							</li>
							<li>
								<a href="#">
									<span>Atas Nama</span> : <?= $atasnama; ?></a>
							</li>
							<li>
								<a href="#">
									<span><i>*Pembayaran Aman dan Terjamin</i></span></a>
							</li>
						</ul>
					</div>
				</div> 
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Upload bukti Transfer</h4>
							<ul class="list">
								<li>
									<span>Upload</span> :
									<input type="file" name="buktitf" id="buktitf" class="btn btn-warning" required>   
								</li>
								<li>
									<br><button type="submit" name="" class="btn primary-btn" value="Kirim">Kirim</button>
								</li>
							</ul>
					</div>
				</div>
			</div>		
			</div>
</section>