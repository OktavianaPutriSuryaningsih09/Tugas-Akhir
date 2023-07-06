<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Edit Profile</h2>
            <form method="post" action="<?php echo site_url('profile/updateProfile'); ?>">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" value="<?php echo $user['nama']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $user['email']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input type="text" name="notelp" value="<?php echo $user['notelp']; ?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>