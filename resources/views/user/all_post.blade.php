<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Post</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content" style="margin-left: 61px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">Nina Mcintire</h3>

                                    <p class="text-muted text-center">Software Engineer</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                    </p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                        fermentum enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="btn btn-primary" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Posts</a>
                                        </li>
                                        <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body" style="background-color: #dbd5d54f;">

                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">

                                            <!-- Post -->

                                            @foreach($newpost as $post)
                                            <div style="padding:35px;text-align: justify;">
                                                <div class="post" style="background-color: white;padding: 31px;">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm"
                                                            src="../../dist/img/user1-128x128.jpg" alt="user image">
                                                        <span class="username">
                                                            @if($post )
                                                            <a href="#">{{$post->user->name}}</a>
                                                            @endif
                                                            <a href="#" class="float-right btn-tool"><i
                                                                    class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Shared publicly
                                                            -{{$post->created_at->format('d M y  |  H:i:s')}}</span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <p style="padding: 50px;">
                                                        {!!$post->post_description!!}
                                                        <!-- Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans. -->
                                                    </p>

                                                    </p>

                                                    <p>
                                                        <a href="#" class="link-black text-sm mr-2"><i
                                                                class="fas fa-share mr-1"></i> Share</a>
                                                        <a href="#" class="link-black text-sm"><i
                                                                class="far fa-thumbs-up mr-1"></i> Like</a>
                                                        <span class="float-right">
                                                            <a href="#" class="link-black text-sm">
                                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                                            </a>
                                                        </span>
                                                    </p>

                                                    <input class="form-control form-control-sm" type="text"
                                                        placeholder="Type a comment">
                                                </div>
                                            </div>
                                            <!-- /.post -->
                                            @endforeach

                                            <!-- Post -->
                                            <div class="post clearfix">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                                    <span class="username">
                                                        <a href="#">Sarah Ross</a>
                                                        <a href="#" class="float-right btn-tool"><i
                                                                class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Sent you a message - 3 days ago</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <p>
                                                    Lorem ipsum represents a long-held tradition for designers,
                                                    typographers and the like. Some people hate it and argue for
                                                    its demise, but others ignore the hate as they create awesome
                                                    tools to help create filler text for everyone from bacon lovers
                                                    to Charlie Sheen fans.
                                                </p>

                                                <form class="form-horizontal">
                                                    <div class="input-group input-group-sm mb-0">
                                                        <input class="form-control form-control-sm"
                                                            placeholder="Response">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-danger">Send</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.post -->

                                            <!-- Post -->
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                                    <span class="username">
                                                        <a href="#">Adam Jones</a>
                                                        <a href="#" class="float-right btn-tool"><i
                                                                class="fas fa-times"></i></a>
                                                    </span>
                                                    <span class="description">Posted 5 photos - 5 days ago</span>
                                                </div>
                                                <!-- /.user-block -->
                                                <div class="row mb-3">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid" src="../../dist/img/photo1.png"
                                                            alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3"
                                                                    src="../../dist/img/photo2.png" alt="Photo">
                                                                <img class="img-fluid" src="../../dist/img/photo3.jpg"
                                                                    alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                            <div class="col-sm-6">
                                                                <img class="img-fluid mb-3"
                                                                    src="../../dist/img/photo4.jpg" alt="Photo">
                                                                <img class="img-fluid" src="../../dist/img/photo1.png"
                                                                    alt="Photo">
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                        <!-- /.row -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->

                                                <p>
                                                    <a href="#" class="link-black text-sm mr-2"><i
                                                            class="fas fa-share mr-1"></i> Share</a>
                                                    <a href="#" class="link-black text-sm"><i
                                                            class="far fa-thumbs-up mr-1"></i> Like</a>
                                                    <span class="float-right">
                                                        <a href="#" class="link-black text-sm">
                                                            <i class="far fa-comments mr-1"></i> Comments (5)
                                                        </a>
                                                    </span>
                                                </p>

                                                <input class="form-control form-control-sm" type="text"
                                                    placeholder="Type a comment">
                                            </div>
                                            <!-- /.post -->
                                        </div>


                                        <!-- /.tab-pane -->

                                        <!-- /.tab-pane -->

                                        <!-- <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div> -->
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
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
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../../dist/js/demo.js')}}"></script>
</body>

</html>