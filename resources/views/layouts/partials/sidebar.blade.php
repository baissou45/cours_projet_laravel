<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="">
            <!--<a href="index.html" class="logo text-center">Fonik</a>-->
            <a href="{{ route('dashboard') }}" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                {{-- Main --}}
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Dashboard </span></a>
                </li>

                {{-- Utilisateurs --}}
                {{-- <li class="menu-title">Utilisateurs</li> --}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-user"></i>
                        <span> Diplômes <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('diplomes.index') }}">Liste des diplômes</a></li>
                        <li><a href="{{ route('diplomes.create') }}">Nouveau diplôme</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-user"></i>
                        <span> Programmes <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('programmes.index') }}">Liste des programmes</a></li>
                        <li><a href="{{ route('programmes.create') }}">Nouveau programme</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->