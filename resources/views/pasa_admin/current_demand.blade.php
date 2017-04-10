@extends('layouts.admin_app',['select' => 'current_demand'])


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
                        <h1 align="center">Edit/Delete Current Demands</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th><strong>Sn.</strong></th>
                                    <th><strong>Company Name</strong></th>
                                    <th><strong>Trade</strong></th>
                                    <th><strong>Quantity</strong></th>
                                    <th><strong>Country</strong></th>
                                    <th><strong>State</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($curr_demands as $curr_demand)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$curr_demand->title}}</td>
                                    <td>{{$curr_demand->trade}}</td>
                                    <td>{{$curr_demand->quantity}}</td>
                                    <td>{{$curr_demand->country}}</td>
                                    <td>{{$curr_demand->state}}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#edit_modal_{{$curr_demand->id}}">Edit</a>
                                        &nbsp;

                                        <a href="{{ '/pasa_admin/delete_carousel' }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('delete-form_{{$curr_demand->id}}').submit();"
                                           class="btn btn-primary">
                                            Delete
                                        </a>

                                        <form id="delete-form_{{$curr_demand->id}}" action="{{'/pasa_admin/delete_current_demand'}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$curr_demand->id}}" id="del_id" name="del_id" />
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
                    <h4 align="center" class="modal-title">Add New Current Demands</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_current_demand'}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Company Name:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Company Name!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Trade:</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="trade" name="trade" placeholder="Enter Trade!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Quantity: </strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity!" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label"><strong>Country: </strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name!" required>
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

    @foreach($curr_demands as $curr_demand)

        <div id="edit_modal_{{$curr_demand->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit Current Demands</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$curr_demand->id}}" id="edit_{{$curr_demand->id}}" action="{{'/pasa_admin/update_current_demand'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$curr_demand->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Company Name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$curr_demand->title}}" placeholder="Enter Company Name!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Trade:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="trade" name="trade" value="{{$curr_demand->trade}}" placeholder="Enter Trade!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Quantity:</label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{$curr_demand->quantity}}" placeholder="Enter Quantity!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Country:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="country" name="country" value="{{$curr_demand->country}}" placeholder="Enter Country!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($curr_demand->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($curr_demand->state==='off') {{'selected'}} @endif>off</option>
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
   
@endsection
