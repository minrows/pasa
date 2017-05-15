@extends('layouts.page_app')

@section('title')
    {{'ABOUT'}}
@endsection

@section('content')
    <style>
        h3{
            color:white;
        }
        h4{
            margin:0;
        }
    </style>
    <div class="container-fluid spadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="header h1 white" id="about-us">About Us</h1>
                    <div class="banner-center">
                        <div class="banner-inner" id="introduction">
                            <div class="hidden-xs hidden-sm col-md-3 col-lg-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    @php $i=1;@endphp
                                    @foreach($abouts as $about)
                                        <li class="@if($i==1) {{'active'}} @endif"><a id="about-title" href="#tab_{{$about->id}}" data-toggle="tab">{{$about->title}}</a></li>
                                        @php $i++;@endphp
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-12 hidden-md hidden-lg" style="margin-left:0;margin-right:0; padding-right: 0;padding-left:0;"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <div class="panel-group" id="accordion">
                                @php $i=1;@endphp
                                @foreach($abouts as $about)

                                    <div class="panel panel-default">

                                        <div class="panel-heading collapse_header">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$about->id}}"  >
                                            <div class="col-xs-12">
                                            <h4 style="font-size: 12px; font-weight:bold" align="center" class="panel-title">
                                                    {{$about->title}}
                                            </h4>
                                            </div>
                                            <br />
                                            </a>
                                        </div>

                                        <div id="collapse_{{$about->id}}" class="panel-collapse collapse">
                                            <div class="panel-body" style="color:#333;">
                                                <h2>{{$about->title}}</h2>
                                                <div class="JustifyLeft">{!!html_entity_decode($about->description)!!}</div>
                                                @if($about->title==="Overseas Clients")
                                                    @foreach($oc_countries as $oc_country)
                                                        <div class="oc_country">
                                                            <h3 style="color: #333;">{{$oc_country->country}}</h3>
                                                            <div class="row">
                                                                @php $j=1; @endphp
                                                                @foreach($overseas_clients as $overseas_client)
                                                                    @if($overseas_client->country===$oc_country->country)
                                                                        <div class="oc col-xs-12">
                                                                            <ul class="list-group">
                                                                                <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;{{$overseas_client->title}}</li>
                                                                            </ul>
                                                                        </div>
                                                                        @php $j++; @endphp
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                @if($about->title==="Corporate Members")
                                                    @foreach($cfs as $cf)
                                                        <h3 style="color: #333;">{{$cf->title}}</h3>
                                                        <p style="color: white !important;">{!!html_entity_decode($cf->description)!!}</p>
                                                        <div class="row">
                                                            @foreach($cms as $cm)
                                                                @if($cf->id==$cm->corporate_field_id)
                                                                    <div class="col-md-4 col-xs-4">
                                                                        @if($cm->img!=null && $cm!="")
                                                                            <div class="thumbnail" style="min-height:60px;">
                                                                                <img src="{{asset('/image/'.$cm->img)}}">
                                                                            </div>
                                                                        @endif
                                                                        <br>
                                                                        <div class="center-block" >
                                                                            <h4 align="center" style="font-size:9px !important; font-weight: bold;">{{$cm->title}}</h4>
                                                                            @if($cm->location!=null && $cm->location!="" && $cm!=" "  )
                                                                                <h5 align="center" style="font-size:9px !important">{{$cm->location}}</h5>
                                                                            @endif
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <hr>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @php $i++;@endphp
                                @endforeach
                                </div>
                            </div>
                            <div class="hidden-xs hidden-sm col-md-9 col-lg-9">
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
                                                                <div class="oc col-lg-6">
                                                                   {{--  @if($overseas_client->img!=null && $overseas_client->img!="")
                                                                        <div class="center-block"><img src="{{asset('/image/'.$overseas_client->img)}}" height="100px" width="100px" /></div>
                                                                    @endif
                                                                    <br> --}}
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;{{$overseas_client->title}}</li>
                                                                    </ul>
                                                                    {{-- <h4 align="left"></h4> --}}
                                                                </div>
                                                                @if($j%2==0)
                                                                    <div class="clearfix"></div>
                                                                @endif
                                                                @php $j++; @endphp
                                                            @endif
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                            @if($about->title==="Corporate Members")
                                                @foreach($cfs as $cf)
                                                    <h3>{{$cf->title}}</h3>
                                                    <p style="color: white !important;">{!!html_entity_decode($cf->description)!!}</p>
                                                    <div class="row">
                                                    @foreach($cms as $cm)
                                                        @if($cf->id==$cm->corporate_field_id)
                                                            <div class="col-md-4 col-xs-4">
                                                                @if($cm->img!=null && $cm!="")
                                                                <div class="thumbnail" style="min-height:120px;">
                                                                    <img src="{{asset('/image/'.$cm->img)}}">
                                                                </div>
                                                                @endif
                                                                <br>
                                                                <div class="center-block">
                                                                    <span align="center">{{$cm->title}}</span>
                                                                    @if($cm->location!=null && $cm->location!="" && $cm!=" "  )
                                                                        <p align="center">{{$cm->location}}</p>
                                                                    @endif
                                                                </div>
                                                                <br>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    </div>
                                                    <hr>
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
