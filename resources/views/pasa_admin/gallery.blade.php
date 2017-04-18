@extends('layouts.admin_app',['select' => 'gallery'])

@section('title')
    {{'GALLERY'}}
@endsection

@section('content')
    <style>
        .modal-dialog {
            width: 60%;
        }
        body{
            font-family: 'Segoe UI';
            font-size: 12pt;
        }

        header h1{
            font-size:12pt;
            color: #fff;
            background-color: #1BA1E2;
            padding: 20px;

        }
        article
        {
            width: 80%;
            margin:auto;
            margin-top:10px;
        }


        .thumbnail{
            height: 100px;
            margin: 10px;
            /*float: left;*/
        }
        #clear{
            display:none;
        }
        #result {
            border: 4px dotted #cccccc;
            display: none;
            /*float: right;*/
            margin:0 auto;
            width: 511px;
            text-align: center;
        }

        #result img{
            margin-left:auto;
            margin-right:auto;
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
                        <h1 align="center">Gallery</h1>
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
                    <h4 align="center" class="modal-title">Add Gallery Items</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="add_new" id="add_new" action="{{'/pasa_admin/add_gallery'}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <article>
                            <div class="form-group">
                                <label for="myFiles">Select multiple files: </label>
                                <input class="form-control" name="myFiles[]" id="files" type="file" multiple required/>
                            </div>
                            <div class="form-group"><div id="result"></div></div>

                            <div class="form-group pull-right">
                                <input class='btn btn-default' type="submit" value="Add" />
                                <button class='btn btn-default' type="button" id="clear">Clear</button>
                            </div>
                            <br>
                            <br>

                        </article>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function(){
            //Check File API support
            if(window.File && window.FileList && window.FileReader)
            {
                $('#files').on("change", function(event) {
                    var files = event.target.files; //FileList object
                    var output = document.getElementById("result");
                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];
                        //Only pics
                        // if(!file.type.match('image'))
                        if(file.type.match('image.*')){
                            if(this.files[0].size < 2097152){
                                // continue;
                                var picReader = new FileReader();
                                picReader.addEventListener("load",function(event){
                                    var picFile = event.target;
                                    var div = document.createElement("div");
                                    div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                                        " title='preview image'/>";
                                    output.insertBefore(div,null);
                                });
                                //Read the image
                                $('#clear, #result').show();
                                picReader.readAsDataURL(file);
                            }else{
                                alert("Image Size is too big. Minimum size is 2MB.");
                                $(this).val("");
                            }
                        }else{
                            alert("You can only upload image file.");
                            $(this).val("");
                        }
                    }

                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
        };

        $('#files').on("click", function() {
            $('.thumbnail').parent().remove();
            $('result').hide();
            $(this).val("");
        });

        $('#clear').on("click", function() {
            $('.thumbnail').parent().remove();
            $('#result').hide();
            $('#files').val("");
            $(this).hide();
        });

    </script>

@endsection
