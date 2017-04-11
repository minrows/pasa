@extends('layouts.admin_app',['select' => 'about'])


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
                        <h1 align="center">Edit/Delete About Page</h1>
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
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$about->title}}</td>
                                    <td>{{$about->state}}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$about->id}}">Edit</a>
                                        &nbsp;

                                        <a href="{{ '/pasa_admin/delete_about' }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('delete-form_{{$about->id}}').submit();"
                                           class="btn btn-primary">
                                            Delete
                                        </a>

                                        <form id="delete-form_{{$about->id}}" action="{{'/pasa_admin/delete_about'}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$about->id}}" id="del_id" name="del_id" />
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
                    <h4 align="center" class="modal-title">Add New About Us Page</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_about'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Page Title:</strong></label>
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

    @foreach($abouts as $about)

        <div id="edit_modal_{{$about->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit About Us Pages</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$about->id}}" id="edit_{{$about->id}}" action="{{'/pasa_admin/update_about'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$about->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Page Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}" placeholder="Enter Page Title!">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description_{{$about->id}}" class="col-lg-2 control-label">Description:</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="description_{{$about->id}}" name="description_{{$about->id}}" placeholder="Enter Description!">{{$about->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($about->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($about->state==='off') {{'selected'}} @endif>off</option>
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

    @foreach($abouts as $about)
        <script type="text/javascript">
            CKEDITOR.replace( "description_{{$about->id}}" );
        </script>
    @endforeach
   
@endsection
