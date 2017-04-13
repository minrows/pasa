@extends('layouts.admin_app',['select' => 'corporate_member'])

@section('title')
    {{'CORPORATE MEMBER'}}
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
                        <h1 align="center">Corporate Members</h1>
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
                                    <th><strong>Corporate Field</strong></th>
                                    <th><strong>Location</strong></th>
                                    <th><strong>State</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($corporate_members as $corporate_member)
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    @if($corporate_member==null || $corporate_member->img=="")
                                        &nbsp;
                                    @else
                                        <img class="center-block" height="50px" width="50px" src="{{asset('image/'.$corporate_member->img)}}" /></td>
                                    @endif

                                <td>{{$corporate_member->title}}</td>
                                <td>
                                    @foreach($corporate_fields as $corporate_field)
                                        @if($corporate_field->id===$corporate_member->corporate_field_id)
                                            {{$corporate_field->title}}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{$corporate_member->location}}</td>
                                <td>{{$corporate_member->state}}</td>
                                <td>
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$corporate_member->id}}">Edit</a>
                                    &nbsp;

                                    <a href="{{ '/pasa_admin/delete_corporate_member' }}"
                                       onclick="event.preventDefault();
                                           document.getElementById('delete-form_{{$corporate_member->id}}').submit();"
                                       class="btn btn-primary">
                                        Delete
                                    </a>

                                    <form id="delete-form_{{$corporate_member->id}}" action="{{'/pasa_admin/delete_corporate_member'}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{$corporate_member->id}}" id="del_id" name="del_id" />
                                        <input type="hidden" value="{{$corporate_member->corporate_field_id}}" id="del_id1" name="del_id1" />
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
                    <h4 align="center" class="modal-title">Add New Corporate Member</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_corporate_member'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Title:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="corporate_field_id" class="col-lg-2 control-label">State:</label>
                                <div class="col-lg-10">
                                    <select name="corporate_field_id" id="corporate_field_id" class="form-control">
                                        @foreach($corporate_fields as $corporate_field)
                                        <option value="{{$corporate_field->id}}">{{$corporate_field->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="location" class="col-lg-2 control-label"><strong>Location:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter Country Name!" required>
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

    @foreach($corporate_members as $corporate_member)

        <div id="edit_modal_{{$corporate_member->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Corporate Member Edit</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$corporate_member->id}}" id="edit_{{$corporate_member->id}}" action="{{'/pasa_admin/update_corporate_member'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="corporate_field_id" class="col-lg-2 control-label">Corporate Field Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="corporate_field_id" name="corporate_field_id" value="{{$corporate_member->corporate_field_id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$corporate_member->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$corporate_member->title}}" placeholder="Enter Title!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="location" class="col-lg-2 control-label">Location:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location!" value="{{$corporate_member->location}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($corporate_member->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($corporate_member->state==='off') {{'selected'}} @endif>off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah_{{$corporate_member->id}}')" />
                                </div>
                                <div class="_img text-center"><img id="blah_{{$corporate_member->id}}" height="200px" width="200px" src="{{asset('/image/'.$corporate_member->img)}}"/>
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

