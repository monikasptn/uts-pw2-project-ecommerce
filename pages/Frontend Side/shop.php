<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bluech Store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        bluechstore@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +62 888 1921 6811
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="top-social">
                        <a href="https://id-id.facebook.com/"><i class="ti-facebook"></i></a>
                        <a href="https://twitter.com/?lang=id"><i class="ti-twitter-alt"></i></a>
                        <a href="https://id.linkedin.com/"><i class="ti-linkedin"></i></a>
                        <a href="https://id.pinterest.com/"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                        <button type="button" class="category-btn">Kategori</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="Apa yang kamu cari?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                </a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Semua Produk</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Pakaian</a></li>
                            <li><a href="#">Aksesoris</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Beranda</a></li>
                        <li><a href="./shop.php">Belanja</a></li>
                        <li><a href="#">Produk</a>
                            <ul class="dropdown">
                                <li><a href="#">Pakaian</a></li>
                                <li><a href="#">Aksesoris</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">kontak</a></li>
                        <li><a href="#">Halaman</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">Detail Blog</a></li>
                                <li><a href="./shopping-cart.php">Keranjang Belanja</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Daftar</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <spa>Belanja</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Produk</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Pakaian</a></li>
                            <li><a href="#">Aksesoris</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    ZARA
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Converse
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-polo">
                                    Zaful
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
</div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Harga</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="1" data-max="6">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Warna</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Biru/label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Kuning</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Hijau</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Ukuran</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Label</h4>
                        <div class="fw-tags">
                            <a href="#">Tas Gunung</a>
                            <a href="#">Sepatu</a>
                            <a href="#">Tas Salempang</a>
                            <a href="#">Sweater</a>
                            <a href="#">Kardigan</a>
                            <a href="#">Jaket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Pengurutan Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01 - 06 Of 6 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tas Gunung</div>
                                <a href="#">
                                    <h5>Tas Gunung Pria</h5>
                                </a>
                                <div class="product-price">
                                    Rp 54.500
                                    <span>Rp 64.000</span>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Sweater</div>
                                <a href="#">
                                    <h5>Zaful Sweater</h5>
                                </a>
                                <div class="product-price">
                                    Rp 51.547
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Kardigan</div>
                                <a href="#">
                                    <h5>Kardigan Rajut</h5>
                                </a>
                                <div class="product-price">
                                    Rp 51.000
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Jaket</div>
                                <a href="#">
                                    <h5>Jaket Denim</h5>
                                </a>
                                <div class="product-price">
                                    Rp 35.000
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Tas Salempang</div>
                                <a href="#">
                                    <h5>ZARA Tas Salempang</h5>
                                </a>
                                <div class="product-price">
                                    Rp 40.000
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Sepatu</div>
                                <a href="#">
                                    <h5>Sepatu Converse</h5>
                                </a>
                                <div class="product-price">
                                    Rp. 79.000
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Alamat: Beji, Depok, Jawa Barat</li>
                            <li>Telepon: +62 888 1921 6811</li>
                            <li>Email: bluechstore@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="https://id-id.facebook.com/"><i class="ti-facebook"></i></a>
                            <a href="https://twitter.com/?lang=id"><i class="ti-twitter-alt"></i></a>
                            <a href="https://id.linkedin.com/"><i class="ti-linkedin"></i></a>
                            <a href="https://id.pinterest.com/"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informasi</h5>
                        <ul>
                            <li><a href="index.php">Tentang Kami</a></li>
                            <li><a href="check-out.php">Checkout</a></li>
                            <li><a href="contact.php">Kontak</a></li>
                            <li><a href="#">Servis</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Aktivitas</h5>
                        <ul>
                            <li><a href="login.php">Akun Saya</a></li>
                            <li><a href="contact.php">Kontak</a></li>
                            <li><a href="shopping-cart.php">Keranjang Belanja</a></li>
                            <li><a href="shop.php">Belanja</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Bergabunglah dengan Newsletter Kami Sekarang</h5>
                        <p>Dapatkan update E-mail tentang toko terbaru kami dan penawaran khusus.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Masukkan Email Anda">
                            <button type="button">Berlangganan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <li><a href="../../index.php">Kembali</a></li>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>