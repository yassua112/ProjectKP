<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>| DASHBOARD |</title>

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/bootstrap/dist/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/font-awesome/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/nprogress/nprogress.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('vendor/gentella/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('vendor/gentella/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/custom.min.css')}}">
    @yield('style')

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{route('admin.dashboard')}}" class="site_title"><i class="fa fa-paw"></i>
                            <span>DASHBOARD</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('vendor/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i> Home </a>
                                </li>
                                <li>
                                    <a href="{{route('table')}}"><i class="fa fa-table"></i> Bidang Hukum </a>
                                </li>
                                <li>
                                    <a href="{{route('admin.dokumentasi')}}"><i class="fa fa-file-image-o"></i>Dokumentasi</a>
                                </li>
                                <li>
                                    <a href="{{route('adminartikel.show')}}"><i class="fa fa-edit"></i> Artikel </a>
                                </li>
                                <li>
                                    <a href="{{route('data')}}"><i class="fa fa-bar-chart-o"></i> Data Admin dan
                                        Lawyers </a>
                                </li>
                                <li>
                                    <a href="{{route('konsultasi')}}"><i class="fa fa-table"></i> Konsultasi Masyarakat </a>
                                </li>
                                <li>
                                    <a href="{{route('layout')}}"><i class="fa fa-clone"></i>Layouts </a>
                                </li>

                                
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->

            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">


                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>


                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{ route('logout') }}">
                                            <i class="fa fa-sign-out pull-right">
                                            </i> Log Out</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>                                   
                                </a>                               
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>

                <div class="pull-right">
                    Copyright by : Team KP Antinomi LawOffice 2019 <a href="https://i.pinimg.com/originals/92/a1/ae/92a1aeb48005aa1b88f71ac4b52243d9.gif"><i
                            class="fa fa-heart"></i></a>
                </div>
                <div class="clearfix"></div>

            </footer>
            <!-- /footer content -->

        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('vendor/gentella/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('vendor/gentella/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{asset('vendor/gentella/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{asset('vendor/gentella/nprogress/nprogress.js')}}"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{asset('vendor/js/custom.min.js')}}"></script>

   

    @yield('script')
    @include('sweet::alert')



</body>


</html>