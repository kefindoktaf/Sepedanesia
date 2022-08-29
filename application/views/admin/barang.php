  <!-- Start Banner Area -->
  <section class="banner-area organic-breadcrumb">
    <div class="container">
      <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        <div class="col-first">
          <h1>DATA BARANG</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!--================End Home Banner Area =================-->
  <section>
    <div class="container">
     <div class="cart_inner">
      <div class="col-md-6 mb-4">
        <br>
        <a href="<?= base_url('Admin/tambah');?>" class="btn btn-primary">+ Tambah barang</a>
      </div>
      <?= $this->session->flashdata('pesan'); ?>   
      <div class="table-responsive">
        <table class="table">
         <thead>
          <tr>
           <th scope="col">No</th>
           <th scope="col">Produk</th>
           <th scope="col">Stok</th>
           <th scope="col">Status</th>
           <th scope="col">Kategori</th>
           <th scope="col">Harga</th>
           <th colspan="2" scope="col">Opsi</th>
         </tr>
       </thead>
       <?php 
       $no = 1;
       //$subtotal = 0;
       foreach ($barang as $hm) :
        $nama_product = $hm['nama_product'];
        $stok = $hm['stok'];
        $id_product = $hm['id_product'];
        $foto = $hm['foto'];
        $harga = $hm['harga'];
        $status = $hm['status'];
        $kategori = $hm['nama_category'];
        ?>


        <tbody>
         <tr>
          <td>
           <h5><?= $no;  ?></h5>
         </td>
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
         <h5><?= $stok; ?></h5>
       </td>
       <td>
         <h5><?= $status; ?></h5>
       </td>
       <td>
         <h5><?= $kategori; ?></h5>
       </td>
       <td>
         <h5><?= $this->sepeda_models->rupiah($harga); ?></h5>
       </td>
       <td>
         <a href="<?= base_url('admin/getbarangbyid/').$id_product; ?>">Edit</a>
       </td>
       <td>
        <a href="<?= base_url('admin/hapusbarang/').$id_product; ?>" onclick="return confirm('yakin?');">Hapus</a>
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
</div>>
</section>

