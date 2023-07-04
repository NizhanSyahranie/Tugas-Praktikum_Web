<?php
// Array Asosiatif
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 85];
$nilai2 = ["id" => 2, "nim" => "01110", "uts" => 75, "uas" => 60, "tugas" => 70];
$nilai3 = ["id" => 3, "nim" => "01111", "uts" => 65, "uas" => 76, "tugas" => 75];
$nilai4 = ["id" => 4, "nim" => "01001", "uts" => 90, "uas" => 95, "tugas" => 93];

// Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Siswa From Array</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
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
                <?php foreach ($kumpulan_nilai as $nilai) : ?>
                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["nim"]; ?></td>
                        <td><?= $nilai["uts"] ?></td>
                        <td><?= $nilai["uas"] ?></td>
                        <td><?= $nilai["tugas"] ?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", "."); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>