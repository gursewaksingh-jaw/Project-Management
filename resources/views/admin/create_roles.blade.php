@extends('Layouts.header')
@section('header')

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css')}}">

</head>
<style>
.form-error {

    border: 2px solid #e74c3c;
    animation: shake .1s linear;
    animation-iteration-count: 2;
}
</style>
@section('title','Create Roles')
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

<div class="row" style="margin-top: 65px;">

    <div class="card card-secondary " style="width: 500px;margin-left: 285px;margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Create Permissions</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{url('createdpermission')}}" method="POST">
            @csrf
            <div class="card-body" style="display: block;">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-group">



                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="inputStatus">Permissions</label>
                                        <input type='text'
                                            class="form-control{{($errors->first('permission') ? " form-error" : "")}}"
                                            name="permission" style="margin-left: 46px;">

                                        @if(!empty($error= $errors->first('permission')))
                                        <p id="error" style="background-color: red;
color: white;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: 51px;
margin-top: 16px;
margin-bottom: 31px;">
                                            @error('permission')! @enderror</p>

                                        <div class="wrapper" style="font-size: 13px;
margin-top: -62px;
margin-left: 86px;
inline-size: 175px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;">
                                            @error('permission'){{$message}} @enderror</div>
                                        @endif
                                    </div>

                                </div>


                            </div>
                            <div>

                            </div>
                        </div>

                    </div>


                </div>
                <button type="submit" class="btn btn-secondary"
                    style="margin-left: 121px;width: 200px;height: 48px;margin-bottom: 27px;margin-top: -4px;">Create</button>
            </div>
        </form>



    </div>

    <div class="card card-secondary " style="width: 500px;margin-left: 13px;margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Create Roles</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{url('createdroles')}}" method="POST">
            @csrf
            <div class="card-body" style="display: block;">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-group">



                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="inputStatus">Roles</label>
                                        <input type='text'
                                            class="form-control{{($errors->first('role') ? " form-error" : "")}}"
                                            name="role" style="margin-left: 46px;">

                                        @if(!empty($error= $errors->first('role')))
                                        <p id="error" style="background-color: red;
color: white;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: 52px;
margin-top: 11px;
margin-bottom: 31px;">
                                            @error('role')! @enderror</p>

                                        <div class="wrapper" style="font-size: 13px;
margin-top: -54px;
margin-left: 86px;
inline-size: 148px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;">
                                            @error('role'){{$message}} @enderror</div>
                                        @endif
                                    </div>

                                </div>


                            </div>
                            <div>

                            </div>
                        </div>

                    </div>


                </div>
                <button type="submit" class="btn btn-secondary"
                    style="margin-left: 121px;width: 200px;height: 48px;margin-bottom: 27px;margin-top: -4px;">Create</button>
            </div>
        </form>



    </div>


    <div class="card card-secondary " style="width: 500px;margin-left: 13px;margin-top: 100px;">
        <div class="card-header">
            <h3 class="card-title">Assign Roles</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{url('assignedpermissions')}}" method="POST">
            @csrf
            <div class="card-body" style="display: block;">
                <div class="form-group">
                    <div class="form-group">
                        <div class="form-group">



                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Roles</label>
                                        <select id="inputStatus"
                                            class="form-control custom-select{{($errors->first('role_id') ? " form-error" : "")}}"
                                            name="roles_id">
                                            <option selected="" disabled="">Choose option</option>
                                            @foreach($listrole as $role)
                                            <option value="{{$role->id}}">{{$role->role}}</option>
                                            @endforeach
                                        </select>


                                        @if(!empty($error= $errors->first('role_id')))
                                        <p id="error" style="background-color: red;
color: white;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: 16px;
margin-top: 14px;
margin-bottom: 31px;">
                                            @error('role_id')! @enderror</p>

                                        <div class="wrapper" style="font-size: 13px;
margin-top: -62px;
margin-left: 49px;
inline-size: 148px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;">
                                            @error('role_id'){{$message}} @enderror</div>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="inputStatus">Permissions</label>
                                        <select id="inputStatus"
                                            class="form-control custom-select{{($errors->first('permission_id') ? " form-error" : "")}}"
                                            name="permission_id">
                                            <option selected="" disabled="">Choose option</option>
                                            @foreach($permission as $val)
                                            <option value="{{$val->id}}">{{$val->permission}}</option>
                                            @endforeach
                                        </select>

                                        @if(!empty($error= $errors->first('permission_id')))
                                        <p id="error" style="color: white;background-color: red;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: 16px;
margin-top: 14px;
margin-bottom: 31px;">
                                            @error('permission_id')! @enderror</p>

                                        <div class="wrapper" style="margin-top: -62px;
margin-left: 49px;
inline-size: 148px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;">
                                            @error('permission_id'){{$message}} @enderror</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>

                    </div>


                </div>
                <button type="submit" class="btn btn-secondary"
                    style="margin-left: 121px;width: 200px;height: 48px;margin-bottom: 27px;margin-top: -4px;">Create</button>
            </div>
        </form>



    </div>

</div>
<div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});
</script>