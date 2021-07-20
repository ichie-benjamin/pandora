@extends('layouts.master')

@section('content')

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
                                <a href="index-2.html"><img src="images/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>globex@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
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

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
        <div class="auto-container">
            <h2>Our Chefs</h2>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">home</a></li>
                <li>Our Chefs</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Shop Single-->
                    <div class="shop-section">

                        <!--Sort By-->
                        <div class="items-sorting">
                            <div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h6>Showing Items 1–9 of 36 results</h6>
                                </div>
                                <div class="select-column pull-right col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>Default Sorting</option>
                                            <option>Highest Voted</option>
                                            <option>Highest Liked</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="our-shops">

                            <div class="row clearfix">

                                <!-- Shop Item -->
                                @foreach($chefs as $item)
                                <div class="single-product-item col-lg-4 col-md-6 col-sm-12 text-center">
                                    <div class="img-holder">
                                        <img style="width: 270px; height: 220px" src="{{ $item->photo }}" class="" alt="">
                                    </div>
                                    <div class="title-holder text-center">
                                        <div class="static-content">
                                            <h3 class="title text-center"><a href="{{ route('res.view',$item->slug) }}">{{ $item->name }}</a></h3>
                                            <span class="price"><span class="amount"><span class="">20</span> Votes</span></span>
                                        </div>
                                        <div class="overlay-content">
                                            <ul class="clearfix">
                                                <li>
                                                    <a href="{{ route('res.view',$item->slug) }}"><span class="flaticon-shopping-cart"></span>
                                                        <div class="toltip-content">
                                                            <p>Vote</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('res.view',$item->slug) }}" class=""><span class="fa fa-heart"></span>
                                                        <div class="toltip-content">
                                                            <p>Like</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ $item->photo }}" class="lightbox-image" data-fancybox="shop-gallery"><span class="fa fa-expand"></span>
                                                        <div class="toltip-content">
                                                            <p>Zoom In</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination text-center">
                            {{ $chefs->links() }}
                        </div>

                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <div class="sidebar-inner">

                            <!-- Search -->
                            <div class="sidebar-widget search-box">
                                <div class="sidebar-title">
                                    <h5>Search :-</h5>
                                </div>
                                <form method="get" action="">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search....." required>
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>

                            <!-- Categories Widget -->
                            <div class="sidebar-widget categories-widget">
                                <div class="sidebar-title">
                                    <h5>Categories :-</h5>
                                </div>
                                <div class="widget-content">
                                    <ul class="blog-cat">
                                        <li><a href="#">African Dishes <span>( 05 )</span></a></li>
                                        <li><a href="#">Chinese Dishes <span>( 23 )</span></a></li>
                                        <li><a href="#">Rice & Pasta <span>( 22 )</span></a></li>
                                        <li><a href="#">Swallow <span>( 15 )</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <div class="sidebar-widget popular-posts">
                                <div class="sidebar-title">
                                    <h5>Event Gallery-</h5>
                                </div>

                            </div>

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-tags">
                                <div class="sidebar-title">
                                    <h5>On Going Live Events :-</h5>
                                </div>
                                <div class="widget-content">
                                    <a href="#">Non</a>
                                </div>
                            </div>

                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection
