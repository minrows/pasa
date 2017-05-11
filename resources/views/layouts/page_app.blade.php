<!DOCTYPE html>
<html lang="en-US">
<head>

		<title>PASA | @yield('title')</title>

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
		<link rel='stylesheet' href="{{asset('css/home_css/tab.css')}}" type='text/css' />

	</head>
	<body id="home">
	
			<!-- PRELOADER STARTS
			========================================================================= -->
		<div class="preloader" id="top"></div>
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
							@foreach($links as $link)
								<a href="{{$link->url}}" target="_blank"><i class="{{$link->icon}}"></i></a>
							@endforeach
							{{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
							{{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
							{{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
							{{--<a href="#"><i class="fa fa-youtube"></i></a>--}}
							{{--<a href="#"><i class="fa fa-rss"></i></a>--}}
							{{--<a href="mailto:info@example.com"><i class="fa fa-envelope"></i></a>--}}
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
								<li><a href="/#home">Home</a></li>
								<li><a href="/#about-us">About Us</a>
									{{--<ul class="sub-menu">--}}
										{{--<li><a href="#message">Message</a></li>--}}
										{{--<li><a href="#gallery">Gallery</a></li>--}}
									{{--</ul>--}}
								</li>
								<li ><a href="/#rp">Recruit Procedures</a></li>
								<li ><a href="/#gallery">Gallery</a></li>
								<li><a href="/#cd">Current Demands</a></li>
								<li><a href="" data-toggle="modal" data-target="#contacts">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>				
				<nav id="mobile-navigation" role="navigation">
					<ul class="menu">
						<li class="current-menu-item"><a href="/#home">Home</a></li>
							<li class="menu-item-has-children"><a href="/#about-us">About Us</a>
								{{-- <ul class="sub-menu">
									<li><a href="#message">Message</a></li>
									<li><a href="#gallery">Gallery</a></li>
								</ul> --}}
							</li>
						<li><a href="/#rp">Recruit Procedures</a></li>
						<li><a href="/#gallery">Gallery</a></li>
						<li><a href="/#cd">Current Demands</a></li>
						<<li><a href="" data-toggle="modal" data-target="#contacts">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			<!-- HEADER ENDS
				========================================================================= -->

            <div id="content" class="site-content">
                @section('content')
                @show
            </div>


			<!-- FOOTER STARTS
				========================================================================= -->
			<footer id="footer" class="site-footer light" role="contentinfo" style="color: #464646 !important;">
				<div class="footer-bg"></div>
				<section id="footer-widget" style="background-color: whitesmoke !important;" class="widget-area" role="complementary">
					<div class="container">
						<div class="row">
							<aside class="widget aio-widget-text col-xs-12 col-sm-4 col-md-4 ">
								<div class="text clearfix">
									<img src="{{asset('image/logo.png')}}" width="300" height="48" style="margin-top: -15px;" />
									<p class="" style="color: #464646 !important;"></p>
								</div>
							</aside>

							<aside class="widget aio-widget-blogs col-xs-12 col-sm-4 col-md-4 ">
								<h3 class="header h1">&nbsp;Overview</h3>
								<ul style="list-style: none; line-height: 2em;">
									<li><a href="/about" class="btn btn-link" style="color: #464646 !important;">About Us</a></li>

									<li><a href="/rp" class="btn btn-link" style="color: #464646 !important;">Recruitment Process</a></li>

									<li><a href="/curr_demand" class="btn btn-link" style="color: #464646 !important;">Current Demands</a></li>

									<li><a href="/gallery" class="btn btn-link" style="color: #464646 !important;">Gallery</a></li>

								</ul>

							</aside>

							<aside class="widget aio-widget-blogs col-xs-12 col-sm-4 col-md-4 ">
							    <h3 class="header h1">&nbsp;Keep In Touch</h3>
							    <ul style="list-style: none; line-height: 2em;">
							        <li class="footer-contact" style="padding: 2px;"><i class="fa fa-map-marker"></i><span style="padding: 17px;">&nbsp;Kupondole, Lalitpur, Nepal</span></li>

							        <li class="footer-contact" ><i class="fa fa-phone"></i><span style="padding: 10px;">&nbsp;+977-1-5554499, +977-1-5553380 </span></li>

							        <li class="footer-contact" ><i class="fa fa-fax"></i><span style="padding: 10px;">&nbsp;+977-1-5538440</span></li>

							        <li class="footer-contact" ><i class="fa fa-envelope"></i><span style="padding: 10px;"><a href="mailto:info@pasainternational.com.np" class="btn btn-link" style="color: #464646 !important;">&nbsp;info@pasainternational.com.np</a></span></li>

							        <li class="footer-contact" ><i class="fa fa-globe"></i><span style="padding: 10px;"><a href="http://www.pasainternational.com.np" class="btn btn-link" style="color: #464646 !important;">&nbsp;www.pasainternational.com.np</a></span></li>
							    </ul>
							</aside>
						</div>
					</div>
				</section>
				<section id="bottom" class="light" style="background: url({{asset('./image/check/footer-bg.png')}});">
					<div class="container">
						<div class="site-copyright" style="position: absolute; bottom: 0px;">
							<p>&copy; 2017 Pasa IT Solution Pvt. Ltd.</p>
						</div>
					</div>
				</section>
			</footer>
			<!-- FOOTER ENDS
				========================================================================= -->
			<a href="#top" class="button-go scroll-to" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>
		<!-- SCRIPTS
			========================================================================= -->
		<script type='text/javascript' src="{{asset('js/home_js/jquery-3.1.1.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/bootstrap.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/owl.carousel.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/lightbox.js')}}"></script>
		{{--<script type='text/javascript' src="{{asset('js/home_js/particles.min.js')}}"></script>--}}
		<script type='text/javascript' src="{{asset('js/home_js/jquery.easing.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/masonry.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/jquery.mmenu.js')}}"></script>
		{{--<script type='text/javascript' src="{{asset('js/home_js/app.js')}}"></script>--}}
		<script type='text/javascript' src="{{asset('js/home_js/scripts.js')}}"></script>

			<div id="contacts" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<br />
							<div class="center-block">
								<h1 class="header h1" align="center">Contact Us Today</h1>
								<h3 align="center"><i>We'd love to hear from you!</i></h3>
							</div>

						</div>
						<div class="modal-body" style="margin:25px;">
							<form id="cta-signup-form" action="/feedback" method="post" class="cta-signup-form">
								{{csrf_field()}}
								<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="input-name" placeholder="Your name" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control input-lg" name="email" id="input-email" placeholder="Email address" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control input-lg" name="phn_no" id="input-phone" placeholder="Phone number" required>
								</div>
								<div class="form-group">
									<textarea class="form-control input-lg" name="message" id="input-message" placeholder="Your message" required></textarea>
								</div>
								<div class="form-btn">
									<button type="submit" class="btn btn-rounded white">SEND</button>
									<p class="form-terms">By submitting your enquiry you agree to our<a href="#">Terms</a>and<a href="#">Privacy Policy</a>.</p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		
	</body>


</html>