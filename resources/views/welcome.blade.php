<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT BATU MULIA SAKARYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ Vite::asset("resources/img/favicon.jpg") }}" rel="icon">
    <link href="{{ Vite::asset("resources/img/apple-touch-icon.jpeg") }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset("lib/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset("lib/nivo-slider/css/nivo-slider.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/owlcarousel/owl.carousel.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/owlcarousel/owl.transitions.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/animate/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/venobox/venobox.css") }}" rel="stylesheet">

    @vite(["resources/js/app.js", "resources/css/app.css"])

</head>

<body data-spy="scroll" data-target="#navbar-example">

    <div id="preloader"></div>

    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <h1><span>PT</span>BatuMuliaSakarya</h1>
                                    <!-- Uncomment below if you prefer to use an image logo -->
                                    <!-- <img src="img/logo.png" alt="" title=""> -->
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                                    </li>

                                    <li class="dropdown"><a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href=#>Drop Down 1</a></li>
                                            <li><a href=#>Drop Down 2</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ Vite::asset("resources/img/slider/slider1.jpg") }}" alt="" title="#slider-direction-1" />
                <img src="{{ Vite::asset("resources/img/slider/slider2.jpg") }}" alt="" title="#slider-direction-2" />
                <img src="{{ Vite::asset("resources/img/slider/slider3.jpg") }}" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1">Our Mission </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Mengembangkan kompetensi sumber daya manusia yang
                                        berkualitas dan berintegritas
                                    </h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1">Our Mission </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Melaksanakan proyek – proyek dengan tepat waktu, tepat biaya
                                        ,berukualitas, efisien dan konsisten</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <h2 class="title1">Our Mission </h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">Mebangun hubungan yang kuat dengan mitra bisnis serta komunitas
                                        keuangan</h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center section-headline">
                        <h2>About BatuMuliaSakarya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <a href="#">
                                <img src="{{ Vite::asset("resources/img/about/1.jpg") }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                            <a href="#">
                                <h4 class="sec-head">Tentang</h4>
                            </a>
                            <p>
                                Keberadaan PT. Batu Mulia Sakarya seperti saat ini tidak terlepas dari sejarah
                                berdirinya perusahaan. Menjelang tahun 1994 untuk pertama kalinya perusahaan ini berdiri
                                dengan nama CV. BATU MULIA berkedudukan di Cilacap, Jawa Tengah yang bergerak dalam
                                bidang Jasa Pengeboran, Peledakan dan Perdagangan Umum. </p>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar"></i>Pada tahun 2017 dalam usaha pengembangan dan
                                    pelayanan perusahaan
                                    maka nama perusahaan berubah menjadi PT. BATU MULIA SAKARYA dan
                                    berpindah kedudukan di Bandung , Jawa Barat dengan tambahan pelayanan
                                    Jasa Konstruksi.


                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
        </div>
    </div>
    <!-- End About area -->

    <!-- Start Service area -->
    <div id="services" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center section-headline services-head">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="text-center row">
                <div class="services-contents">
                    <!-- Start Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/01.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>KONTRAKTOR
                                        PENGEBORAN
                                    </h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/02.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>KONTRAKTOR
                                        PELEDAKAN
                                    </h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/03.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>JASAPEMBUATAN
                                        GUDANG BAHAN PELEDAK
                                    </h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/04.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>JASA KONSULTASI &
                                        PERIJINAN HANDAK
                                    </h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/05.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>KONTRAKTOR
                                        TEROWONGAN
                                    </h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <!-- End Left services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="#">
                                        <img src="{{ Vite::asset("resources/img/icon/06.png") }}" alt="Kontraktor Pengeboran"
                                            style="width: 50px; height: 50px;">
                                    </a>
                                    <h4>JASA KONSTRUKSI</h4>
                                    <p>
                                        <!--kosong -->
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->

    <!-- Start team Area -->
    <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center section-headline">
                        <h2>Our special Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ Vite::asset("resources/img/team/1.jpg") }}" alt="">
                                </a>
                                <div class="text-center team-social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center team-content">
                                <h4>Jhon Mickel</h4>
                                <p>CEO</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ Vite::asset("resources/img/team/2.jpg") }}" alt="">
                                </a>
                                <div class="text-center team-social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center team-content">
                                <h4>Andrew Arnold</h4>
                                <p>CBO</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ Vite::asset("resources/img/team/3.jpg") }}" alt="">
                                </a>
                                <div class="text-center team-social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center team-content">
                                <h4>Lellien Linda</h4>
                                <p>CFO</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ Vite::asset("resources/img/team/4.jpg") }}" alt="">
                                </a>
                                <div class="text-center team-social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center team-content">
                                <h4>Jhon Powel</h4>
                                <p>GA</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start reviews Area -->
    <div class="reviews-area hidden-xs">
        <div class="work-us">
            <div class="work-left-text">
                <a href="#">
                    <img src="{{ Vite::asset("resources/img/about/2.jpg") }}" alt="">
                </a>
            </div>
            <div class="text-center work-right-text">
                <h2>working with us Vision</h2>
                <h5>Menjadi mitra bisnis yang dipercaya pemerintah dan
                    masyarakat. Menuju terbentuknya perusahaan yang sehat dan
                    berstandar nasional
                </h5>
                <a href="#contact" class="ready-btn">Contact us</a>
            </div>
        </div>
    </div>
    <!-- End reviews Area -->

    <!-- Start portfolio Area -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center section-headline">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Portfolio -page -->
                <div class="awesome-project-1 fix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="awesome-menu ">
                            <ul class="project-menu">
                                <li>
                                    <a href="#" class="active" data-filter="*">All</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".drill">Drilling</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".kons">Konstruksi</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".tunnel">Tunneling</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="awesome-project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 drill">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/01.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="img/portfolio/1.jpg">
                                            <h4>Kategori</h4>
                                            <span>Drilling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 drill tunnel">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/02.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ asset("portfolio/2.jpg") }}">
                                            <h4>Kategori</h4>
                                            <span>Drilling & Tunneling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 drill kons">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/03.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ asset("portfolio/3.jpg") }}">
                                            <h4>Kategori</h4>
                                            <span>Drilling & Konstruksi</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 kons drill">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/04.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ asset("portfolio/4.jpg") }}">
                                            <h4>Kategori</h4>
                                            <span>Konstruksi & Drilling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 kons tunnel">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/05.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ asset("portfolio/5.jpg") }}">
                                            <h4>Kategori</h4>
                                            <span>Konstruksi & Tunneling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 drill tunnel">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Vite::asset("resources/img/portfolio/06.jpg") }}" alt="" /></a>
                                <div class="text-center add-actions">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ asset("portfolio/6.jpg") }}">
                                            <h4>Kategori</h4>
                                            <span>Drilling & Tunneling</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
            </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->
    <!-- Start Testimonials baru saya ganti menjadi kutipan -->
    <div class="testimonials-area">
        <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start testimonials Start -->
                        <div class="text-center testimonial-content">
                            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            Bukan keindahan bangunan yang harus Anda lihat;<br>konstruksi fondasinya
                                            yang akan bertahan dalam ujian waktu.
                                        <h6>David Allan Coe</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            Setiap manusia berada dalam proses pembangunan<br>sejak dalam kandungan
                                            hingga kematian.
                                        </p>
                                        <h6>Billy Graham</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>
                                            Apa yang saya coba lakukan adalah seni membangun, dan<br>seni membangun
                                            adalah seni konstruksi; bukan hanya tentang bentuk dan gambar.
                                        </p>
                                        <h6>Peter Zumthor</h6>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                        <!-- End testimonials end -->
                    </div>
                    <!-- End Right Feature -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    <!-- Start Blog Area -->
    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center section-headline">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ Vite::asset("resources/img/blog/1.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    <a href="#">13 comments</a>
                                </span>
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">Assumenda repud eum veniam</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi
                                    sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum
                                    veniam optio modi sit explicabo nisi magnam quibusdam.
                                </p>
                            </div>
                            <span>
                                <a href="blog.html" class="ready-btn">Read more</a>
                            </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ Vite::asset("resources/img/blog/2.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    <a href="#">130 comments</a>
                                </span>
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi
                                    sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum
                                    veniam optio modi sit explicabo nisi magnam quibusdam.
                                </p>
                            </div>
                            <span>
                                <a href="blog.html" class="ready-btn">Read more</a>
                            </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                    <!-- Start Right Blog-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ Vite::asset("resources/img/blog/3.jpg") }}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i>
                                    <a href="#">10 comments</a>
                                </span>
                                <span class="date-type">
                                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi
                                    sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum
                                    veniam optio modi sit explicabo nisi magnam quibusdam.
                                </p>
                            </div>
                            <span>
                                <a href="blog.html" class="ready-btn">Read more</a>
                            </span>
                        </div>
                    </div>
                    <!-- End Right Blog-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
    <!-- Start Suscrive Area -->
    <div class="suscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="text-center suscribe-text">
                        <h3>Welcome to our company</h3>
                        <a class="sus-btn" href="#">Our Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Suscrive Area -->
    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center section-headline">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="text-center contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: (022) 8681 1994<br>
                                    <span>Senin-Jumat (9am-5pm)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="text-center contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: batumulia919@yahoo.com<br>
                                    <span>web : www.bms.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Start contact icon column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="text-center contact-icon">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Padalarang Point Kav 19 & 21, Bandung Barat<br>
                                    <span>Jawa Barat, Indonesia</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Google Map -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Start Map -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3842616308!2d107.48405411477249!3d-6.844453195053574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e38849989d39:0xc6caec92c592a476!2sPT.%20Batu%20Mulia%20Sakarya!5e0!3m2!1sen!2sid!4v1542607093504"
                            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2><span>PT</span>BatuMuliaSakarya</h2>
                                </div>

                                <p>Ruko Padalarang Point Kav
                                    19&21, Kertamulya, Padalrang,
                                    Bandung Barat, Jawa Barat</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                    Kontraktor Umum, Perdagangan dan Jasa.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> (0281) 8681 1994</p>
                                    <p><span>Email:</span> batumulia919@yahoo.com</p>
                                    <p><span>Working Hours:</span> 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/01.jpg") }}" alt=""></a>
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/02.jpg") }}" alt=""></a>
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/03.jpg") }}" alt=""></a>
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/04.jpg") }}" alt=""></a>
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/05.jpg") }}" alt=""></a>
                                    <a href="#"><img src="{{ Vite::asset("resources/img/ig/06.jpg") }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center copyright">
                            <p>
                                &copy; Copyright <strong>LunarTech</strong>. All Rights Reserved
                            </p>
                        </div>
                        <div class="credits">
                            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
                            Designed by <a href="https://bootstrapmade.com/">Valentino Wayoi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}"></script>
    <script src="{{ asset('main.js') }}"></script>

</body>

</html>
