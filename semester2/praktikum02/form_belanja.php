<?php
include_once('header.php');
include_once('sidebar.php');

if (isset($_POST['proses'])) {
  $customer = $_POST['customer'];
  $products = $_POST['products'];
  $jumlah = $_POST['jumlah'];

  if ($products == "Asus Vivobook") {
    $harga = 6700000;
    $products = "Asus Vivobook";
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


<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-12 col-md-8">
        <form method="POST" action="form_belanja.php">
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
              <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah" type="text" required="required" class="form-control">
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

    <?php if (isset($_POST['proses'])) { ?>
      <span>Nama Customer : </span> <span><?= $customer; ?></span><br>
      <span>Produk Pilihan : </span><span><?= ucwords($products); ?></span><br>
      <span>Jumlah Beli : </span><span><?= $jumlah; ?></span><br>
      <span>Total Belanja : </span><span><?= number_format($total_belanja, 0, ",", ".") . ",-"; ?></span><br>
    <?php } ?>

  </div>
</body>

</html>