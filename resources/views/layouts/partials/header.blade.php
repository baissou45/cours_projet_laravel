<div class="topbar">

    <nav class="navbar-custom">
        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input" type="search" placeholder="Search" />
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <ul class="list-inline float-right mb-0">
            <!-- User-->
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('back/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                    {{-- <img src="{{ asset('template/back/assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle"> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <form action="{{ route('logout') }}" method="post" id="dec_form">
                        @csrf

                        <a class="dropdown-item" href="#" id="deconnexion">
                            <i class="dripicons-exit text-danger"></i>
                            <span class="text-danger"> Déconnection </span>
                        </a>
                    </form>
                    {{-- <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a> --}}
                </div>
            </li>
        </ul>

        <!-- Page title -->
        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <i class="ion-navicon"></i>
                </button>
            </li>
            <li class="hide-phone list-inline-item app-search">
                <h3 class="page-title"> @yield('title') </h3>
            </li>
        </ul>

        <div class="clearfix"></div>
    </nav>

</div>

@section("script")
    <script>
        $("#deconnexion").click(function (e) {
            $('#dec_form').submit();
        });
    </script>
@endsection