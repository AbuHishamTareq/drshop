<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield( 'title' )</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ url('assets/backend/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ url('assets/backend/css/adminlte.min.css') }}">
    </head>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__wobble" src="{{ asset('assets/backend/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
            </div>
            <!-- Navbar -->
            @include( 'backend.includes.header' )
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include( 'backend.includes.sidebar' )
            <!-- Content Wrapper. Contains page content -->
            @include( 'backend.includes.content' )
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            @include( 'backend.includes.footer' )
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ url('assets/backend/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ url('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('assets/backend/js/adminlte.js') }}"></script>
    </body>
</html>