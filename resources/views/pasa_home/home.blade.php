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
        background-image: url({{asset('image/'.$chairman->img)}});
    }

    .slider {
        width: 80%;
        margin: 50px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
      height: 196px;
      /*padding: 1px;*/
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

</style>
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
		<link rel='stylesheet' href="{{asset('css/home_css/slick.css')}}" type='text/css' />
	</head>
	<body id="home">
	@if(session()->has('message'))
		<h1 align="center" class="alert alert-success">{{session()->get('message')}}</h1>
	@endif
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
								<li><a href="#intro">About Us</a></li>
								<li ><a href="#rp">Recruit Procedures</a></li>
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
						<li><a href="#rp">Recruit Procedures</a></li>
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
						{{-- <div class="carousel-caption slider-item-center slider-item-v-center fx">
							<h2 class="fx-start" data-animation="fadeInDown">
								<span>Welcome to Pasa International</span>
							</h2>
							<p class="fx-start" data-animation="fadeInUp">
								<span>We started our journey in this business from the year 1998. We are one of the Nepal's best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, "We outsource the best Human Resources".</span>
							</p>
							<a class="btn button-big button-main fx-start" href="/application_form/download" data-animation="fadeInDown"><i class="fa fa-download"></i>Application Form</a>
							<a class="btn button-big button-main fx-start" href="/recruitment_procedure/download" data-animation="fadeInDown"><i class="fa fa-download"></i>Recruitment Process</a>
							<!-- <a class="button-big button-dark fx-start black" href="#" data-animation="fadeInDown"><i class="fa fa-file-text-o"></i>Contact Us</a> -->
						</div> --}}
					</div>
                        @php $i++;@endphp
                    @endforeach

				    <a class="slider-main-prev slider-prev" href="#slider-main" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				    <a class="slider-main-next slider-next" href="#slider-main" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </section>
			{{-- SLIDER ENDS
				========================================================================= --}}
		{{-- 	ICONS STARTS
				========================================================================= --}}
			{{-- CTA STARTS
					========================================================================= --}}
				<div class="container-fluid spadding cta">
					<div class="row">
						<div class="container">
							<div class="col-md-7" data-animation="fadeInDown">
								<h2>PASA: A Friend at Your Service</h2>
							</div>
							<div class="col-md-5 right">
                                <a href="/about" class="button-big button-main"><i class="fa fa-book"></i>Read More</a>
                                &nbsp;&nbsp;
								<a href="/online" class="button-big button-main"><i class="fa fa-envelope"></i>Apply Online</a>
							</div>
						</div>
					</div>
				</div>
				<!-- CTA ENDS
			<!-- ICONS ENDS
				========================================================================= -->
			<div id="content" class="site-content">
				<!-- INTRO STARTS
					========================================================================= -->
				<div class="container-fluid spadding" id="about-us">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1 white" >{{$about->title}}</h1>
								<div class="banner-center">
									<div class="banner-inner" id="introduction">
                                        {!!html_entity_decode($about->description)!!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- yeta rakhera heram --}}
				<div class="icon-wrapper" id="intro">
				<div class="container">
					<div class="row">
						<div class="icon triggerone col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-university animated"></span>
							<div class="h4">Who We Are?</div>
						</div>
						<div class="icon triggertwo col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-line-chart animated"></span>
							<div class="h4">Why PASA?</div>
						</div>
						<div class="icon triggerthree col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-bar-chart animated"></span>
							<div class="h4">Where We Are?</div>
						</div>
						<div class="icon triggerfour col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-clock-o animated"></span>
							<div class="h4">Our Services</div>
						</div>
						<div class="icon triggerfive col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-tachometer animated"></span>
							<div class="h4">Feedback</div>
						</div>
						<div class="icon triggersix col-xs-6 col-sm-4 col-lg-2">
							<span class="h1 fa fa-calendar animated"></span>
							<div class="h4">Success</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="one">
								<div class="h1">WHO ARE WE?</small></div>
								<div><p>We started our journey in this business from the year 1998; we are one of the Nepal's best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, "we outsource the best human resources". We have been providing expert and unparalleled value added recruitment services to our clients across the world who are looking for professional and smart candidates to excel in their business. We are happy to have satisfied clients with us from a long time and we feel proud and honored to give the best to our precious clients.</p></div>
							</div>
							<div class="two">
								<div class="h1">Blah</div>
								<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
							</div>
							<div class="three">
								<div class="h1">Blah</div>
								<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
							
							</div>
							<div class="four">
								<div class="h1">Blah</div>
								<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								
							</div>
							<div class="five">
								<div class="h1">Blah</div>
								<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								
							</div>
							<div class="six">
								<div class="h1">Blah</div>
								<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- MESSAGE STARTS
					========================================================================= -->
				<div class="container-fluid spadding message" id="message">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<h1 class="header h1 purple">{{$chairman->title}}</h1>
									<div class="quote-big clearfix">
										<blockquote>
											<p>{!!html_entity_decode($chairman->description)!!}</p>
										</blockquote>
									</div>
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
				<!-- RECRUITMENT PROCEDURES
					========================================================================= -->
				<div class="container-fluid spadding boxes" id="rp">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1 purple">Recruitment Procedure</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="container">
		                    @php $i=1; @endphp
							@foreach($rps as $rp)
		                    <div class="col-xs-6 col-md-4">
								<div class="service-list text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
									<a href="{{ '/rp' }}"
									   class="btn btn-link center-block"
									   onclick="event.preventDefault();
											   document.getElementById('pass_{{$rp->id}}').submit();"><i class="{{$rp->img}}"></i></a>
									</br>
									<h3 style="font-size: 16px;"><strong>{{$rp->title}}</strong></h3>
									<p><a href="{{ '/rp' }}"
									   class="btn btn-link center-block"
									   onclick="event.preventDefault();
											   document.getElementById('pass_{{$rp->id}}').submit();">
										READ MORE
									</a></p>

									<form id="pass_{{$rp->id}}" action="{{'/rp'}}" method="POST" style="display: none;">
										{{ csrf_field() }}
										<input type="hidden" value="{{$rp->title}}" id="sel" name="sel" />
									</form>

								</div>
							</div>
		                        @if($i%3==0) <div class="clearfix"></div> @endif
		                        @php $i++; @endphp
		                    @endforeach
						</div>
					</div>

				</div>
				<!-- RECRUITMENT PROCEDURE ENDS
					========================================================================= -->
				<!-- GALLERY STARTS
					========================================================================= -->
				<div class="container-fluid spadding gallery" id="gallery">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1 class="header h1 purple">Gallery</h1>
								<div class="container">
									@php $i=1; @endphp
									@foreach($gallery as $galery)
									<div class="gallery-full column-equal col-sm-6 col-md-3 fx-start" data-animation="bounceIn" >
										<div class="thumbnail fx-hover">
											<div class="fx-hover-back"></div>
											<div class="fx-hover-content">
											<div class="clearfix"></div>
												<h3 style="margin-top: 14px;"><a href="#">{{$galery->title}}</a></h3>
												<div class="line"></div>
											</div>
											<div class="fx-hover-icon">
												<a class="icon-medium icon-main" href="{{asset('/image/'.$galery->img_full)}}" data-lightbox="gallery" data-title="{{$galery->title}}"><i class="fa fa-camera"></i></a>
											</div>
											<img class='' src="{{asset('/image/'.$galery->img_thumb)}}"  width="400" height="400" alt="{{$galery->title}}" style="min-height: 211.5px;"/>
										</div>
									</div>
									@if($i%4==0) <div class="clearfix"></div> @endif
		                        	@php $i++; @endphp
		                    		@endforeach
		                    		<div class="col-md-2 center-block" style="margin-top: 15px; ">
		                                <a href="/gallery" class="btn btn-fresh text-uppercase btn-lg"><i class="fa fa-camera"></i>&nbsp;&nbsp;MORE PHOTOS</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- GALLERY ENDS
					========================================================================= -->
				<!-- CURRENT DEMANDS-->
				<div class="container-fluid spadding cd" id="cd">
					<div class="row">
						<div class="container">
							<div class="col-md-12">
							<div class="cell-3">
                <h3 class="block-head side-heading" style="margin-top: 20px;">Current </br> <span>Requirements</span></h3>
                <p class="portfolio-lft-txt">Browse our current <br> requirements.
                </p>
                <div class="viewAll-home">
                    <a class="btn btn-default" href="/curr_demand" style="margin-top: 30px;">Browse All Requirements</a>
                </div>
            </div>
								{{-- <h1 class="header h1 white">Current Demands</h1> --}}
								<section class="center slider">
								@foreach($curr_demand_img as $cd_img)
								    <div>

								     <a href="{{asset('/image/'.$cd_img->img_full)}}" data-lightbox="gallery" data-title="hy"> <img src="{{asset('/image/'.$cd_img->img_thumb)}}"></a>
								    </div>
								@endforeach   
								</section>
							</div>
						</div>
					</div>
				</div>
				<!-- CURRENT DEMANDS ENDS -->

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
							<aside class="widget aio-widget-text col-sm-6 col-md-4 ">
								<div class="text clearfix">
									<img src="{{asset('image/check/logo-footer.png')}}" width="160" height="48" />
									<p class="footer-text">lorem ipsum dolor sit amet consec labore et dolore magna aliqua elit seddo eiusmod tempor lorem ipsum dolor sit amet consec labore et dolore magna aliqua elit seddo eiusmod tempor lorem ipsum dolor sit amet</p>
								</div>
							</aside>
							<aside class="widget aio-widget-blogs col-sm-6 col-md-4 ">
							    <h3 class="header h1 white">&nbsp;Keep In touch</h3>
							    <ul style="list-style: none;">
							        <li class="footer-contact" style="padding: 7px;"><i class="fa fa-map-marker"></i><span>&nbsp;P.O. Box No.: 20330 Samakhushi, Kathmandu, Nepal</span></li>

							        <li class="footer-contact"><i class="fa fa-phone"></i><span>&nbsp;+977-1-4387207 ( 6 Lines) </span></li>

							        <li class="footer-contact"><i class="fa fa-fax"></i><span>&nbsp;+977-1-4387208</span></li>

							        <li class="footer-contact"><i class="fa fa-envelope"></i><span><a href="mailto:info@pasainternational.com.np">&nbsp;info@pasainternational.com.np</a></span></li>

							        <li class="footer-contact"><i class="fa fa-globe"></i><span><a href="http://www.pasainternational.com.np">&nbsp;www.pasainternational.com.np</a></span></li>

							    </ul>

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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		{{-- Menu Onclick function  --}}
		<script type="text/javascript">
		    $(function() {
		        $("#primary-menu li a").click(function() {
		            $("#primary-menu li a").removeClass("active");
		            $(this).addClass("active");
		        });
		    });
		</script>
		<script type="text/javascript">
		    $(document).ready(function(){
		      $('.center').slick({
		        infinite: true,
			    slidesToShow: 3,
			    slidesToScroll: 1

		        // dots: true,
		        // infinite: true,
		        // centerMode: true,
		        // slidesToShow: 4,
		        // slidesToScroll: 3
		      });
		    });
  		</script>
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
		<script type='text/javascript' src="{{asset('js/home_js/slick.min.js')}}"></script>
		
	</body>
</html>