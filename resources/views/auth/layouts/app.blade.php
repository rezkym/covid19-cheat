<!DOCTYPE html>
<html lang="id">
    
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="#1 Cheat VVIP Indonesia" name="description" />
        <meta content="Rezky Maulana" name="author" />
        <meta content="Alvian Dwi" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--- Title -->
        <title>Masuk {{ env('APP_NAME') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167621173-1"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-167621173-1');
        </script>

        {{-- Google Tag Manager --}}
        @stack('google-tag')

    </head>


    <body class="authentication-bg">


        {{-- Content Auth --}}
        @yield('content')

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>