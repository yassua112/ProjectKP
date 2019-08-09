<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/elegant-font/html-css/style.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    @yield('css')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!--===============================================================================================-->
    @yield('style')

    <style type="text/css">
        .navbar-default .navbar-nav>li.clr1 a {
            color: #ffffff;
        }

        .navbar-default .navbar-nav>li.clr2 a {
            color: #FFEB3B;
            ;
        }

        .navbar-default .navbar-nav>li.clr3 a {
            color: #5EC64D;
        }

        .navbar-default .navbar-nav>li.clr4 a {
            color: #29AAE2;
        }

        .navbar-default .navbar-nav>li.clr5 a {
            color: #CEE229;
        }

        .navbar-default .navbar-nav>li.clr1.active a {
            color: #fff;
            background: #F55;
        }

        .navbar-default .navbar-nav>li.clr1 a:hover {
            background: rgba(255, 85, 85, 0.75);
        }

        .navbar-default .navbar-nav>li.clr2.active a {
            color: #fff;
            background: #973CB6;
        }

        .navbar-default .navbar-nav>li.clr2 a:hover {
            background: rgba(151, 60, 182, 0.66)
        }

        .navbar-default .navbar-nav>li.clr3.active a {
            color: #fff;
            background: #5EC64D;
        }

        .navbar-default .navbar-nav>li.clr3 a:hover {
            background: rgba(94, 198, 77, 0.78);
        }

        .navbar-default .navbar-nav>li.clr4.active a {
            color: #fff;
            background: #29AAE2;
        }

        .navbar-default .navbar-nav>li.clr4 a:hover {
            background: rgba(41, 170, 226, 0.62);
        }

        .navbar-default .navbar-nav>li.clr5.active a {
            color: #fff;
            background: #CEE229;
        }

        .navbar-default .navbar-nav>li.clr5 a:hover {
            background: rgba(206, 226, 41, 0.63);
        }

        .navbar-default {
            background-color: #3b5998;
            font-size: 18px;
            border-color: none;
        }

        .navbar-default .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-default .navbar-text {
            color: #ffffff;
        }

        .pemisah-btnnav {
            margin-left: 20px;
            margin-right: 20px;
        }

        .recent {
            padding-top: 20px;
        }

        .info-meta {
            padding-top: 10px;
            color: #9999;
        }

        a:focus,
        a:hover {
            text-decoration: none;
            outline: none;
            color: #9c9c9c;
        }

        .footer-bottom {
            background-color: #3b5998;
            color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .recent {
            padding-top: 20px;
        }

        .info-meta {
            padding-top: 10px;
            color: #9999;
        }

        a:focus,
        a:hover {
            text-decoration: none;
            outline: none;
            color: #9c9c9c;
        }

        .footer-bottom {
            background-color: #3b5998;
            color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .post-detail {
            padding-bottom: 30px
        }

        #footer {
            clear: left;
            background-color: #ab1818;
            border: 1px #a0b1a0 solid;
            padding: 5px;
            font-family: Montserrat-Bold;
            font-size: 15px;
            color: #ffffff;
            line-height: 1.5;
            text-transform: uppercase;
            padding-bottom: 30px;
        }

        .link-bidang-praktik:hover {
            background-color: #ab1818;
            color: rgb(255, 255, 255);
        }
    </style>
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a target="_blank" href="https://www.facebook.com/Antinomi-Law-Office-587240734669479/"
                        class="topbar-social-item fa fa-facebook"></a>
                    <a target="_blank" href="https://www.instagram.com/antinomilawoffice9194/?hl=id"
                        class="topbar-social-item fa fa-instagram"></a>
                    <a target="_blank" href="https://www.youtube.com/results?search_query=antinomi+law+office"
                        class="topbar-social-item fa fa-youtube-play"></a>
                    <a target="_blank" href="https://twitter.com/search?q=antinomi%20law%20office&src=typed_query"
                        class="topbar-social-item fa fa-twitter"></a>

                </div>

                <span class="topbar-child1 font-weight-bold">
                    KANTOR PENGACARA | KONSULTAN HUKUM
                </span>
            </div>


            <div class="wrap_header">
                <!-- Logo -->
                <a href="{{asset('/')}}" class="logo">
                    <img src="{{asset('assets/images/logoantinomi.jpg')}}" alt="IMG-LOGO" height="150" width="120">

                </a>

            <!-- Menu -->
            <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="sale-noti">
                                <a href="{{route('home')}}">HOME</a>
                            </li>

                            <li>
                                <a href="{{route('lawyers')}}">LAWYERS</a>
                            </li>

                            <li>
                                <a href="{{route('bidanghukum')}}">BIDANG HUKUM</a>
                            </li>

                            <li>
                                <a href="{{route('tentangkami')}}">TENTANG</a>
                            </li>

                            <li>
                                <a href="{{route('konsultasi.create')}}">KONTAK KAMI</a>
                            </li>

                            <li>
                                <a href="{{route('artikel.hukum')}}">ARTIKEL HUKUM</a>
                            </li>

                            <li>
                                <a href="{{route('dokumentasi')}}">DOKUMENTASI KEGIATAN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
        
        </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="{{asset('assets/index.html')}}" class="logo-mobile">
                <img src="{{asset('assets/images/icons/logo.png')}}" alt="IMG-LOGO">
            </a>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                            Law Office
                        </span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                KANTOR PENGACARA | KONSULTAN HUKUM
                            </span>
                        </div>
                    </li>
                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('home')}}">HOME</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('lawyers')}}">LAWYERS</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('bidanghukum')}}">BIDANG HUKUM</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('tentangkami')}}">TENTANG</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('konsultasi.create')}}">KONTAK KAMI</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('artikel.hukum')}}">ARTIKEL HUKUM</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{route('dokumentasi')}}">DOKUMENTASI KEGIATAN</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')



    <!--===============================================================================================-->
    <script type="text/javascript" src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!--===============================================================================================-->
    @yield('script')
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!--===============================================================================================-->
    @yield('javascript')
</body>

</html>