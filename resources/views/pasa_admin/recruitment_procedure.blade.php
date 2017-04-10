@extends('layouts.admin_app',['select' => 'recruitment_procedure'])


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
                        <h1 align="center">Recruitment Procedure</h1>
                        <a class="btn btn-default pull-right" data-toggle="modal" data-target="#add_new_modal">Add New</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>State</th>
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
                    <h4 align="center" class="modal-title">Add New Recruitment Procedure</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_recruitment_procedure'}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Title:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter carousel title!">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-lg-2 control-label">Description</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter carousel title!">
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

@endsection
