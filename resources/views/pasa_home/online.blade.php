@extends('layouts.page_app')

@section('title')
    {{'ONLINE FORM'}}
@endsection

@section('content')
    <style>
        .err{
            color:red;
            width:100%;
            background-color: grey;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        input[type="file"] {
            display: none !important;
        }
        .selected
        {
            color:green;
            font-size: 14px;
        }
        .clear {
            display: inline;
            padding: 5px;
            border-radius: 10px;
            background: #9d9d9d;
            color: black;
            text-align: center;
            cursor: pointer;
            margin-left: 5px;
        }
        select{
            width: 100%;
            height:100%;
            overflow:hidden;
            margin-top:8px;
            background-image:none;
            margin-left:10px;
        }

        select option {
            width:100%;
            background: none repeat scroll 0 0 #E5E3E3;
            border: 1px dotted #CCCCCC;
            padding: 10px;
            line-height: 15px;
            text-indent: 3px;
            text-transform: capitalize;
            z-index: -9999;
        }

    </style>

    <script type='text/javascript' src="{{asset('js/home_js/jquery-3.1.1.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/home_js/bootstrap.js')}}"></script>

    <script>
        function readURL(input, temp) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(temp)
                        .attr('src', e.target.result)
                        .width(116)
                        .height(144);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function clear_pp() {
            event.preventDefault();
            $('input[type="file"]#pp_doc').val('');
            $('#pp_doc-selected').html('');
            $('#select_pp').show();

            $('#select_pp_chk').show();
            $('#pp_doc-selected_chk').html('');
            document.getElementById("select_pp_chk").checked = false;
            $('#select_pp_chk_label').show();
        }
        function clear_cv() {
            event.preventDefault();
            $('input[type="file"]#cv_doc').val('');
            $('#cv_doc-selected').html('');
            $('#select_cv').show();

            $('#select_cv_chk').show();
            $('#cv_doc-selected_chk').html('');
            document.getElementById("select_cv_chk").checked = false;
            $('#select_cv_chk_label').show();
        }
        function clear_edu() {
            event.preventDefault();
            $('input[type="file"]#edu_doc').val('');
            $('#edu_doc-selected').html('');
            $('#select_edu').show();

            $('#select_edu_chk').show();
            $('#edu_doc-selected_chk').html('');
            document.getElementById("select_edu_chk").checked = false;
            $('#select_edu_chk_label').show();
        }
        function clear_exp() {
            event.preventDefault();
            $('input[type="file"]#exp_doc').val('');
            $('#exp_doc-selected').html('');
            $('#select_exp').show();

            $('#select_exp_chk').show();
            $('#exp_doc-selected_chk').html('');
            document.getElementById("select_exp_chk").checked = false;
            $('#select_exp_chk_label').show();
        }
        function clear_train() {
            event.preventDefault();
            $('input[type="file"]#train_doc').val('');
            $('#train_doc-selected').html('');
            $('#select_train').show();

            $('#select_train_chk').show();
            $('#train_doc-selected_chk').html('');
            document.getElementById("select_train_chk").checked = false;
            $('#select_train_chk_label').show();
        }
        function clear_drive() {
            event.preventDefault();
            $('input[type="file"]#drive_doc').val('');
            $('#drive_doc-selected').html('');
            $('#select_drive').show();

            $('#select_drive_chk').show();
            $('#drive_doc-selected_chk').html('');
            document.getElementById("select_drive_chk").checked = false;
            $('#select_drive_chk_label').show();
        }
    </script>

    <div class="container">

        @if(session()->has('message'))
            <h1 align="center" class="alert alert-danger">{{session()->get('message')}}</h1>
        @endif

        <form name="online-form" method="post" action="/online_submit" onsubmit="return validation();" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h1 align="center">Application Form</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="form-group row ">
                        <div class="col-md-3 col-lg-3"><label for="ref_no">Ref. No:</label></div>
                        <div class="col-md-6 col-lg-6"><input class="form-control" readonly type="text" name="ref_no" id="ref_no"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 col-lg-3"><label for="name">Name: </label></div>
                        <div class="col-md-9 col-lg-9"><input required class="form-control" type="text" name="name" id="name"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 col-lg-3"><label for="position">Position Applied For:</label></div>
                        <div class="col-md-6 col-lg-6"><input required class="form-control" type="text" name="position" id="position"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="form-group pull-right">
                        <div id="img" name="img" class="img center-block"><img src="{{asset('/image/default.jpg')}}" alt="preview" id="preview" height="144px" width="116px"/></div>
                        <br />
                        <label class="custom-file-upload" for="pp">Choose PP</label>
                        <input class="center-block" type="file" name="pp" id="pp" onchange="readURL(this,'#preview')" />
                        <p>Image type must be in .jpg format and is preferred to be of dimension height(144px) and width(116px)</p>
                    </div>
                </div>
            </div>

            <br />

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="tel_no">Tel No:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="tel_no" id="tel_no"></div>
                <div class="col-lg-2 col-md-2"><label for="mob_no">Mob No:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="mob_no" id="mob_no"></div>

            </div>
            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="religion">Religion:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="religion" id="religion"></div>
            </div>
            <div class="form-group row">
                <div class="col-md-2 col-lg-2"><label for="address">Address: </label></div>
                <div class="col-md-10 col-lg-10"><input required class="form-control" type="text" name="address" id="address"></div>
            </div>

            <div class="form-group row">
                <div class="col-md-2 col-lg-2"><label for="con_address">Contact Address:</label></div>
                <div class="col-md-10 col-lg-10"><input required class="form-control" type="text" name="con_address" id="con_address"></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="email">Email Address:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="email" name="email" id="email"></div>
                <div class="col-lg-2 col-md-2"><label for="qualification">Qualification:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="qualification" id="qualification"></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="dob">DOB:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="date" name="dob" id="dob"></div>
                <div class="col-lg-2 col-md-2"><label for="male">Gender:</label></div>
                <div class="col-lg-4 col-md-4">
                    <label for="male">Male:</label>
                    <input id="male" type="radio" value="male" name="gender"> &nbsp; &nbsp;
                    <label for="female">Female: </label>
                    <input id="female" type="radio" value="female" name="gender">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="single">Marital Status:</label></div>
                <div class="col-lg-4 col-md-4">
                    <label for="single">Single:</label>
                    <input id="single" type="radio" value="single" name="marital_status"> &nbsp; &nbsp;
                    <label for="married">Married:</label>
                    <input id="married" type="radio" value="married" name="marital_status">
                </div>
                <div class="col-lg-2 col-md-2"><label for="spouse_name">Spouse Name:</label></div>
                <div class="col-lg-4 col-md-4"><input class="form-control" type="text" name="spouse_name" id="spouse_name"></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="passport_no">Passport Number:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="passport_no" id="passport_no"></div>
                <div class="col-lg-2 col-md-2"><label for="place_of_issue">Place of Issue:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="place_of_issue" id="place_of_issue"></div>

            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="doi">Date of Issue:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="date" name="doi" id="doi"></div>
                <div class="col-lg-2 col-md-2"><label for="doe">Date of Expire:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="date" name="doe" id="doe"></div>
            </div>
            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="height_feet">Height:</label></div>
                <div class="col-lg-1 col-md-1"><input required class="form-control" type="text" name="height_feet" id="height_feet"></div>
                <div class="col-lg-1 col-md-1"><label for="height_feet">ft</label></div>
                <div class="col-lg-1 col-md-1"><input required class="form-control" type="text" name="height_inch" id="height_inch"></div>
                <div class="col-lg-1 col-md-1"><label for="height_inch">inch</label></div>

                <div class="col-lg-2 col-md-2"><label for="weight">Weight:</label></div>
                <div class="col-lg-4 col-md-4"><input required class="form-control" type="text" name="weight" id="weight"></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="parent_name">Parent's Name:</label></div>
                <div class="col-lg-10 col-md-10"><input required type="text" class="form-control" name="parent_name" id="parent_name"></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="prior_exp">Prior's Experience:</label></div>
                <div class="col-lg-10 col-md-10"><textarea required rows="4" class="form-control" name="prior_exp" id="prior_exp"></textarea></div>
            </div>

            <div class="form-group row">
                <div class="col-lg-2 col-md-2"><label for="document">Document:</label></div>
                <div class="col-lg-10 col-md-10"><textarea required rows="3" class="form-control" name="document" id="document"></textarea></div>
            </div>


            <h2>Document Upload</h2>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                    <select size="6" name="decision2">
                        <option id="select_pp">Upload PP copy *</option>
                        <option id="select_cv">Upload Curriculum Vitae *</option>
                        <option id="select_edu">Upload Educational Certificate</option>
                        <option id="select_exp">Upload Experience Certificates</option>
                        <option id="select_train">Upload Training Certificates</option>
                        <option id="select_drive">Upload Driving Licence</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
                    <span class="selected" id="pp_doc-selected"></span><br /><br />
                    <span class="selected" id="cv_doc-selected"></span><br /><br />
                    <span class="selected" id="edu_doc-selected"></span><br /><br />
                    <span class="selected" id="exp_doc-selected"></span><br /><br />
                    <span class="selected" id="train_doc-selected"></span><br /><br />
                    <span class="selected" id="drive_doc-selected"></span>

                </div>
                <div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
                    <input type="checkbox" name="upload" id="select_pp_chk"> <label id="select_pp_chk_label" for="select_pp_chk">Upload PP copy *</label><br />
                    <input type="checkbox" name="upload" id="select_cv_chk"> <label id="select_cv_chk_label" for="select_cv_chk">Upload Curriculum Vitae *</label><br />
                    <input type="checkbox" name="upload" id="select_edu_chk"> <label id="select_edu_chk_label" for="select_edu_chk">Upload Educational Certificate</label><br />
                    <input type="checkbox" name="upload" id="select_exp_chk"> <label id="select_exp_chk_label" for="select_exp_chk">Upload Experience Certificates</label><br />
                    <input type="checkbox" name="upload" id="select_train_chk"> <label id="select_train_chk_label" for="select_train_chk">Upload Training Certificates</label><br />
                    <input type="checkbox" name="upload" id="select_drive_chk"> <label id="select_drive_chk_label" for="select_drive_chk">Upload Driving Licence</label><br />
                    <br/>
                    <span class="selected" id="pp_doc-selected_chk"></span><br /><br />
                    <span class="selected" id="cv_doc-selected_chk"></span><br /><br />
                    <span class="selected" id="edu_doc-selected_chk"></span><br /><br />
                    <span class="selected" id="exp_doc-selected_chk"></span><br /><br />
                    <span class="selected" id="train_doc-selected_chk"></span><br /><br />
                    <span class="selected" id="drive_doc-selected_chk"></span>
                </div>

                <input type="file" name="pp_doc" id="pp_doc" />
                <input type="file" name="cv_doc" id="cv_doc" />
                <input type="file" name="edu_doc" id="edu_doc" />
                <input type="file" name="exp_doc" id="exp_doc" />
                <input type="file" name="train_doc" id="train_doc" />
                <input type="file" name="drive_doc" id="drive_doc" />


            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2 col-lg-2"><input type="submit" value="Apply" class="btn btn-primary form-control" /></div>
                <div class="col-md-2 col-lg-2"><input type="reset" value="Clear" class="btn btn-primary form-control" /></div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function validation(){
            var x = document.getElementById("tel_no").value;
            var y = document.getElementById("mob_no").value;
            var genm = document.getElementById("male");
            var genf = document.getElementById("female");
            var mss=document.getElementById("single");
            var msm=document.getElementById("married");

            var pp=document.getElementById("pp");
            var pp_doc=document.getElementById("pp_doc");
            var cv_doc=document.getElementById("cv_doc");

            var pass_no = document.getElementById("passport_no").value;
            var heightf = document.getElementById("height_feet").value;
            var heighti = document.getElementById("height_inch").value;
            var weight = document.getElementById("weight").value;

            if(isNaN(x)){
                alert("Invalid telephone Number");
                return false;
            }
            if(isNaN(y)){
                alert("Invalid mobile Number");
                return false;
            }
            if(genm.checked==false && genf.checked==false){
                alert("Select gender");
                return false;
            }
            if(mss.checked==false && msm.checked==false){
                alert("Select marital status");
                return false;
            }
            if(isNaN(pass_no)){
                alert("Invalid Passport Number");
                return false;
            }
            if(isNaN(heightf)||isNaN(heighti)){
                alert("Invalid  Parameter");
                return false;
            }
            if(isNaN(weight)){
                alert("Invalid  Parameter");
                return false;
            }
            if (pp==null || pp.value=="")
            {
                alert("PP must be uploaded!");
                return false;
            }
            if (pp_doc==null || pp_doc.value=="")
            {
                alert("PP copy must be uploaded!");
                return false;
            }
            if (cv_doc==null || cv_doc.value=="")
            {
                alert("CV must be uploaded!");
                return false;
            }

            return true;
        }

    </script>

    <script>
        $('#select_pp').on('click', function() {
            $('#pp_doc').trigger('click');
        });
        $('#select_cv').on('click', function() {
            $('#cv_doc').trigger('click');
        });
        $('#select_edu').on('click', function() {
            $('#edu_doc').trigger('click');
        });
        $('#select_exp').on('click', function() {
            $('#exp_doc').trigger('click');
        });
        $('#select_train').on('click', function() {
            $('#train_doc').trigger('click');
        });
        $('#select_drive').on('click', function() {
            $('#drive_doc').trigger('click');
        });

        $('#select_pp_chk').click(function(){
            if (this.checked) {
                $('#pp_doc').trigger('click');
            }
        });
        $('#select_cv_chk').click(function(){
            if (this.checked) {
                $('#cv_doc').trigger('click');
            }
        });
        $('#select_edu_chk').click(function(){
            if (this.checked) {
                $('#edu_doc').trigger('click');
            }
        });
        $('#select_exp_chk').click(function(){
            if (this.checked) {
                $('#exp_doc').trigger('click');
            }
        });
        $('#select_train_chk').click(function(){
            if (this.checked) {
                $('#train_doc').trigger('click');
            }
        });
        $('#select_drive_chk').click(function(){
            if (this.checked) {
                $('#drive_doc').trigger('click');
            }
        });


        $('#pp_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#pp_doc-selected').html("PP copy selected! ("+fileName+") <div class='clear' id='pp_doc_clear' onclick='clear_pp()'>&nbsp;X&nbsp;</div>");
            $('#select_pp').hide();

            $('#pp_doc-selected_chk').html("PP copy selected! ("+fileName+") <div class='clear' id='pp_doc_clear' onclick='clear_pp()'>&nbsp;X&nbsp;</div>");
            $('#select_pp_chk').hide();
            $('#select_pp_chk_label').hide();
        });
        $('#cv_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#cv_doc-selected').html("CV selected! ("+fileName+") <div class='clear' id='cv_doc_clear' onclick='clear_cv()'>&nbsp;X&nbsp;</div>");
            $('#select_cv').hide();

            $('#cv_doc-selected_chk').html("CV selected! ("+fileName+") <div class='clear' id='cv_doc_clear' onclick='clear_cv()'>&nbsp;X&nbsp;</div>");
            $('#select_cv_chk').hide();
            $('#select_cv_chk_label').hide();

        });
        $('#edu_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#edu_doc-selected').html("Educational certificate selected! ("+fileName+") <div class='clear' id='edu_doc_clear' onclick='clear_edu()'>&nbsp;X&nbsp;</div>");
            $('#select_edu').hide();

            $('#edu_doc-selected_chk').html("Educational certificate selected! ("+fileName+") <div class='clear' id='edu_doc_clear' onclick='clear_edu()'>&nbsp;X&nbsp;</div>");
            $('#select_edu_chk').hide();
            $('#select_edu_chk_label').hide();
        });
        $('#exp_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#exp_doc-selected').html("Experience certificate selected! ("+fileName+") <div class='clear' id='exp_doc_clear' onclick='clear_exp()'>&nbsp;X&nbsp;</div>");
            $('#select_exp').hide();

            $('#exp_doc-selected_chk').html("Experience certificate selected! ("+fileName+") <div class='clear' id='exp_doc_clear' onclick='clear_exp()'>&nbsp;X&nbsp;</div>");
            $('#select_exp_chk').hide();
            $('#select_exp_chk_label').hide();
        });
        $('#train_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#train_doc-selected').html("Training certificate selected! ("+fileName+") <div class='clear' id='train_doc_clear' onclick='clear_train()'>&nbsp;X&nbsp;</div>");
            $('#select_train').hide();

            $('#train_doc-selected_chk').html("Training certificate selected! ("+fileName+") <div class='clear' id='train_doc_clear' onclick='clear_train()'>&nbsp;X&nbsp;</div>");
            $('#select_train_chk').hide();
            $('#select_train_chk_label').hide();
        });
        $('#drive_doc').bind('change', function() {
            var fileName = '';
            var index = 0;
            fileName = $(this).val();
            index=(fileName.lastIndexOf("\\") + 1);
            fileName=fileName.substr(index);
            $('#drive_doc-selected').html("Driving licence selected! ("+fileName+") <div class='clear' id='drive_doc_clear' onclick='clear_drive()'>&nbsp;X&nbsp;</div>");
            $('#select_drive').hide();

            $('#drive_doc-selected_chk').html("Driving licence selected! ("+fileName+") <div class='clear' id='drive_doc_clear' onclick='clear_drive()'>&nbsp;X&nbsp;</div>");
            $('#select_drive_chk').hide();
            $('#select_drive_chk_label').hide();
        });
    </script>


@endsection