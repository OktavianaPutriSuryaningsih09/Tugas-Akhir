<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="btn btn-sm btn-light">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()) {
					foreach ($keranjang as $item) {
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h4><strong>Total Belanja Kamu adalah: Rp. " . number_format($grand_total, 0, ',', '.') . "</strong></h4>";
				?>
			</div><br><br>
			<h1>Input Alamat Pengiriman dan Pembayaran</h1>
			<h4><strong>Harap Inputkan data dengan Benar !!!</strong></h4></br>

			<form id="pembayaran" method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required></br>
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" required></br>
				</div>

				<div class="form-group">
					<label>No Telphone</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">08</span>
						</div>
						<input type="text" name="notelp" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select name="jasa_pengiriman" class="form-control">
						<option>Gofood</option>
						<option>Shopeefood</option>
						<option>Grabfood</option>
					</select>
					<label><strong>Harap dibaca, pembelian produk via online hanya menggunakan jasa pengiriman diatas sekitar area Depok! 1x24Jam</strong></label>
				</div></br>

				<div class="form-group">
					<label>Pilih Bank</label>
					<select name="bank" class="form-control">
						<option>BRI - xxxxxxx</option>
						<option>BCA - xxxxxxx</option>
						<option>BNI - xxxxxxx</option>
					</select>
				</div></br>

				<table class="table table-bordered table-striped table-hover">
					<tr>
						<th>NAMA PRODUK</th>
						<th>UKURAN</th>
						<th>JUMLAH</th>
						<th>HARGA</th>
					</tr>
					<?php
					foreach ($keranjang as $item) {
					?>
						<tr>
							<td><?php echo $item['name']; ?></td>
							<td><?php echo $item['ukuran_kue'] ?></td>
							<td><?php echo $item['qty']; ?></td>
							<td>Rp. <?php echo number_format($item['subtotal'], 0, ',', '.'); ?></td>
						</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="3" align="right"><strong>
								<h4>Total Belanja</h4>
							</strong></td>
						<td><strong>
								<h4>Rp. <?php echo number_format($grand_total, 0, ',', '.'); ?></h4>
							</strong></td>
					</tr>
				</table>
				<p>HARAP CEK LAGI INPUTAN DATA DIATAS CROSSCHECK AGAR TIDAK TERJADI KESALAHAN, JIKA TERJADI KESALAHAN HARAP HUBUNGI <a href="<?php echo base_url('/welcome/contact'); ?>">ADMIN</a> DALAM 24 JAM !!</p>
				<center><button type="submit" class="btn btn-sm btn-primary mb-3" onclick="confirmSubmit()">PESAN SEKARANG</button>
				</center></br>

				<script>
					document.getElementById("pembayaran").addEventListener("submit", function(event) {
						event.preventDefault(); // Mencegah perilaku default form

						if (confirm("Apakah Anda yakin ingin melanjutkan proses pesanan? MOHON CEK KEMBALI PENGISIAN DATA PEMBAYARAN DAN PENGIRIMAN")) {
							// Proses form di sini
							this.submit(); // Mengirimkan form
						} else {
							// Tidak melakukan apa-apa jika tombol "Cancel" diklik
						}
					});
				</script>
			</form>
		<?php
				} else {
					echo "<h4>Keranjang Belanja Anda Kosong</h4>";
				}
		?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>