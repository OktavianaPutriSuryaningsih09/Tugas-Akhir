<div class="container-fluid">
	<h3><i class="fa fa-edit"></i>Edit Produk</h3></br>

	<?php foreach ($produk as $produk) : ?>

		<form method="post" action="<?php echo base_url() . 'admin/data_produk/update' ?>">
			<div class="form-group">
				<input type="hidden" name="id_produk" class="form-control" value="<?php echo $produk->id_produk ?>">
			</div>
			<div class="form-group">
				<label>Nama Produk</label>
				<input type="text" name="nama_produk" class="form-control" value="<?php echo $produk->nama_produk ?>">
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?php echo $produk->keterangan ?>">
			</div>
			<div class="form-group">
				<label>Ukuran</label>
				<input type="text" name="ukuran_kue" class="form-control" value="<?php echo $produk->ukuran_kue ?>">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $produk->kategori ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $produk->harga ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $produk->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button></br>

		</form>

	<?php endforeach; ?>
</div>