<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from www.webstrot.com/html/mosque/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2019 14:50:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mosque | <?= $this->uri->segment(1) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../../../webstrot.com/html/mosque/apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/owl.carousel.min.css">
    <!-- bxslider css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/jquery.bxslider.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/magnific-popup.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets/mosque/') ?>css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url('assets/mosque/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--Header area start here-->
    <header>
        <div class="topbar hidden-sm-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                        <div class="header-event">
                            <ul class="list-inline count-list">
                                <li>
                                    <h6>Next Big Event :</h6>
                                </li>
                                <li><span class="count days">00</span><span class="con">days</span></li>
                                <li><span class="count hours">00</span><span class="con">Hours</span></li>
                                <li><span class="count minutes">00</span><span class="con">minutes</span></li>
                                <li><span class="count seconds">00</span><span class="con">Seconds</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="header-social text-right">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header hidden-sm-down" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <a href="<?= base_url('home') ?>"><img src="<?= base_url('assets/mosque/') ?>images/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-area">
                            <nav>
                                <ul class="list-inline">
                                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li><a href="<?= base_url('events') ?>">Event</a></li>
                                    <li><a href="<?= base_url('artikels/blog') ?>">artikel</a></li>
                                    </li>
                                    <li><a href="<?= base_url('contactus') ?>">Contact Us</a></li>
                                    <li class="menu-btn">
                                        <ul>
                                            <li><span class="search-ico"><i class="flaticon-magnifying-glass"></i></span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="search-box">
                            <form action="<?= base_url('artikels/blog') ?>" method="get">
                                <input type="text" name="keyword" placeholder="Search keyword..." autocomplete="off">
                                <button type="submit" name="submit"><i class="flaticon-magnifying-glass"></i></button>
                                <span class="close-search"><i class="flaticon-cancel"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="list-inline">
                                    <li><a href="<?= base_url('home') ?>">Home</a></li>
                                    <li><a href="<?= base_url('events') ?>">Event</a></li>
                                    <li><a href="<?= base_url('artikels/blog') ?>">artikel</a></li>
                                    </li>
                                    <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header area end here-->
    <!--Slider area start here-->
    <section class="slider-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 msj_slider_padding">
                    <div id="carouselExampleIndicators" class="slide carousel" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $slides = 0;
                            foreach ($slide as $img) :
                                if ($slides == 0) {
                                    $item_active = "active";
                                } else {
                                    $item_active = "";
                                }
                                ?>
                                <div class="carousel-item <?= $item_active ?> ">
                                    <img src="<?= base_url('assets/mosque/') ?>images/slider/<?= $img->slide_foto ?>" alt="" />
                                    <div class="carousel-caption one">
                                        <div class="content">
                                            <img class="animated fadeInDown" src="<?= base_url('assets/mosque/') ?>images/slider/sm-1.png" alt="" />
                                            <h2 class="animated fadeInDown"> <?= $img->slide_text ?> </h2>
                                            <a href="#" class="btn2 animated fadeInUp"><span>Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            <?php $slides++;
                            endforeach ?>
                        </div>
                        <a class="carousel-control-prev carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="flaticon-back"></i></a>
                        <a class="carousel-control-next carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next"><i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Slider area end here-->
    <!-- Videos area start here-->
    <section class="videos-area-about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-two">
                        <h2>About Our Story</h2>
                        <p><?= $home->aboutus ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="video-thumb">
                        <figure>
                            <div class="thumbnail">
                                <img src="<?= base_url('assets/mosque/') ?>images/video/3.jpg" alt="" />
                                <a href="<?= $home->linkvideo ?>" class="play-ico video-play-icon"></a>
                            </div>
                            <div class="con">
                                <h4>WATCH Our Video</h4>
                            </div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="video-content">
                        <h2>About US</h2>
                        <p><?= $home->aboutus ?></p>
                        <div class="about">
                            <div class="w-50 floatleft pd-r15">
                                <h4><span><i class="fa fa-eye"></i></span> Our Vision</h4>
                                <p><?= $home->ourvision ?></p>
                            </div>
                            <div class="w-50 floatleft pd-l15">
                                <h4><span><i class="fa fa-flag"></i></span> Our Mission</h4>
                                <p><?= $home->ourmission ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Videos area end here-->
    <!--Banner area start here-->
    <section class="banner-area-two section2 bg-img jarallax af">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-one">
                        <h2>Prayer Timings</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="prayer-list text-center mr-b30">
                        <h4>Dawn Prayer</h4>
                        <strong>Fajr</strong>
                        <button><?= $home->subuh ?> am</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="prayer-list text-center mr-b30">
                        <h4>Sunrise Time</h4>
                        <strong>Zohar</strong>
                        <button><?= $home->dzuhur ?> AM</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="prayer-list text-center mr-b30">
                        <h4>Afternoon</h4>
                        <strong>Asar</strong>
                        <button><?= $home->ashar ?> PM</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="prayer-list text-center mr-b30">
                        <h4>Sunset Prayer</h4>
                        <strong>Magrib</strong>
                        <button><?= $home->maghrib ?> PM</button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <div class="prayer-list text-center mr-b30">
                        <h4>Evening Prayer</h4>
                        <strong>Isha</strong>
                        <button><?= $home->isya ?> PM</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner area end here-->
    <!--Counter area start here-->
    <section class="counter-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pd-0">
                    <div class="counter text-center">
                        <div class="ico"><i class="fa fa-heart"></i></div>
                        <div class="count-number">
                            <span class="count">2000</span>
                            <span class="plus">+</span>
                        </div>
                        <h4>Causes</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pd-0">
                    <div class="counter2 text-center">
                        <div class="ico"><i class="fa fa-globe"></i></div>
                        <div class="count-number">
                            <span class="count">1475</span>
                            <span class="plus">+</span>
                        </div>
                        <h4>Places</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pd-0">
                    <div class="counter text-center">
                        <div class="ico"><i class="fa fa-user"></i></div>
                        <div class="count-number">
                            <span class="count">5470</span>
                            <span class="plus">+</span>
                        </div>
                        <h4>Volunteers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pd-0">
                    <div class="counter2 text-center">
                        <div class="ico"><i class="fa fa-users"></i></div>
                        <div class="count-number">
                            <span class="count">150045</span>
                            <span class="plus">+</span>
                        </div>
                        <h4>Saved Life</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter area end here-->
    <!--Testimonial area start here-->
    <section class="testimonial-area bg-img jarallax af section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-four">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-slider">
                        <div class="testimonial-list">
                            <blockquote>“Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remia situa anti aperiam. Proin gravida nibh vel velit auctor.”</blockquote>
                            <a href="#">~ by Akshay H. ~</a>
                        </div>
                        <div class="testimonial-list">
                            <blockquote>“Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remia situa anti aperiam. Proin gravida nibh vel velit auctor.”</blockquote>
                            <a href="#">~ by Akshay H. ~</a>
                        </div>
                        <div class="testimonial-list">
                            <blockquote>“Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remia situa anti aperiam. Proin gravida nibh vel velit auctor.”</blockquote>
                            <a href="#">~ by Akshay H. ~</a>
                        </div>
                        <div class="testimonial-list">
                            <blockquote>“Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam remia situa anti aperiam. Proin gravida nibh vel velit auctor.”</blockquote>
                            <a href="#">~ by Akshay H. ~</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial area end here-->
    <!--Prayer area start here-->
    <section class="prayer-area pd-t100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading-two">
                        <h2>Islamic Prayer</h2>
                        <p>Denean sollicitudin. This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean itudin. This is Photoshop's sion of Lorem Ipsum. Proin gravida nibh vel velit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prayer-img">
                        <img src="<?= base_url('assets/mosque/') ?>images/banner/bg-2.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-md-down">
                    <div class="info">
                        <div class="sun">
                            <span class="mid"><img src="<?= base_url('assets/mosque/') ?>images/icon/1.png" alt="" /></span>
                            <span class="ico1"><strong>Kalma</strong></span>
                            <span class="ico2"><strong>Salat</strong></span>
                            <span class="ico3"><strong>Fasting</strong></span>
                            <span class="ico4"><strong>Zakaat</strong></span>
                            <span class="ico5"><strong>Hajj</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Prayer area end here-->
    <!--Footer area start here-->
    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="foo-bot">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12 pd-0">
                                    <div class="logo-area">
                                        <a href="<?= base_url('home') ?>"><img src="<?= base_url('assets/mosque/') ?>images/logo/logo2.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 pd-0">
                                    <div class="copyright text-right">
                                        <p>© Copyright 2019 by <span>Mosque</span> Made with <i class="fa fa-heart text-danger"></i> Design By <a href="#">Webstrot</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer area end here-->


    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="<?= base_url('assets/mosque/') ?>js/vendor/jquery-1.12.0.min.js"></script>
    <!-- tether js -->
    <script src="<?= base_url('assets/mosque/') ?>js/tether.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url('assets/mosque/') ?>js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="<?= base_url('assets/mosque/') ?>js/owl.carousel.min.js"></script>
    <!-- bxslider js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.bxslider.min.js"></script>
    <!-- isotope js -->
    <script src="<?= base_url('assets/mosque/') ?>js/isotope.pkgd.min.js"></script>
    <!-- magnific popup js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.magnific-popup.min.js"></script>
    <!-- meanmenu js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.meanmenu.js"></script>
    <!-- jarallax js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jarallax.min.js"></script>
    <!-- jquery-ui js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery-ui.min.js"></script>
    <!-- downCount JS -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.downCount.js"></script>
    <!-- counterup JS -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/mosque/') ?>js/waypoints.min.js"></script>
    <!-- mixitup js -->
    <script src="<?= base_url('assets/mosque/') ?>js/jquery.mixitup.min.js"></script>
    <!-- wow js -->
    <script src="<?= base_url('assets/mosque/') ?>js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="<?= base_url('assets/mosque/') ?>js/plugins.js"></script>
    <!-- main js -->
    <script src="<?= base_url('assets/mosque/') ?>js/main.js"></script>
</body>

<!-- Mirrored from www.webstrot.com/html/mosque/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2019 14:53:56 GMT -->

</html>