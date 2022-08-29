  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>PESANAN MASUK</h1>
          <nav class="d-flex align-items-center">
            <a href="<?= base_url('admin'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
            <a href="<?= base_url('admin/pesanan')?>">PESANAN MASUK</a>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!--================End Home Banner Area =================-->

  <section class="">
    <div class="container">
      <div class="banner_content text-center mb-3 mt-5">
       <h2>PESANAN MASUK</h2>
     </div>
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
      foreach ($pesanan as $ps) :
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
          <!-- <a data-toggle="modal" data-target="#update" id="btn-tambahUlasan" href="" href="" class="btn btn-primary">Update</a> -->
          <a href="<?= base_url('admin/getstatusid/').$id; ?>"  class="btn btn-secondary">Update</a>
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

<form action="<?= base_url('admin/editstatus'); ?>" method="post" enctype="multipart/form-data">
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
            <span>Id Pesanan</span><input type="text" class="form-control" id="idpemesan" name="idpemesan" value="<?= $pesanan['id_pemesan']; ?>" readonly>
          </div>
          <div class="modal-body ">
            <select class="form-control" name="status" id="status">
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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
