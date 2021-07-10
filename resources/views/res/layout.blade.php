<!doctype html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/res/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/res/assets/css/animate.min.css">

    <link rel="stylesheet" href="/res/assets/css/meanmenu.css">

    <link rel="stylesheet" href="/res/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/res/assets/css/flaticon.css">

    <link rel="stylesheet" href="/res/assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="/res/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/res/assets/css/odometer.css">

    <link rel="stylesheet" href="/res/assets/css/style.css">

    <link rel="stylesheet" href="/res/assets/css/responsive.css">
    <title>{{ env('APP_NAME') }} - Stand for your restaurant</title>
    <link rel="icon" type="image/png" href="/res/assets/img/favicon.png">
    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body data-spy="scroll" data-offset="120">

<div class="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>


<div class="nav-area fixed-top">
    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="/images/logo.png" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand logo-1" href="{{ route('home') }}">
                        <img style="height: 50px; width: 50px" src="/images/logo_m.png" alt="PANDORA">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://prokitchen.ng/" target="_blank" class="nav-link">Prokitchen</a>
                            </li>

                        </ul>
                        <div class="others-option">
                            <div class="d-flex align-items-center">
                                <div class="option-item">
                                    <div class="burger-menu">
                                        <i class="flaticon-dots-menu"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-about-area">
            <div class="title">
                <h2>ABOUT PANDORA EVENTS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aliquam aliquid amet animi asperiores blanditiis delectus ducimus, enim illo, laudantium maiores, molestiae necessitatibus neque nihil nulla recusandae soluta ut.</p>
            </div>
        </div>
        <div class="sidebar-contact-area">
            <div class="sidebar-contact-info">
                <div class="contact-info-content">
                    <h2>
                        <a href="tel:+0881306298615">09053000058 - 9</a>
                        <span>OR</span>
                        <p>info@prokitchen.ng</p>
                    </h2>
                    <ul class="social">
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="close-btn sidebar-modal-close-btn">
<i class="fa fa-times"></i>
</span>
    </div>
</div>


@yield('content')

<div class="footer-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About Us</h3>
                    <ul class="quick-links">
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">Who We Are</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">Help Center</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="https://prokitchen.ng" target="_blank">Prokitchen</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">This Event</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">Leading Restaurants</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">Vote</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="https://prokitchen.ng">Prokitchen Foods</a>
                        </li>
                        <li>
                            <i class="flaticon-right-arrow"></i>
                            <a href="#">This Event</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>PLAY STORE & APP STORE</h3>
                    <div class="blog-info">
                        <a href="#">
                        <div class="image">
                            <img style="height: 60px; width: 100px" src="/images/playstore.png" alt="image">
                        </div>
                        <h4>PROKITCHEN FOODS</h4>
                        <p>Download Now</p>
                        </a>
                    </div>
                    <div class="blog-info">
                        <a href="#">
                        <div class="image">
                            <img style="height: 80px; width: 90px" src="/images/appstore.png" alt="image">
                        </div>
                        <h4>PROKITCHEN FOODS</h4>
                        <p>Download Now</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget hilight-address">
                    <div class="logo">
                        <a href="#">
                            <img style="height: 180px" src="/images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="address-wrap">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <h3>Address</h3>
                        <ul class="footer-contact-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:09053000058">09053000058 - 9</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href=""><span class="__cf_email__">info@prokitchen.ng</span></a>
                            </li>
                            <li>
                                <i class="fa fa-crosshairs"></i>
                                Suite 8 Ocean Center Plot 1018, Cadastral Zone B18, Off Oladipo Diya Road, Gudu District, Abuja
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="footer-bottom-social">
                    <li>
                        <a href="#" target="_blank">
                            <i class="flaticon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="flaticon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="flaticon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class="flaticon-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="footer-bottom-text">
                    <p>
                        Copyright @ 2021 <span>{{ env('APP_NAME') }}</span>. All Rights Reserved by
                        <a href="https://afiaanyi.com/" target="_blank">
                            AFIAANYI
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="fa fa-chevron-up"></i>
    <i class="fa fa-chevron-up"></i>
</div>


<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/res/assets/js/jquery-3.5.0.min.js"></script>

<script src="/res/assets/js/popper.min.js"></script>

<script src="/res/assets/js/bootstrap.min.js"></script>

<script src="/res/assets/js/owl.carousel.min.js"></script>

<script src="/res/assets/js/jquery.appear.js"></script>

<script src="/res/assets/js/odometer.min.js"></script>

<script src="/res/assets/js/jquery.magnific-popup.min.js"></script>

<script src="/res/assets/js/wow.min.js"></script>

<script src="/res/assets/js/jquery.meanmenu.js"></script>

<script src="/res/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="/res/assets/js/form-validator.min.js"></script>

<script src="/res/assets/js/contact-form-script.js"></script>

<script src="/res/assets/js/main.js"></script>
</body>
</html>
