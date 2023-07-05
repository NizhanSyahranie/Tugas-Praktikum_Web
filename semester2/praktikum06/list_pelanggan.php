<?php require_once('header.php'); ?>
<h3 class="mb-3">List Pelanggan</h3>
<div class="card shadow">
    <div class="card-body">
        <a class="btn btn-success mb-3" href="form_pelanggan.php" role="button">Create Pelanggan</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($sel_pelanggan as $row) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['kode']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['jk']; ?></td>
                        <td><?= $row['tmp_lahir']; ?></td>
                        <td><?= $row['tgl_lahir']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['kartu_id']; ?></td>
                        <td>
                            <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                            <a class="btn btn-primary" href="form_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                            <a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data <?= $row['nama'] ?>?')) {return false}">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once('footer.php'); ?>