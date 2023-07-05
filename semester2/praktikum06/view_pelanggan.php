<?php require_once('header.php'); ?>
<h3 class="mb-3">View Pelanggan</h3>
<div class="card shadow">
    <div class="card-body">
        <a class="btn btn-secondary mb-3" href="list_pelanggan.php" role="button">Kembali</a>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td><?= $row['id'] ?></td>
                </tr>
                <tr>
                    <td>Kode</td>
                    <td><?= $row['kode'] ?></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><?= $row['nama'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $row['jk'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><?= $row['tmp_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?= $row['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $row['email'] ?></td>
                </tr>
                <tr>
                    <td>Kartu_id</td>
                    <td><?= $row['kartu_id'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php require_once('footer.php'); ?>