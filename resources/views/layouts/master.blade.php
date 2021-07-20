<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} | Homepage</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo-small.png" type="image/x-icon">
    <link rel="icon" href="images/logo-small.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!-- Top Left -->
                    <div class="top-left">
                        <!-- Info List -->
                        <ul class="info-list">
                            <li><a href="mailto:{{ env('APP_NAME') }}"><span class="icon flaticon-email"></span> {{ env('EMAIL') }}</a></li>
                            <li><a href="tel:{{ env('PHONE') }}"><span class="icon flaticon-telephone"></span> {{ env('PHONE') }}</a></li>
                        </ul>
                    </div>

                    <!-- Top Right -->
                    <div class="top-right pull-right">
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="#" class="fa fa-facebook-f"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container clearfix">

                <div class="pull-left logo-box d-none d-sm-block">
                    <div class="logo"><a href="{{ route('home') }}"><img src="/images/logo.png" alt="" title=""></a></div>
                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="{{ route('chefs') }}">Chefs</a></li>
                                <li><a href="#">Food Delivery</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                        <!-- Quote Btn -->
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-style-one"><span class="txt">JOIN THE EVENT</span></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="#" title=""><img src="/images/logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Search Btn -->
                        <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                        <!-- Nav Btn -->
                        <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                    </div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Sidebar Cart Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="images/logo.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">Pandora Events Limited is an independent events management solutions firm with
                                    specialty in creative and innovative corporate management.
                                    The company was established in response to the growing demand for specialized sophisticated services in
                                    the fast-expanding events management sector with creativity and innovation.
                                    In response to such continuous demands for expertise, well diversified and experienced consultants were
                                    pooled to form Pandora Events Limited to complement existing efforts in the sector and surpass demands
                                    with client satisfaction.
                                    .</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">JOIN THIS EVENT</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>{{ env('ADDRESS') }}</li>
                                    <li><span class="icon fa fa-phone"></span>{{ env('PHONE') }}</li>
                                    <li><span class="icon fa fa-envelope"></span>{{ env('EMAIL') }}</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-7.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/background/pattern-8.png)"></div>
        <!--Waves end-->
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="big-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="#"><img src="images/logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">Pandora Events Limited is an independent events management solutions firm with specialty in
                                        creative and innovative corporate management. The company was established in response to
                                        the growing demand for specialized sophisticated services in the fast-expanding events management sector
                                        with creativity and innovation.
                                    </div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fa fa-facebook-f"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-google"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5>Quick Links</h5>
                                    <ul class="list-link">
                                        <li><a href="#">Chefs</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">About this Event</a></li>
                                        <li><a href="#">LIVE</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Column -->
                    <div class="big-column col-lg-5 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <!-- Footer Column -->
                            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
                                <div class="footer-widget contact-widget">
                                    <h5>Contact Us</h5>
                                    <ul>
                                        <li>
                                            <span class="icon flaticon-placeholder-2"></span>
                                            <strong>Address</strong>
                                            {{ env('ADDRESS') }}
                                        </li>
                                        <li>
                                            <span class="icon flaticon-phone-call"></span>
                                            <strong>Phone</strong>
                                            <a href="tel:+786-875-864-75">{{ env('PHONE') }}</a>
                                        </li>
                                        <li>
                                            <span class="icon flaticon-email-1"></span>
                                            <strong>E-Mail</strong>
                                            <a href="mailto:support@globex.com">{{ env('EMAIL') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="copyright">Copyright &copy; {{ date('Y') }} by {{ env('APP_NAME') }}. All Rights Reserved.</div>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <ul class="footer-nav">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>


</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
    <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
    <form method="get" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Your Favourite Chef Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="js/color-settings.js"></script>

</body>

</html>
