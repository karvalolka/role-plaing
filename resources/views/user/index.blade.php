@extends('layouts.main')

@section('content')

<section id="home" class="welcome-hero">

    <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000" style="padding: 0; border: none; background: rgba(255, 255, 255, 0.6); margin-top: 40px; backdrop-filter: blur(10px);">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; padding: 0; margin-top: 0;">
            <!-- Логотип и меню (слева) -->
            <div class="navbar-header" style="display: flex; align-items: center;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html" style="margin-right: 20px;">list<span>race</span></a>
            </div>

            <!-- Навигационное меню (по центру) -->
            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="display: flex; justify-content: center; align-items: center; flex-grow: 1;">
                <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp" style="display: flex; margin-bottom: 0; padding: 0;">
                    <li class="scroll active" style="margin-right: 20px;"><a href="#home">Персонажи</a></li>
                    <li class="scroll" style="margin-right: 20px;"><a href="#works">Лор</a></li>
                    <li class="scroll" style="margin-right: 20px;"><a href="#explore">Расы</a></li>
                    <li class="scroll" style="margin-right: 20px;"><a href="#reviews">Классы</a></li>
                    <li class="scroll" style="margin-right: 20px;"><a href="#blog">Свободные очки</a></li>
                    <li class="scroll" style="margin-right: 20px;"><a href="#contact">Механики</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="welcome-hero-txt">
            <h2>best place to find and explore <br> that all you need </h2>
            <p>
                Find Best Place, Restaurant, Hotel, Real State and many more think in just One click
            </p>
        </div>
    </div>

</section>

<section id="list-topics" class="list-topics">
    <div class="container">
        <div class="list-topics-content">
            <ul>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-restaurant"></i>
                        </div>
                        <h2><a href="#">Лор</a></h2>
                        <p>150 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-travel"></i>
                        </div>
                        <h2><a href="#">Расы</a></h2>
                        <p>214 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <h2><a href="#">Классы</a></h2>
                        <p>185 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-pills"></i>
                        </div>
                        <h2><a href="#">Механики</a></h2>
                        <p>200 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-transport"></i>
                        </div>
                        <h2><a href="#">Свободные очки</a></h2>
                        <p>120 listings</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</section>

{{--Лор--}}
<section id="works" class="works" style="padding: 60px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 50px; margin-top: 80px;">
            <h2 style="font-size: 36px; font-weight: bold; color: #333;">Лор</h2>
        </div>
        <div class="works-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2><a href="#">choose <span> what to</span> do</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-networking"></i>
                        </div>
                        <h2><a href="#">find <span> what you want</span></a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-location-on-road"></i>
                        </div>
                        <h2><a href="#">explore <span> amazing</span> place</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{--Расы--}}
<section id="explore" class="explore">
    <div class="container">
        <div class="section-header">
            <h2 style="font-size: 36px; font-weight: bold; color: #333;">Расы</h2>
        </div>
        <div class="explore-content">
            <div class="row">
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e1.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-1">
                            <h2><a href="#">tommy helfinger bar</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 10 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">5$-300$</span>
										</span>
                                <a href="#">resturent</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e2.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">swim and dine resort</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.5</span>
                                <a href="#"> 8 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">50$-500$</span>
										</span>
                                <a href="#">hotel</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e3.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-3">
                            <h2><a href="#">europe tour</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 15 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">5k$-10k$</span>
										</span>
                                <a href="#">destination</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e4.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">most view</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-4">
                            <h2><a href="#">banglow with swiming pool</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 10 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">10k$-15k$</span>
										</span>
                                <a href="#">real estate</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e5.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">vintage car expo</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.2</span>
                                <a href="#"> 8 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">500$-1200$</span>
										</span>
                                <a href="#">automotion</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{asset('assets/images/explore/e6.jpg')}} " alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-5">
                            <h2><a href="#">thailand tour</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 15 ratings</a>
                                <span class="explore-price-box">
											form
											<span class="explore-price">5k$-10k$</span>
										</span>
                                <a href="#">destination</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="{{asset('assets/images/explore/person.png')}} " alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
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

</section>

{{--Классы--}}
<section id="reviews" class="reviews">
    <div class="section-header ">
        <h2 style="font-size: 36px; font-weight: bold; color: #333;">Классы</h2>
    </div>
    <div class="reviews-content">
        <div class="testimonial-carousel">
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c1.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c2.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>monirul islam</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c3.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Shohrab Hossain</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c4.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c1.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c2.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>monirul islam</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c3.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Shohrab Hossain</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/clients/c4.png')}} " alt="clients">
                        </div>
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{--Статистика--}}
<section id="statistics"  class="statistics">
    <div class="container">
        <div class="statistics-counter">
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">90 </div> <span>K+</span>
                    </div>
                    <h3>listings</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">40</div> <span>k+</span>
                    </div>
                    <h3>listing categories</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">65</div> <span>k+</span>
                    </div>
                    <h3>visitors</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-ststistics-box">
                    <div class="statistics-content">
                        <div class="counter">50</div> <span>k+</span>
                    </div>
                    <h3>happy clients</h3>
                </div>
            </div>
        </div>
    </div>

</section>

{{--Свободные очки--}}
<section id="blog" class="blog" >
    <div class="container">
        <div class="section-header">
            <h2 style="font-size: 36px; font-weight: bold; color: #333;">Свободные очки</h2>
        </div>
        <div class="blog-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="{{asset('assets/images/blog/b1.jpg')}} " alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="{{asset('assets/images/blog/b2.jpg')}} " alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-item">
                        <div class="single-blog-item-img">
                            <img src="{{asset('assets/images/blog/b3.jpg')}} " alt="blog image">
                        </div>
                        <div class="single-blog-item-txt">
                            <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                            <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

{{--Механики--}}
<section id="contact" class="subscription">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2 style="font-size: 36px; font-weight: bold; color: #333;">
                Механики
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                    <form action="#">
                        <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                        <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                            creat account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
