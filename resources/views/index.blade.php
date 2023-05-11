<!DOCTYPE html>
<html lang="en">

@csrf

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Internship BMKG Juanda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="/img/bmkg.png" rel="icon">
    <link href="/img/bmkg.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="/vendor/landing/aos/aos.css" rel="stylesheet">
    <link href="/vendor/landing/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/landing/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/landing/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/landing/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/landing/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/css/landing.css" rel="stylesheet">
</head>

<body>
    {{-- Coment --}}
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <a href="/">
                    <h1><img src="/img/bmkg.png" alt="" class="/img-fluid"> BMKG JUANDA
                </a></h1>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>Pengajuan dan Aktivitas Internship BMKG Juanda</h1>
                        <h2>Selamat datang di halaman Sistem Informasi Pengajuan dan Aktivitas PKL/Magang BMKG Juanda
                        </h2>
                        <a href="/login" class="btn-get-started scrollto">Login</a>
                    </div>
                </div>
                <div class="col-lg-2 order-1 order-lg-2 hero-img" data-aos="fade-left">
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="/img/bmkg.png" class="/img-fluid" alt="" style="width:300px;height:300px;">
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 style="text-align: center;font-weight:500;">Layanan</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Mekanisme</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-group"></i></div>
                            <h4 class="title"><a href="">Kouta </a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-pen"></i></div>
                            <h4 class="title"><a href="/indexuser">Pengajuan</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bx-book"></i></div>
                            <h4 class="title"><a href="">Logbook</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <h1 style="text-align: center;font-weight: 600;">INFORMASI</h1>
                <br><br>
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Alur Pendaftaran</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
                <br>
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>F.A.Q</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                            erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque
                            varius morbi enim nunc faucibus a pellentesque? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                            consectetur adipiscing elit pellentesque habitant morbi? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci
                            dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i
                                class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                            pellentesque nec nam aliquam sem et tortor consequat? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus
                            faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 style="text-align: center;font-weight:500;">Quotes</h2>
                    <h5>“Kesuksesan dan kebahagiaan terletak pada diri sendiri. Tetaplah berbahagia, dan kebahagiaanmu
                        dan kamu akan membentuk sebuah karakter kuat melawan kesulitan.” </h5>
                    <h5>- Helen Keller -</h5>
                </div>
            </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>BMKG Juanda</h3>
                            <p>
                                Jl. Raya Bandara Juanda, Pranti, Kec.<br>
                                Sedati, Kabupaten Sidoarjo, Jawa Timur<br><br>
                                <strong>Phone:</strong> (031) 8667540<br>
                                <strong>Email:</strong> stamet.juanda@bmkg.go.id<br>
                            </p>
                            <br>
                            <div class="social-links mt-3">
                                <a href="https://api.whatsapp.com/send/?phone=6281216521112&text&app_absent=0"
                                    class="whatsapp"><i class="bi bi-whatsapp"></i></a>&ensp;
                                <a href="https://www.instagram.com/infobmkgjuanda/" class="instagram"><i
                                        class="bi bi-instagram"></i></a>&ensp;
                                <a href="https://www.youtube.com/channel/UCYsIZFg-1YwSinDvWHVcb6w" class="youtube"><i
                                        class="bi bi-youtube"></i></a>&ensp;
                                <a href="https://twitter.com/infobmkgjuanda" class="twitter"><i
                                        class="bi bi-twitter"></i></a>&ensp;
                                <a href="https://www.facebook.com/infobmkgjuanda" class="facebook"><i
                                        class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5   col-md-8 footer-newsletter">

                        <div class="d-flex align-items-center mt-2">
                            <iframe style="border:0; width: 500px; height: 230px;"
                                src=https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15827.331999849663!2d112.7822002!3d-7.372607!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x156f0f7996b7b1ef!2sBMKG%20Stasiun%20Meteorologi%20Kelas%20I%20Juanda%20-%20Sidoarjo!5e0!3m2!1sid!2sid!4v1649444121230!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-5 footer-links">
                        <div class="d-flex align-items-center">
                            <h4><b>Link Terkait</b></h4>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://www.bmkg.go.id/" target="_blank">
                                    <p>> BMKG Kantor Pusat</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://maritim.bmkg.go.id/" target="_blank">
                                    <p>> Info Cuaca Maritim</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://aviation.bmkg.go.id/" target="_blank">
                                    <p>> Info Cuaca Penerbangan</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://peta-maritim.bmkg.go.id/ofs/" target="_blank">
                                    <p>> BMKG OFS</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://signature.bmkg.go.id/" target="_blank">
                                    <p>> BMKG Signature</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://peta-maritim.bmkg.go.id/ofs/" target="_blank">
                                    <p>> BMKG OFS</p>
                                </a></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 footer-links">
                        <div class="d-flex align-items-center">
                            <h4><b><br></b></h4>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://stmkg.ac.id/" target="_blank">
                                    <p>> STMKG</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://flightdocbwi.com/" target="_blank">
                                    <p>> Flight Document WADY</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://karangploso.jatim.bmkg.go.id/index.php/e-buletin-untuk-kota-dan-kabupaten-di-provinsi-jawa-timur"
                                    target="_blank">
                                    <p>> Prakiraan Curah Hujan Bulanan Jatim</p>
                                </a></i>
                        </div>
                        <div class="d-flex align-items-center mt-0">
                            <i><a href="https://inatews.bmkg.go.id/" target="_blank">
                                    <p>> Indonesia Tsunawi Early Warning System</p>
                                </a></i>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>BMKG Juanda</span></strong>. All Rights Reserved. Designed by TIM PKL D3
                SI UNAIR 2022
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/vendor/landing/aos/aos.js"></script>
    <script src="/vendor/landing/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/landing/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/landing/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/landing/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/landing/php-email-form/validate.js"></script>
    <script src="/js/landing.js"></script>

</body>

</html>
