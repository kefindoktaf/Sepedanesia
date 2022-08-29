  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>PESANAN SELESAI</h1>
          <nav class="d-flex align-items-center">
            <a href="<?= base_url('sepeda'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
            <a href="single-product.html">Checkout</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
<!--  -->
<!--  -->
<div class="container mt-5">
 <div class="cart_inner">
  <div class="col-md-6 mb-4">
  </div>
  <?= $this->session->flashdata('pesan'); ?>   
  <div class="table-responsive">
   <table class="table">
    <thead>
     <tr>
      <th scope="col">No</th>
      <th scope="col">ID Pesanan</th>
      <th scope="col">Status</th>
      <th scope="col">Tanggal Pesan</th>
      <th scope="col">Tanggal Terima</th>
      <th colspan="2" scope="col">Opsi</th>
    </tr>
  </thead>
  <?php 
  $no = 1;
  $subtotal = 0;
  foreach ($selesai as $ps) :
    $id = $ps['id_pesanan'];
    $status = $ps['status_pesanan'];
    $nama = $ps['username'];
    $tglpesan = $ps['tgl'];
    $tglterima = $ps['tglterima'];
    ?>


    <tbody>
     <tr>
      <td>
       <h5><?= $no;  ?></h5>
     </td>
     <td>
       <h5><?= $id; ?></h5>
     </td>
     <td>
       <h5><?= $this->sepeda_models->arrayPesanan($status); ?></h5>
     </td>
     <td>
       <h5><?= $tglpesan; ?></h5>
     </td>
     <td>
       <h5><?= $tglterima; ?></h5>
     </td>
     <td>
       <a href="<?= base_url('sepeda/detailpesanan/').$id; ?>" class="btn btn-primary">Detail</a>
     </td>
<!--      <td>
       <a href="<?= base_url('sepeda/ulasan/').$id; ?>">Berikan penilaian</a>
     </td> -->

   </tr>
   <?php $no++;
 endforeach;  ?>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</section>
<!-- <?= form_open_multipart('sepeda/tambahUlasan'); ?>

<div class="modal fade" id="tulisUlasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tulis Ulasan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row text-center">
          <div class="container">
            <div class="mb-3"> 
              Ayo berikan penilanmu!!!
            </div>
            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
            </div>
          </div> -->
          <!-- akhir rating input -->
        <!-- </div>
        <hr>
        <div class="row mx-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="gambar">
            <label for="image" class="custom-file-label"> Tambahkan Gambar</label>
          </div>
        </div>
        <div class="row mt-2"> -->
          <!-- Input text -->
          <!-- <textarea class="form-control" aria-label="With textarea" placeholder="Tulis ulasan disini" name="deskripsi" ></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>
</div> -->