@extends('layouts.page_app')

@section('title')
    {{'ABOUT'}}
@endsection

@section('content')
    <style>
        h3{
            color:lightcyan;
        }
        h4{
            margin:0;
        }
    </style>
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

                                            @if($about->title==="Overseas Clients")
                                                @foreach($oc_countries as $oc_country)
                                                    <div class="oc_country">
                                                        <h3>{{$oc_country->country}}</h3>
                                                        <div class="row">
                                                            @php $j=1; @endphp
                                                        @foreach($overseas_clients as $overseas_client)
                                                            @if($overseas_client->country===$oc_country->country)
                                                                <div class="oc col-lg-4">
                                                                    @if($overseas_client->img!=null && $overseas_client->img!="")
                                                                        <div class="center-block"><img src="{{asset('/image/'.$overseas_client->img)}}" height="100px" width="100px" /></div>
                                                                    @endif
                                                                    <br>
                                                                    <h4 align="center">{{$overseas_client->title}}</h4>
                                                                </div>
                                                                @if($j%3==0)
                                                                    <div class="clearfix"></div>
                                                                @endif
                                                                @php $j++; @endphp
                                                            @endif
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif

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