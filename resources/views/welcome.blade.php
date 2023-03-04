<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>bengkel kendaraan </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="#" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="">
                <h1>KliKkSwaZz<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="index.html#features">Cara Kerja</a></li>
                    <li><a class="nav-link scrollto" href="index.html#featured-services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="index.html#team">Mekanik</a></li>
                    <li><a class="nav-link scrollto" href="index.html#footer">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <a class="btn-getstarted scrollto" href="/login">LOG-IN</a>

        </div>
    </header><!-- End Header -->
    {{-- ===== gambar===== --}}
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            <div class="container">
                <img src="assets/img/hero-carousel/mogok.jpg" alt="Notebook" style="width:100%;">
                <div class="content">
                    <h2 style="color:white;">Welcome to <span>KliKkSwaZz</span></h2>
                    <p style="color: #ffffff">KENDARAANMU BERMASALAH KliKkSwaZz SOLUSINYA</p>
                </div>
            </div>
            <style>
                .container {
                    position: center;
                    max-width: 1300px;
                    margin: 0 auto;
                }

                .container .content {
                    position: absolute;
                    bottom: 0;
                    background: rgba(0, 0, 0, 0.398);
                    color: #ffffff;
                    width: 1251px;
                    padding: 20px;
                }
            </style>
        </div>
    </section>

    <main id="main">


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Cara Kerja</h2>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-binoculars color-cyan"></i>
                            <h4>Hubungi Kami</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-box-seam color-indigo"></i>
                            <h4>penjadwalan</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-brightness-high color-teal"></i>
                            <h4>diagnosa</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-command color-red"></i>
                            <h4>perbaikan</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Hubungi Kami</h3>
                                <p class="fst-italic">
                                    jadwalkan servis mobil Anda online dan mekanik kami akan datang dimanapun Anda
                                    berada. Semua prosesnya sangat mudah.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i>Masukan informasi mobil Anda bedasarkan
                                        merek, tahun, dan tipe</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Pilih jenis servis dan sparepart yang
                                        Anda butuhkan</li>
                                    <li><i class="bi bi-check-circle-fill"></i>Berikan informasi Anda (nama, lokasi,
                                        nomor telpon, dll)</li>
                                </ul>
                                <p>
                                    Selain itu harga servis kami juga lebih rendah dari harga bengkel karena kami tidak
                                    mempunyai bengkel fisik sehingga biaya operasional kami lebih rendah.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>penjadwalan</h3>
                                <p>
                                    Anda tidak perlu lagi membawa mobil Anda ke bengkel. Mekanik kami akan datang ke
                                    lokasi Anda sesuai pesanan dengan membawa semua peralatan dan spareparts yang
                                    dibutuhkan. Anda hanya perlu mempersiapkan lokasi yang memadai untuk servis
                                    mobilnya.
                                </p>
                                <p class="fst-italic">
                                    Bagaimana jika mobil Anda perlu servis tambahan?
                                </p>
                                {{-- <ul>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                    <li><i class="bi bi-check-circle-fill"></i> ...</li>
                                </ul> --}}
                                <p class="fst-italic">
                                    Mekanik kami akan membawa sparepart umum yang sering diganti seperti filter udara,
                                    filter cabin / AC, busi, wiper dan sparepart lainnya. Jika salah satu dari komponen
                                    ini butuh penggantian, maka penggantian bisa langsung dilakukan saat servis
                                    tersebut. Tapi jika sparepart yang dibutuhkan bersifat tidak umum, maka tim servis
                                    kami akan menghubungi Anda dan menjadwalkan servis untuk penggantian sparepart
                                    tersebut.
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-2.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>Diagnosa</h3>
                                <p>
                                    ...
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> ...</li>
                                    <li><i class="bi bi-check-circle-fill"></i> ...</li>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                </ul>
                                <p class="fst-italic">
                                    ...
                                </p>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-3.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>perbaikan</h3>
                                <p>
                                    ...
                                </p>
                                <p class="fst-italic">
                                    ...
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> ...</li>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                    <li><i class="bi bi-check-circle-fill"></i>...</li>
                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="assets/img/features-4.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                </div>

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <div class="section-header">
                    <h2>Layanan</h2>
                </div>
                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Service Berkala</a></h4>
                            <p>Proses perawatan dan perbaikan rutin kendaraan yang meliputi penggantian pelumas pada
                                mesin untuk menjaga performa mesin.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Mesin</a></h4>
                            <p>Perawatan dan perbaikan engine sistem meliputi engine electrical diagnosis, mecanical
                                engine serta sistem pelumasan dan pendinginan mesin.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Kaki-kaki</a></h4>
                            <p>Perbaikan dan perawatan yang meliputi automatic / manual transmission, suspension system,
                                brake system, steering system dan drive sistem.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">AC / Electrical</a></h4>
                            <p>Perbaikan dan perawatan Air Conditioner, electrical wiring system dan electrical
                                component.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- End Featured Services Section logo -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>
            </div>
        </section><!-- End Clients Section -->
        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Mekanik</h2>
                </div>

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Febriansyah irawan</h4>
                                <span>Ceo dan mekanik</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Parid muhsin</h4>
                                <span>mekanik</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                                <h4>Adi saputra</h4>
                                <span>mekanik</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="section-header">
            <h2>kontak</h2>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>KliKkSwaZz</h3>
                            <p>
                                SMK YPC <br>
                                TASIKMALAYA<br><br>
                                <strong>Phone:</strong> 083132334395<br>
                                <strong>Email:</strong> jmbnagra@gmail.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Layanan</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Mekanik</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>KliKkSwaZz</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://smk-ypc.sch.id/">SMK YPC</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
