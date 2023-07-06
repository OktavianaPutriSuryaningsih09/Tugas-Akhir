<div class="container-fluid">
    <div class="row">
        <form action="<?php echo site_url('pembayaran/proses_konfirmasi'); ?>" method="post" enctype="multipart/form-data">
            <label for="bukti_pembayaran">Unggah Bukti Pembayaran:</label>
            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" required>
            <button type="submit">Konfirmasi Pembayaran</button>
        </form>
    </div>
</div>