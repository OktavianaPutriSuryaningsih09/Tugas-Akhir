<div class="container-fluid">
	<button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambah_produk">TAMBAH PRODUK KLIK DISINI !!</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>UKURAN</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th>GAMBAR PRODUK</th>
			<th colspan="2">
				<center>AKSI</center>
			</th>
		</tr>

		<?php
		$no = 1;
		foreach ($produk as $produk) : ?>

			<tr>
				<th><?php echo $no++ ?></th>
				<th><?php echo $produk->nama_produk ?></th>
				<th><?php echo $produk->keterangan ?></th>
				<th><?php echo $produk->kategori ?></th>
				<th><?php echo $produk->ukuran_kue ?></th>
				<th><?php echo $produk->harga ?></th>
				<th><?php echo $produk->stok ?></th>
				<th>
					<div class="card ml-3 mb-3" style="width: 14rem;">
						<img src="<?php echo base_url() . '/uploads/' . $produk->gambar ?>" class="card-img-top" alt="...">
				</th>

				<td><?php echo anchor('admin/data_produk/edit/' . $produk->id_produk, '<div class="btn btn-primary btn-sm">UPDATE</div>') ?></td>
				<td><?php echo anchor('admin/data_produk/hapus/' . $produk->id_produk, '<div class="btn btn-danger btn-sm">DELETE</div>') ?></td>


			</tr>

		<?php endforeach; ?>

	</table>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url() . 'admin/data_produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label>Nama Produk</label>
						<input type="text" name="nama_produk" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" name="keterangan" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Kategori Produk</label>
						<select class="form-control" name="kategori">
							<option>Sponge Cake</option>
							<option>Butter Cake</option>
							<option>Chiffon Cake</option>
						</select>
					</div>
					<div class="form-group">
						<label>Ukuran Kue</label>
						<select name="ukuran_kue" class="form-control">
							<option>100 x 100</option>
							<option>200 x 200</option>
							<option>300 x 300</option>
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Stok</label>
						<input type="text" name="stok" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Gambar Produk</label>
						<input type="file" name="gambar" class="form-control" required>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>


			</form>
		</div>
	</div>
</div>