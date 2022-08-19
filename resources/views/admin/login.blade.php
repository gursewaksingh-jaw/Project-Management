<html style="height: auto;" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Login </title>

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
    }

    body {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .form-error {

        border: 2px solid #e74c3c;
        animation: shake .1s linear;
        animation-iteration-count: 2;
    }

    .sideimg {
        background-image: URL('/images/signup1.jpg');
        background-repeat: no-repeat;
        background-size: 94% 102%;
        border-radius: 5px;
        position: relative;
        height: 490px;
        flex: 0 0 53%;
        max-width: 45%;
        margin-top: -25px;
    }

    /* #wrapper {
        background: #ccc;
        display: none
    } */
    </style>
</head>
<div class="wrapper">
    <!-- Navbar -->

    <!-- Content Wrapper. Contains page content -->

    <div class="content" style="min-height: 1345.6px;">
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
            <div class="alert alert-danger" role="alert"
                style="width: 358px;margin-top: -25px;text-align: center;margin-left: 715px;" id="errormsg">
                {{(Session::get('fail'))}}
            </div>
            @endif

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert"
                style="width: 358px;margin-top: -25px;text-align: center;margin-left: 715px;" id="successmsg">
                {{(Session::get('success'))}}
            </div>
            @endif
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row" style="margin-top: 63px;">
                    <!-- left column -->
                    <div class="col-md-4" style="margin-left: 278px;margin-top: 55px;">
                        <div class="card " style="width: 412px;width: 482px;height: 400px;">
                            <div class="card-header" style="height: 72px;background-color: #2f334ede;">
                                <h3 class="card-title"></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{url('logged-in')}}" method="POST"
                                style="padding: 24px;">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email"
                                                class="form-control {{($errors->first('email') ? " form-error" : "")}} id="
                                                inputEmail3" placeholder="Email">
                                            <!-- <span style="color:red">@error('email'){{$message}} @enderror</span> -->

                                            @if(!empty($error = $errors->first('email')))
                                            <p id="error"
                                                style="background-color: red; color: white;width: 24px;border-radius: 20px;
                                              text-align: center;font-weight: 600;margin-left: 299px;margin-top: -31px;">
                                                @error('email')! @enderror</p>

                                            <div id="wrapper"
                                                style="font-size: 13px;margin-top: -40px;margin-left: 333px;inline-size: 148px;
                                            text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;">
                                                @error('email'){{$message}} @enderror</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password"
                                                class="form-control {{($errors->first('password') ? " form-error" : "")}}"
                                                id="inputPassword3" placeholder="Password">
                                            <!-- <span style="color:red">@error('password'){{$message}} @enderror</span> -->
                                            @if(!empty($error = $errors->first('password')))
                                            <p id="error"
                                                style="background-color: red; color: white;width: 24px;border-radius: 20px;
                                               text-align: center;font-weight: 600;margin-left: 299px;margin-top: -31px;">
                                                @error('password')! @enderror</p>

                                            <div id="wrapper" style="font-size: 13px;margin-top: -50px;margin-left: 333px;
                                            inline-size: 148px;text-align: center;background-color: white;color:red;border-style: solid;
                                            border-width: 1px;">@error('password'){{$message}} @enderror</div>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-3 col-sm-9">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="" style="text-align:center;">
                                    <button type="submit" name="btn" class="btn btn-outline-secondary"
                                        style="width: 153px;">Sign in</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 sideimg" style="min-height: 500px;">


                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- <script>
    $('#error').click(function() {
        $('#wrapper').toggle();
    });
    </script> -->
    <!-- /.content-wrapper -->

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
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright © 2014-2021</strong> All rights reserved.
    </footer>