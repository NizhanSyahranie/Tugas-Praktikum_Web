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
    <title>Zhan's Vehicle | Detail pesanan</title>

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pesanan</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Detail</a></li>

                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Pesanan</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php $id = $_GET['id'];

                    $sql = mysqli_query($mysqli, "SELECT * FROM pesanan, produk WHERE produk.id_pd = pesanan.id_pd") or die(mysqli_error($mysqli));
                    $pesanan    = mysqli_fetch_array($sql);


                    ?>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-7">
                            <!-- project card -->
                            <div class="card d-block">
                                <div class="card-body">

                                    <div class="form-check float-start">
                                        <input type="checkbox" class="form-check-input" id="completedCheck">
                                        <label class="form-check-label" for="completedCheck">
                                            Kode Trx <?= $pesanan['id'] ?></label>
                                    </div> <!-- end form-check-->

                                    <div class="clearfix"></div>

                                    <h3 class="mt-3"><?= $pesanan['nama_psn'] ?></h3>

                                    <div class="row">
                                        <div class="col-2">
                                            <!-- assignee -->
                                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase"><?= $pesanan['nama'] ?> </p>
                                            <div class="d-flex">
                                                <img src="<?php echo "../assets/images/produk/" . $pesanan['gambar']; ?>" alt="Arya S" height="100">
                                                <div class="row">
                                                    <div>
                                                        <h5 class="mt-1 font-14">
                                                            <?= $pesanan['kode'] ?>
                                                        </h5>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end assignee -->
                                        </div> <!-- end col -->
                                        <div class="col-2">
                                            <!-- start due date -->
                                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Harga</p>
                                            <div class="d-flex">
                                                <!-- 
                            <i class="fas fa-money-bill"></i> -->
                                                <i class="fa-solid fa-money-bill font-18 text-success me-1"></i>
                                                <div>
                                                    <h5 class="mt-1 font-14">
                                                        Rp.<?= number_format($pesanan['harga_jual'], 2, ",", "."); ?>
                                                    </h5>
                                                </div>
                                            </div>
                                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Total Harga</p>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-money-bill font-18 text-success me-1"></i>
                                                <div>
                                                    <h5 class="mt-1 font-14">
                                                        Rp.<?= number_format($pesanan['total_hrg'], 2, ",", "."); ?>
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end due date -->
                                        </div>
                                        <div class="col-2">
                                            <!-- start due date -->
                                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Jumlah Pesanan</p>
                                            <div class="d-flex">
                                                <i class="fa-solid fa-arrow-up-wide-short font-18 text-success me-1"></i>

                                                <div>
                                                    <h5 class="mt-1 font-14">
                                                        <?= $pesanan['jumlah'] ?>
                                                    </h5>
                                                </div>
                                            </div>
                                            <p class="mt-2 mb-1 text-muted fw-bold font-12 text-uppercase">Tanggal Pesanan</p>
                                            <div class="d-flex">
                                                <i class='uil uil-schedule font-18 text-success me-1'></i>

                                                <div>
                                                    <h5 class="mt-1 font-14">
                                                        <?= $pesanan['tgl'] ?>
                                                    </h5>
                                                </div>
                                            </div>
                                            <!-- end due date -->
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <h5 class="mt-3">Catatan pesanan:</h5>

                                    <p class="text-muted mb-4">
                                        <?= $pesanan['cpo'] ?>
                                    </p>

                                    <!-- start sub tasks/checklists -->
                                    <h5 class="mt-4 mb-2 font-16">Detail:</h5>
                                    <div class="form-check mt-1">
                                        <label class="form-check-label strikethrough" for="checklist1">
                                            Alamat:
                                        </label>
                                        <p><?= $pesanan['alamat'] ?></p>
                                    </div>
                                    <div class="form-check mt-1">
                                        <label class="form-check-label strikethrough" for="checklist1">
                                            No HP:
                                        </label>
                                        <p><?= $pesanan['no_hp'] ?></p>
                                    </div>
                                    <div class="form-check mt-1">
                                        <label class="form-check-label strikethrough" for="checklist1">
                                            Email:
                                        </label>
                                        <p><?= $pesanan['email'] ?></p>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                </div> <!-- container -->
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