@extends('layouts.main')

@section('content')
    <div id="home" class="main-banner-area">
        <div class="home-slider owl-carousel owl-theme">
            <div class="home-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <div class="back-text">
                                            Sports
                                        </div>
                                        <span>You too can Campaign</span>
                                        <h1><b>Yes</b> Campaign For Your Favourite</h1>
                                        <div class="slider-btn">
                                            <a href="#" class="default-btn">
                                                Search Your Favourite
                                            </a>
                                            <a href="#" class="optional-btn">
                                                Share to friends & Families
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slider-image">
                                        <img src="/img/vote2.png" alt="image">
                                        <img src="/img/food.jpg" class="shape" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-item item-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <div class="back-text">
                                            PANDORA
                                        </div>
                                        <span>We want to reward Efforts</span>
                                        <h1>Stand for your favourite Chef</h1>
                                        <div class="slider-btn">
                                            <a href="#" class="default-btn">
                                                Join the Campaign
                                            </a>
                                            <a href="#" class="optional-btn">
                                                Vote Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="slider-image">
                                        <img src="/img/drinks.jp" alt="image">
                                        <img src="/assets/img/slider/slider-shape.png" class="shape" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="default-shape">
            <div class="shape-1 rotateme">
                <img src="/assets/img/shape/1.png" alt="image">
            </div>
            <div class="shape-2">
                <img src="/assets/img/shape/2.png" alt="image">
            </div>
            <div class="shape-3 rotateme">
                <img src="/assets/img/shape/3.png" alt="image">
            </div>
        </div>
        <div class="main-shape">
            <img src="/assets/img/shape/shape-1.png" alt="image">
        </div>
    </div>


    <section class="sports-section pb-100">
        <div class="container-fluid p-0">
            <div class="sports-slider owl-carousel owl-theme">
                @foreach($res as $item)
                <div class="sports-item">
                    <img class="res-img" src="{{ $item->photo }}" alt="image">
                    <div class="content">
                        <span>Chef</span>
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->about }}</p>
                        <a href="{{ route('res.view',$item->slug) }}">
                            <div class="icon">
                                <i class="fa fa-eye"></i>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="about" class="about-section pb-100">
        <div class="container">
            <div class="section-title">
                <div class="back-text">
                    About
                </div>
                <span>Welcome to {{ env('APP_NAME') }}</span>
                <h2>Welcome To {{ env('APP_NAME') }}</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation uuip ex ea commodo.</p>
                <div class="learn-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-item-area">
                        <div class="about-content">
                            <div class="back-text">
                                Campaign &
                            </div>
                            <h3>Vote For your Favourite Chef</h3>
                        </div>
                        <div class="tab about-list-tab">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        <i class="flaticon-goal"></i>
                                        How to Vote
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="flaticon-goal-1"></i>
                                        Why {{ env('APP_NAME') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <p>Identify by favourite Chef, vote and campaign for them to gain more votes, to campaign, simply share the link of your favourite Chef with friends and fmily.</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about-text">
                                                <div class="icon">
                                                    <i class="flaticon-practice"></i>
                                                </div>
                                                <h3>Your Vote Counts</h3>
                                                <p>Make your favourite Chef stand out by placing multiple votes</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="about-text">
                                                <h3>Amazing Benefit</h3>
                                                <p>The winner of the {{ env('APP_NAME') }} Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <p>We put up together a system to celebrate and encourage the efforts of the high performing Chefs in Abuja</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="about-text">
                                                <div class="icon">
                                                    <i class="flaticon-practice"></i>
                                                </div>
                                                <h3>You Get To Know What You Are Doing</h3>
                                                <p>The {{ env('APP_NAME') }} gives customers a platform to air their view concerning a particular Chef, many people have never had opportunities to pass feed backs
                                                 across to Chef directors and management, but with {{ env('APP_NAME') }} you can do that easily</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="/assets/img/about.pn" alt="image">
        </div>
    </section>


    <section id="matches" class="matches-section pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <div class="back-text">
                    FEATURED
                </div>
                <span>Our Featured Chefs</span>
                <h2>Check Our Featured Chefs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation uuip ex ea commodo.</p>
            </div>
            @foreach($res as $item)
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-12">
                    <div class="matches-image">
                        <img src="{{ $item->photo }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="matches-content">
                        <span>Chef</span>
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->about }}.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="matches-btn">
                        <a href="{{ route('res.view', $item->slug) }}">Vote</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="more-btn">
                <a href="#">Search For Your Favourite Chef</a>
            </div>
        </div>
    </section>


    <section class="coming-soon-section ptb-80">
        <div class="container">
            <div class="section-title">
                <span>{{ env('APP_NAME') }}</span>
                <h2>Count Down</h2>
            </div>
            <div class="coming-soon-content">
                <div id="timer">
                    <div id="days"></div>
                    <div id="hour"></div>
                    <div id="minu"></div>
                    <div id="seco"></div>
                </div>
            </div>
            <div class="coming-soon-btn">
                <a href="#">Vote Your Favourite Chef</a>
            </div>
        </div>
    </section>


    <section id="pricing" class="pricing-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <div class="back-text">
                    More Votes
                </div>
                <span>More Units</span>
                <h2>More chances for your Chef</h2>
                <p>Voting is completely free, get more units for more voting power</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-item">
                        <div class="icon">
                            <i class="flaticon-sports-and-competition"></i>
                        </div>
                        <div class="heading">
                            <h3>100 Units</h3>
                        </div>
                        <div class="price">
                            <h4><sup>₦</sup>1,000</h4>
                            <p>Upto 100 votes</p>
                        </div>
                        <ul class="price-list">
                            <li>10% Higher Chances </li>
                            <li>No Discount</li>

                        </ul>
                        <div class="price-btn">
                            <a href="#">purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="pricing-item">
                        <div class="icon">
                            <i class="flaticon-sports-and-competition"></i>
                        </div>
                        <div class="heading">
                            <h3>500 Units</h3>
                        </div>
                        <div class="price">
                            <h4><sup>₦</sup>4,000</h4>
                            <p>Upto 500 votes</p>
                        </div>
                        <ul class="price-list">
                            <li>10% Higher Chances </li>
                            <li>10% Discount</li>
                        </ul>
                        <div class="price-btn">
                            <a href="#">purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="pricing-item">
                        <div class="icon">
                            <i class="flaticon-sports-and-competition"></i>
                        </div>
                        <div class="heading">
                            <h3>1000 Units</h3>
                        </div>
                        <div class="price">
                            <h4><sup>₦</sup>7,000</h4>
                            <p>Upto 1000 votes</p>
                        </div>
                        <ul class="price-list">
                            <li>10% Higher Chances </li>
                            <li>20% Discount </li>
                        </ul>
                        <div class="price-btn">
                            <a href="#">purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
