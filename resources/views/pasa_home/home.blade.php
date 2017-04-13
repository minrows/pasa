<!DOCTYPE html>
<html lang="en-US">

<style type="text/css">
    .service-box.box1 {
        background: url({{asset('image/check/servicebox1.jpg')}});
        background-size: cover;
    }
    .service-box.box2 {
        background: url({{asset('image/check/servicebox2.jpg')}}) no-repeat 0% 0%;
        background-size: cover;
    }
    .service-box.box3 {
        background: url({{asset('image/check/servicebox3.jpg')}}) no-repeat 0% 0%;
        background-size: cover;
    }
    .panel-widget-style.img {
        background-image: url({{asset('image/check/blog_03.jpg')}});
    }
</style>
	
<!-- Mirrored from syed.tinymy.com/consultant/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2017 05:02:47 GMT -->
<head>

		<title>PASA INTERNATIONAL</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- FAVICON
			========================================================================= -->
		<link rel="icon" href="{{asset('image/favicon.png')}}" />
		<!-- GOOGLE FONTS
			========================================================================= -->
		{{--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">--}}
		<!-- STYLESHEETS
			========================================================================= -->
		<link rel='stylesheet' href="{{asset('css/home_css/bootstrap.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/font-awesome.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/owl.carousel.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/lightbox.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/jquery.mmenu.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/animate.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/fx.css')}}" type='text/css' />
		<link rel='stylesheet' href="{{asset('css/home_css/style.css')}}" type='text/css' />
	</head>
	<body id="home">
	
			<!-- PRELOADER STARTS
			========================================================================= -->
		<div class="preloader"></div>
		<!-- PRELOADER ENDS
			========================================================================= -->
		<div id="page" class="site sticky_header">
			<!-- HEADER STARTS
				========================================================================= -->
			<header id="masthead" class="masthead-corporate site-header  clearfix" role="banner">
				<div id="site-search">
					<div class="container">
						<form role="search" class="search-form" action="#">
							<input type="text" class="search-field" placeholder="Search " value="" name="s" />
						</form>
					</div>
				</div>
				<div id="top" class="clearfix dark">
					<div class="container">
						<div class="site-info">
							<p><i class="fa fa-phone"></i>+977-1-5554499</p>
						</div>
						<div class="site-info address">
							<p><i class="fa fa-map-marker"></i>Pasa International, Office No. 10, Kupondole, Nepal</p>
						</div>
						<div class="social-media">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-rss"></i></a>
							<a href="mailto:info@example.com"><i class="fa fa-envelope"></i></a>
						</div>
					</div>
				</div>
				
				<div id="menu" class="clearfix dark menu-class">
					<div class="container">
						<div id="logo">
							<a href="/" rel="home">
								<img src="{{asset('image/check/logo-1.png')}}" alt="Consulting" />
							</a>
						</div>
						<div id="button-menu" class="button-icon">
							<a href="#mobile-navigation"><i class="fa fa-bars"></i></a>
						</div>
						<div id="button-search" class="button-icon">
							<i class="fa fa-search search"></i>
						</div>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<ul id="primary-menu" class="light">
								<li><a href="#home">Home</a></li>
								<li><a href="#intro">About Us</a>
									{{--<ul class="sub-menu">--}}
										{{--<li><a href="#message">Message</a></li>--}}
										{{--<li><a href="#gallery">Gallery</a></li>--}}
									{{--</ul>--}}
								</li>
								<li ><a href="#industries">Recruit Procedures</a></li>
								<li ><a href="#gallery">Gallery</a></li>
								<li><a href="#testimonials">Current Demands</a></li>
								<li><a href="#contact-us">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>				
				<nav id="mobile-navigation" role="navigation">
					<ul class="menu">
						<li class="current-menu-item"><a href="#home">Home</a></li>
						<li class="menu-item-has-children"><a href="#intro">About Us</a>
								{{-- <ul class="sub-menu">
									<li><a href="#message">Message</a></li>
									<li><a href="#gallery">Gallery</a></li>
								</ul> --}}
						</li>
						<li><a href="#industries">Recruit Procedures</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#testimonials">Current Demands</a></li>
						<li><a href="#contact-us">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			<!-- HEADER ENDS
				========================================================================= -->
			<!-- SLIDER STARTS
				========================================================================= -->
			<section id="slider-main" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
                    @php $i=1;@endphp
                    @foreach($carousels as $carousel)
					<div class="item @if($i==1) {{' active'}} @endif" id="particles-js" style="background-image:url({{asset('/image/'.$carousel->img)}}); ">
						<div class="carousel-caption slider-item-center slider-item-v-center fx">
							<h2 class="fx-start" data-animation="fadeInDown">
								<span>Welcome to Pasa International</span>
							</h2>
							<p class="fx-start" data-animation="fadeInUp">
								<span>We started our journey in this business from the year 1998. We are one of the Nepal's best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, "We outsource the best Human Resources".</span>
							</p>
							<a class="button-big button-main fx-start" href="#" data-animation="fadeInDown"><i class="fa fa-download"></i>Application Form</a>
							<a class="button-big button-main fx-start" href="#" data-animation="fadeInDown"><i class="fa fa-download"></i>Recruitment Process</a>
							<!-- <a class="button-big button-dark fx-start black" href="#" data-animation="fadeInDown"><i class="fa fa-file-text-o"></i>Contact Us</a> -->
						</div>
					</div>
                        @php $i++;@endphp
                    @endforeach

				    <a class="slider-main-prev slider-prev" href="#slider-main" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				    <a class="slider-main-next slider-next" href="#slider-main" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </section>
			<!-- SLIDER ENDS
				========================================================================= -->
			<!-- ICONS STARTS
				========================================================================= -->
			<div class="icon-wrapper" id="intro">
				<div class="container">
					<div class="row">
						<div class="icon triggerone col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-university animated"></span>
							<div class="h4">Consulting</div>
						</div>
						<div class="icon triggertwo col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-line-chart animated"></span>
							<div class="h4">Expertise</div>
						</div>
						<div class="icon triggerthree col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-bar-chart animated"></span>
							<div class="h4">Hire</div>
						</div>
						<div class="icon triggerfour col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-clock-o animated"></span>
							<div class="h4">Review</div>
						</div>
						<div class="icon triggerfive col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-tachometer animated"></span>
							<div class="h4">Feedback</div>
						</div>
						<div class="icon triggersix col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-calendar animated"></span>
							<div class="h4">Sucess</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="one">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="two">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="three">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="four">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="five">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="six">
								<div class="h1">Lorem ipsum dolor sit amet consectetur<small>Administration, Service &amp; Repair</small></div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-university"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-line-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-calendar"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="feature-list column-equal col-sm-6 col-md-3 fx-start" data-animation="fadeInUp">
									<div class="feature-box">
										<div class="feature-head">
											<h3><i class="fa fa-bar-chart"></i>Global Investment</h3>
										</div>
										<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis</p>
										<p class="center">
											<a class="button-medium button-main btn small" href="#">Contact Us</a>
										</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ICONS ENDS
				========================================================================= -->
			<div id="content" class="site-content">
				<!-- INTRO STARTS
					========================================================================= -->
				<div class="container-fluid spadding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1" id="about-us">{{$abouts[0]->title}}</h1>	
								<div class="banner-center">
									<div class="banner-inner" id="introduction">
                                        {!!html_entity_decode($abouts[0]->description)!!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container spadding">
					<div class="row row-equal fx">
						<div class="feature-list col-sm-6 col-md-4 fx-start" data-animation="fadeInUp">
							<div class="service-box box1">
								<div class="feature-head">
									<h3><i class="fa fa-university"></i>Capital Global Investment</h3>
								</div>
								<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis. Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis.<span><a class="button-medium button-main btn small" href="#">Contact Us</a></span></p>
							</div>
						</div>
						<div class="feature-list col-sm-6 col-md-4 fx-start" data-animation="fadeInUp">
							<div class="service-box box2 grn">
								<div class="feature-head">
									<h3><i class="fa fa-bar-chart"></i>Global Industry</h3>
								</div>
								<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis. Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis.<span><a class="button-medium button-main btn small" href="#">Contact Us</a></span></p>
							</div>
						</div>
						<div class="feature-list col-sm-6 col-md-4 fx-start" data-animation="fadeInUp">
							<div class="service-box box3 org">
								<div class="feature-head">
									<h3><i class="fa fa-calendar"></i>Environmental Care</h3>
								</div>
								<p>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis. Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod minim veniam quis elit sed do eiusmod minim veniam quis.<span><a class="button-medium button-main btn small" href="#">Contact Us</a></span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- INTRO ENDS
					========================================================================= -->
				<!-- CTA STARTS
					========================================================================= -->
				<div class="container-fluid spadding cta">
					<div class="row">
						<div class="container">
							<div class="col-md-9" data-animation="fadeInDown">
								<h2>PASA: A Friend at Your Service</h2>
							</div>
							<div class="col-md-3 right">
								<a href="#" class="button-big button-main"><i class="fa fa-envelope"></i>Apply Online</a>
							</div>
						</div>
					</div>
				</div>
				<!-- CTA ENDS
					========================================================================= -->
				<!-- MESSAGE STARTS
					========================================================================= -->
				<div class="container-fluid spadding message" id="message">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<h1 class="header h1">CEO Message</h1>
									<div class="quote-big clearfix">
										<blockquote>
											<p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod tempor ncididunt labore dolore magna aliqua minim aqula verana eiusmod tempor ncididunt labore dolore magna aliqua minim aqula verana eiusmod tempor ncididunt labore dolore magna aliqua minim aqula verana eiusmod tempor ncididunt labore dolore magna aliqua minim aqula verana eiusmod tempor ncididunt labore dolore magna aliqua minim Lorem ipsum dolor sit amet consectetur labore et dolore magna aliqua elit sed do eiusmod tempor ncididunt labore dolore magna aliqua minim aqula<i class="fa fa-quote-right"></i></p>
										</blockquote>
									</div>
									<a href="#" class="button-medium button-main">Contact Us</a>
								</div>
								<div class="col-md-5">
									<div class="panel-widget-style img">
										<div class="text clearfix fx-start" data-animation="fadeInRight"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MESSAGE ENDS
					========================================================================= -->
				<!-- INDUSTRIES STARTS
					========================================================================= -->
				<div class="container-fluid spadding boxes" id="industries">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1">Industries</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-calendar"></i>
									<h3>Investment</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-bar-chart"></i>
									<h3>Global Industry</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-clock-o"></i>
									<h3>Industries</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-line-chart"></i>
									<h3>Staff</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-university"></i>
									<h3>Support</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="box">
									<i class="fa fa-tachometer"></i>
									<h3>Issue Tracker</h3>
									<p>Company that offers design and build services for you from initial sketches to the final production.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- INDUSTRIES ENDS
					========================================================================= -->
				<!-- GALLERY STARTS
					========================================================================= -->
				<div class="container-fluid spadding gallery" id="gallery">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1">Gallery</h1>
								<div class="container">
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery One</a></h3>
												<p>Web Design</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g1.jpg')}}" data-lightbox="gallery" data-title="Gallery One"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g1.jpg')}}" width="400" height="400" alt="Gallery One" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Two</a></h3>
												<p>Graphic Design</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g2.jpg')}}" data-lightbox="gallery" data-title="Gallery Two"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g2.jpg')}}" width="400" height="400" alt="Gallery Two" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Three</a></h3>
												<p>Development</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g3.jpg')}}" data-lightbox="gallery" data-title="Gallery Three"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g3.jpg')}}" width="400" height="400" alt="Gallery Three" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Four</a></h3>
												<p>Photography</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g4.jpg')}}" data-lightbox="gallery" data-title="Gallery Four"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g4.jpg')}}" width="400" height="400" alt="Gallery Four" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Five</a></h3>
												<p>Prototyping</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g5.jpg')}}" data-lightbox="gallery" data-title="Gallery Five"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g5.jpg')}}" width="400" height="400" alt="Gallery Five" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Six</a></h3>
												<p>Management</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g6.jpg')}}" data-lightbox="gallery" data-title="Gallery Six"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g6.jpg')}}" width="400" height="400" alt="Gallery Six" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Seven</a></h3>
												<p>Administration</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g7.jpg')}}" data-lightbox="gallery" data-title="Gallery Seven"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g7.jpg')}}" width="400" height="400" alt="Gallery Seven" />
										</div>
									</div>
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn">
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
												<h3><a href="#">Gallery Eight</a></h3>
												<p>Staff</p>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('image/check/g8.jpg')}}" data-lightbox="gallery" data-title="Gallery Eight"><i class="fa fa-camera"></i></a>
											</div>
											<img src="{{asset('image/check/g8.jpg')}}" width="400" height="400" alt="Gallery Eight" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- GALLERY ENDS
					========================================================================= -->
				<!-- TESTIMONIALS STARTS
					========================================================================= -->
				<div class="container-fluids spadding testimonials" id="testimonials">
					<div class="row">
						<div class="container">
							<div class="col-md-7 center-block">
								<h1 class="header h1">Testimonials</h1>
								<div class="testimonials-slider owl-carousel owl-theme">
									<!-- TESTIMONIAL ONE STARTS
										========================================================================= -->
									<div class="item">
										<blockquote>
											<figure>
												<img src="{{asset('image/check/user1.jpg')}}" alt="user" class="img-circle">
											</figure>
											<p>"Vivamus fringilla sem varius leo tempor, sed posuere nulla dapibus. Integer dapibus tortor quis libero ullamcorper rutrum neque ullamcorper convallis metus."</p>
											<footer>
												<cite>Willie Meyer,<i>Manager Facelook inc</i></cite>
											</footer>
										</blockquote>
									</div>
									<!-- TESTIMONIAL ONE ENDS
										========================================================================= -->
									<!-- TESTIMONIAL TWO STARTS
										========================================================================= -->
									<div class="item">
										<blockquote>
											<figure>
												<img src="{{asset('image/check/user2.jpg')}}" alt="user" class="img-circle">
											</figure>
											<p>"Nullam pellentesque nisl nec velit tincidunt viverra. Ut ut felis mi. Mauris tristique ante non feugiat fermentum morbi nec ultricies est accumsan ligula."</p>
											<footer>
												<cite>Jessica Campbell,<i>Blogger</i></cite>
											</footer>
										</blockquote>
									</div>
									<!-- TESTIMONIAL TWO ENDS
										========================================================================= -->
									<!-- TESTIMONIAL THREE STARTS
										========================================================================= -->
									<div class="item">
										<blockquote>
											<figure>
												<img src="{{asset('image/check/user3.jpg')}}" alt="user" class="img-circle">
											</figure>
											<p>"Donec ullamcorper imperdiet velit, et tincidunt lectus bibendum ut. Fusce ut nunc tortor. Donec vel tempus nisl, sed porta efficitur eu justo leo sollicitudin gravida."</p>
											<footer>
												<cite>Hannah Romero,<i>Designer at xyz</i></cite>
											</footer>
										</blockquote>
									</div>
									<!-- TESTIMONIAL THREE ENDS
										========================================================================= -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- TESTIMONIALS ENDS
					========================================================================= -->
				<!-- CONTACT-US STARTS
					========================================================================= -->
				<div class="container-fluids spadding contact-us" id="contact-us">
					<div class="container">
						<div class="container">
							<div class="col-md-12 center-block">
								<h1 class="header h1">Contact Us Today</h1>
								<h3><i>We'd love to hear from you!</i></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-md-5 center-block">
								<form id="cta-signup-form" class="cta-signup-form">
									<div class="form-group">
										<input type="text" class="form-control input-lg" id="input-name" placeholder="Your name" required>
									</div>
									<div class="form-group">
										<input type="email" class="form-control input-lg" id="input-email" placeholder="Email address" required>
									</div>
									<div class="form-group">
										<input type="phone" class="form-control input-lg" id="input-phone" placeholder="Phone number" required>
									</div>
									<div class="form-group">
										<textarea class="form-control input-lg" id="input-message" placeholder="Your message" required></textarea>
									</div>
									<div class="form-btn">
										<button type="submit" class="btn white">SEND</button>
										<p class="form-terms">By submitting your enquriy you agree to our<a href="#">Terms</a>and<a href="#">Privacy Policy</a>.</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTACT-US ENDS
					========================================================================= -->
			</div>
			<!-- FOOTER STARTS
				========================================================================= -->
			<footer id="footer" class="site-footer light" role="contentinfo">
				<div class="footer-bg"></div>
				<section id="footer-widget" class="widget-area" role="complementary">
					<div class="container">
						<div class="row">
							<aside class="widget aio-widget-text col-sm-6 col-md-3 ">
								<div class="text clearfix">
									<img src="{{asset('image/check/logo-footer.png')}}" width="160" height="48" />
									<p class="footer-text">lorem ipsum dolor sit amet consec labore et dolore magna aliqua elit seddo eiusmod tempor lorem ipsum dolor sit amet consec labore et dolore magna aliqua elit seddo eiusmod tempor lorem ipsum dolor sit amet</p>
								</div>
							</aside>
							<aside class="widget aio-widget-blogs col-sm-6 col-md-3 ">
								<h3 class="header h1 white">Latest Updates</h3>		
								<div class="blog-widget">
									<div class="thumbnail">
										<img src="{{asset('image/check/blog1.jpg')}}" width="400" height="400" alt="Board Of Director" />
									</div>
									<h3><a href="#">Announcement</a></h3>
									<p>May 31, 2016</p>
								</div>
								<div class="blog-widget">
									<div class="thumbnail">
										<img src="{{asset('image/check/blog2.jpg')}}" width="400" height="400" alt="New Office Lobby" />
									</div>
									<h3><a href="#">Monthly Report</a></h3>
									<p>Dec 30, 2016</p>
								</div>
							</aside>
							<aside class="widget aio-widget-testimonials col-sm-6 col-md-3 ">
								<h3 class="header h1 white">Feedback</h3>
								<div class="testimonial-grid column-equal">
									<div class="testimonial-body">
										<blockquote><i class="fa fa-quote-left"></i>veniam quis nostrud exercitation ullamco laboris nisi aliquip exea marvel<i class="fa fa-quote-right"></i></blockquote>
									</div>
									<div class="testimonial-foot clearfix">
										<div class="thumbnail">
											<img src="{{asset('image/check/review1.jpg')}}" width="100" height="100" alt="Miranda Hazard Footer" />
										</div>
										<cite>Jane Doe /<small class="label-main">Hazard &amp; Co.</small></cite>
									</div>
								</div>
							</aside>
							<aside class="widget aio-widget-testimonials col-sm-6 col-md-3 ">
								<h3 class="header h1 white">Testimonial</h3>
								<div class="testimonial-grid column-equal">
									<div class="testimonial-body">
										<blockquote><i class="fa fa-quote-left"></i>veniam quis nostrud exercitation ullamco laboris nisi aliquip exea marvel<i class="fa fa-quote-right"></i></blockquote>
									</div>
									<div class="testimonial-foot clearfix">
										<div class="thumbnail">
											<img src="{{asset('image/check/review2.jpg')}}" width="100" height="100" alt="Miranda Hazard Footer" />
										</div>
										<cite>Richard Hazard /<small class="label-main">Jane &amp; Co.</small></cite>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</section>
				<section id="bottom" class="light">
					<div class="container">
						<div class="site-copyright">
							<p>Copyright &copy; 2016 - Consultant</p>
						</div>
					</div>
				</section>
			</footer>
			<!-- FOOTER ENDS
				========================================================================= -->
			<a href="#page" class="button-go scroll-to"><i class="fa fa-chevron-up"></i></a>
		</div>
		
		<!-- SCRIPTS
			========================================================================= -->
			
		<script type='text/javascript' src="{{asset('js/home_js/jquery-3.1.1.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/bootstrap.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/owl.carousel.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/lightbox.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/particles.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/jquery.easing.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/masonry.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/jquery.mmenu.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/app.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/scripts.js')}}"></script>
		
	</body>


</html>