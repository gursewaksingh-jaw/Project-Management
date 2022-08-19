<html style="height: auto;" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> User Login </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <style>
    html {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(#c1e1e0, #d5e8ee);
    }

    body {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;

    }

    .sideimg {
        background-image: URL('/images/login.jpg');
        background-repeat: no-repeat;
        background-size: 104% 110%;
        border-radius: 5px;
        position: relative;
        height: 300px;
        flex: 0 0 53%;
        max-width: 40%;
    }

    .form-error {

        border: 2px solid #e74c3c;
        animation: shake .1s linear;
        animation-iteration-count: 2;
    }
    </style>
</head>

<body>
    <div class="wrapper" style="min-height: 1345.6px;">
        <!-- Navbar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- style=" background: linear-gradient(#c1e1e0, #d5e8ee);" -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1>General Form</h1> -->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div>
                @if(Session::has('fail'))
                <div class="alert alert-danger" id="errormsg" role="alert" style="width: 362px;
margin-top: -25px;
margin-left: 707px;
text-align: center;
margin-bottom: 40px;">
                    {{(Session::get('fail'))}}
                </div>
                @endif

                @if(Session::has('success'))
                <div class="alert alert-success" role="alert"
                    style="width: 300px;margin-top: -25px;margin-left: 207px;text-align: center;margin-bottom: 40px;"
                    id="successmsg">
                    {{(Session::get('success'))}}
                </div>
                @endif
            </div>

            <section class="content" style="margin-top: 36px;">
                <div class="container-fluid">
                    <div class="row" style="margin-top: 100px;  ">
                        <!-- left column -->
                        <div class="col-md-4 loginform" style="margin-left: 299px;margin-right: -378px;">
                            <div class="card card-dark" style="width: 512px; min-height:400px;">
                                <div class="card-header" style="height: 64px;">
                                    <h3 class="card-title">Login Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{url('logged-in-user')}}" method="POST" class="form-horizontal">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group row" style="margin-bottom: 35px;margin-top: 38px;">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="email"
                                                    class="form-control{{($errors->first('email') ? " form-error" : "")}}"
                                                    id="inputEmail3" placeholder="Email">
                                                <!-- <span style="color:red">@error('email'){{$message}} @enderror</span> -->

                                                @if($errors->first('email'))
                                                <p id="error"
                                                    style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                                  text-align: center;font-weight: 600;margin-left: 8px;margin-top: 11px;">
                                                    @error('email')! @enderror</p>

                                                <div id="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 42px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;
                                                position: relative;margin-bottom: 16px;">@error('email'){{$message}}
                                                    @enderror</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" name="password"
                                                    class="form-control{{($errors->first('password') ? " form-error" : "")}}"
                                                    id="inputPassword3" placeholder="Password">
                                                <!-- <span style="color:red">@error('password'){{$message}} @enderror</span> -->

                                                @if($errors->first('password'))
                                                <p id="error" style="background-color: red;color: white;width: 24px;border-radius: 20px;text-align: center;
                                                  font-weight: 600;margin-left: 9px;margin-top: 19px;">
                                                    @error('password')! @enderror</p>

                                                <div id="wrapper"
                                                    style="font-size: 13px;margin-top: -50px;margin-left: 43px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;">
                                                    @error('password'){{$message}} @enderror</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                    <label class="form-check-label" for="exampleCheck2">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="">
                                        <button type="submit" class="btn btn-dark"
                                            style="width: 144px;height: 50px;margin-left: 182px;margin-top:9px;">Sign
                                            in</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>


                        </div>

                        <div class="col-md-8 sideimg"
                            style="flex: 0 0 37%;max-width: 35%;margin-left: 308px;height: 533px;margin-top: -22px;">
                        </div>
            </section>
            <!-- /.content -->
        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$("document").ready(function() {
    setTimeout(function() {
        $("#successmsg").fadeOut('slow');
    }, 1000);
});

$("document").ready(function() {
    setTimeout(function() {
        $("#errormsg").fadeOut('slow');
    }, 1000);
});
</script>
<!-- /.content-wrapper -->
<!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright © 2014-2021</strong> All rights reserved.
  </footer> -->

</html>