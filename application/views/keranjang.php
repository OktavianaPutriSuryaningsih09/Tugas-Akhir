<div class="container-fluid">
	<h4>
		<center>KERANJANG BELANJAMU NIH</center>
	</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>UKURAN</th>
			<th>JUMLAH</th>
			<th>HARGA SATUAN</th>
		</tr>
		<?php
		$no = 1;
		foreach ($this->cart->contents() as $items) :  ?>

			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td align="center"><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['ukuran_kue'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="center">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
			</tr>
		<?php endforeach ?>
		<tr>
			<td colspan="4" align="center">Total Belanja</td>
			<td align="center"> Rp. <?php echo number_format($this->cart->total(), 0, ',', '.')  ?></td>
		</tr>

	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
			<div class="btn btn-sm btn-danger">Hapus Keranjang</div>
		</a>
		<a href="<?php echo base_url('') ?>">
			<div class="btn btn-sm btn-primary">Lanjut Belanja</div>
		</a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
			<div class="btn btn-sm btn-success">Pembayaran</div>
		</a>
	</div>
</div>