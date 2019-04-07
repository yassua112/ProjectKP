<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome To Antonomi Laweys Office</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}"/>
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
</head>

<style type="text/css">
.navbar-default .navbar-nav > li.clr1 a{
        color:#ffffff;
}
.navbar-default .navbar-nav > li.clr2 a{
    color: #FFEB3B;;
}
.navbar-default .navbar-nav > li.clr3 a{
    color: #5EC64D;
}
.navbar-default .navbar-nav > li.clr4 a{
    color: #29AAE2;
}
.navbar-default .navbar-nav > li.clr5 a{
    color: #CEE229;
}

.navbar-default .navbar-nav > li.clr1.active a{
    color:#fff;
    background: #F55;
}
.navbar-default .navbar-nav > li.clr1 a:hover{
    background: rgba(255, 85, 85, 0.75);
} 
.navbar-default .navbar-nav > li.clr2.active a{
    color: #fff;
    background:#973CB6;
}
.navbar-default .navbar-nav > li.clr2 a:hover{
 background: rgba(151, 60, 182, 0.66)
}


.navbar-default .navbar-nav > li.clr3.active a{
    color: #fff;
    background:#5EC64D;
}
.navbar-default .navbar-nav > li.clr3 a:hover
{
  background: rgba(94, 198, 77, 0.78);
}
.navbar-default .navbar-nav > li.clr4.active a{
    color: #fff;
    background: #29AAE2;
}
.navbar-default .navbar-nav > li.clr4 a:hover{
    background: rgba(41, 170, 226, 0.62);
}

.navbar-default .navbar-nav > li.clr5.active a{
    color: #fff;
    background: #CEE229;
}
.navbar-default .navbar-nav > li.clr5 a:hover{
    background: rgba(206, 226, 41, 0.63);
}
.navbar-default{
    background-color: #3b5998;
    font-size:18px;
    border-color:none;
}
.navbar-default .navbar-brand {
    color: #ffffff;
    font-weight:bold;
}
.navbar-default .navbar-text {
    color:#ffffff;
}

.pemisah-btnnav{
    margin-left: 20px;
    margin-right: 20px;
}

.recent{
    padding-top:20px;
    
}
.info-meta{
    padding-top: 10px;
    color:#9999;
}
a:focus, 
a:hover {
text-decoration: none;
outline: none;
color: #9c9c9c;
}
.footer-bottom {
background-color:#3b5998;
color:#fff;
padding-top:10px;
padding-bottom:10px;
}
.recent{
            padding-top:20px;
            
        }
        .info-meta{
            padding-top: 10px;
            color:#9999;
        }
        a:focus, 
        a:hover {
        text-decoration: none;
        outline: none;
        color: #9c9c9c;
        }
        .footer-bottom {
        background-color:#3b5998;
        color:#fff;
        padding-top:10px;
        padding-bottom:10px;
        }
        .post-detail{
         padding-bottom :30px
        }
#footer
{
     clear: left;
     width:100%;
     margin-left: 5px;
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
	color: rgb(255,255,255);
}



</style>
<body class="animsition">
<!-- Header -->
	@include('layouts.header')

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
