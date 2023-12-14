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

        <!-- Basic Css files -->
        <link href="{{ asset('back/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('back/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('back/assets/css/style.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('back/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .select2-container .select2-selection--single {
                padding: 3px 0;
                height: 38px;
            }
        </style>

        @yield("css")

        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            @include("layouts.partials.sidebar")

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    @include("layouts.partials.header")
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">

                            @yield('content')

                        </div>
                    </div>

                </div>
                <!-- end content -->

                <footer class="footer">
                    © 2018 Fonik - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <form action="" method="post" id="delete_form">
            @csrf
            @method("DELETE")
        </form>

        <!-- jQuery  -->
        <script src="{{ asset('back/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('back/assets/js/waves.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('back/assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('back/assets/js/app.js') }}"></script>

        <script src="{{ asset('back/assets/plugins/select2/js/select2.min.js') }}"></script>

        <script>
        </script>

        @yield("script")

        <script>
            $(document).ready(function() {

                $(".select2").select2();

                toastr.options.timeOut = 10000;

                @if (Session::has('error'))
                    toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                    toastr.success('{{ Session::get('success') }}');
                @elseif(Session::has('warning'))
                    toastr.warning('{{ Session::get('warning') }}');
                @endif
            });

            show_alerte = (route) => {
                $('.sa-warning').click(function () {
                    swal({
                        title: 'Etes-vous sûre ?',
                        text: "Cette action est irréversible !",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonClass: 'btn btn-success',
                        cancelButtonClass: 'btn btn-danger m-l-10',
                        confirmButtonText: 'Oui, Supprimer !',
                        cancelButtonText: 'Annuler'
                    }).then(function () {
                        $('#delete_form').attr('action', route);
                        $('#delete_form').submit();
                    })
                });
            }
        </script>

        <script src="{{ asset('js/toastr.min.js') }}"></script>

    </body>
</html>