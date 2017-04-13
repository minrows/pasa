@extends('layouts.page_app')

@section('title')
    {{'ABOUT'}}
@endsection

@section('content')
    <div class="container-fluid spadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header h1" id="about-us">About Us</h1>
                    <div class="banner-center">
                        <div class="banner-inner" id="introduction">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    @php $i=1;@endphp
                                    @foreach($abouts as $about)
                                        <li class="@if($i==1) {{'active'}} @endif"><a id="about-title" href="#tab_{{$about->id}}" data-toggle="tab">{{$about->title}}</a></li>
                                        @php $i++;@endphp
                                    @endforeach

                                </ul>
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    @php $i=1;@endphp
                                    @foreach($abouts as $about)
                                        <div class="tab-pane @if($i==1) {{'active'}} @endif" id="tab_{{$about->id}}">
                                            <h2>{{$about->title}}</h2>
                                            <div class="JustifyLeft">{!!html_entity_decode($about->description)!!}</div>
                                        </div>
                                        @php $i++;@endphp
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
