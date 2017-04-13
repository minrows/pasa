@extends('layouts.admin_app',['select' => 'dashboard'])

@section('title')
    {{'HOME'}}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">

            <!-- Traffic sources -->
            <div class="panel panel">
                <div class="panel-heading">
                    <div class="panel-title"><strong>Admin Dashboard</strong></div>
                </div>

                <div class="panel-footer" style="padding-left:20px;">
                    You are logged in as {{Auth::user()->name}}!
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>
@endsection
