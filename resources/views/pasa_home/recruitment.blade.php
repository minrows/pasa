@extends('layouts.page_app')

@section('title')
    {{'RECRUITMENT PROCEDURE'}}
@endsection

@section('content')
    @if($sel==null || $sel=="")
        @php $sel=$rps[0]['title']; @endphp
    @endif
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
                    <h1 class="header h1" id="about-us">Recruitment Procedure</h1>
                    <div class="banner-center">
                        <div class="banner-inner" id="introduction">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    @php $i=1;@endphp
                                    @foreach($rps as $rp)
                                        <li class="@if($sel==$rp->title) {{'active'}} @endif"><a id="about-title" href="#tab_{{$rp->id}}" data-toggle="tab">{{$rp->title}}</a></li>
                                        @php $i++;@endphp
                                    @endforeach

                                </ul>
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <!-- Tab panes -->
                                <br/>
                                <br/>
                                <br/>
                                <div class="tab-content">
                                    @php $i=1;@endphp
                                    @foreach($rps as $rp)
                                        <div class="tab-pane @if($sel==$rp->title) {{'active'}} @endif" id="tab_{{$rp->id}}">
                                            <h2>{{$rp->title}}</h2>
                                            <div class="JustifyLeft">{!!html_entity_decode($rp->description)!!}</div>
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
