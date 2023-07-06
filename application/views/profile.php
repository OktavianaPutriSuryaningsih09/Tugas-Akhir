<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>My Profile</h2><br>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" value="<?php echo $user['nama']; ?>" class="form-control" readonly><br>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" value="<?php echo $user['email']; ?>" class="form-control" readonly><br>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" value="<?php echo $user['username']; ?>" class="form-control" readonly><br>
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" value="<?php echo $user['notelp']; ?>" class="form-control" readonly><br>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" value="<?php echo $user['alamat']; ?>" class="form-control" readonly><br>
            </div>
            <!-- <a href="<?php echo base_url('profile/editProfile'); ?>" class="btn btn-primary">Edit Profile</a> -->
        </div>
    </div>
</div>