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

        .contain {
            position:relative;
            display:inline-block;
            text-align:center;
            border:1px solid #006dcc;
        }

        .contained {
            position:absolute;
            bottom:10px;
            margin-left:auto;
            margin-right:auto;
            right:20px;
            /*width:150px;*/
            /*height:30px;*/
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

                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @php $i=1; @endphp
                        @foreach($galleries as $gallery)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                                <div class="contain">
                                    <img class="img-thumbnail" src="{{asset('/image/'.$gallery->img_thumb)}}">
                                    <div class="contained center-block">
                                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_modal_{{$gallery->id}}">Edit</a>
                                        <a class="btn btn-primary btn-xs" href="{{ '/pasa_admin/delete_gallery' }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('delete-form_{{$gallery->id}}').submit();"
                                        >
                                            Delete
                                        </a>

                                        <form id="delete-form_{{$gallery->id}}" action="{{'/pasa_admin/delete_gallery'}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$gallery->id}}" id="del_id" name="del_id" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($i%4==0) <div class="clearfix"></div><br> @endif
                            @php $i++; @endphp
                        @endforeach
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

    @foreach($galleries as $gallery)

        <div id="edit_modal_{{$gallery->id}}" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 align="center" class="modal-title">Edit Gallery</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="edit_{{$gallery->id}}" id="edit_{{$gallery->id}}" action="{{'/pasa_admin/update_gallery'}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <label for="id" class="col-lg-2 control-label">Id:</label>
                                    <div class="col-lg-10">
                                        <input type="text" readonly class="form-control" id="id" name="id" value="{{$gallery->id}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-lg-2 control-label">Title:</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="title" name="title" value="{{$gallery->title}}" placeholder="Enter picture title!">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="col-lg-2 control-label">State:</label>
                                    <div class="col-lg-10">
                                        <select name="state" id="state" class="form-control">
                                            <option @if($gallery->state==='on') {{'selected'}} @endif>on</option>
                                            <option @if($gallery->state==='off') {{'selected'}} @endif>off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="center-block btn btn-default" type="file" name="img" onchange="readURL(this,'#blah_{{$gallery->id}}')" />
                                </div>
                                <div class="_img text-center"><img id="blah_{{$gallery->id}}" height="250px" width="250px" src="{{asset('/image/'.$gallery->img_thumb)}}"/>
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

    <script>
        function readURL(input, temp) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(temp)
                        .attr('src', e.target.result)
                        .width(250)
                        .height(250);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
