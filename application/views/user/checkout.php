	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Checkout</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= base_url('sepeda'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">Checkout</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
<!-- 	<section class="checkout_area"> -->
		<div class=" container mt-5">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-7">
						<h3><br>Isi Data Penerima</h3>
						<form class="row contact_form" action="<?= base_url('sepeda/konfirmasi/').$id_user;?>" method="post">
							<div class="col-md-12 mb-4 ">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penerima">
							</div>
							<div class="col-md-6 mb-4 form-group p_star">
								<input type="number" class="form-control" id="nohp" name="nohp" placeholder="Nomer HP">
							</div>
							<div class="col-md-6 mb-4 form-group p_star">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>

							<!-- <div class="col-md-6 mb-4 form-group p_star">
								<label for="">Provinsi</label>
								<select class="form-control country_select" name="provinsi">
									<option value="">Jawa Barat</option>							
								</select>
							</div> -->
							<!-- <div class="col-md-12 mb-4 form-group p_star provinsi">
								<label for="">Provinsi</label><br>								
								<select onChange="getkota()" class="provinsi nice-select" name="provinsi" id="provinsi" style="">
									<option value="">provinsi</option>
								</select>
							</div> -->

							<div class="col-md-6 mb-4">
                        		<label for="">Provinsi</label>
                            	<select onChange="getkota()" class="form-control country_select provinsi" name="provinsi" id="provinsi">
                            	
                            	</select>
                        	</div>
                        	<div class="col-md-6 mb-4">
                        		<label for="">Kota</label>
                            	<select class="form-control country_select kota" id="Kabupatenkota" name="Kabupatenkota">
								<option value="">Kota</option>
                            	</select>
                        	</div>
							
							<!-- <div class="col-md-6 mb-4">
                        		<label for="">Provinsi</label>
                            	<select onChange="getkota()" class="form-control country_select provinsi" name="provinsi" id="provinsi">                          	
                           		</select>
                        	</div>

							<div class="col-md-6 mb-4 form-group p_star">
								<label for="">Kota</label>
								<select class="form-control country_select Kota" id="Kota" name="Kota">
									<option value="">Bandung</option>
									<option value="">Garut</option>
									<option value="">Tasik</option>
								</select>
							</div> -->
                        <!-- <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" class="form-control" id="kodepos" name="kodepos" placeholder="Kode" required>
                        </div> -->
                        <div class="col-md-6 mb-4 form-group p_star">
                        	<label for="">Kurir</label><br>
                            <select onChange="getongkir()" class="" name="paket" id="paket">
                            	<option value="">Pilih Kurir</option>
                                <option value="jne">JNE</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-4 form-group p_star">
                        	<label for="">Pelayanan & Harga</label>
                            <select class="form-control country_select" name="ongkos" id="ongkos">
                            	<!-- <option value="">JNE REG Rp.10.000</option> -->
                            </select>	
                        </div required>
							<div class="col-md-12 mb-4 form-group p_star">
								<textarea class="form-control p_star" name="alamatpenerima" id="alamatpenerima" rows="4" placeholder="Alamat penerima"></textarea>
							</div>
							
							<!-- <div class="col-md-6 mb-4 form-group p_star">
								<input type="hidden" class="form-control" id="ongkos" name="ongkos" placeholder="Ongkos" value="10000">
							</div> -->
							<div class="col-md-12 mb-4 form-group p_star">
								<textarea class="form-control" name="pesan" id="pesan" rows="4" placeholder="Pesan pemesan"></textarea>
							</div>
						</div>

						<div class="col-lg-5"><br>
							<div class="order_box">
								<h2>Pesanan anda</h2>
								<ul class="list">
									<li>
										<a href="#">Produk<span>Total</span></a>
									</li>
									<?php $subtotal = 0;
									foreach ($keranjang as $kr ) :
										$nama_product = $kr['nama_product'];
										$quantity = $kr['jumlah'];
										$harga = $kr['harga'];
										$total = $quantity * $harga;
										$subtotal = $subtotal + $total; ?>

										<li>
											<a href="#"><?= $nama_product; ?>
											<span class="middle"><?= $quantity; ?></span>
											<span class="last"><?= $this->sepeda_models->rupiah($total);?></span>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
							<ul class="list list_2">
								<li>
									<br><a href="#">Subtotal
										<span><?= $this->sepeda_models->rupiah($subtotal); ?></span>
									</a>
								</li>								
							</ul>
							
							<div class="payment_item">
								<div class="radion_btn mt-4">
									<span>Metode Pembayaran</span>
									<br>
									<select class="form-group" name="pembayaran" id="pembayaran">
										<option value="pembayaran">Pilih Metode Pembayaran</option>
										<option value="Transfer Bank">Transfer Bank</option>
										<option value="Bayar Di tempat">Bayar Di tempat</option>
									</select>
								</div>
								<br><br>
								<p>Jika memilih Transfer bank mohon untuk mengirimkan struk pembayaran.</p>
							</div>

							<div class="col-md-6 form-group p_star">
								<button type="submit" name="submit" value="submit" class="primary-btn">Konfirmasi</button>
							</div>
							<!-- <div class="col-md-6 form-group p_star">
								<button type="submit" class="primary-btn">Lanjutkan Transaksi</button>
							</div> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- </section> -->

<script type="text/javascript">
	$(function() {
		$.get("<?= base_url('sepeda/getprovinsi') ?>",{},(response)=>{
			let output='';
			let provinsi = response.rajaongkir.results
			console.log(response)

			provinsi.map((val,i)=>{
				output+= `<option value="${val.province_id}">${val.province}</option>`
			})
			$('.provinsi').html(output)
		})
	});

	function get_api_kota(){
        var provid = $("#provinsi").val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('sepeda/getkota') ?>');?>",
            data: {"provid":provid
            },
            beforeSend: function(result){
                $('#kota').prop('disabled', true)
                           .html('');
            },
            success: function(result){
                var obj = jQuery.parseJSON(result);
                update_csrf(obj);
                if(obj.data.rajaongkir.status.code===200){
                    $.each(obj.data.rajaongkir.results, function(key, value){
                        $('#kota').append('<option value="' + value.city_id + '">' + type + ' ' + value.city_name + '</option>');
                    });
                    $('#kota').prop('disabled', false);                        
                }else{
                    $('#kota').prop('disabled', true)
                           .html('<option value="">Pilih Kota / Kabupaten</option>');
                }
            },
            error:function(event, textStatus, errorThrown) {
                swal("Error !", 'Error Message: ' + textStatus + ' , HTTP Error: ' + errorThrown, "error");
            }
        });
    }

	function getkota() {
		let id_provinsi = $('#provinsi').val();
		$.get("<?= base_url('sepeda/getkota/') ?>"+id_provinsi,{},(response)=>{
			let output='';
			let Kabupatenkota = response.rajaongkir.results
			console.log(response)

			Kabupatenkota.map((val,i)=>{
				output+= `<option value="${val.city_id}">${val.city_name} ( ${val.type} )</option>`
			})
			$('#Kabupatenkota').html(output)

		})
	}
	function getongkir() {
		let berat = $('#berat').val();
		let asal = 22;
		let tujuan = $('#Kabupatenkota').val();
		let kurir = $('#paket').val();
		let output = '';

		$.get("<?= base_url('sepeda/getongkir/') ?>"+`${asal}/${tujuan}/${berat}/${kurir}`,{},(response)=>{
			console.log(response)
			let biaya =response.rajaongkir.results
			console.log(biaya)
			biaya.map((val,i)=>{
				for (var i =0 ; i < val.costs.length; i++){
					let jenis_layanan = val.costs[i].service
					val.costs[i].cost.map((val,i)=>{
						output+= `<option value="${val.value}"> ${jenis_layanan}, ${val.etd}, Rp.${val.value} </option>`			
					})
				}	
			})
			$('#ongkos').html(output)

		})
	}
	$(function() {
		$.get("<?= base_url('sepeda/setkota/10/49') ?>",{},(response)=>{
			let output='';
			let tujuan = response.rajaongkir.results.city_name
			let prov = response.rajaongkir.results.province
			console.log(tujuan)
			output+= `<input type="text" value="${tujuan} ${prov}">`			
			$('.po').html(output)
		})
	});


</script>