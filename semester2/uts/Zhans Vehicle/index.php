<?php
date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia

include 'koneksi.php';

// cek apakah yang mengakses halaman ini sudah login
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhan's Vehicle</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page-wrapper">
        <!-- Header Start -->
        <div class="main-header clearfix">
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
                                <li class="current"><a href="index.php">Home</a></li>
                                <li class="dropdown">
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

        <!-- Content -->
        <section class="main-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="1500ms">
                                    <div class="main-slider-content">
                                        <h2>Zhan's Vehicle Services</h2>
                                        <p>Dipercaya oleh > 500 Pelanggan di Indonesia!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="search-box">
            <div class="search-box-container">
                <form class="search-box-form">
                    <ul class="list-unstyled search-box-main clearfix mb-0">
                        <li class="search-box-input">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Kendaraan</option>
                                <option value="1">Roda Dua</option>
                                <option value="2">Roda Empat</option>
                            </select>
                        </li>
                        <li class="search-box-input">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Tipe Kendaraan</option>
                                <option value="1">Manual</option>
                                <option value="2">Matic</option>
                                <option value="3">Kopling</option>
                            </select>
                        </li>
                        <li class="search-box-input">
                            <button type="submit" class="search-box-btn">Cari Kendaraan</button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>

        <section class="explore-vehicle">
            <div class="explore-vehicle-container">
                <div class="section-title text-center">
                    <span class="section-title-tagline">Telusuri Penawaran Khusus</span>
                    <h2 class="section-title-title">Jelajahi Kendaraan</h2>
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
                <?php
                $sql = mysqli_query($mysqli, "SELECT * FROM produk, kategori WHERE produk.id_kategori = kategori.id") or die(mysqli_error($mysqli));
                ?>
                <div class="row">
                    <?php
                    $nomor = 1;
                    while ($produk = mysqli_fetch_array($sql)) {  ?>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="explore-vehicle-single">
                                <div class="explore-vehicle-img">
                                    <img src="<?php echo "assets/images/produk/" . $produk['gambar']; ?>" alt="">
                                </div>
                                <div class="explore-vehicle-content">
                                    <h5 class="explore-vehicle-sub-title"><?php echo $produk['nama'] ?></h5>
                                    <h3 class="explore-vehicle-title">
                                        <a href="vehicle-details.php">Honda CIVIC</a>
                                    </h3>
                                    <p class="explore-vehicle-price"><span>Rp.<?= number_format($produk['harga_jual'], 2, ",", "."); ?></span> </p>
                                    <ul class="list-unstyled explore-vehicle-details">

                                        <li><a href="pemesanan.php?id_pd=<?php echo $produk['id_pd'] ?>">Beli</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


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

    <a href="javascript:void(0)" data-target="html" class="scroll-to-target scroll-to-top">
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
            let navContent = document.querySelector(".main-menu-list").outerHTML;
            let mobileNavContainer = document.querySelector(".mobile-nav-container");
            mobileNavContainer.innerHTML = navContent;
        }

        if ($(".mobile-nav-container .main-menu-list").length) {
            let dropdownAnchor = $(".mobile-nav-container .main-menu-list .dropdown > a");
            dropdownAnchor.each(function() {
                let self = $(this);
                let toggleBtn = document.createElement("BUTTON");
                toggleBtn.setAttribute("aria-label", "dropdown toggler");
                toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
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
            let navContent = document.querySelector(".main-menu").innerHTML;
            let mobileNavContainer = document.querySelector(".sticky-header-content");
            mobileNavContainer.innerHTML = navContent;
        }

        if ($(".scroll-to-target").length) {
            $(".scroll-to-target").on("click", function() {
                var target = $(this).attr("data-target");
                // animate
                $("html, body").animate({
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

</html>