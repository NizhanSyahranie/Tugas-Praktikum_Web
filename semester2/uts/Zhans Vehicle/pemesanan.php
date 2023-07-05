<?php
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

include 'koneksi.php';

// cek apakah yang mengakses halaman ini sudah login
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zhan's Vehicle | Beli</title>
        <link rel="stylesheet" href="assets/css/master.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div id="loading">
            <img id="loading-image" src="assets/img/loader.gif" alt="Loading..." />
        </div>
        <div class="page-wrapper">
            <!-- Header Start -->
            <div class="main-header main-header-dark clearfix">
                <nav class="main-menu clearfix">
                    <div class="main-menu-header clearfix">
                        <div class="menu-left">
                            <div class="menu-left-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo.png" width="35" alt="">
                                </a>
                            </div>
                            <div class="menu-left-main-menu">
                                <a href="#" class="mobile-nav-toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu-list">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown current">
                                        <a href="vehicle-list.php">List Kendaraan</a>
                                        <ul>
                                            <li><a href="vehicle-list.php">Roda Dua</a></li>
                                            <li><a href="vehicle-list.php">Roda Empat</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="menu-right">
                            <div class="menu-right-btn-box">
                                <a href="admin/index.php" class="btn-thm menu-right-btn">Masuk</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header-content"></div>
            </div>
            <!-- Header End -->

            <!--Breadcrumb-->
            <section class="breadcrumb-top">
                <div class="breadcrumb-top-container">
                    <div class="breadcrumb-top-left">
                        <ul class=" list-unstyled breadcrumb-top-menu">
                            <li><a href="index.php">Home</a></li>
                            <li><span>/</span></li>
                            <li>List Kendaraan</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="explore-vehicle">
                <div class="explore-vehicle-container">
                    <div class="section-title text-center">
                        <span class="section-title-tagline">Telusuri Penawaran Khusus</span>
                        <h2 class="section-title-title">Daftar Kendaraan</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-xl-12">
                            <div class="vehicle-filter">
                                <div class="vehicle-filter-shorting-box">
                                    <div class="vehicle-filter-shorting-input text-nowrap">
                                        <span>Kategori:</span>
                                        <select class="form-select d-inline-block" aria-label="Default select example">
                                            <option selected disabled>Pilih Kategori</option>
                                            <option value="1">Roda Dua</option>
                                            <option value="2">Roda Empat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="vehicle-filter-shorting-box">
                                    <div class="vehicle-filter-shorting-input text-nowrap">
                                        <span>Tipe:</span>
                                        <select class="form-select d-inline-block" aria-label="Default select example">
                                            <option selected disabled>Pilih Tipe</option>
                                            <option value="1">Manual</option>
                                            <option value="2">Matic</option>
                                            <option value="2">Kopling</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Steps Information -->
                                    <div class="tab-content">
                                        <?php $id_pd = $_GET['id_pd'];

                                        $sql    = mysqli_query($mysqli, "SELECT * FROM produk,kategori WHERE produk.id_kategori = kategori.id AND id_pd='$id_pd'");
                                        $produk    = mysqli_fetch_array($sql);
                                        date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
                                        ?>

                                        <!-- Billing Content-->
                                        <div class="tab-pane show active" id="billing-information">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mt-2">Checkout</h4>

                                                    <p class="text-muted mb-4">invoice.</p>

                                                    <form method="post" action="proses_trx.php">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="nama_psn" class="form-label">Nama</label>
                                                                    <input class="form-control" type="text" placeholder="Nama" id="nama_psn" name="nama_psn">
                                                                    <input class="form-control" type="hidden" id="tgl" name="tgl" value="<?php echo date('Y-m-d'); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="no_hp" class="form-label">No Hp</label>
                                                                    <input class="form-control" type="text" placeholder="No Hp" id="no_hp" name="no_hp">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                                                    <input class="form-control" type="email" placeholder="Email" id="email" name="email">
                                                                </div>
                                                            </div>

                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
                                                                    <input class="form-control" type="text" placeholder="Alamat" id="alamat" name="alamat">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="mb-3">
                                                                    <label for="jumlah" class="form-label">Jumlah<span class="text-danger">*</span></label>
                                                                    <input class="form-control" type="number" placeholder="Jumlah" id="jumlah" name="jumlah">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="mb-3">
                                                                    <label for="cpo" class="form-label">Catatan pesanan opsional:</label>
                                                                    <textarea class="form-control" id="cpo" name="cpo" rows="3" placeholder="Write some note.."></textarea>
                                                                    <input class="form-control" type="hidden" id="id_pd" name="id_pd" value="<?= $produk['id_pd'] ?>">
                                                                    <input class="form-control" type="hidden" id="harga_jual" name="harga_jual" value="<?= $produk['harga_jual'] ?>">
                                                                    <input class="form-control" type="hidden" id="stok" name="stok" value="<?= $produk['stok'] ?>">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->

                                                        <div class="row mt-4">
                                                            <div class="col-sm-6">
                                                                <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                    <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                            </div> <!-- end col -->
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <button type="submit" name="submit" id="submit" class="btn btn-danger"><i class="mdi mdi-truck-fast me-1"></i> Proceed to Shipping </button>

                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">

                                                        <div class="table-responsive">
                                                            <table class="table table-centered mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="<?php echo "../assets/images/produk/" . $produk['gambar']; ?>" alt="contact-img" title="contact-img" class="rounded me-2" height="50">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold"><?= $produk['nama'] ?></a>
                                                                                <br>
                                                                                <small> <?= $produk['nama_kg'] ?></small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            Rp.<?= number_format($produk['harga_jual'], 2, ",", "."); ?>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end table-responsive -->
                                                    </div> <!-- end .border-->

                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div>
                                        <!-- End Billing Information Content-->

                                        <!-- Shipping Content-->
                                        <div class="tab-pane" id="shipping-information">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mt-2">Saved Address</h4>

                                                    <p class="text-muted mb-3">Fill the form below in order to
                                                        send you the order's invoice.</p>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="border p-3 rounded mb-3 mb-md-0">
                                                                <address class="mb-0 address-lg">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio1" name="customRadio" class="form-check-input" checked="">
                                                                        <label class="form-check-label font-16 fw-bold" for="customRadio1">Home</label>
                                                                    </div>
                                                                    <br>
                                                                    <span class="fw-semibold">Stanley Jones</span> <br>
                                                                    795 Folsom Ave, Suite 600<br>
                                                                    San Francisco, CA 94107<br>
                                                                    <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                                                </address>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="border p-3 rounded">
                                                                <address class="mb-0 address-lg">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="customRadio2">Office</label>
                                                                    </div>
                                                                    <br>
                                                                    <span class="fw-semibold">Stanley Jones</span> <br>
                                                                    795 Folsom Ave, Suite 600<br>
                                                                    San Francisco, CA 94107<br>
                                                                    <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                                                </address>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end row-->

                                                    <h4 class="mt-4">Add New Address</h4>

                                                    <p class="text-muted mb-4">Fill the form below so we can
                                                        send you the order's invoice.</p>

                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-first-name" class="form-label">First Name</label>
                                                                    <input class="form-control" type="text" placeholder="Enter your first name" id="new-adr-first-name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-last-name" class="form-label">Last Name</label>
                                                                    <input class="form-control" type="text" placeholder="Enter your last name" id="new-adr-last-name">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-email-address" class="form-label">Email Address <span class="text-danger">*</span></label>
                                                                    <input class="form-control" type="email" placeholder="Enter your email" id="new-adr-email-address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                                                    <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="new-adr-phone">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-address" class="form-label">Address</label>
                                                                    <input class="form-control" type="text" placeholder="Enter full address" id="new-adr-address">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-town-city" class="form-label">Town / City</label>
                                                                    <input class="form-control" type="text" placeholder="Enter your city name" id="new-adr-town-city">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-state" class="form-label">State</label>
                                                                    <input class="form-control" type="text" placeholder="Enter your state" id="new-adr-state">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="new-adr-zip-postal" class="form-label">Zip / Postal Code</label>
                                                                    <input class="form-control" type="text" placeholder="Enter your zip code" id="new-adr-zip-postal">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Country</label>
                                                                    <select data-toggle="select2" title="Country">
                                                                        <option value="0">Select Country</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->

                                                        <h4 class="mt-4">Shipping Method</h4>

                                                        <p class="text-muted mb-3">Fill the form below in order to
                                                            send you the order's invoice.</p>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded mb-3 mb-md-0">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="shippingMethodRadio1" name="shippingOptions" class="form-check-input" checked="">
                                                                        <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio1">Standard Delivery - FREE</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">Estimated 5-7 days shipping (Duties and tax may be due upon delivery)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="shippingMethodRadio2" name="shippingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio2">Fast Delivery - $25</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">Estimated 1-2 days shipping (Duties and tax may be due upon delivery)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row-->

                                                        <div class="row mt-4">
                                                            <div class="col-sm-6">
                                                                <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                    <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                            </div> <!-- end col -->
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                        <i class="mdi mdi-cash-multiple me-1"></i> Continue to Payment </a>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </form>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">Order Summary</h4>

                                                        <div class="table-responsive">
                                                            <table class="table table-centered mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Amazing Modern Chair</a>
                                                                                <br>
                                                                                <small>5 x $148.66</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $743.30
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-2.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Designer Awesome Chair</a>
                                                                                <br>
                                                                                <small>2 x $99.00</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $198.00
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Biblio Plastic Armchair</a>
                                                                                <br>
                                                                                <small>1 x $129.99</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $129.99
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h6 class="m-0">Sub Total:</h6>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $1071.29
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h6 class="m-0">Shipping:</h6>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            FREE
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h5 class="m-0">Total:</h5>
                                                                        </td>
                                                                        <td class="text-end fw-semibold">
                                                                            $1071.29
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end table-responsive -->
                                                    </div> <!-- end .border-->

                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div>
                                        <!-- End Shipping Information Content-->

                                        <!-- Payment Content-->
                                        <div class="tab-pane" id="payment-information">
                                            <div class="row">

                                                <div class="col-lg-8">
                                                    <h4 class="mt-2">Payment Selection</h4>

                                                    <p class="text-muted mb-4">Fill the form below in order to
                                                        send you the order's invoice.</p>

                                                    <!-- Pay with Paypal box-->
                                                    <div class="border p-3 mb-3 rounded">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-check">
                                                                    <input type="radio" id="BillingOptRadio2" name="billingOptions" class="form-check-input">
                                                                    <label class="form-check-label font-16 fw-bold" for="BillingOptRadio2">Pay with Paypal</label>
                                                                </div>
                                                                <p class="mb-0 ps-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                            </div>
                                                            <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                <img src="assets/images/payments/paypal.png" height="25" alt="paypal-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Pay with Paypal box-->

                                                    <!-- Credit/Debit Card box-->
                                                    <div class="border p-3 mb-3 rounded">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-check">
                                                                    <input type="radio" id="BillingOptRadio1" name="billingOptions" class="form-check-input" checked="">
                                                                    <label class="form-check-label font-16 fw-bold" for="BillingOptRadio1">Credit / Debit Card</label>
                                                                </div>
                                                                <p class="mb-0 ps-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>
                                                            </div>
                                                            <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                <img src="assets/images/payments/master.png" height="24" alt="master-card-img">
                                                                <img src="assets/images/payments/discover.png" height="24" alt="discover-card-img">
                                                                <img src="assets/images/payments/visa.png" height="24" alt="visa-card-img">
                                                                <img src="assets/images/payments/stripe.png" height="24" alt="stripe-card-img">
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row mt-4">
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label for="card-number" class="form-label">Card Number</label>
                                                                    <input type="text" id="card-number" class="form-control" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="card-name-on" class="form-label">Name on card</label>
                                                                    <input type="text" id="card-name-on" class="form-control" placeholder="Master Shreyu">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="mb-3">
                                                                    <label for="card-expiry-date" class="form-label">Expiry date</label>
                                                                    <input type="text" id="card-expiry-date" class="form-control" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="mb-3">
                                                                    <label for="card-cvv" class="form-label">CVV code</label>
                                                                    <input type="text" id="card-cvv" class="form-control" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end row -->
                                                    </div>
                                                    <!-- end Credit/Debit Card box-->

                                                    <!-- Pay with Payoneer box-->
                                                    <div class="border p-3 mb-3 rounded">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-check">
                                                                    <input type="radio" id="BillingOptRadio3" name="billingOptions" class="form-check-input">
                                                                    <label class="form-check-label font-16 fw-bold" for="BillingOptRadio3">Pay with Payoneer</label>
                                                                </div>
                                                                <p class="mb-0 ps-3 pt-1">You will be redirected to Payoneer website to complete your purchase securely.</p>
                                                            </div>
                                                            <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                <img src="assets/images/payments/payoneer.png" height="30" alt="paypal-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Pay with Payoneer box-->

                                                    <!-- Cash on Delivery box-->
                                                    <div class="border p-3 mb-3 rounded">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="form-check">
                                                                    <input type="radio" id="BillingOptRadio4" name="billingOptions" class="form-check-input">
                                                                    <label class="form-check-label font-16 fw-bold" for="BillingOptRadio4">Cash on Delivery</label>
                                                                </div>
                                                                <p class="mb-0 ps-3 pt-1">Pay with cash when your order is delivered.</p>
                                                            </div>
                                                            <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                <img src="assets/images/payments/cod.png" height="22" alt="paypal-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end Cash on Delivery box-->

                                                    <div class="row mt-4">
                                                        <div class="col-sm-6">
                                                            <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                        </div> <!-- end col -->
                                                        <div class="col-sm-6">
                                                            <div class="text-sm-end">
                                                                <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                    <i class="mdi mdi-cash-multiple me-1"></i> Complete Order </a>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row-->

                                                </div> <!-- end col -->

                                                <div class="col-lg-4">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">Order Summary</h4>

                                                        <div class="table-responsive">
                                                            <table class="table table-centered mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Amazing Modern Chair</a>
                                                                                <br>
                                                                                <small>5 x $148.66</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $743.30
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-2.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Designer Awesome Chair</a>
                                                                                <br>
                                                                                <small>2 x $99.00</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $198.00
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="assets/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-2" height="48">
                                                                            <p class="m-0 d-inline-block align-middle">
                                                                                <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Biblio Plastic Armchair</a>
                                                                                <br>
                                                                                <small>1 x $129.99</small>
                                                                            </p>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $129.99
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h6 class="m-0">Sub Total:</h6>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            $1071.29
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h6 class="m-0">Shipping:</h6>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            FREE
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="text-end">
                                                                        <td>
                                                                            <h5 class="m-0">Total:</h5>
                                                                        </td>
                                                                        <td class="text-end fw-semibold">
                                                                            $1071.29
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end table-responsive -->
                                                    </div> <!-- end .border-->

                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div>
                                        <!-- End Payment Information Content-->

                                    </div> <!-- end tab content-->

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                </div>
            </section>

            <footer class="site-footer">
                <div class="site-footer-bg" style="background-image: url(assets/img/footer.jpg)">
                </div>
                <div class="container">
                    <div class="site-footer-top">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="footer-widget-column footer-widget-about">
                                    <div class="footer-widget-about-logo">
                                        <a href="index.php"><img src="assets/img/logo.png" width="35" alt=""></a>
                                    </div>
                                    <p class="footer-widget-about-text">Zhan's Vehicle adalah platform peminjaman online kendaraan terpecaya, yang mementingkan keamanan berkendara.</p>
                                    <a href="#" class="btn-thm footer-widget-about-btn">Beli Sekarang</a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="footer-widget-column footer-widget-explore clearfix">
                                    <h3 class="footer-widget-title">Jelajahi</h3>
                                    <ul class="footer-widget-explore-list footer-widget-explore-list-width list-unstyled">
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Cara Memesan</a></li>
                                        <li><a href="#">Paket Harga</a></li>
                                        <li><a href="#">Tips Keamanan</a></li>
                                    </ul>
                                    <ul class="footer-widget-explore-list footer-widget-explore-list-two list-unstyled">
                                        <li><a href="#">Agen Kami</a></li>
                                        <li><a href="#">Kontak</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="footer-widget-column footer-widget-contact">
                                    <h3 class="footer-widget-title">Kontak</h3>
                                    <ul class="list-unstyled footer-widget-contact-list">
                                        <li>
                                            <div class="icon">
                                                <span><i class="fa fa-map-location"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Jakarta Selatan, Indonesia</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span><i class="fa fa-clock"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Rab - Min 8:00 - 20:00</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:ovehicle@help.com">zhansvehicle@help.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span><i class="fa fa-phone"></i></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:021-234-567-8910">021-234-567-8910</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="footer-widget-column footer-widget-newsletter">
                                    <h3 class="footer-widget-title">Newsletter</h3>
                                    <p class="footer-widget-newsletter-text">Berlangganan Blog dan Tips Terbaru</p>
                                    <form class="footer-widget-newsletter-form">
                                        <div class="footer-widget-newsletter-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="footer-widget-newsletter-btn">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="site-footer-bottom-inner">
                                    <div class="site-footer-social">
                                        <a href="#"><i class="fab fa-gitlab"></i></a>
                                        <a href="#" class="clr-fb"><i class="fab fa-github"></i></a>
                                        <a href="#" class="clr-ins"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                    <p class="site-footer-bottom-copy-right">
                                        © Copyright 2023 by Zhan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>

        <div class="mobile-nav-wrapper">
            <div class="mobile-nav-overlay mobile-nav-toggler"></div>
            <div class="mobile-nav-content">
                <span class="mobile-nav-close mobile-nav-toggler"><i class="fa fa-times"></i></span>
                <div class="logo-box">
                    <a href="index.php" aria-label="logo image">
                        <img src="assets/img/logo.png" width="25" alt="" />
                    </a>
                </div>
                <div class="mobile-nav-container"></div>
            </div>
        </div>

        <a href="javascript:void(0)" data-target="php" class="scroll-to-target scroll-to-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(window).on('load', function() {
                $('#loading').hide();
            });

            function dynamicCurrentMenuClass(selector) {
                let FileName = window.location.href.split("/").reverse()[0];

                selector.find("li").each(function() {
                    let anchor = $(this).find("a");
                    if ($(anchor).attr("href") == FileName) {
                        // $(this).addClass("current");
                    }
                });
                // if any li has .current elmnt add class
                selector.children("li").each(function() {
                    if ($(this).find(".current").length) {
                        $(this).addClass("current");
                    }
                });
                // if no file name return
                if ("" == FileName) {
                    selector.find("li").eq(0).addClass("current");
                }
            }

            if ($(".main-menu-list").length) {
                // dynamic current class
                let mainNavUL = $(".main-menu-list");
                dynamicCurrentMenuClass(mainNavUL);
            }

            if ($(".main-menu-list").length && $(".mobile-nav-container").length) {
                let navContent = document.querySelector(".main-menu-list").outerphp;
                let mobileNavContainer = document.querySelector(".mobile-nav-container");
                mobileNavContainer.innerphp = navContent;
            }

            if ($(".mobile-nav-container .main-menu-list").length) {
                let dropdownAnchor = $(".mobile-nav-container .main-menu-list .dropdown > a");
                dropdownAnchor.each(function() {
                    let self = $(this);
                    let toggleBtn = document.createElement("BUTTON");
                    toggleBtn.setAttribute("aria-label", "dropdown toggler");
                    toggleBtn.innerphp = "<i class='fa fa-angle-down'></i>";
                    self.append(function() {
                        return toggleBtn;
                    });
                    self.find("button").on("click", function(e) {
                        e.preventDefault();
                        let self = $(this);
                        self.toggleClass("expanded");
                        self.parent().toggleClass("expanded");
                        self.parent().parent().children("ul").slideToggle();
                    });
                });
            }

            if ($(".mobile-nav-toggler").length) {
                $(".mobile-nav-toggler").on("click", function(e) {
                    e.preventDefault();
                    $(".mobile-nav-wrapper").toggleClass("expanded");
                    $("body").toggleClass("locked");
                });
            }

            if ($(".sticky-header-content").length) {
                let navContent = document.querySelector(".main-menu").innerphp;
                let mobileNavContainer = document.querySelector(".sticky-header-content");
                mobileNavContainer.innerphp = navContent;
            }

            if ($(".scroll-to-target").length) {
                $(".scroll-to-target").on("click", function() {
                    var target = $(this).attr("data-target");
                    // animate
                    $("php, body").animate({
                        scrollTop: $(target).offset().top,
                    }, 300);
                    return false;
                });
            }

            $(window).on("scroll", function() {
                if ($(".stricked-menu").length) {
                    var headerScrollPos = 130;
                    var stricky = $(".stricked-menu");
                    if ($(window).scrollTop() > headerScrollPos) {
                        stricky.addClass("stricky-fixed");
                    } else if ($(this).scrollTop() <= headerScrollPos) {
                        stricky.removeClass("stricky-fixed");
                    }
                }
                if ($(".scroll-to-top").length) {
                    var strickyScrollPos = 100;
                    if ($(window).scrollTop() > strickyScrollPos) {
                        $(".scroll-to-top").fadeIn(500);
                    } else if ($(this).scrollTop() <= strickyScrollPos) {
                        $(".scroll-to-top").fadeOut(500);
                    }
                }
            });
        </script>
    </body>

</php>