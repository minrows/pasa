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
                        <h1 align="center">Edit/Delete Current Demands</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th><strong>Company Name</strong></th>
                                    <th><strong>Trade</strong></th>
                                    <th><strong>Quantity</strong></th>
                                    <th><strong>Country</strong></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>


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
   
@endsection
