<div class="container-fluid">
    <div class="row">
        <?php if (empty($riwayat_transaksi)) : ?>
            <h5>Tidak ada Transaksi. </h5>
        <?php else : ?>
            <?php foreach ($riwayat_transaksi as $transaksi) : ?>
                <tr>
                    <td><?php echo $transaksi->id_transaksi; ?></td>
                    <td><?php echo $transaksi->tanggal_transaksi; ?></td>
                    <td><?php echo $transaksi->total_pembayaran; ?></td>
                    <td><?php echo $transaksi->status; ?></td>
                    <td>
                        <?php if ($transaksi->status == 'Belum Dikonfirmasi') : ?>
                            <a href="<?php echo site_url('transaksi/unggah_bukti_pembayaran/' . $transaksi->id_transaksi); ?>">Unggah</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>