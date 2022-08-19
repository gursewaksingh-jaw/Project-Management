<!-- Google Font: Source Sans Pro
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  < Font Awesome -->
<!-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> -->
<!-- Theme style -->
<!-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> -->
<!-- Google Font: Source Sans Pro -->
@yield('master')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">



<style>

</style>

<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" id="bodycolor"
    style="height: auto;">
    <!-- ./wrapper -->





    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
    $(document).ready(function() {
        $('#lightmode').on('click', function() {
            // $(this).removeClass('open');
            $("#bodycolor").removeClass('open');
        });
    });
    </script>


    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>