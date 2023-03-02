    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        @extends('admin.layout.master')
        @section('panel')
        <!-- Begin page -->
        <div id="layout-wrapper">


           @include('admin.partial.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.partial.sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->

        </div>
        @endsection
        <!-- END layout-wrapper -->
