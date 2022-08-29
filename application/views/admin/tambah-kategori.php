  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>KATEGORI BARANG</h1>
          <!-- <nav class="d-flex align-items-center">
            <a href="<?= base_url('sepeda'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
            <a href="#"></a>
          </nav> -->
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="cart_inner container">
      <div class="col-md-6 mb-4"><br>
        <a data-toggle="modal" data-target="#tambah" id="btn-tambahUlasan" href="" href="" class="btn btn-primary">+ Tambah kategori</a>
      </div>
      <?= $this->session->flashdata('pesan'); ?>   
      <div class="table-responsive">
       <table class="table">
        <thead>
         <tr>
          <th scope="col">No</th>
          <th scope="col">Kategori</th>
          <th scope="col">Id</th>
          <th colspan="2" scope="col">Opsi</th>
        </tr>
      </thead>
      <?php 
      $no = 1;
      $subtotal = 0;
      foreach ($kategori as $kt) :
        $id = $kt['id_category'];
        $nama = $kt['nama_category'];
        ?>


        <tbody>
         <tr>
          <td>
           <h5><?= $no;  ?></h5>
         </td>
         <td>
           <h5><?= $nama; ?></h5>
         </td>
         <td>
           <h5><?= $id; ?></h5>
         </td>
         <td>
           <a href="<?= base_url('admin/getkategorid/').$id; ?>">Edit</a>
         </td>
         <td>
          <a href="<?= base_url('admin/hapuskategori/').$id; ?>" onclick="return confirm('yakin?');">Hapus</a>
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

<form action="<?= base_url('admin/tambahkategori'); ?>" method="post" enctype="multipart/form-data">

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kategori</h5>
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

<form action="<?= base_url('admin/editkategori'); ?>" method="post" enctype="multipart/form-data">

  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Edit Kategori</h5>
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