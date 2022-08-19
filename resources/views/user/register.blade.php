<html style="height: auto;" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> User Signup </title>

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

    .sideimg {
        background-image: URL('/images/contactus.png');
        background-repeat: no-repeat;
        background-size: 94% 102%;
        border-radius: 5px;
        position: relative;
        height: 490px;
        flex: 0 0 53%;
        max-width: 34%;
        margin-top: 80px;
    }

    .form-error {

        border: 2px solid #e74c3c;
        animation: shake .1s linear;
        animation-iteration-count: 2;
    }
    </style>
</head>

<body>




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
                style="width:300px; margin-top:5px;  margin-left: 512px;text-align: center;">
                {{(Session::get('fail'))}}
            </div>
            @endif

            @if(Session::has('success'))
            <div class="alert alert-success" role="alert"
                style="width:300px; margin-top:5px;  margin-left: 512px;text-align: center;" id="successmsg">
                {{(Session::get('success'))}}
            </div>
            @endif
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-4 sideimg" style="margin-left: 248px;
width: 500px">
                        <!-- general form elements -->



                    </div>

                    <div class="col-md-4" style="margin-top: 80px;">
                        <div class="card card-dark" style="min-height: 573px;">
                            <div class="card-header" style="height:78px;">
                                <!-- <h3 class="card-title">Register</h3> -->
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{url('registered')}}" method="POST" enctype="multipart/form-data"
                                class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-6">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" name="name"
                                                    class="form-control{{($errors->first('name') ? " form-error" : "")}}"" id="
                                                    exampleInputEmail1" placeholder="Enter name">
                                                <!-- <span style="color:red">@error('name'){{$message}} @enderror</span> -->
                                                @if($errors->first('name'))
                                                <p id="error"
                                                    style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                                  text-align: center;font-weight: 600;margin-left: 8px;margin-top: 11px;">
                                                    @error('name')! @enderror</p>

                                                <div id="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 42px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;
                                                position: relative;margin-bottom: 16px;">@error('name'){{$message}}
                                                    @enderror</div>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email"
                                                    class="form-control{{($errors->first('email') ? " form-error" : "")}}"" id="
                                                    exampleInputEmail1" placeholder="Enter email">
                                                <!-- <span style="color:red">@error('name'){{$message}} @enderror</span> -->

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
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">

                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control{{($errors->first('password') ? " form-error" : "")}}"" id="
                                                    exampleInputPassword1" placeholder="Password">
                                                <!-- <span style="color:red">@error('password'){{$message}} @enderror</span> -->

                                                @if($errors->first('password'))
                                                <p id="error"
                                                    style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                                  text-align: center;font-weight: 600;margin-left: 8px;margin-top: 11px;">
                                                    @error('password')! @enderror</p>

                                                <div id="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 42px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;
                                                position: relative;margin-bottom: 16px;">@error('password'){{$message}}
                                                    @enderror</div>
                                                @endif

                                            </div>
                                            <div class="col-6">
                                                <label for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" name="confirm_password"
                                                    class="form-control{{($errors->first('confirm_password') ? " form-error" : "")}}"" id="
                                                    exampleInputPassword1" placeholder="Password">
                                                <!-- <span style="color:red">@error('confirm_password'){{$message}}
                                                    @enderror</span> -->

                                                @if($errors->first('confirm_password'))
                                                <p id="error"
                                                    style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                                  text-align: center;font-weight: 600;margin-left: 8px;margin-top: 11px;">
                                                    @error('confirm_password')! @enderror</p>

                                                <div id="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 42px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;
                                                position: relative;margin-bottom: 16px;">
                                                    @error('confirm_password'){{$message}}
                                                    @enderror</div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image"
                                                    class="custom-file-input{{($errors->first('image') ? " form-error" : "")}}"" id="
                                                    exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>

                                            </div>

                                        </div>
                                        <!-- <span style="color:red">@error('image'){{$message}} @enderror</span> -->
                                    </div>
                                    @if($errors->first('image'))
                                    <p id="error"
                                        style="background-color: red;color: white;width: 24px;border-radius: 20px;
                                                  text-align: center;font-weight: 600;margin-left: 8px;margin-top: 11px;">
                                        @error('image')! @enderror</p>

                                    <div id="wrapper" style="font-size: 13px;margin-top: -39px;margin-left: 42px;inline-size: 148px;
                                                text-align: center;background-color: white;color: red;border-style: solid;border-width: 1px;
                                                position: relative;margin-bottom: 16px;">@error('image'){{$message}}
                                        @enderror</div>
                                    @endif

                                    <div class="row">
                                        <div class="col-12" style="text-align: center;
font-size: 16px;">
                                            <a href="user_login"> Already registered ? Please Log in</a>
                                        </div>
                                        <div class="col-6">

                                        </div>
                                    </div>
                                </div>

                                <div class="" style="margin-top:7px; margin-bottom:20px;">
                                    <button type="submit" class="btn btn-outline-dark"
                                        style="margin-left: 222px;width: 165px;">Register</button>
                                    <div class="social-auth-links text-center">
                                        <p>- OR -</p>

                                        <a href="#" class="btn btn-danger"
                                            style="width: 300px;height: 50px;padding: 10px;">
                                            <i class="fab fa-google-plus mr-2"></i>
                                            Sign up using Google+
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                    <!-- /.card -->


                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
</body>

</html>