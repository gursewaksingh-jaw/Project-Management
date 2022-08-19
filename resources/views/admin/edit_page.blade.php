@extends('Layouts.header')
@section('header')
<style>
.form-error {

    border: 2px solid #e74c3c;
    animation: shake .1s linear;
    animation-iteration-count: 2;
}

.cke_top {
    background: rgba(45, 48, 51, 0.26) !important;
    color: white !important;
}

.cke_bottom {
    background: #5e6266;
    border-top: 1px solid #d1d1d13d;
}

.cke_chrome {

    border: 1px solid #6c757d;
}

a.cke_path_item {
    color: white;
}

.cke_reset {
    min-height: 330px;
}


.ck-editor__editable_inline {
    min-height: 300px;
    min-width: 600px;
}

.ck.ck-editor__main>.ck-editor__editable {
    background: rgb(52, 58, 64) !important;
}

.ck.ck-list {
    background: rgb(52, 58, 64) !important;
}

.ck.ck-list__item .ck-button.ck-on {
    background: rgb(108, 117, 125) !important;
}

.ck.ck-editor {

    width: 1059px;
    margin-left: 9px;
}

.form-group {
    margin-bottom: 1rem;
    margin-left: 26px;
}

.button {
    margin-left: 270px;
    width: 200px;
    height: 48px;
    margin-top: 27px;
}

.cke_notification_info {
    background: rgb(108, 117, 125) !important;
    border: 1px solid rgb(108, 117, 125);
}
</style>
</style>
@section('title','Update Page')

@endsection

@extends('Layouts.left_sidebar')
@section('leftsidebar')
@endsection


<div>
    @if(Session::has('fail'))
    <div class="alert alert-danger" role="alert"
        style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;">
        {{(Session::get('fail'))}}
    </div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert"
        style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;"
        id="successmsg">
        {{(Session::get('success'))}}
    </div>
    @endif
</div>


<div>

    <div class="card card-secondary" style="  width: 1150px;
  margin-left: 400px;
  margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Update Page</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{url('updated-page')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="inputName">Page title</label>
                            <input type="hidden" value="{{$data->id}}" name="id">
                            <input type="text" name="title" id="inputName"
                                class="form-control{{($errors->first('title') ? " form-error" : "")}}"
                                value="{{$data->title}}">
                            <!-- <span style="color:red">@error('title'){{$message}} @enderror</span> -->
                            @if(!empty($error = $errors->first('title')))
                            <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
             font-weight: 600;margin-left: 13px;margin-top: 10px;">

                                @error('title')! @enderror</p>

                            <div class="wrapper"
                                style="font-size: 13px;margin-top: -40px;margin-left: 44px;inline-size: 148px;text-align: center;
             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 52px;">
                                @error('title'){{$message}} @enderror</div>
                            @endif


                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input type="file" name="image"
                                        class="form-control {{($errors->first('image') ? " form-error" : "")}}"
                                        id="exampleInputFile" value="{{$data->image}}">
                                    <label class="custom-file-label" for="exampleInputFile">{{$data->image}}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                    <!-- <span style="color:red">@error('image'){{$message}} @enderror</span>                    -->

                                </div>
                            </div>
                            @if(!empty($error = $errors->first('image')))
                            <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;font-weight: 600;
            margin-left: 14px;margin-top: 12px;">
                                @error('image')! @enderror</p>

                            <div class="wrapper"
                                style="font-size: 13px;margin-top: -39px;margin-left: 45px;inline-size: 196px;text-align: center;
             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 42px;">
                                @error('image'){{$message}} @enderror</div>
                            @endif

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputDescription" style="margin-left: 6px;">Page Description</label>
                        <textarea id="editor" name="page_description"
                            class="form-control{{($errors->first('page_description') ? " form-error" : "")}}" rows="6"
                            value="{{$data->page_description}}">{{$data->page_description}}</textarea>
                        <!-- <span style="color:red">@error('page_description'){{$message}} @enderror</span> -->
                        @if(!empty($error = $errors->first('page_description')))
                        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
             font-weight: 600;margin-left: 19px;margin-top: 11px;">

                            @error('page_description')! @enderror</p>

                        <div class="wrapper"
                            style="font-size: 13px;margin-top: -42px;margin-left: 52px;inline-size: 205px;text-align: center;
            background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 52px;min-height: 10px;">
                            @error('page_description'){{$message}} @enderror</div>
                        @endif
                    </div>


                    <div class="form-group col-4">
                        <label for="inputStatus">url</label>
                        <select id="inputStatus" class="form-control{{($errors->first('url') ? " form-error" : "")}} "
                            name="url" value="{{$data->url}}">
                            <option selected="" disabled="">{{$data->url}}</option>
                            <option value="Home">Home</option>
                            <option value="Contact-us">Contact us</option>
                            <option value="table">About us</option>
                            <option value="FAQ-page">FAQ</option>
                        </select>


                        <!-- <span style="color:red">@error('url'){{$message}} @enderror</span> -->
                        @if(!empty($error = $errors->first('url')))
                        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
            font-weight: 600;margin-left: 6px;margin-bottom: 31px;margin-top: 40px;">

                            @error('url')! @enderror</p>

                        <div class="wrapper"
                            style="font-size: 13px;margin-top: -55px;margin-left: 507px;inline-size: 148px;text-align: center;
            background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 46px;">
                            @error('url'){{$message}} @enderror</div>
                        @endif

                    </div>
                    <div class="form-group col-5">
                        <label for="inputStatus">Page Display option</label>
                        <select id="inputStatus" class="form-control{{($errors->first('show') ? " form-error" : "")}} "
                            name="show" value="{{$data->show}}">
                            @if( $data->show == '1')
                            <option selected="" disabled="">Display</option>
                            @else
                            <option selected="" disabled="">Hide</option>
                            @endif

                            <option value="1">Display</option>
                            <option value="0">Hide</option>
                        </select>
                    </div>
                </div>




                <div class="form-group">
                    <button class="btn btn-secondary" type="submit"
                        style="margin-left: 383px;width: 200px;height: 48px;">Update</button>
                </div>

            </div>
        </form>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}"></script>
