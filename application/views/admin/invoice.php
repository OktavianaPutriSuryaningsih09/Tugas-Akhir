<div class="container-fluid">
	<h4>
		<center>INOVICE PEMESANAN</center>
	</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID INVOICE</th>
			<th>NAMA PEMESAN</th>
			<th>ALAMAT PENGIRIMAN</th>
			<th>TANGGAL PEMESANAN</th>
			<th>BATAS PEMBAYARAN</th>
			<th>JASA PENGIRIMAN</th>
			<th>TRF BANK</th>
			<th>CONTACT PEMESAN</th>
			<th colspan="2">
				<center>AKSI</center>
			</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo $inv->jasa_pengiriman ?></td>
				<td><?php echo $inv->bank ?></td>
				<td>+62<?php echo $inv->notelp ?></td>
				<td><?php echo anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
				<td><?php echo anchor('admin/invoice/hapus/' . $inv->id, '<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
			</tr>
		<?php endforeach; ?>

	</table>
</div>