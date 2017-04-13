@extends('layouts.admin_app',['select' => 'overseas_client'])

@section('title')
    {{'OVERSEAS CLIENT'}}
@endsection

@section('content')
    <style>
        .modal-dialog {
            width: 60%;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <!-- Traffic sources -->
            <div class="panel panel-flat">
                
                <div class="panel-heading">
                    <div class="panel-title">
                        @if(session()->has('message'))
                            <h1 align="center" class="alert alert-success">{{session()->get('message')}}</h1>
                        @endif
                        <h1 align="center">Overseas Clients</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>&nbsp;</th>
                                    <th><strong>Title</strong></th>
                                    <th><strong>Country</strong></th>
                                    <th><strong>State</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($overseas_clients as $overseas_client)
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    @if($overseas_client->img==null || $overseas_client->img=="")
                                        &nbsp;
                                    @else
                                        <img class="center-block" height="50px" width="50px" src="{{asset('image/'.$overseas_client->img)}}" /></td>
                                    @endif

                                <td>{{$overseas_client->title}}</td>
                                <td>{{$overseas_client->country}}</td>
                                <td>{{$overseas_client->state}}</td>
                                <td>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$overseas_client->id}}">Edit</a>
                                    &nbsp;

                                    <a href="{{ '/pasa_admin/delete_overseas_client' }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('delete-form_{{$overseas_client->id}}').submit();"
                                       class="btn btn-primary">
                                        Delete
                                    </a>

                                    <form id="delete-form_{{$overseas_client->id}}" action="{{'/pasa_admin/delete_overseas_client'}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$overseas_client->id}}" id="del_id" name="del_id" />
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>

    <div id="add_new_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" class="modal-title">Add New Overseas Client</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_overseas_client'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Title:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country" class="col-lg-2 control-label"><strong>Country:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-lg-2 control-label">State:</label>
                                <div class="col-lg-10">
                                    <select name="state" id="state" class="form-control">
                                        <option selected>on</option>
                                        <option>off</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah')" />
                            </div>
                            <div class="_img text-center"><img id="blah" height="200px" width="200px" src=""/>
                                <p><strong><center>Image Preview</center></strong></p><br><br>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-default pull-right">Add</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach($overseas_clients as $overseas_client)

        <div id="edit_modal_{{$overseas_client->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Overseas Clients Edit</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$overseas_client->id}}" id="edit_{{$overseas_client->id}}" action="{{'/pasa_admin/update_overseas_client'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$overseas_client->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$overseas_client->title}}" placeholder="Enter Page Title!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="country" class="col-lg-2 control-label">Country:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country!" value="{{$overseas_client->country}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($overseas_client->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($overseas_client->state==='off') {{'selected'}} @endif>off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah_{{$overseas_client->id}}')" />
                                </div>
                                <div class="_img text-center"><img id="blah_{{$overseas_client->id}}" height="200px" width="200px" src="{{asset('/image/'.$overseas_client->img)}}"/>
                                    <p><strong><center>Image Preview </center></strong></p><br><br>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-default pull-right">Edit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endforeach


    <script>
        function readURL(input, temp) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(temp)
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

