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
								<li><a href="/#home">Home</a></li>
								<li><a href="/#about-us">About Us</a>
									{{--<ul class="sub-menu">--}}
										{{--<li><a href="#message">Message</a></li>--}}
										{{--<li><a href="#gallery">Gallery</a></li>--}}
									{{--</ul>--}}
								</li>
								<li ><a href="/#industries">Recruit Procedures</a></li>
								<li ><a href="/#gallery">Gallery</a></li>
								<li><a href="/#testimonials">Current Demands</a></li>
								<li><a href="/#contact-us">Contact Us</a></li>
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

            <div id="content" class="site-content">
                @section('content')
                @show
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
		{{--<script type='text/javascript' src="{{asset('js/home_js/particles.min.js')}}"></script>--}}
		<script type='text/javascript' src="{{asset('js/home_js/jquery.easing.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/masonry.js')}}"></script>
		<script type='text/javascript' src="{{asset('js/home_js/jquery.mmenu.js')}}"></script>
		{{--<script type='text/javascript' src="{{asset('js/home_js/app.js')}}"></script>--}}
		<script type='text/javascript' src="{{asset('js/home_js/scripts.js')}}"></script>
		
	</body>


</html>