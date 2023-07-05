<?php
include_once('header.php');
include_once('sidebar.php');

if (isset($_POST['proses'])) {
    $customer = $_POST['customer'];
    $products = $_POST['products'];
    $jumlah = $_POST['jumlah'];
  
    if ($products == "Asus Vivobook") {
      $products = "Asus Vivobook";
      $harga = 6700000;
    } else if ($products == "Lenovo Y91") {
      $products = "Lenovo Y91";
      $harga = 2100000;
    } else {
      $products = "Poco F4";
      $harga = 3500000;
    }
  
    $total_belanja = $jumlah * $harga;
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Praktikum 2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tugas Praktikum</a></li>
                        <li class="breadcrumb-item active">Praktikum 2</li>
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
                        Praktikum 2
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <form method="POST" action="./praktikum02.php">
                                <h1>Belanja Online</h1>
                                <hr>
                                <div class="form-group row">
                                    <label for="customer" class="col-3 col-form-label">Customer</label>
                                    <div class="col-9">
                                        <input id="customer" name="customer" placeholder="Masukan Customer" type="text" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3">Pilih Produk</label>
                                    <div class="col-9">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="products" id="products_0" type="radio" class="custom-control-input" value="Asus_Vivobook" required="required">
                                            <label for="products_0" class="custom-control-label">Asus Vivobook</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="products" id="products_1" type="radio" class="custom-control-input" value="Lenovo_Y91" required="required">
                                            <label for="products_1" class="custom-control-label">Lenovo Y91</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="products" id="products_2" type="radio" class="custom-control-input" value="Poco_F4" required="required">
                                            <label for="products_2" class="custom-control-label">Poco F4</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-3 col-form-label">Jumlah</label>
                                    <div class="col-9">
                                        <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah" type="number" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-3 col-9">
                                        <button type="submit" name="proses" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                                <li class="list-group-item">Asus Vivobook : 6.700.000</li>
                                <li class="list-group-item">Lenovo Y91 : 2.100.000</li>
                                <li class="list-group-item">Poco F4 : 3.500.000</li>
                                <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                            </ul>
                        </div>
                    </div>

                    <?php if (isset($_POST['proses'])) : ?>
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Nama Customer</th>
                                    <th scope="col">Produk Pilihan</th>
                                    <th scope="col">Jumlah Beli</th>
                                    <th scope="col">Total Belanja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $customer; ?></td>
                                    <td><?= ucwords($products); ?></td>
                                    <td><?= $jumlah; ?></td>
                                    <td><?= number_format($total_belanja, 0, ",", ".") . ",-"; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>