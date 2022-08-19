@extends('Layouts.header')
@section('header')
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css')}}">

</head>
@section('title','Update Menu')
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
    <div class="alert alert-success" role="alert" style="width: 300px;margin-top: 72px;margin-left: 512px;text-align: center;margin-bottom: -75px;" id="successmsg">
        {{(Session::get('success'))}}
    </div>
    @endif
</div>

<div class="card card-secondary" style="width: 500px;margin-left: 413px;margin-top: 100px;">
    <div class="card-header">
        <h3 class="card-title">Update Menu details</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <form action="{{url('updated')}}" method="POST">
        @csrf
        <div class="card-body" style="display: block;">
            <div class="form-group">
                <div class="form-group">
                    <div class="form-group">


                        <input type="hidden" value="{{$mval['id']}}" name="id">
                        <div class="row">
                            <div class="col-6">
                                <label for="inputStatus"> Menu Title</label>

                                <input type="text" name="menu_title" class="form-control{{($errors->first('menu_title') ? " form-error" : "")}}" " value="{{$mval['menu_title']}}">
                                <!-- <span style="color:red">@error('menu_title'){{$message}} @enderror</span> -->
                                @if(!empty($error= $errors->first('menu_title')))
                                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                text-align: center;font-weight: 600;margin-left: 466px;margin-top: -79px;margin-bottom: 31px;">
                                @error('menu_title')! @enderror</p>              

                                        <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
                                        background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 71px;">
                                        @error('menu_title'){{$message}} @enderror</div>
                                @endif

                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputStatus">Icons</label>
                                    <select id="inputStatus" class="form-control custom-select{{($errors->first('icons') ? " form-error" : "")}}"" name="mainicons">
                                        <option selected="" disabled="">{{$mval['icons']}}</option>
                                        <option value="home">Home</option>
                                        <option value="user">User</option>
                                        <option value="table">Table</option>
                                        <option value="plus">Plus</option>
                                        <option value="edit">Edit</option>
                                        <option value="page">Page</option>
                                    </select>
                                    <!-- <span style="color:red">@error('icons'){{$message}} @enderror</span> -->
                                    @if(!empty($error= $errors->first('answer')))
                                        <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                        text-align: center;font-weight: 600;margin-left: 466px;margin-top: -79px;margin-bottom: 31px;">
                                        @error('icons')! @enderror</p>              

                                        <div class="wrapper" style="font-size: 13px;margin-top: -62px;margin-left: 500px;inline-size: 148px;text-align: center;
                                        background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 71px;">
                                        @error('icons'){{$message}} @enderror</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="inputStatus">url</label>
                                <select id="inputStatus" class="form-control custom-select{{($errors->first('url') ? " form-error" : "")}}"" name="mainurl">
                                    <option selected="" disabled="">{{$mval['url']}}</option>
                                    <option value="menu-list">Menu List</option>
                                    <option value="faq-list">FAQ List</option>
                                    <option value="slider-list">Slider List</option>
                                </select>
                                <!-- <span style="color:red">@error('url'){{$message}} @enderror</span> -->
                                @if(!empty($error= $errors->first('url')))
                                    <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                    text-align: center;font-weight: 600;margin-left: 466px;margin-top: -31px;">
                                    @error('url')! @enderror</p>              

                                    <div class="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 500px;inline-size: 148px;text-align: center;
                                    background-color: #554545;color: red;border-style: solid;border-width: 1px;display: block;margin-bottom: 46px;">
                                    @error('url'){{$message}} @enderror</div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <label for="inputStatus"> Menu sub-title</label>
                @if(!empty($mval['submenu']))
                            @foreach($mval['submenu'] as $mname )
                <div class="col-sm-12">
                    <div class="form-group">
                      
                      
                        <div class="row">
                           
                            <div class="col-4">

                                <a class="btn"  style="margin-left: -41px;" href={{url("menusub/delete/" .$mname['id'])}}><i class="fas fa-times" style="color: white;margin-left: 151;"></i>
                                </a>
                                <input type="text" name="menu_title[]" class="form-control " value="{{$mname['menu_title']}}">


                            </div>

                            <div class="col-4">
                    <div class="form-group">
                        <label for="inputStatus">Icons</label>
                        
                        <select id="inputStatus" class="form-control custom-select{{($errors->first('icons') ? " form-error" : "")}}"" name="icons[]">
                            <option selected="" disabled="">{{$mname['icons']}}</option>
                            <option value="home">Home</option>
                            <option value="user">User</option>
                            <option value="table">Table</option>
                            <option value="plus">Plus</option>
                            <option value="edit">Edit</option>
                            <option value="page">Page</option>

                        </select>
                        <!-- <span style="color:red">@error('icons'){{$message}} @enderror</span> -->
                        @if(!empty($error= $errors->first('icons')))
                                    <p id="error" style="background-color: red;
