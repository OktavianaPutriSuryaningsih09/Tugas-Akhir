<div class="container-fluid">
    <h3><i class="fa fa-edit"></i> Detail User</h3></br>

    <?php foreach ($users as $user) : ?>

        <div class="form-group">
            <input type="hidden" name="id_produk" class="form-control" value="<?php echo $user->id ?>">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_produk" class="form-control" value="<?php echo $user->nama ?>">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $user->email ?>">
        </div>
        <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="ukuran_kue" class="form-control" value="<?php echo $user->notelp ?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="kategori" class="form-control" value="<?php echo $user->alamat ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button></br>

        </form>

    <?php endforeach; ?>
</div>