@extends('res.layout')
@section('content')

    <div id="home" class="main-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span>Welcome to :- </span>
                                <h1 class="text-capitalize">{{ $res->name }} <strong>Pandora Events page</strong></h1>
                                <p>{{ $res->shortAbout() }}</p>
                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        Vote Us
                                        <i class="flaticon-promotion"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="assets/img/man.png" alt="image">
                                <div class="banner-video">
                                    <a href="https://www.youtube.com/watch?v=XGf97wKjDV0" class="video-btn popup-youtube">
                                        <i class="flaticon-play"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=XGf97wKjDV0" class="popup-youtube">
                                        <span>Play Video</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="fun-facts-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <p>Address</p>
                        <h6 class="text-white">
                            {{ $res->address }}
                        </h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-vote-yea"></i>
                        </div>
                        <p>Total Votes</p>
                        <h3>
                            <span class="odometer" data-count="58">00</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <p>Total Likes</p>
                        <h3>
                            <span class="odometer" data-count="30">00</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fun-fact">
                        <div class="icon">
                            <i class="flaticon-population-system"></i>
                        </div>
                        <p>Current Position</p>
                        <h3>
                            <span class="odometer" data-count="37">00</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="mission-section pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <div class="back-text">
                    GALLERY
                </div>
                <span>Our Gallery</span>
                <h2><b>Explore</b> {{ $res->name }} <strong>Gallery</strong></h2>
                <p>{{ $res->name }} has some niece gallery</p>
            </div>
            <div class="mission-slider owl-carousel owl-theme">
                @foreach($galleries as $item)
                    <div class="mission-item" style="background-image: url('/res/assets/img/team-bg.png')">
                        <img src="{{ $res->photo }}" />
                        <a href="#">
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="about-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/images/lacuisine.png" alt="image">
                        <div class="shape">
                            <img src="/res/assets/img/about-shape.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="back-text">
                            About Us
                        </div>
                        <span>About This Event</span>
                        <h3><b>This Event </b> Is Sponsored by PANDORA & <strong>Afiaanyi Services Limited</strong></h3>
                        <p>Campaign dolor sit amet conseetur diisci velit sed quiLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore meniam</p>
                        <div class="signature">
                            <img src="/res/assets/img/signature.png" alt="image">
                            <h4>PANDORA</h4>
                            <h5>Events</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="donation-section pt-100">
        <div class="container">
            <div class="section-title">
                <span>Why this pandora events</span>
                <h4 class="text-white">This event is to encourage the highest performing Chef to keep up</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="donation-form">
                        <h3><b>What </b> You <span>Can Vote About</span></h3>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" value="HYGIENE">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" value="CUSTOMER SERVICE">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" value="WHO Compliance">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="donation-content">
                        <h3>How to vote </h3>
                        <p>Click the vote icon, select what you are voting for, then proceed, THATS ALL</p>
                        <a href="#">
                            <i class="fa fa-vote-yea"></i>
                           VOTE NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="principles-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <div class="back-text">
                    Chef
                </div>
                <span>Featured Chefs</span>
                <h2>Our  <strong>Featured </strong> Chefs</h2>
            </div>
            <div class="row">
                @foreach($featured as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="principles-item">
                        <div class="icon">
                            <img src="{{ $item->photo }}" alt="image">
                        </div>
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->shortAbout() }}</p>
                        <a href="{{ route('res.view', $item->slug) }}">
                            <div class="right-icon">
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="supporters-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="supporters-content">
                        <h3>10,033</h3>
                        <h4><b>Total </b> Votes </h4>
                        <a href="#" class="default-btn">
                            Cast Your Vote
                            <i class="fa fa-vote-yea"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="supporters-progress">
                                <div class="image">
                                    <img src="/res/assets/img/progress.png" alt="image">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <h3>260</h3>
                                <p>Days Remains</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="supporters-progress">
                                <div class="image">
                                    <img src="/res/assets/img/progress.png" alt="image">
                                    <i class="flaticon-minute"></i>
                                </div>
                                <h3>10,033</h3>
                                <p>Votes</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="supporters-progress">
                                <div class="image">
                                    <img src="/res/assets/img/progress.png" alt="image">
                                    <i class="flaticon-coffee"></i>
                                </div>
                                <h3>10</h3>
                                <p>Active Chef</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="supporters-progress">
                                <div class="image">
                                    <img src="/res/assets/img/progress.png" alt="image">
                                    <i class="flaticon-timer"></i>
                                </div>
                                <h3>4000</h3>
                                <p>Active Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="event" class="events-section ptb-100">
        <div class="container-fluid">
            <div class="section-title">
                <div class="back-text">
                    Comments
                </div>
                <span>What people are saying about {{ $res->name }}</span>
                <h2><b>Comment</b> & Feedbacks <strong>Complains</strong></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    @foreach ($galleries as $item)
                        <div class="events-item">
                            <div class="icon">
                                <i class="flaticon-folder-1"></i>
                            </div>
                            <span>Oct 6, 2021, 1:00 pm</span>
                            <h3>Annonymous</h3>
                            <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="events-image">
                        <img src="/res/assets/img/event-man.png" alt="image">
                        <div class="event-shape-1">
                            <img src="/res/assets/img/event-shape-1.png" alt="image">
                        </div>
                        <div class="event-shape-2">
                            <img src="/res/assets/img/event-shape-1.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    @foreach ($galleries as $item)
                    <div class="events-item two ">
                        <div class="icon">
                            <i class="flaticon-folder-1"></i>
                        </div>
                        <span>Oct 6, 2021, 1:00 pm</span>
                        <h3>Anonymous</h3>
                        <p>Learning do amet contur diiscivt suia non nuameius velit modi</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore odit aut fugit sed quiagni dolores eos qui ratione voluptatem sequi nidunt ut labore et dolore magnam aliquam </p>
                    <div class="testimonial-info">
{{--                        <img src="/assets/img/client/1.jpg" alt="image">--}}
                        <h3>James Taylor</h3>
                        <span>Policy Advisor</span>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore odit aut fugit sed quiagni dolores eos qui ratione voluptatem sequi nidunt ut labore et dolore magnam aliquam </p>
                    <div class="testimonial-info">
                        <img src="assets/img/client/2.jpg" alt="image">
                        <h3>Jessica Lauren</h3>
                        <span>Policy Advisor</span>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="icon">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore odit aut fugit sed quiagni dolores eos qui ratione voluptatem sequi nidunt ut labore et dolore magnam aliquam </p>
                    <div class="testimonial-info">
                        <img src="assets/img/client/3.jpg" alt="image">
                        <h3>Alex Maxwel</h3>
                        <span>Policy Advisor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
