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
   </head>
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
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{ asset('admin/assets/img/user.jpg')}}" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                   @if (Request::is('dashboardAkademik')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('akademik::homeAkademik') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>

                    @if (Request::is('dashboardAkademik/usermaba')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('akademik::user') }}"><i class="fa fa-user fa-fw"></i>User Maba</a>
                    </li>

                    @if (Request::is('dashboardAkademik/berita')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('akademik::berita') }}"><i class="fa fa-flask fa-fw"></i>Berita</a>
                    </li>

                    </li>
                    @if (Request::is('dashboardAkademik/laporan')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('akademik::laporan') }}"><i class="fa fa-flask fa-fw"></i>Laporan</a>
                    </li>
                    
                    
                    @if (Request::is('dashboardAkademik/hasil')) <li class="selected"> @else <li> @endif
                        <a href="{{ route('akademik::hasil') }}"><i class="fa fa-flask fa-fw"></i>Hasil TS</a>
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

</body>

</html>
