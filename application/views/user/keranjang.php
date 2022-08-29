<!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Keranjang</h1>
                    <nav class="d-flex align-items-center">
                        <a href="category.html">@SEPEDANESIA</a>
                        <!-- <a href="<?= base_url('sepeda'); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a> -->
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
<!--================End Home Banner Area =================-->

<!--================Cart Area =================-->
<section>
   <div class="container"><br>
      <div class="cart_inner">
         <?= $this->session->flashdata('pesa'); ?>   
         <div class="table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">Product</th>
                     <th scope="col">Price</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Total</th>
                     <th colspan="2" scope="col">Opsi</th>
                  </tr>
               </thead>
               <?php 
               $no = 1;
               $subtotal = 0;
               foreach ($keranjang as $hm) :
                  $nama_product = $hm['nama_product'];
                  $quantity = $hm['jumlah'];
                  $foto = $hm['foto'];
                  $harga = $hm['harga'];
                  $idproduct = $hm['id_product'];

                  $total = $quantity * $harga;
                  $subtotal = $subtotal + $total;
                  ?>


                  <tbody>
                     <tr>
                        <td>
                           <div class="media">
                              <div class="d-flex">
                                 <img src="<?= base_url('assets/img/product/').$foto; ?>" alt="" width="100px" height="100px">
                              </div>
                              <div class="media-body">
                                 <p><?= $nama_product; ?></p>
                              </div>
                           </div>
                        </td>
                        <td>
                           <h5><?= $this->sepeda_models->rupiah($harga); ?></h5>
                        </td>
                        <td>
                           <h5>
                              <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="<?= $quantity; ?>" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                              </h5>
                        </td>
                        <td>
                           <h5><?=$this->sepeda_models->rupiah($total); ?></h5>
                        </td>
                        <td>
                           <a href="<?= base_url('sepeda/editkeranjang1/').$id_user."/".$idproduct; ?>">Edit</a>
                        </td>
                        <td>
                           <a href="<?= base_url('sepeda/hapusKeranjang/').$id_user."/".$idproduct; ?>" title="">Hapus</a>
                        </td>
                     </tr>
                  <?php endforeach;  ?>
                  <tr class="bottom_button">

                  </tr>
                  <tr>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>
                        <h5>Subtotal</h5>
                     </td>
                     <td>
                        <h5><?= $this->sepeda_models->rupiah($subtotal); ?></h5>
                     </td>
                  </tr>

                  <tr class="out_button_area">
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>

                     </td>
                     <td>
                        <div class="checkout_btn_inner d-flex">
                           <a class="gray_btn" href="<?= base_url('sepeda/index/').$id_user;?>">Lanjut Belanja</a>
                           <a class="primary-btn" href="<?= base_url('sepeda/checkout/').$id_user;?>">Checkout</a>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>

