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
                            <div class="col-xs-3"> <!-- required for floating -->
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                    <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                                    <li><a href="#profile" data-toggle="tab">Profile</a></li>
                                    <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-9">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home">Home Tab.</div>
                                    <div class="tab-pane" id="profile">Profile Tab.</div>
                                    <div class="tab-pane" id="messages">Messages Tab.</div>
                                    <div class="tab-pane" id="settings">Settings Tab.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
