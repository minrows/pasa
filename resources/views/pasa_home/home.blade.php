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
    #clients img{
    	height: 180px !important;
    	width: 180px !important;
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
		<div id="top" class="preloader"></div>
		<!-- PRELOADER ENDS
			========================================================================= -->
		<div id="page" class="site sticky_header">
			<!-- HEADER STARTS
				========================================================================= -->
			<header id="masthead" class="masthead-corporate site-header  clearfix" role="banner">
				{{-- <div id="site-search">
					<div class="container">
						<form role="search" class="search-form" action="#">
							<input type="text" class="search-field" placeholder="Search " value="" name="s" />
						</form>
					</div>
				</div> --}}
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
						
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<ul id="primary-menu" class="light">
								<li><a href="#home">Home</a></li>
								<li><a href="#about-us">About Us</a></li>
									<ul class="sub-menu">
										<li><a href="#message">Message</a></li>
										<li><a href="#gallery">Gallery</a></li>
									</ul>
								<li ><a href="#rp">Recruit Procedures</a></li>
								<li ><a href="#gallery">Gallery</a></li>
								<li><a href="#cd">Current Demands</a></li>
								<li><a href="" data-toggle="modal" data-target="#contacts">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>				
				<nav id="mobile-navigation" role="navigation">
					<ul class="menu">
						<li class="current-menu-item"><a href="#home">Home</a></li>
						<li class="menu-item-has-children"><a href="#about-us">About Us</a>
								{{-- <ul class="sub-menu">
									<li><a href="#message">Message</a></li>
									<li><a href="#gallery">Gallery</a></li>
								</ul> --}}
						</li>
						<li><a href="#rp">Recruit Procedures</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#cd">Current Demands</a></li>
						<li><a href="" data-toggle="modal" data-target="#contacts">Contact Us</a></li>
					</ul>
				</nav>
			</header>
			<!-- HEADER ENDS
				========================================================================= -->
			<!-- SLIDER STARTS
				========================================================================= -->
			{{-- rijesh ko slider --}}
			   
			   <div class='carousel slide' id='featured'>				   
				    <div class='carousel-inner'>
						@php $i=1;@endphp
		               @foreach($carousels as $carousel)
				        <div class='item @if($i==1) {{' active'}} @endif'>
				            <img src='{{asset('/image/'.$carousel->img)}}'>
				        </div>
				        @php $i++;@endphp
                    @endforeach
				        <a class='left carousel-control' href='#featured' role='button' data-slide='prev'>
				            <i class='fa fa-chevron-left' style=" position: absolute; line-height:50"></i>
				        </a>
				        <a class='right carousel-control' href='#featured' role='button' data-slide='next'>
				            <i class='fa fa-chevron-right'></i>
				        </a>									        		
				        <div class="container-fluid hidden-sm hidden-xs col-md-12 col-lg-12 row btsld" style="position: absolute; bottom: 0px; margin-right: 0px; margin-left: 0px;">
							<div class="col-md-7" data-animation="fadeInDown">
								<h2>PASA: A Friend at Your Service</h2>
							</div>
							<div class="col-md-5 right">
								<a href="/online" class="button-big button-main"><i class="fa fa-envelope"></i>Apply Online</a>
							</div>
						</div>
				    </div>
				</div>
				
				<div class="container-fluid hidden-lg hidden-md  row btsld " style="display: block; margin-right: 0px; margin-left: 0px; 	background-color: rgba(0,0,0,1); padding: 6px;">
							<div class="pull-left" data-animation="fadeInDown">
								<h3>PASA: A Friend at Your Service</h2>
							</div>
							<div class="pull-right">
								<a href="/online" class="button-small button-main"><i class="fa fa-envelope"></i>Apply Online</a>
							</div>
				</div>
				
				


			{{-- <section id="slider-main" class="carousel slide" data-ride="carousel" >
				<div class="carousel-inner" style="position: relative;  ">
                    @php $i=1;@endphp
                    @foreach($carousels as $carousel)
					<div class="item @if($i==1) {{' active'}} @endif" style="background-image:url({{asset('/image/'.$carousel->img)}}); ">
						<div class="carousel-caption slider-item-center slider-item-v-center fx">
							<h2 class="fx-start" data-animation="fadeInDown">
								<span>Welcome to Pasa International</span>
							</h2>
							<p class="fx-start" data-animation="fadeInUp">
								<span>We started our journey in this business from the year 1998. We are one of the Nepal's best Recruiting Agencies. The number of years of experience and knowledge gives us the confident to say that, "We outsource the best Human Resources".</span>
							</p>
							<a class="btn button-big button-main fx-start" href="/application_form/download" data-animation="fadeInDown"><i class="fa fa-download"></i>Application Form</a>
							<a class="btn button-big button-main fx-start" href="/recruitment_procedure/download" data-animation="fadeInDown"><i class="fa fa-download"></i>Recruitment Process</a>
							<!-- <a class="button-big button-dark fx-start black" href="#" data-animation="fadeInDown"><i class="fa fa-file-text-o"></i>Contact Us</a> -->
						</div>
					</div>
                        @php $i++;@endphp
                    @endforeach
				    <a class="slider-main-prev slider-prev" href="#slider-main" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
				    <a class="slider-main-next slider-next" href="#slider-main" data-slide="next"><i class="fa fa-chevron-right"></i></a>
	                <div class="container-fluid col-md-12 row" style="position: absolute;  background-color: red; bottom: 0px; margin-right: 0px; margin-left: 0px;">
						<div class="col-md-7" data-animation="fadeInDown">
							<h2>PASA: A Friend at Your Service</h2>
						</div>
						<div class="col-md-5 right">
							<a href="/online" class="button-big button-main"><i class="fa fa-envelope"></i>Apply Online</a>
						</div>
					</div>
	            </div>
            </section> --}}
			{{-- SLIDER ENDS
				========================================================================= --}}
		{{-- 	ICONS STARTS
				========================================================================= --}}
			{{-- CTA STARTS
					========================================================================= --}}
				{{-- <div class="container-fluid spadding cta">
					<div class="row">
						<div class="container">
							<div class="col-md-7" data-animation="fadeInDown">
								<h2>PASA: A Friend at Your Service</h2>
							</div>
							<div class="col-md-5 right">
								<a href="/online" class="button-big button-main"><i class="fa fa-envelope"></i>Apply Online</a>
							</div>
						</div>
					</div>
				</div> --}}
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
                                        <div class="col-md-2 center-block">
                                			<a href="/about" class="button-big button-main"><i class="fa fa-book"></i>Read More</a>
										</div>
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
					<!-- CURRENT DEMANDS-->
				<div class="container-fluid spadding cd" id="cd">
				    <div class="row">
				        <div class="container">
				        	<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
				        		<h1 class="header h1 white">Current Demands</h1>
				        		<div class="viewAll-home">
					                        <a class="btn btn-default" href="/curr_demand" style="margin-top: 3px; ">Browse All Requirements</a>
					            </div>
				        	</div>
				            <div class="col-xs-12 col-md-12">
					            <div class="hidden-sm hidden-xs">
					                <div class="cell-3 ">
					                    <h3 class="block-head side-heading" style="margin-top: 20px;">Current </br> <span>Requirements</span></h3>
					                    <p class="portfolio-lft-txt">Browse our current <br> requirements.</p>
					                    <div class="viewAll-home">
					                        <a class="btn btn-default" href="/curr_demand" style="margin-top: 30px;">Browse All Requirements</a>
					                    </div>
					                </div>
					            </div>
				                <section class="center slider">
				                    @foreach($curr_demand_img as $cd_img)
				                    <div class="col-xs-12 col-md-4">
				                        <a href="{{asset('/image/'.$cd_img->img_full)}}" data-lightbox="gallery" data-title="hy"> <img src="{{asset('/image/'.$cd_img->img_thumb)}}"></a>
				                    </div>
				                    @endforeach
				                </section>
				            </div>
				        </div>
				    </div>
				</div>				<!-- CURRENT DEMANDS ENDS -->

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
		                        @if($i%3==0) <div class="clearfix hidden-sm hidden-xs"></div> @endif 
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
							<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
				        		<h1 class="header h1 purple">Gallery</h1>
				        		<section class="clients slider" style="width: 99% !important; margin-top: -8px;">
			                    @foreach($gallery as $galery)
			                    <div style="margin: 0px 5px !important;" {{-- class="col-xs-6 col-md-6" --}}>
			                        <a href="{{asset('/image/'.$galery->img_full)}}" data-lightbox="gallery" data-title="{{$galery->title}}"><img src="{{asset('/image/'.$galery->img_thumb)}}"></a>
			                    </div>
			                    @endforeach
				            </section>
				        	</div>
				        	<div class="hidden-sm hidden-xs">
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
				</div>

				<!-- GALLERY ENDS
					========================================================================= -->

					<!-- OverSeas Clients -->
				<div class="container-fluids spadding testimonials" id="clients">
					<div class="row">
						<div class="container">
							<div class="hidden-lg hidden-md">
				        		<h1 class="header h1 purple pull-left" align="left">Overseas Clients</h1>
				        	</div>
					        <div class="hidden-sm hidden-xs">
								<div class="col-md-7 center-block">
									<h1 class="header h1 purple" style="margin-top: 50px;">Overseas Clients</h1>
								</div>
							</div>
							<section class="clients slider" style="width: 99% !important;">
			                    @foreach($overseas_client as $oc)
			                    @if($oc->img!=null && $oc->img!="")
			                    
			                    <div style="margin: 0px 2px !important;" >
			                        <img src="{{asset('/image/'.$oc->img)}}" title="{{$oc->title}}" >
			                    </div>

			                    @endif
			                    @endforeach
				            </section>
						</div>
					</div>
				</div>				
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
									<img src="{{asset('image/logo.png')}}" width="260" style="margin-top: -25px; margin-left: 25px;" />
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
			{{--<a href="#page" class="button-go scroll-to"><i class="fa fa-chevron-up"></i></a>--}}
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
	<script type='text/javascript' src="{{asset('js/home_js/slick.min.js')}}"></script>
		{{-- slider js --}}
		<script type="text/javascript">$(function(){
		    $('.carousel').carousel({
		        interval: 3000,
		        pause: false,
		        keyboard: false
		    });
		});
		</script>

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
		      $('.clients').slick({
		        infinite: true,
			    slidesToShow: 6,
			    slidesToScroll: 6,
			    responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 6,
			        slidesToScroll: 6,
			        infinite: true,
			      }
			    },
			    {
			      breakpoint: 850,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 4
			      }
			    },
			    {
			      breakpoint: 750,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 4
			      }
			    },
			    {
			      breakpoint: 560,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
		      });
		    });
  		</script>
		<script type="text/javascript">
		    $(document).ready(function(){
		      $('.center').slick({
		        // infinite: true,
			    slidesToShow: 3,
			    slidesToScroll: 1,
			    responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			        infinite: true,
			      }
			    },
			    {
			      breakpoint: 995,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 500,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
		      });
		    });
  		</script>


	{{-- Modal Pop-Up Contact Form --}}
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