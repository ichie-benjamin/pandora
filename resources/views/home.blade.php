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
                                <li><a href="#">Chefs</a></li>
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
                            <a href="#" class="theme-btn btn-style-one"><span class="txt">JOIN THE EVENt</span></a>
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
                                <a href="{{ route('home') }}"><img src="images/logo-2.png" alt="" /></a>
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
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
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

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url(images/slide1.png)">
                <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
                            <div class="title">Vote your favourite chef</div>
                            <h1>Support Your Chef <br> </h1>
                            <div class="text">Make your chef Proud today by supporting him/her with your vote  <br>
                                Its free and easy</div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Search Chef</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slide" style="background-image: url(images/slider1.jpeg)">
                <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
                            <div class="title">We want to reward effort </div>
                            <h1>Our chef efforts ought to be rewarded <br> </h1>
                            <div class="text">Over 50 chefs on {{ env('APP_NAME') }}<br> make sure your favourite chef stand out.</div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Search Chef</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slide" style="background-image: url(images/main-slider/image-1.jpg)">
                <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                <div class="patern-layer-two" style="background-image: url(images/main-slider/pattern-2.png)"></div>
                <div class="auto-container">

                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="patern-layer-three" style="background-image: url(images/main-slider/pattern-3.png)"></div>
                            <div class="title">Promote your chef</div>
                            <h1>Share your favourite chef  <br>with families and friends</h1>
                            <div class="text">Yes campaign for your favourite chef <br>
                               </div>
                            <div class="btns-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="txt">Search Chef</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!-- End Banner Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title">ABOUT PANDORA EVENTS</div>
            </div>
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">
                            Pandora Events Limited is an independent events management solutions firm with specialty in creative and innovative corporate management. The company was established in response to the growing demand for specialized sophisticated services in the fast-expanding events management sector with creativity and innovation. In response to such continuous demands for expertise, well diversified and experienced consultants were pooled to form Pandora Events Limited to complement existing efforts in the sector and surpass demands with client satisfaction.
                        </div>
                        <div class="text">
                            As one of Nigeria's leading creative Events Company, Pandora Events Limited provides you with a cocktail of creativity, innovation, corporate management and exceptional event management solutions to meet your desired business needs. Our consulting approach emphasizes constructive dialogue with our clients to arrive at sensible, sophisticated, management solutions. We want our clients to be comfortable with their decisions, which extends through all elements of the relationship.
                        </div>

                        <a href="https://www.youtube.com/watch?v=pkswZpHQVMI" class="lightbox-image theme-btn btn-style-one"><span class="txt"><i class="play-icon"><img src="images/icons/play-icon.png" alt="" /></i>&ensp; intro Video</span></a>

                    </div>
                </div>

                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column" style="background-image: url(images/icons/globe.png)">
                        <div class="pattern-layer" style="background-image: url(images/background/pattern-1.png)"></div>
                        <div class="images-outer parallax-scene-1">
                            <div class="image" data-depth="0.10">
                                <img src="images/chef.jpeg" alt="" />
                            </div>
                            <div class="image-two" data-depth="0.30">
                                <img src="images/chef1.png" alt="" />
                            </div>
                            <div class="image-three" data-depth="0.20">
                                <img src="images/chef2.jpeg" alt="" />
                            </div>
                            <div class="image-four" data-depth="0.30">
                                <img src="images/chef3.jpeg" alt="" />
                            </div>
                        </div>
                    </div>
                    <a href="#" class="learn"><span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>Learn More About Pandora Event</a>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Featured Block Two -->
                <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(images/resource/feature-1.jpg)">
                        <div class="number">35 +</div>
                        <h4>Experienced Chefs</h4>
                        <div class="text">We over 35 experienced chefs registered for this year pandoras event</div>
                    </div>
                </div>

                <!-- Featured Block Two -->
                <div class="feature-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image: url(images/resource/feature-2.jpg)">
                        <div class="number">40 k</div>
                        <h4>Votes already</h4>
                        <div class="text">Over 40,000 votes already, your chef might be lagging behind</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Services Section -->
    <section class="services-section margin-top">
        <div class="pattern-layer" style="background-image: url(images/background/pattern-2.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="title">Our Core Value</div>
            </div>
            <div class="row clearfix">

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h5><strong>Excellence</strong></h5>
                        <div class="text">we are committed to upholding the highest standards, professional responsibility, accountability and integrity
                        </div>
                    </div>
                </div>
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h5><strong>Empathy:</strong></h5>
                        <div class="text"> we are committed to identifying with our client needs and ideas to deliver on mutually beneficial services

                        </div>
                    </div>
                </div>
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h5><strong>Efficiency::</strong></h5>
                        <div class="text"> we deliver solutions and services that are time and cost efficient for our clients
                        </div>
                    </div>
                </div>
                <div class="service-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <h5><strong>Innovation:</strong></h5>
                        <div class="text"> we value and encourage innovation, creativity and commitment in achieving and sustaining our goals through continuous improvement.

                        </div>
                    </div>
                </div>

                <!-- Service Block -->
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Services Section Two -->
    <section class="services-section-two margin-top">
        <div class="auto-container">
            <div class="upper-box">
                <div class="icon-one" style="background-image: url(images/icons/icon-1.png)"></div>
                <div class="icon-two" style="background-image: url(images/icons/icon-2.png)"></div>
                <div class="icon-three" style="background-image: url(images/icons/icon-3.png)"></div>
                <!-- Sec Title -->
                <div class="sec-title light centered">
                    <div class="title">WHO WE ARE</div>
                    <h2>We are one of Nigeria's leading creative<br> Events Company </h2>
                </div>
            </div>

            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Service Block Three -->
                    <div class="service-block-three col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="content">

                                <h4><a href="#">Our Vision</a></h4>
                                <div class="text">
                                    To be the most sought-after events management solutions provider in Africa</div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three -->
                    <div class="service-block-three col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <h4><a href="#">Our Mission</a></h4>
                                <div class="text">
                                    Pandora Events exists to create value through excellence in events management solutions, business strategy and innovative and creative ideas with world-class sophistication in your events..</div>

                            </div>
                        </div>
                    </div>
                    <div class="service-block-three col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="content">
                                <h4><a href="#">Our Core Value</a></h4>
                                <div class="text">
                                    <strong>Excellence:</strong> we are committed to upholding the highest standards, professional responsibility, accountability and integrity
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section Two -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image: url(images/background/pattern-3.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Heading Column -->
                <div class="heading-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Interested in the ongoing {{ env('APP_NAME') }} <br> Join us today</h2>
                    </div>
                </div>
                <!-- Button Column -->
                <div class="button-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <a href="#" class="theme-btn btn-style-two"><span class="txt">Join Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->



    <!-- Cases Section -->
    <section class="cases-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">FEATURED CHEFS</div>
                <h2>See our featured chefs<br> vote for any of them</h2>
            </div>
            <div class="row clearfix">

                <!-- Case Block -->
                @foreach ($res as $item)
                    <div class="case-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ $item->photo }}" alt="" />
                                <div class="overlay-box">
                                    <a href="{{ $item->photo }}" data-fancybox="case" data-caption="" class="search-icon"><span class="icon flaticon-search"></span></a>
                                    <div class="content">
                                        <h4><a href="{{ route('res.view',$item->slug) }}">{{ $item->name }}</a></h4>
                                    </div>
                                    <a href="{{ route('res.view',$item->slug) }}" class="arrow flaticon-long-arrow-pointing-to-the-right"></a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>

            <div class="section-text">We Have More Than 40 Chefs signed up for this even, Check them out.</div>

            <div class="btn-box text-center">
                <a href="#" class="theme-btn btn-style-three"><span class="txt">View All Chef</span></a>
            </div>

        </div>
    </section>
    <!-- End Cases Section -->

    <section class="fluid-section-one">
        <div class="outer-container clearfix">

            <!-- Content Column -->
            <div class="content-column" style="background-image:url(images/background/pattern-13.png)">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">Our Services</div>
                        <h2>What we do @ <br> {{ env('APP_NAME') }}</h2>
                        <div class="text">
                            As a niche-focused organization, we offer our services individually,
                            solely or in conjunction with other reputable service providers.
                            Our project-based consulting teams are carefully formed to provide optimal solutions to our clients.
                        </div>
                    </div>
                    <div class="row clearfix">

                        <!-- Feature Block Three -->
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text">Corporate event management
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text">Board retreats


                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text"> 	Executive meetings
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text"> 	Entertainment and hospitality
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text"> Themed social events
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text">Political conventions
                                </div>
                            </div>
                        </div>
                        <div class="feature-block-three col-lg-4 col-md-4 col-sm-12">
                            <div class="inner-box">
                                <div class="feature-text"> 	Festival and carnivals
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image:url(images/resource/image-1.jpg)">
                <figure class="image-box"><img src="images/resource/image-1.jpg" alt=""></figure>
            </div>

        </div>
    </section>



{{--    <!--Sponsors Section-->--}}
{{--    <section class="sponsors-section">--}}
{{--        <div class="auto-container">--}}

{{--            <div class="carousel-outer">--}}
{{--                <!--Sponsors Slider-->--}}
{{--                <ul class="sponsors-carousel owl-carousel owl-theme">--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>--}}
{{--                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
{{--    <!--End Sponsors Section-->--}}

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="title">{{ env('APP_NAME') }} Key Sponsors</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box" style="background-image: url(images/background/pattern-4.png)">
                        <div class="upper-box">
                            <div class="icon">
                                <img src="https://prokitchen.ng/wp-content/uploads/2021/06/cropped-prokit-new-1.png" alt="" />
                            </div>
                            <h4>Prokitchen</h4>
                            <div class="designation">Food delivery</div>
                        </div>
                        <div class="text">Prokitchen is Nigeria’s leading one-stop solution for all food needs, with over 100 restaurants registered with us, we provide you with excellent food choice to choose from</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->


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
    <form method="post" action="#">
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
