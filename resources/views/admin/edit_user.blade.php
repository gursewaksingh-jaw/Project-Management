@extends('Layouts.header')
@section('header')

<style>
.form-error {

    border: 2px solid #e74c3c;
    animation: shake .1s linear;
    animation-iteration-count: 2;
}




.lists {
    background-color: #989899a6;
    margin-bottom: 20px;
    height: 45px;
    min-width: 200px;
    padding: 10px;
    font-size: 16px;
    font-weight: 600px;
    border-radius: 10px;
    display: inline-block;
    margin-left: 60px;
}

.mainlist {
    background-color: black;
}

.nav-icon {
    margin-right: 8px;
}


a {
    color: white;
}

.action {
    margin-left: 197px;
    position: absolute;
    margin-top: -22px;

}
</style>

@section('title','Create Menu')
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
<div class="row">
    <div class="col-sm-6">
        <div class="card card-secondary" style="width: 500px;margin-left: 385px;margin-top: 100px;">
            <div class="card-header">


                <h3 class="card-title">Update user details</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <form action="{{url('updateduser')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$data['id']}}" name="id">


                <div class="card-body" style="display: block;">
                    <div class="form-group">



                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="inputStatus"> Name</label>
                                    <input type="text" name="name" value="{{$data->name}}"
                                        class=" form-control {{($errors->first('name') ? " form-error" : "")}} ">
                                    <!-- <span style=" color:red">@error('menu_title'){{$message}} @enderror</span> -->

                                    @if(!empty($error= $errors->first('name')))
                                    <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -33px;">
                                        @error('name')! @enderror</p>

                                    <div class="wrapper"
                                        style="font-size: 13px;margin-top: -47px;margin-left: 500px;inline-size: 148px;text-align: center;
                             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 40px;">
                                        @error('name'){{$message}} @enderror</div>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <label for="inputStatus"> Email</label>
                                    <input type="email" name="email" value="{{$data->email}}"
                                        class=" form-control {{($errors->first('email') ? " form-error" : "")}} ">
                                    <!-- <span style=" color:red">@error('menu_title'){{$message}} @enderror</span> -->

                                    @if(!empty($error= $errors->first('email')))
                                    <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -33px;">
                                        @error('email')! @enderror</p>

                                    <div class="wrapper"
                                        style="font-size: 13px;margin-top: -47px;margin-left: 500px;inline-size: 148px;text-align: center;
                             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 40px;">
                                        @error('email'){{$message}} @enderror</div>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">





                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image"
                                            class="custom-file-input{{($errors->first('image') ? " form-error" : "")}}"
                                            id="exampleInputFile" value="{{$data->image}}">
                                        <label class="custom-file-label" for="exampleInputFile">{{$data->image}}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>

                                    </div>

                                </div>
                                <span style="color:red"></span>
                            </div>
                            @if(!empty($error = $errors->first('image')))
                            <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -47px;margin-bottom: 31px;">

                                @error('image')! @enderror</p>

                            <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size:
            148px;text-align: center;background-color: #554545;color: red;border-style: solid;border-width:
            1px;display: block;margin-bottom: 22px;">@error('image'){{$message}} @enderror</div>
                            @endif



                        </div>

                    </div>


                    <div class="form-group">
                        <label for="inputStatus"> Mobile No</label>
                        <input type="tel" name="phone_no" value="{{$data->phone_no}}"
                            class=" form-control {{($errors->first('phone_no') ? " form-error" : "")}} ">
                        <!-- <span style=" color:red">@error('menu_title'){{$message}} @enderror</span> -->

                        @if(!empty($error= $errors->first('phone_no')))
                        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                            text-align: center;font-weight: 600;margin-left: 466px;margin-top: -33px;">
                            @error('phone_no')! @enderror</p>

                        <div class="wrapper"
                            style="font-size: 13px;margin-top: -47px;margin-left: 500px;inline-size: 148px;text-align: center;
                             background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 40px;">
                            @error('phone_no'){{$message}} @enderror</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-secondary"
                        style="margin-left: 121px;width: 200px;height: 48px;">Update</button>


                </div>
            </form>

            <!-- ------------------------------------------------------------------------------------------------------- -->

        </div>
    </div>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
$(function() {
    $("#sortable").sortable();
});
</script>


<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>
<