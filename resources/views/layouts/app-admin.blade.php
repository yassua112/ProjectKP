<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lawyers DashBoard | </title>

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
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css/custom.min.css')}}">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{route('wall-dashboard')}}" class="site_title"><i class="fa fa-paw"></i>
                            <span>DASHBOARD</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{asset('vendor/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{route('wall-dashboard')}}"><i class="fa fa-home"></i> Home </a>
                                </li>
                                <li><a href="{{route('form')}}"><i class="fa fa-edit"></i> Forms </a>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> UI Elements</a>
                                </li>
                                <li><a href="{{route('table')}}"><i class="fa fa-table"></i> Tables </a>
                                </li>
                                <li><a href="{{route('data')}}"><i class="fa fa-bar-chart-o"></i> Data Presentation </a>
                                </li>
                                <li><a href="{{route('layout')}}"><i class="fa fa-clone"></i>Layouts </a>

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
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                                    <img src="{{asset('vendor/images/img.jpg')}}" alt="">Admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="login.html">
                                            <i class="fa fa-sign-out pull-right">
                                            </i> Log Out</a></li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
        </div>
    </div>

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
    <!-- Chart.js -->
    <script type="text/javascript" src="{{asset('vendor/gentella/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script type="text/javascript" src="{{asset('vendor/gentella/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- morris.js -->
    <script type="text/javascript" src="{{asset('vendor/gentella/raphael/raphael.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/morris.js/morris.min.js')}}"></script>
    <!-- gauge.js -->
    <script type="text/javascript" src="{{asset('vendor/gentella/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script type="text/javascript" src="{{asset('vendor/gentella/ootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- Skycons -->
    <script type="text/javascript" src="{{asset('vendor/gentella/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script type="text/javascript" src="{{asset('vendor/gentella/flot.orderbars/js/jquery.flot.orderBars.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('vendor/gentella/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script type="text/javascript" src="{{asset('vendor/gentella//DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script type="text/javascript" src="{{asset('vendor/gentella/moment/min/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{asset('vendor/js/custom.min.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script type="text/javascript" src="{{asset('vendor/gentella/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/gentella/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script type="text/javascript" src="{{asset('vendor/gentella/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>    
    <!-- Switchery -->
    <script type="text/javascript" src="{{asset('vendor/gentella/switchery/dist/switchery.min.js')}}"></script>    
    <!-- Select2 -->
    <script type="text/javascript" src="{{asset('vendor/gentella/select2/dist/js/select2.full.min.js')}}"></script>    
    <!-- Parsley -->
    <script type="text/javascript" src="{{asset('vendor/gentella/parsleyjs/dist/parsley.min.js')}}"></script>    
    <!-- Autosize -->
    <script type="text/javascript" src="{{asset('vendor/gentella/autosize/dist/autosize.min.js')}}"></script>    
    <!-- jQuery autocomplete -->
    <script type="text/javascript" src="{{asset('vendor/gentella/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>    
    <!-- starrr -->
    <script type="text/javascript" src="{{asset('vendor/gentella/starrr/dist/starrr.js')}}"></script>
    
</body>
</html>