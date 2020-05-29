<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="#1 Cheat VVIP Indonesia, menyediakan cheat dengan fitur unggulan serta nyaman di gunakan." name="description" />
        <meta content="Rezky Maulana" name="author" />
        <meta content="Alfian Dwi" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167621173-1"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-167621173-1');
        </script>

    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="wrapper">

            {{-- ========== Header Navigation Bar ========== --}}
            @include('layouts.header')

            <!-- ============================================================== -->
            <!-- Start structure static -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        {{-- ========== Page Title ========== --}}


                        <!-- ============================================================== -->
                        <!-- Start Page Content Blade here -->
                        <!-- ============================================================== -->

                        @yield('content')

                        <!-- ============================================================== -->
                        <!-- End Page Content Blade here -->
                        <!-- ============================================================== -->


                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                {{-- ========== Footer ========== --}}
                @include('layouts.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End structure static -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- knob plugin -->
        <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

        <!-- Dashboard init js-->
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>

</html>