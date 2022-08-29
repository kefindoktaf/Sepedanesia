  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>PESANAN DIKEMAS</h1>
          <nav class="d-flex align-items-center">
            <a href="<?= base_url('admin'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
            <a href="<?= base_url('admin/pesanandikemas')?>">PESANAN DIKEMAS</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
<section>
  <div class="container">
  <div class="cart_inner">
    <div class="col-md-6 mb-4">
    </div>
    <?= $this->session->flashdata('pesan'); ?>   
    <div class="table-responsive">
     <table class="table">
      <thead>
       <tr>
        <th scope="col">NO</th>
        <th scope="col">ID PESANAN</th>
        <th scope="col">STATUS</th>
        <th scope="col">TANGGAL PESAN</th>
        <th scope="col">AKUN PEMESAN</th>
        <th colspan="2" scope="col">OPSI</th>
      </tr>
    </thead>
    <?php 
    $no = 1;
    $subtotal = 0;
    foreach ($kemasan as $ps) :
      $id = $ps['id_pesanan'];
      $status = $ps['status_pesanan'];
      $nama = $ps['username'];
      $tgl = $ps['tgl'];
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
         <h5><?= $this->sepeda_models->arrayPesananadm($status); ?></h5>
       </td>
       <td>
         <h5><?= $tgl; ?></h5>
       </td>
       <td>
         <h5><?= $nama; ?></h5>
       </td>
       <td>
         <a href="<?= base_url('admin/detailpesanan/').$id; ?>" class="btn btn-primary">Detail</a>
       </td>
       <td>
        <a  href="<?= base_url('admin/getstatusid1/').$id; ?>" class="btn btn-secondary">Update</a>
      </td>
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

<form action="" method="post" enctype="multipart/form-data">

  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">update <?= $id; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <div class="input-group mb-3 mt-2">
            <input type="text" name="nama" class="form-control" placeholder="Nama kategori" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>