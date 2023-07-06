<div class="container-fluid">

  <h5 class="text-lg-start">
    <center>Kategori Chiffon Cake</center>
  </h5>

  <div class="row text-center mt-3">

    <?php foreach ($chiffon_cake as $produk) : ?>
      <div class="card ml-3 mb-3" style="width: 13.5rem;">
        <img src="<?php echo base_url() . '/uploads/' . $produk->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $produk->nama_produk ?></h5>
          <small><?php echo $produk->keterangan ?></small><br>
          <small><?php echo $produk->ukuran_kue ?></small><br>
          <span class="badge bg-success mb-3">RP. <?php echo  number_format($produk->harga, 0, ',', '.') ?></span></br>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $produk->id_produk, '<div class="btn btn-sm btn-dark">Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $produk->id_produk, '<div class="btn btn-sm btn-success">Detail</div>') ?>

        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>