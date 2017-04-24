@extends('layouts.page_app')

@section('title')
    {{'GALLERY'}}
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
                    <h1 class="header h1" id="about-us">Gallery</h1>
                        <div class="container" style="padding:20px !important; ">
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
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
