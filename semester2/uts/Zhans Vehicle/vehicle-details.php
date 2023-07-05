<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhan's Vehicle | Detail Kendaraan</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                    <a href="vehicle-list.php">Beli Kendaraan</a>
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
                            <a href="admin/index.php" class="btn-thm menu-right-btn">Admin</a>
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
                        <li><a href="vehicle-list.php">Beli Kendaraan</a></li>
                        <li><span>/</span></li>
                        <li>Detail Kendaraan</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="vehicle-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="vehicle-details-left">
                            <div class="vehicle-details-gallery clearfix">
                                <div class="vehicle-details-gallery-content-box">
                                    <ul class="bxslider list-unstyled clearfix">
                                        <li>
                                            <div class="vehicle-details-gallery-sliding-img">
                                                <img src="assets/img/mobil/mobil.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vehicle-details-gallery-sliding-img">
                                                <img src="assets/img/mobil/mobil-belakang.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vehicle-details-gallery-sliding-img">
                                                <img src="assets/img/mobil/mobil-depan.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vehicle-details-gallery-sliding-img">
                                                <img src="assets/img/mobil/mobil-stir.png" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="vehicle-details-gallery-sliding-img">
                                                <img src="assets/img/mobil/mobil-analog.png" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider-pager">
                                    <ul class="vehicle-details-thumb-box list-unstyled">
                                        <li>
                                            <a class="active" data-slide-index="1" href="#">
                                                <div class="vehicle-details-img-holder">
                                                    <img src="assets/img/mobil/mobil-belakang.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" data-slide-index="2" href="#">
                                                <div class="vehicle-details-img-holder">
                                                    <img src="assets/img/mobil/mobil-depan.jpg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" data-slide-index="3" href="#">
                                                <div class="vehicle-details-img-holder">
                                                    <img src="assets/img/mobil/mobil-stir.png" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" data-slide-index="4" href="#">
                                                <div class="vehicle-details-img-holder">
                                                    <img src="assets/img/mobil/mobil-analog.png" alt="">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="vehicle-details-desc">
                                <h2 class="vehicle-details-title">Deksripsi</h2>
                                <p class="vehicle-details-text-1">Honda Civic dihadirkan dalam pilihan mesin dengan
                                    bahan bakar bensin. Di Indonesia, sedan yang satu ini dihadirkan dengan mesin
                                    Petrol, kapasitas 1498 cc. dengan mesin ini, Honda Civic bisa menghasilkan tenaga
                                    sampai dengan 171 hp serta torsi puncaknya 220 Nm. Honda Civic 1.5L Turbo ini
                                    dibekali dengan mesin yang memiliki 4 silinder dan katup per silindernya berjumlah
                                    4.</p>
                                <p class="vehicle-details-text-2">Kendaraan roda 4 ini memakai konfigurasi katup dohc.
                                    Lalu rasio kompresinya ialah 10:6:1. Sistem suplai bahan bakarnya memakai PGM-FI.
                                    Nah, lebih jelasnya mesin yang digunakan adalah 1.5L Petrol Engine, 4 Cylinder 16
                                    Valve DOHC. Dengan mesin ini dan rincian di atas, maka kendaraan serupa pun bisa
                                    memberi performa yang handal untuk memenuhi kebutuhanmu dalam berkendara.</p>
                            </div>
                            <div class="vehicle-details-features">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="list-unstyled vehicle-details-features-list">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>AC</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Kursi Kulit</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Musik</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="list-unstyled vehicle-details-features-list">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>AC</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Kursi Kulit</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Musik</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="list-unstyled vehicle-details-features-list">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>AC</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Kursi Kulit</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Musik</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-details-start-booking">
                                <h2 class="vehicle-details-start-booking-title">Beli</h2>
                                <div class="vehicle-details-start-booking-wrapper">
                                    <div class="vehicle-details-start-booking-box tabs-box">
                                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                                            <li data-tab="#booking" class="tab-btn active-btn"><span>Beli</span></li>
                                        </ul>
                                        <div class="tabs-content">
                                            <div class="tab active-tab" id="booking">
                                                <div class="vehicle-details-start-booking-content">
                                                    <form class="vehicle-details-start-booking-form-box">
                                                        <ul
                                                            class="list-unstyled vehicle-details-start-booking-form clearfix">
                                                            <li class="vehicle-details-start-booking-input">
                                                                <label for="">Nama Lengkap</label>
                                                                <input type="text" name="text"
                                                                    placeholder="Write Your Name">
                                                            </li>
                                                            <li class="vehicle-details-start-booking-input">
                                                                <label for="">E-Mail</label>
                                                                <input type="text" name="number"
                                                                    placeholder="E-Mail">
                                                            </li>
                                                            <li class="vehicle-details-start-booking-input">
                                                                <label for="">Nomor Induk Kependudukan</label>
                                                                <input type="text" name="nik"
                                                                    placeholder="NIK">
                                                            </li>
                                                            <br>
                                                            <li class="vehicle-details-start-booking-input pt-1">
                                                                <span>Total Harga: </span>
                                                                <div class="vehicle-details-price">
                                                                    <span>Rp. 22.000.000</span>
                                                                </div>
                                                            </li>
                                                            <li class="vehicle-details-start-booking-input">
                                                                <a href="login.php"
                                                                    class="vehicle-details-start-booking-btn btn-redirect d-block text-center">Beli
                                                                    Sekarang</a>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vehicle-details-tag">
                                <h3 class="vehicle-details-tag-title">Tags</h3>
                                <div class="vehicle-details-tag-list">
                                    <a href="#">2022</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Sport</a>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="vehicle-details-add-review">
                                <h3 class="vehicle-details-add-review-title mb-4">Beri Ulasan</h3>
                                <form class="vehicle-details-add-review-form contact-form-validated">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="vehicle-details-add-review-input-box">
                                                <input type="text" placeholder="Masukan nama" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="vehicle-details-add-review-input-box">
                                                <input type="email" placeholder="Masukan email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="vehicle-details-add-review-input-box">
                                                <textarea name="message"
                                                    placeholder="Tulis ulasan anda disini"></textarea>
                                            </div>
                                            <button type="button" class="btn-thm vehicle-details-add-review-btn">Posting
                                                Ulasan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="vehicle-details-right">
                            <h3 class="listing-deails-right-title">Honda CIVIC</h3>
                            <span class="badge text-bg-success me-2">Tersedia</span>
                            <ul class="list-unstyled listing-deails-right-rating d-inline-block">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <div class="vehicle-details-right-price-box">
                                <div class="vehicle-details-right-price-icon">
                                    <span>Rp</span>
                                </div>
                                <div class="vehicle-details-right-price-text">
                                    <p>22.000.000</p>
                                </div>
                            </div>
                            <div class="vehicle-details-features-box">
                                <div class="vehicle-details-features-title">
                                    <p>Spesifikasi</p>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Merek:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Honda</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Model:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Honda Civic</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Varian:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Honda Civic RS 2022</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Type Body:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Sedan</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Jenis Bahan Bakar:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Bensin</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Tahun Peluncuran:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>2022</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Jenis Transmisi:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>CVT</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Fuel Type:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Petrol</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Tenaga Maksimum:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>176</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Torsi Maksimal:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>240</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Mesin:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>1.5 L</span>
                                    </div>
                                </div>
                                <div class="vehicle-details-features-box-single">
                                    <div class="vehicle-details-features-box-left">
                                        <p>Warna:</p>
                                    </div>
                                    <div class="vehicle-details-features-box-right">
                                        <span>Merah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="explore-vehicle">
            <div class="explore-vehicle-container">
                <div class="section-title text-center">
                    <span class="section-title-tagline">Telusuri Penawaran Khusus</span>
                    <h2 class="section-title-title">Kendaraan Serupa</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="explore-vehicle-single">
                            <div class="explore-vehicle-img">
                                <img src="assets/img/mobil/mobil.jpg" alt="">
                            </div>
                            <div class="explore-vehicle-content">
                                <h5 class="explore-vehicle-sub-title">Roda Empat</h5>
                                <h3 class="explore-vehicle-title">
                                    <a href="vehicle-details.php">Honda CIVIC</a>
                                </h3>
                                <p class="explore-vehicle-price"><span>Rp. 25.000.000 </span></p>
                                <ul class="list-unstyled explore-vehicle-details">
                                    <li><a href="#">2022</a></li>
                                    <li><a href="#">Manual</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="explore-vehicle-single">
                            <div class="explore-vehicle-img">
                                <img src="assets/img/mobil/mobil.jpg" alt="">
                            </div>
                            <div class="explore-vehicle-content">
                                <h5 class="explore-vehicle-sub-title">Roda Empat</h5>
                                <h3 class="explore-vehicle-title">
                                    <a href="vehicle-details.php">Honda CIVIC</a>
                                </h3>
                                <p class="explore-vehicle-price"><span>Rp. 22.000.000 </span></p>
                                <ul class="list-unstyled explore-vehicle-details">
                                    <li><a href="#">2022</a></li>
                                    <li><a href="#">Manual</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="explore-vehicle-single">
                            <div class="explore-vehicle-img">
                                <img src="assets/img/mobil/mobil.jpg" alt="">
                            </div>
                            <div class="explore-vehicle-content">
                                <h5 class="explore-vehicle-sub-title">Roda Empat</h5>
                                <h3 class="explore-vehicle-title">
                                    <a href="vehicle-details.php">Honda CIVIC</a>
                                </h3>
                                <p class="explore-vehicle-price"><span>Rp. 21.000.000 </span></p>
                                <ul class="list-unstyled explore-vehicle-details">
                                    <li><a href="#">2022</a></li>
                                    <li><a href="#">Manual</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                                    © Copyright 2023 by Zhan's
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

    <a href="javascript:void(0)" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script>
        $(window).on('load', function () {
            $('#loading').hide();
        });

        function dynamicCurrentMenuClass(selector) {
            let FileName = window.location.href.split("/").reverse()[0];

            selector.find("li").each(function () {
                let anchor = $(this).find("a");
                if ($(anchor).attr("href") == FileName) {
                    // $(this).addClass("current");
                }
            });
            // if any li has .current elmnt add class
            selector.children("li").each(function () {
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
            let navContent = document.querySelector(".main-menu-list").outerHTML;
            let mobileNavContainer = document.querySelector(".mobile-nav-container");
            mobileNavContainer.innerHTML = navContent;
        }

        if ($(".mobile-nav-container .main-menu-list").length) {
            let dropdownAnchor = $(".mobile-nav-container .main-menu-list .dropdown > a");
            dropdownAnchor.each(function () {
                let self = $(this);
                let toggleBtn = document.createElement("BUTTON");
                toggleBtn.setAttribute("aria-label", "dropdown toggler");
                toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
                self.append(function () {
                    return toggleBtn;
                });
                self.find("button").on("click", function (e) {
                    e.preventDefault();
                    let self = $(this);
                    self.toggleClass("expanded");
                    self.parent().toggleClass("expanded");
                    self.parent().parent().children("ul").slideToggle();
                });
            });
        }

        if ($(".mobile-nav-toggler").length) {
            $(".mobile-nav-toggler").on("click", function (e) {
                e.preventDefault();
                $(".mobile-nav-wrapper").toggleClass("expanded");
                $("body").toggleClass("locked");
            });
        }

        if ($(".sticky-header-content").length) {
            let navContent = document.querySelector(".main-menu").innerHTML;
            let mobileNavContainer = document.querySelector(".sticky-header-content");
            mobileNavContainer.innerHTML = navContent;
        }

        if ($(".scroll-to-target").length) {
            $(".scroll-to-target").on("click", function () {
                var target = $(this).attr("data-target");
                // animate
                $("html, body").animate({
                    scrollTop: $(target).offset().top,
                }, 300);
                return false;
            });
        }

        $(window).on("scroll", function () {
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

        if ($('.vehicle-details-gallery .bxslider').length) {
            $('.vehicle-details-gallery .bxslider').bxSlider({
                nextSelector: '.vehicle-details-gallery #slider-next',
                prevSelector: '.vehicle-details-gallery #slider-prev',
                nextText: '<i class="icon-right-arrow1"></i>',
                prevText: '<i class="icon-right-arrow1 icon-prev"></i>',
                mode: 'horizontal',
                auto: 'true',
                speed: '1000',
                pagerCustom: '.vehicle-details-gallery .slider-pager .vehicle-details-thumb-box'
            });
        }
    </script>
</body>

</html>