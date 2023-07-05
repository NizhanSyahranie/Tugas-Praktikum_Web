<?php
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

include '../koneksi.php';

// cek apakah yang mengakses halaman ini sudah login
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zhan's Vehicle | Daftar Pengguna</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Zhan's Vehicle</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Whrezky Nizhan Syahranie </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Admin</li>
                        <li class="nav-item">
                            <a href="../admin/" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="produk.php" class="nav-link">
                                <i class="nav-icon fas fa-car"></i>
                                <p>Data Kendaraan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="user-list.php" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Kategori Kendaraan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customer-list.php" class="nav-link">
                                <i class="nav-icon fas fa-folder"></i>
                                <p>Daftar Pesanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link" onclick="return confirm('Anda yakin ingin keluar?')">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Daftar Pengguna</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Produk</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Produk</a></li>
                                        <li class="breadcrumb-item active">Data Tables</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Produk</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php $id_pd = $_GET['id_pd'];
                                    // $sql    = mysqli_query($mysqli, "SELECT * FROM produk WHERE id='$_GET[id_pd]'"); SELECT * FROM produk, kategori WHERE produk.id_kategori = kategori.id
                                    $sql    = mysqli_query($mysqli, "SELECT * FROM produk,kategori WHERE produk.id_kategori = kategori.id AND id_pd='$id_pd'");
                                    $produk    = mysqli_fetch_array($sql);
                                    ?>

                                    <form action="input_produk.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="hidden" id="id_pd" name="id_pd" class="form-control form-control-sm" value="<?= $produk['id_pd'] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $produk['nama'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="id_kg" class="form-label">Kategori</label>
                                            <select class="form-select" id="id_kg" name="id_kg" aria-label="Floating label select example">
                                                <option value="<?= $produk['id_kategori'] ?>"><?= $produk['nama_kg'] ?></option>
                                                <?php
                                                $kg = mysqli_query($mysqli, "SELECT * FROM kategori") or die(mysqli_error($mysqli));

                                                while ($kategori = mysqli_fetch_array($kg)) {
                                                    echo "<option value=$kategori[id]>$kategori[nama_kg]</option>";
                                                } ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="harga_jual" class="form-label">Harga jual</label>
                                            <input type="number" id="harga_jual" name="harga_jual" class="form-control" value="<?= $produk['harga_jual'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="harga_beli" class="form-label">Harga Beli</label>
                                            <input type="number" id="harga_beli" name="harga_beli" class="form-control" value="<?= $produk['harga_beli'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="stok" class="form-label">stok</label>
                                            <input type="number" id="stok" name="stok" class="form-control" value="<?= $produk['stok'] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 100px;"><?= $produk['deskripsi'] ?></textarea>
                                        </div>

                                        <div class="mb-3 d-flex flex-row">
                                            <div class="col-md-4 ml-2">
                                                <label for="lm_gambar" class="form-label">Gambar Lama</label>
                                                <img src="../assets/images/produk/<?= $produk['gambar'] ?>" class="img-thumbnail" alt="<?= $produk['gambar'] ?>" height="10">
                                                <input type="hidden" id="lm_gambar" name="lm_gambar" class="form-control form-control-sm" value="<?= $produk['gambar'] ?>">
                                            </div>
                                            <div class="col-md-4 ml-2">
                                                <label for="gambar" class="form-label">Gambar</label>
                                                <input type="file" id="gambar" name="gambar" class="form-control form-control-sm">
                                            </div>
                                        </div>

                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                    </form>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="input_kategori.php" method="post">
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="nama_kg" class="form-label">Nama Kategori</label>
                                    <input type="text" id="nama_kg" name="nama_kg" class="form-control form-control-sm" placeholder="">
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">Zhan's</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>