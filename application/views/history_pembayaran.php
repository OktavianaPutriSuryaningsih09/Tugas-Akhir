<div class="container">
    <h2>Riwayat Pembayaran</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No. Invoice</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Pesan</th>
                <th>Batas Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riwayat_pembayaran as $invoice) : ?>
                <tr>
                    <td><?php echo $invoice->id_invoice; ?></td>
                    <td><?php echo $invoice->nama; ?></td>
                    <td><?php echo $invoice->alamat; ?></td>
                    <td><?php echo $invoice->tgl_pesan; ?></td>
                    <td><?php echo $invoice->batas_bayar; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>