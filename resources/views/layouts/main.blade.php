<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/animate.min.css">

    <link rel="stylesheet" href="/assets/css/meanmenu.css">

    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/assets/css/meanmenu.css">

    <link rel="stylesheet" href="/assets/css/flaticon.css">

    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="/assets/css/responsive.css">
    <title>{{ env('APP_NAME') }} - Your Best Restaurants</title>
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <style>
        @media screen and (min-width: 768px){
           .res-img {
               height: 350px!important;
           }
        }
        @media screen and (max-width: 768px){
            .res-img {
                height: 400px!important;
            }
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
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Restaurants</a>
                            </li>
                            <li class="nav-item menu-logo">
                                <a class="navbar-brand logo-1" href="{{ route('home') }}">
                                    <img src="/images/lacuisine_s.png" alt="Logo">
                                </a>
                                <a class="navbar-brand logo-2" href="{{ route('home') }}">
                                    <img src="/images/lacuisine_s1.png" alt="Logo">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Food Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Logistics</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


@yield('content')

<section id="faq" class="faq-section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <div class="text">
                        <h3>Frequently Question</h3>
                    </div>
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                                How do I know that I’ve voted?
                            </a>
                            <div class="accordion-content show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam amet, consectetur adipisicing</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                                How many times can i vote
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam amet, consectetur adipisicing</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                               Can i vote multiple times for a restaurant
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam amet, consectetur adipisicing</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                                Is voting Free
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam amet, consectetur adipisicing</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <div class="faq-image ">
                    <img src="/images/faq.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>


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
                    <div class="address-wrap">
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
                <div class="footer-bottom-text">
                    <p>
                        Copyright @ {{ date('Y') }} <span>{{ env('APP_NAME') }}</span>. All Rights Reserved by
                        <a href="https://afiaanyi.com/" target="_blank">
                            Afiaanyi Services Limited
                        </a>
                    </p>
                </div>
            </div>
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
        </div>
    </div>
</div>


<div class="go-top">
    <i class="fa fa-chevron-up"></i>
    <i class="fa fa-chevron-up"></i>
</div>


<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="/assets/js/jquery-3.5.0.min.js"></script>

<script src="/assets/js/popper.min.js"></script>

<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/js/owl.carousel.min.js"></script>

<script src="/assets/js/jquery.meanmenu.js"></script>

<script src="/assets/js/wow.min.js"></script>

<script src="/assets/js/jquery.meanmenu.js"></script>

<script src="/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="/assets/js/form-validator.min.js"></script>

<script src="/assets/js/contact-form-script.js"></script>

<script src="/assets/js/main.js"></script>
</body>
</html>
