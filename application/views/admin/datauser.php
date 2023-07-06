<div class="container-fluid">
    <h4>
        <center>DATA USER</center>
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>NO TELP</th>
            <th colspan="2">
                <center>AKSI</center>
            </th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user->id ?></td>
                <td><?php echo $user->nama ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->notelp ?></td>
                <td><?php echo anchor('admin/user/detail/' . $user->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
                <td><?php echo anchor('admin/user/hapus/' . $user->id, '<div class="btn btn-sm btn-danger">Hapus</div>') ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>