@extends('Layouts.header')
@section('header')
<style>
.form-error {

border: 2px solid #e74c3c;
animation: shake .1s linear;
animation-iteration-count: 2;
}

</style>
@section('title','Update FAQ')
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
<h3 class="card-title">Update FAQ</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>

<form action="{{url('updatedfaq')}}" method="POST">
    @csrf
<div class="card-body">
<div class="form-group">
<input type="hidden"value="{{$data->id}}" name="id" >
<label for="inputName">Question</label>
<input type="text" name="question" id="inputName" class="form-control{{($errors->first('question') ? " form-error" : "")}}" value="{{$data->question}}">
@if(!empty($error= $errors->first('question')))
        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
          font-weight: 600;margin-left: 466px;margin-top: -34px;margin-bottom: 31px;">
        @error('question')! @enderror</p>              

        <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
        background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 22px;">@error('question'){{$message}} @enderror</div>
 @endif
</div>


<div class="form-group">
<label for="inputDescription">Answer</label>
<textarea id="inputDescription" name="answer" class="form-control{{($errors->first('answer') ? " form-error" : "")}}" rows="4">{{$data->answer}}</textarea>
@if(!empty($error= $errors->first('answer')))
        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
          text-align: center;font-weight: 600;margin-left: 466px;margin-top: -79px;margin-bottom: 31px;">
        @error('answer')! @enderror</p>              

        <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
         background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 71px;">
         @error('answer'){{$message}} @enderror</div>
 @endif
</div>

<div class="form-group">
<button class="btn btn-secondary" type="submit" style="margin-left: 121px;width: 200px;height: 48px;">Update</button>
</div>

</div>
</form>
</div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $("document").ready(function(){
    setTimeout(function(){
      $("#successmsg").fadeOut('slow'); }, 1000);
});

</script>