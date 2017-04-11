
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Global stylesheets -->
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">--}}
    {{--<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('css/admin_css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin_css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin_css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin_css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('js/admin_js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin_js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin_js/ckeditor/ckeditor.js') }}"></script>
    <!-- /core JS files -->


    <script type="text/javascript" src="{{ asset('js/admin_js/app.js') }}"></script>

    <!-- /theme JS files -->
</head>
<body>

<!-- Main navbar -->
<div class="navbar navbar-default header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{'/'}}"><img src="{{ asset('image/logo.png') }}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user-material">
                    <div class="category-content">
                        <div class="sidebar-user-material-content">
                            {{--<a href="#">--}}
                            {{--<img src="assets/images/demo/users/face11.jpg" class="img-circle img-responsive" alt="">--}}
                            {{--</a>--}}
                            <h6>{{ Auth::user()->name }}</h6>
                            <span class="text-size-small">{{ Auth::user()->email }}</span>
                        </div>

                        <div class="sidebar-user-material-menu">
                            <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                        </div>
                    </div>

                    <div class="navigation-wrapper collapse" id="user-nav">
                        <ul class="navigation">
                            <li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
                            <li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li class="@if ($select === 'dashboard') {{'active'}} @endif">
                                <a href="{{'/pasa_admin'}}"><i class="icon-home4"></i> <span>Dashboard</span></a>
                            </li>

                            <li class="@if ($select === 'carousel') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/carousel'}}"><i class="icon-stack2"></i> <span>Carousel</span></a>
                            </li>
                            <li class="@if ($select === 'current_demand') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/current_demand'}}"><i class="icon-stack2"></i> <span>Current Demands</span></a>
                            </li>
                            <li class="@if ($select === 'current_demand_img') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/current_demand_img'}}"><i class="icon-stack2"></i> <span>Current Demands Images</span></a>
                            </li>
                            <li class="@if ($select === 'about') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/about'}}"><i class="icon-stack2"></i> <span>About Us</span></a>
                            </li>
                            <li class="@if ($select === 'recruitment_procedure') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/recruitment_procedure'}}"><i class="icon-stack2"></i> <span>Recruitment Procedure</span></a>
                            </li>
                            <li class="@if ($select === 'contact') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/contact'}}"><i class="icon-stack2"></i> <span>Contact Us</span></a>
                            </li>
                            <li class="@if ($select === 'gallery') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/gallery'}}"><i class="icon-stack2"></i> <span>Gallery</span></a>
                            </li>
                            <li class="@if ($select === 'recruitment_procedure') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/recruitment_procedure'}}"><i class="icon-stack2"></i> <span>Recruitment Procedure</span></a>
                            </li>
                            <li class="@if ($select === 'overseas_client') {{'active'}} @endif">
                                <a href="{{'/pasa_admin/overseas_client'}}"><i class="icon-stack2"></i> <span>Overseas Client</span></a>
                            </li>

                            {{--<li>--}}
                            {{--<a href="#"><i class="icon-stack2"></i> <span>Page layouts</span></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="layout_navbar_fixed.html">Fixed navbar</a></li>--}}
                            {{--<li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li>--}}
                            {{--<li><a href="layout_sidebar_fixed_native.html">Fixed sidebar native scroll</a></li>--}}
                            {{--<li><a href="layout_navbar_hideable.html">Hideable navbar</a></li>--}}
                            {{--<li><a href="layout_navbar_hideable_sidebar.html">Hideable &amp; fixed sidebar</a></li>--}}
                            {{--<li><a href="layout_footer_fixed.html">Fixed footer</a></li>--}}
                            {{--<li class="navigation-divider"></li>--}}
                            {{--<li><a href="boxed_default.html">Boxed with default sidebar</a></li>--}}
                            {{--<li><a href="boxed_mini.html">Boxed with mini sidebar</a></li>--}}
                            {{--<li><a href="boxed_full.html">Boxed full width</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
            @section('content')
            @show
            <!-- /main charts -->





                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2017. Pasa IT Solution Pvt. Ltd.</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Apr 2017 05:57:31 GMT -->
</html>