color: white;
width: 24px;
border-radius: 20px;
text-align: center;
font-weight: 600;
margin-left: -37px;
margin-top: 13px;">
                                    @error('icons')! @enderror</p>              

                                    <div class="wrapper" style="font-size: 13px;
margin-top: -36px;
margin-left: -4px;
inline-size: 148px;
text-align: center;
background-color: #554545;
color: red;
border-style: solid;
border-width: 1px;
display: block;
margin-bottom: 46px;">
                                    @error('icons'){{$message}} @enderror</div>
                                @endif
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="inputStatus">url</label>
                        <select id="inputStatus" class="form-control custom-select{{($errors->first('url') ? " form-error" : "")}}"" name="url[]">
                            <option selected="" disabled="">{{$mname['url']}}</option>
                            <option value="menu-list">Menu List</option>
                            <option value="faq-list">FAQ List</option>
                            <option value="slider-list">Slider List</option>
                        </select>
                       
                        <!-- <span style="color:red">@error('icons'){{$message}} @enderror</span> -->
                               @if(!empty($error= $errors->first('url')))
                                    <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
                                     font-weight: 600;margin-left: -3px;margin-top: 15px;">
                                    @error('url')! @enderror</p>              

                                    <div class="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 26px;inline-size: 148px;
                                     text-align: center;background-color: #554545;color: red;border-style: solid;border-width: 1px;
                                     display: block;margin-bottom: 46px;">
                                    @error('url'){{$message}} @enderror</div>
                                @endif
                    </div>
                </div>
                            @endforeach
                            @endif
                        </div>



          <!-- <label for="inputStatus"> Menu sub-sub-title</label>
                @if(!empty($mval['submenu']))
                            @foreach($mval['submenu'] as $mname )
                <div class="col-sm-12">
                    <div class="form-group">
                      
                      
                        <div class="row">
                           
                            <div class="col-4">

                                <a class="btn"  style="margin-left: -41px;" href={{url("menusub/delete/" .$mname['id'])}}><i class="fas fa-times" style="color: white;margin-left: 151;"></i>
                                </a>
                                <input type="text" name="menu_sub_title[]" class="form-control " value="{{$mname['menu_title']}}">


                            </div>

                            <div class="col-4">
                    <div class="form-group">
                        <label for="inputStatus">Icons</label>
                        
                        <select id="inputStatus" class="form-control custom-select{{($errors->first('icons') ? " form-error" : "")}}"" name="icons[]">
                            <option selected="" disabled="">{{$mname['icons']}}</option>
                            <option value="home">Home</option>
                            <option value="user">User</option>
                            <option value="table">Table</option>
                            <option value="plus">Plus</option>
                            <option value="edit">Edit</option>
                            <option value="page">Page</option>

                        </select>
                        <span style="color:red">@error('icons'){{$message}} @enderror</span>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="inputStatus">url</label>
                        <select id="inputStatus" class="form-control custom-select{{($errors->first('url') ? " form-error" : "")}}"" name="url[]">
                            <option selected="" disabled="">{{$mname['url']}}</option>
                            <option value="menu-list">Menu List</option>
                            <option value="faq-list">FAQ List</option>
                            <option value="slider-list">Slider List</option>
                        </select>
                       
                        <span style="color:red">@error('icons'){{$message}} @enderror</span>
                    </div>
                </div>
                            @endforeach
                            @endif
                        </div>







                    </div>
                </div>
            </div> -->

            <!-- <div class="row">
            @if(!empty($mval['submenu']))
                        @foreach($mval['submenu'] as $mname )
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputStatus">Icons</label>
                        
                        <select id="inputStatus" class="form-control custom-select" name="icons[]">
                            <option selected="" disabled="">{{$mname['icons']}}</option>
                            <option value="home">Home</option>
                            <option value="user">User</option>
                            <option value="table">Table</option>
                            <option value="plus">Plus</option>
                            <option value="edit">Edit</option>
                            <option value="page">Page</option>

                        </select>
                        <span style="color:red">@error('icons'){{$message}} @enderror</span>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="inputStatus">url</label>
                        <select id="inputStatus" class="form-control custom-select" name="url[]">
                            <option selected="" disabled="">{{$mname['url']}}</option>
                            <option value="menu-list">Menu List</option>
                            <option value="faq-list">FAQ List</option>
                            <option value="slider-list">Slider List</option>
                        </select>
                       
                        <span style="color:red">@error('icons'){{$message}} @enderror</span>
                    </div>
                </div>
                @endforeach
                        @endif
            </div> -->


        </div>
        <button type="submit" class="btn btn-secondary" style="margin-left: 121px;width: 200px;height: 48px;margin-bottom: 27px;margin-top: -4px;">update</button>
</div>
</form>



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