<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Fonik - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{ asset('back/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            @yield("content")

        </div>


        <!-- jQuery  -->
        <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/waves.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('back/assets/js/app.js') }}"></script>

    </body>
</html>