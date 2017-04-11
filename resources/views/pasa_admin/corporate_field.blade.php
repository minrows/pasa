@extends('layouts.admin_app',['select' => 'corporate_field'])


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
                        <h1 align="center">Edit/Delete Corporate Fields</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th><strong>Title</strong></th>
                                    <th><strong>State</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($corporate_fields as $corporate_field)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$corporate_field->title}}</td>
                                    <td>{{$corporate_field->state}}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$corporate_field->id}}">Edit</a>
                                        &nbsp;

                                        <a href="{{ '/pasa_admin/delete_corporate_field' }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('delete-form_{{$corporate_field->id}}').submit();"
                                           class="btn btn-primary">
                                            Delete
                                        </a>

                                        <form id="delete-form_{{$corporate_field->id}}" action="{{'/pasa_admin/delete_corporate_field'}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$corporate_field->id}}" id="del_id" name="del_id" />
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
                    <h4 align="center" class="modal-title">Add Corporate Field</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_corporate_field'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Title:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-lg-2 control-label"><strong>Description:</strong></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description!" required></textarea>
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

    @foreach($corporate_fields as $corporate_field)

        <div id="edit_modal_{{$corporate_field->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit Corporate Field</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$corporate_field->id}}" id="edit_{{$corporate_field->id}}" action="{{'/pasa_admin/update_corporate_field'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$corporate_field->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$corporate_field->title}}" placeholder="Enter Title!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description_{{$corporate_field->id}}" class="col-lg-2 control-label">Description:</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="description_{{$corporate_field->id}}" name="description_{{$corporate_field->id}}" placeholder="Enter Description!">{{$corporate_field->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($corporate_field->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($corporate_field->state==='off') {{'selected'}} @endif>off</option>
                                        </select>
                                    </div>
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

    <script type="text/javascript">
        CKEDITOR.replace( "description" );
    </script>

    @foreach($corporate_fields as $corporate_field)
        <script type="text/javascript">
            CKEDITOR.replace( "description_{{$corporate_field->id}}" );
        </script>
    @endforeach
   
@endsection
