<?php
include_once('header.php');
include_once('sidebar.php');

$nilai_mahasiswa = [
    ["nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 85],
    ["nim" => "01110", "uts" => 75, "uas" => 60, "tugas" => 70],
    ["nim" => "01111", "uts" => 65, "uas" => 76, "tugas" => 75],
    ["nim" => "01001", "uts" => 90, "uas" => 95, "tugas" => 93],
];

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Praktikum 1</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tugas Praktikum</a></li>
                        <li class="breadcrumb-item active">Praktikum 1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Praktikum 1
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Daftar Nilai Mahasiswa</h1>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">UTS</th>
                                <th scope="col">UAS</th>
                                <th scope="col">Tugas</th>
                                <th scope="col">Nilai Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($nilai_mahasiswa as $mahasiswa) :
                                $nilai_akhir = ($mahasiswa['uts'] + $mahasiswa['uas'] + $mahasiswa['tugas']) / 3;
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $mahasiswa['nim']; ?></td>
                                    <td><?= $mahasiswa['uts']; ?></td>
                                    <td><?= $mahasiswa['uas']; ?></td>
                                    <td><?= $mahasiswa['tugas']; ?></td>
                                    <td><?= number_format($nilai_akhir, 2, ",", ""); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>