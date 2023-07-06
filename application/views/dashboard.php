<div class="container-fluid">

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/banner1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/banner2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/banner3.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row text-center mt-3">

    <?php foreach ($produk as $produk) : ?>
      <div class="card ml-3 mb-3" style="width: 13.5rem;">
        <img src="<?php echo base_url() . '/uploads/' . $produk->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title mb-1"><?php echo $produk->nama_produk ?></h5>
          <small><?php echo $produk->keterangan ?></small><br>
          <small><?php echo $produk->ukuran_kue ?></small><br>
          <span><strong> RP. <?php echo  number_format($produk->harga, 0, ',', '.') ?></strong></span></br></br>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $produk->id_produk, '<div class="btn btn-sm btn-dark">Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $produk->id_produk, '<div class="btn btn-sm btn-primary">Detail</div>') ?>

        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>