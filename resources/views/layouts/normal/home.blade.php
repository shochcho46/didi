<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title></title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link href="{{ asset('homepage/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('homepage/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('homepage/css/templatemo-softy-pinko.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">


    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#welcome" class="logo">
                            {{--  <img src="assets/images/logo.png" alt="Softy Pinko"/>  --}}
                            <h4>DIDI</h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            {{-- <li><a href="#welcome" class="active">Home</a></li> --}}

                            <li><a href="#features">About</a></li>

                            @guest
                            <li><a href="{{ route('home.gigindex') }}">GiGs</a></li>
                            <li><a href="{{ route('home.projectindex') }}">Projects</a></li>
                            @endguest

                            @auth
                            <li><a href="{{ route('reguser.gigindex') }}">GiGs</a></li>
                            <li><a href="{{ route('reguser.projectindex') }}">Projects</a></li>
                            @endauth

                            <li><a href="#work-process">Work Process</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-plans">Pricing Tables</a></li>
                            <li><a href="#docs">Docs</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>

                            @auth
                            <li><a href ="{{ route('logout') }}">Log Out <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            @endauth
                            @guest

                            <li><a href ="{{ route('home.login') }}">LogIn <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            <li><a href = "{{ route('home.signup') }}">Reg <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                            @endguest
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>We provide the best <strong>strategy</strong><br>to grow up your <strong>carrier & business</strong></h1>

                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper odio. Vestibulum porttitor hendrerit dolor, quis sodales tellus</p> --}}

                        <a href="#features" class="main-button-slider">Privacy Policy</a>

                        @guest
                        <form method="POST" id="personalform" action="{{ route('home.searchgig') }}"
                        enctype="multipart/form-data">
                        @endguest

                        @auth
                        <form method="POST" id="personalform" action="{{ route('reguser.searchgig') }}"
                        enctype="multipart/form-data">
                        @endauth

                            @csrf

                            <div class="input-group mt-4 mb-3">
                                <input type="text" class="form-control" placeholder="type any GiG name" name="gigsearch" aria-label="Search for GiGS" aria-describedby="basic-addon2" required>
                                <div class="input-group-append">
                                  <button class="btn btn-dark" type="submit" >GiGs <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                              </div>
                          </form>



                          @guest
                          <form method="POST" id="personalform" action="{{ route('home.searchproject') }}"
                          enctype="multipart/form-data">
                          @endguest


                          @auth
                          <form method="POST" id="personalform" action="{{ route('reguser.searchproject') }}"
                          enctype="multipart/form-data">
                          @endauth

                          @csrf
                            <div class="input-group mt-4 mb-3">
                                <input type="text" class="form-control" placeholder="type any Project name" name="projectsearch" aria-label="Search for Project" aria-describedby="basic-addon2" required>
                                <div class="input-group-append">
                                  <button class="btn btn-dark" type="submit">Projects <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                              </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <br>
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">

                                    <i class="mdi mdi-48px mdi-lan"></i>
                                </div>
                                <h5 class="features-title">Modern Strategy</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper odio</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i class="mdi mdi-48px mdi-handshake"></i>
                                </div>
                                <h5 class="features-title">Best Relationship</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper odio</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">

                                    <i><img src=" {{ asset('homepage/images/featured-item-01.png') }}" alt=""></i>
                                </div>
                                <h5 class="features-title">Ultimate Marketing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper odio</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">

                    <img src=" {{ asset('homepage/images/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">

                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s discuss about you project</h2>
                    </div>
                    <div class="left-text">
                        <p>Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">We can help you to grow your business</h2>
                    </div>
                    <div class="left-text">
                        <p>Aenean pretium, ipsum et porttitor auctor, metus ipsum iaculis nisi, a bibendum lectus libero vitae urna. Sed id leo eu dolor luctus congue sed eget ipsum. Nunc nec luctus libero. Etiam quis dolor elit.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                    <img src="{{ asset('homepage/images/right-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Work Process</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper odioLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">

                                <i class="mdi mdi-36px mdi-lightbulb-on customColor"></i>

                            <strong>Get Ideas</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i class="mdi mdi-36px mdi-file-document-edit customColor"></i>
                            <strong>Sketch Up</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i class="mdi mdi-36px mdi-chat-plus customColor"></i>
                            <strong>Discuss</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i class="mdi mdi-36px mdi-text-box-search customColor"></i>
                            <strong>Revise</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i class="mdi mdi-36px mdi-check-decagram customColor"></i>
                            <strong>Approve</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i class="mdi mdi-36px mdi-access-point customColor"></i>

                            <strong>Launch</strong>
                            <span>Godard pabst prism fam cliche.</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">What do they say?</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Donec tempus, sem non rutrum imperdiet, lectus orci fringilla nulla, at accumsan elit eros a turpis. Ut sagittis lectus libero.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">

                            <i><img src="{{ asset('homepage/images/testimonial-icon.png') }}" alt=""></i>
                            <p>Proin a neque nisi. Nam ipsum nisi, venenatis ut nulla quis, egestas scelerisque orci. Maecenas a finibus odio.</p>
                            <div class="user-image">

                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Catherine Soft</h3>
                                <span>Managing Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="{{ asset('homepage/images/testimonial-icon.png') }}" alt=""></i>
                            <p>Integer molestie aliquam gravida. Nullam nec arcu finibus, imperdiet nulla vitae, placerat nibh. Cras maximus venenatis molestie.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Kelvin Wood</h3>
                                <span>Digital Marketer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="{{ asset('homepage/images/testimonial-icon.png') }}" alt=""></i>
                            <p>Quisque diam odio, maximus ac consectetur eu, auctor non lorem. Cras quis est non ante ultrices molestie. Ut vehicula et diam at aliquam.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">David Martin</h3>
                                <span>Website Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Pricing Plans</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Starter</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">&#2547;</span>
                                <span class="price">15.00</span>
                                <span class="period">monthly</span>
                            </div>
                            <ul class="list">
                                <li class="active">30 Coins</li>
                                <li class="active">1 month full access</li>
                                <li class="active">Unlimited job Post</li>
                                <li class="active">24/7 Security</li>
                                <li>15-minute support</li>
                                <li>Unlimited Emails</li>

                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item ">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Premium</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">&#2547;</span>
                                <span class="price">30.00</span>
                                <span class="period">monthly</span>
                            </div>
                            <ul class="list">
                                <li class="active">60 Coins</li>
                                <li class="active">2 month full access</li>
                                <li class="active">Unlimited job Post</li>
                                <li class="active">24/7 Security</li>
                                <li>15-minute support</li>
                                <li>Unlimited Emails</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">Advanced</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">&#2547;</span>
                                <span class="price">42.00</span>
                                <span class="period">monthly</span>
                            </div>
                            <ul class="list">
                                <li class="active">90 Coins</li>
                                <li class="active">3 month full access</li>
                                <li class="active">Unlimited job Post</li>
                                <li class="active">24/7 Security</li>
                                <li>15-minute support</li>
                                <li>Unlimited Emails</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>126</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>GiGs</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Freelancer</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>Proposal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->

    <!-- ***** Blog Start ***** -->
    <section class="section" id="docs">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Documentations</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">

                            <img src="{{ asset('homepage/images/blog-item-01.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Vivamus ac vehicula dui</a>
                            </h3>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">

                            <img src=" {{ asset('homepage/images/blog-item-02.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Phasellus convallis augue</a>
                            </h3>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src=" {{ asset('homepage/images/blog-item-03.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Nam gravida purus non</a>
                            </h3>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper
                            </div>
                            <a href="#" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Talk To Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Keep in touch</h5>
                    <div class="contact-text">
                        <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                        <br>auctor non lorem</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a semper elit. Donec a semper elit. Donec a semper</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; {{ date("Y") }} </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->

    {{--  <script src="{{ asset('homepage/js/jquery-2.1.0.min.js') }}" ></script>  --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="{{ asset('homepage/js/popper.js') }}" ></script>
    <script src="{{ asset('homepage/js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('homepage/js/scrollreveal.min.js') }}" ></script>
     <script src="{{ asset('homepage/js/waypoints.min.js') }}" ></script>
     <script src="{{ asset('homepage/js/jquery.counterup.min.js') }}" ></script>
     <script src="{{ asset('homepage/js/imgfix.min.js') }}" ></script>
     <script src="{{ asset('homepage/js/custom.js') }}" ></script>



  </body>
</html>
