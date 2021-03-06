@extends('layouts.admin_app',['select' => 'carousel'])


@section('content')
    <style>
        .modal-dialog {
            width: 60%;
        }

        /*th,td{*/
            /*word-break:break-all;*/
        /*}*/

        /*.cw-table-list td{*/
            /*padding-bottom: 0px !important;*/
            /*overflow:hidden;*/
        /*}*/



    </style>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <div class="panel-title">
                        @if(session()->has('message'))
                            <h1 align="center" class="alert alert-success">{{session()->get('message')}}</h1>
                        @endif
                        <h1 align="center">Edit/Delete Carousel</h1>
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
                                    <th>Title</th>
                                    <th>State</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><img class="center-block" height="50px" width="100px" src="{{asset('image/'.$carousel->img)}}" /></td>
                                    <td>{{$carousel->title}}</td>
                                    <td>{{$carousel->state}}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$carousel->id}}">Edit</a>
                                        &nbsp;

                                        <a href="{{ '/pasa_admin/delete_carousel' }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('delete-form_{{$carousel->id}}').submit();"
                                           class="btn btn-primary">
                                            Delete
                                        </a>

                                        <form id="delete-form_{{$carousel->id}}" action="{{'/pasa_admin/delete_carousel'}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$carousel->id}}" id="del_id" name="del_id" />
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
        </div>
    </div>

    <div id="add_new_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" class="modal-title">Add New Carousel</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_carousel'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Title:</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" id="title" name="title" placeholder="Enter carousel title!">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="state" class="col-lg-2 control-label">State:</label>
                                <div class="col-lg-10">
                                    <select required name="state" id="state" class="form-control">
                                        <option selected>on</option>
                                        <option>off</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input required class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah')" />
                            </div>
                            <div class="_img text-center"><img id="blah" height="250px" width="500px" src=""/>
                                <p><strong><center>Image Preview ( Preferred height>600px, width>1200px )</center></strong></p><br><br>
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

    @foreach($carousels as $carousel)

        <div id="edit_modal_{{$carousel->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit Carousel</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$carousel->id}}" id="edit_{{$carousel->id}}" action="{{'/pasa_admin/update_carousel'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$carousel->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$carousel->title}}" placeholder="Enter carousel title!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($carousel->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($carousel->state==='off') {{'selected'}} @endif>off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah_{{$carousel->id}}')" />
                                </div>
                                <div class="_img text-center"><img id="blah_{{$carousel->id}}" height="250px" width="500px" src="{{asset('/image/'.$carousel->img)}}"/>
                                    <p><strong><center>Image Preview ( Preferred height>600px, width>1200px )</center></strong></p><br><br>
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
                        .width(500)
                        .height(250);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
