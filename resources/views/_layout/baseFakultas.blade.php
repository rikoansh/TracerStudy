<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Akademik Tracer Study - @yield('title')</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('admin/assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/main-style.css')}}" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="{{ asset('admin/assets/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
   
    <script src="{{ asset('admin/assets/js/tinymce/tinymce.min.js')}}"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
   

    
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('admin/assets/img/logo.png')}}" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    @include('include/message')
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    @include('include/task')

                </li>

                <li class="dropdown">
                    @include('include/alert')
                </li>

                <li class="dropdown">
                    @include('include/profile')
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <!--end search section-->
                    </li>
                    @if (Request::is('dashboardfakultas')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::homefakultas') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>

                    @if (Request::is('dashboardFakultas/usermaba')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::user') }}"><i class="fa fa-user fa-fw"></i>User Maba</a>
                    </li>

                    </li>
                    @if (Request::is('dashboardFakultas/transferi')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::transfer') }}"><i class="fa fa-flask fa-fw"></i>Transfer Maba/Alumni</a>
                    </li>

                    @if (Request::is('dashboardFakultas/berita')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::berita') }}"><i class="fa fa-flask fa-fw"></i>Berita</a>
                    </li>

                    @if (Request::is('dashboardFakultas/kartu')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::kartu') }}"><i class="fa fa-flask fa-fw"></i>Kartu Alumni</a>
                    </li>

                     @if (Request::is('dashboardFakultas/saran')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::saran') }}"><i class="fa fa-flask fa-fw"></i>Saran</a>
                    </li>

                    @if (Request::is('dashboardFakultas/hasil')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('fakultas::hasil') }}"><i class="fa fa-flask fa-fw"></i>Hasil TS</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper"> 
            @yield('isi')
        </div>
        <!-- end page-wrapper -->

    </div>
    @section('js')
          <script src="{{ asset('js/frontend.js') }}"></script>
    @show

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('admin/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/pace/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{ asset('admin/assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/morris/morris.js')}}"></script>
    <script src="{{ asset('admin/assets/scripts/dashboard-demo.js')}}"></script>

     <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
</body>

</html>
