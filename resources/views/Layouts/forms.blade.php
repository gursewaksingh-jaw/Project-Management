@extends('layouts.master')
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  @yield('registeration-form')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1345.6px;">
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6" style="margin-left: -119px;">
           <!-- general form elements -->
           <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Register</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">

                        <div class="row">
                             <div class="col-6">

                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                                </div>
                            <div class="col-6">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                           </div>
                        </div>
                  </div>

                 <div class="form-group">
                        <div class="row">
                            <div class="col-6">

                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    <div class="col-6">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    </div>
                    </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                  <div class="col-6">
                  <a href="user_login">Already registr? Please Log in</a>
                  </div>
                  <div class="col-6">
                    <button type="submit" class="btn btn-outline-dark" style="margin-left: 130px; width:100px;">Register</button>
                  </div>
                  </div>
                </div>

                <div class="card-footer" style="margin-top: -31px;">
                <div class="social-auth-links text-center">
                   <p>- OR -</p>
              
                    <a href="#" class="btn btn-danger" style="width:300px;">
                      <i class="fab fa-google-plus mr-2"></i>
                      Sign up using Google+
                    </a>
               </div>
                </div>
                
              </form>
            </div>

           
          </div>
       
          <div class="col-md-6">
          <!-- <img src="{{URL::asset('/images/register.jpg')}}" style="width:300px; height:400px;" > -->
              
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
