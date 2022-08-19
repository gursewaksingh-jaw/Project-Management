@extends('Layouts.header')
@section('header')
<style>
.form-error {

border: 2px solid #e74c3c;
animation: shake .1s linear;
animation-iteration-count: 2;
}
.wrapper {
  background: #ccc;
  display:none
} 
</style>
@section('title','Add Slider')
@endsection

@extends('Layouts.left_sidebar')
@section('leftsidebar')
@endsection


<div>
@if(Session::has('fail'))
      <div class="alert alert-danger" role="alert" style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;">
      {{(Session::get('fail'))}}
      </div>
    @endif

   @if(Session::has('success'))
      <div class="alert alert-success" role="alert" style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;"id="successmsg">
      {{(Session::get('success'))}}
      </div>
    @endif
</div>


<div>

<div class="card card-secondary" style="  width: 500px;
  margin-left: 400px;
  margin-top: 100px;">
<div class="card-header">
<h3 class="card-title">Add Slider Images</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<form action="{{url('added')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card-body">
        <div class="form-group">
        <label for="inputName">Image Title</label>
        <input type="text" name="image_title" id="inputName" class="form-control{{($errors->first('image_title') ? " form-error" : "")}}"">
        </div>
        @if(!empty($error = $errors->first('image_title')))
            <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -47px;margin-bottom: 31px;">

        @error('image_title')! @enderror</p>           

            <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size:
            148px;text-align: center;background-color: #554545;color: red;border-style: solid;border-width:
            1px;display: block;margin-bottom: 22px;">@error('image_title'){{$message}} @enderror</div>
        @endif

        <div class="form-group">
         <label for="exampleInputFile">File input</label>
        <div class="input-group">
        <div class="custom-file">
         <input type="file" name="image" class="custom-file-input {{($errors->first('image') ? " form-error" : "")}}"" id="exampleInputFile">
         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
         </div>
         <div class="input-group-append">
        <span class="input-group-text">Upload</span>
                        
         </div>
                      
        </div>
        <span style="color:red"></span>
        </div>

        @if(!empty($error= $errors->first('image')))
        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
        text-align: center;font-weight: 600;margin-left: 466px;margin-top: -47px;margin-bottom: 31px;">
        @error('image')! @enderror</p>              

        <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
        background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 22px;">@error('image'){{$message}} @enderror</div>
        @endif



        <div class="form-group">
        <label for="inputDescription">Image Description</label>
        <textarea id="inputDescription" name="description" class="form-control {{($errors->first('description') ? " form-error" : "")}}"" rows="4"></textarea>
        </div>

        @if(!empty($error = $errors->first('description')))
        <p id="error" style="background-color: red;
color: white;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: 466px;
margin-top: -107px;
margin-bottom: 31px;">
        @error('description')! @enderror</p>           

        <div class="wrapper" style="font-size: 13px;
margin-top: -62px;
margin-left: 500px;
inline-size: 148px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;
margin-bottom: 81px;">@error('description'){{$message}} @enderror</div>
        @endif

        <div class="form-group">
        <button class="btn btn-secondary" type="submit" style="margin-left: 121px;width: 200px;height: 48px;">Add Image</button>
        </div>

</div>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $("document").ready(function(){
    setTimeout(function(){
      $("#successmsg").fadeOut('slow'); }, 1000);
});

</script>
<!-- <script>
  
  $('#error').click(function(){
      $('.wrapper').toggle();
  });
  </script> -->