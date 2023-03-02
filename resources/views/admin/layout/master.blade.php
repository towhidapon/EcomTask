<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 06:01:31 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        @yield('panel')
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="{{asset('admin')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('admin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('admin')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('admin')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('admin')}}/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="{{asset('admin')}}/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="{{asset('admin')}}/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{asset('admin')}}/assets/js/app.js"></script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Dec 2022 06:01:31 GMT -->
</html>