<script src="cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>
<script>
var editor = CKEDITOR.replace('editor');
CKEDITOR.addCss(".cke_editable{background-color: rgb(52, 58, 64); color: white;}");
CKEDITOR.addCss(".cke_top{background-color: rgb(52, 58, 64); color: white;}");
CKFinder.setupCKEditor(editor);
config.filebrowserUploadUrl = '/images/upload.php';
</script>
<!-- // ClassicEditor
// .create( document.querySelector( '#editor' ) )
// .catch( error => {
// console.error( error );
// } );

// CKEDITOR.replace('editor');
// CKFinder.setupCKEditor(editor);
// create($("#editor")[0], {
// language: $("html").attr("lang"),
// alignment: {
// options: ['left', 'right']
// },
// autoParagraph: false
// })
// .then(editor => {
// myEditor = editor;
// myEditor.model.document.on('change', (event) => {
// $("#editor").val(myEditor.getData());
// });

// $(".ck-content").css("background-color", "rgb(52, 58, 64)");
// $(".ck-content p").css("color", "white");
// $(".ck-toolbar").css("background-color", "rgb(52, 58, 64)");
// $(".ck-button__label, .ck-icon").css("color", "white");
// myEditor.editing.view.document.on('change:isFocused', (evt, data, isFocused) => {
// if (isFocused) // blur
// {
// $(".ck-content").css("background-color", "rgb(52, 58, 64)");
// } else {
// $(".ck-content p").css("cssText",
// "background-color: rgb(52, 58, 64) !important; margin: 0px !important; padding: 3px 6px;"
// );



// //this one not working
// $(".ck-editor__editable").css("cssText",
// "background-color: rgb(52, 58, 64) !important; padding : 0px;");
// }
// });
// console.log(myEditor);
// })
// .catch(error => {
// console.error(error);
// });
// </script> -->

<!-- <script>
  
  $('#error').click(function(){
      $('.wrapper').toggle();
  });
  </script> -->