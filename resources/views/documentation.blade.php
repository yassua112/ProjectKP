@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">

@stop

@section('content')
<head>
<body style="display: block;"><button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
    <header id="header" class="header-scrolled">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                        <a href="tel:+953 012 3654 896896">+953 012 3654 896</a>
                        <a href="mailto:support@colorlib.com">support@colorlib.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title=""></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Service</a></li>
                        <li><a href="feedback.html">Feedback</a></li>
                        <li class="menu-has-children"><a href="" class="sf-with-ul">Blog</a>
                            <ul style="display: none;">
                                <li><a href="blog-home.html">Blog Home</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Feedback
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="feedback.html"> Feedback</a></p>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback-area-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t1.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t2.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t3.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t1.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t2.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t3.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t1.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t2.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feedback">
                        <img src="img/t3.png" alt="">
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor,
                            printer, scanner, speaker, projector, hardware and more. laptop accessory.
                        </p>
                        <a href="#">
                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                        </a>
                        <p>CEO at Google</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brands-area pb-120 pt-90">
        <div class="container no-padding">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters owl-carousel owl-theme owl-loaded">





                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;">
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 228px; margin-right: 0px;">
                                <div class="col single-brand">
                                    <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="display: none;">prev</div>
                            <div class="owl-next" style="display: none;">next</div>
                        </div>
                        <div style="" class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Agency</h6>
                        <p>
                            The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has come to a point
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>
                            For business professionals caught between high OEM price and mediocre print and graphic
                            output.
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscription relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''"
                                        onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Email Address '"
                                        required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>
                                    <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">InstaFeed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    Copyright ©<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>2019 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
                    by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous" type="text/javascript"></script>
    <script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js" type="text/javascript"></script>
    <script src="js/hoverIntent.js" type="text/javascript"></script>
    <script src="js/superfish.min.js" type="text/javascript"></script>
    <script src="js/mn-accordion.js" type="text/javascript"></script>
    <script src="js/jquery.ajaxchimp.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.nice-select.min.js" type="text/javascript"></script>
    <script src="js/jquery.circlechart.js" type="text/javascript"></script>
    <script src="js/mail-script.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <nav id="mobile-nav">
        <ul class="" style="touch-action: pan-y;" id="">
            <li class="menu-active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Service</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li class="menu-has-children"><i class="lnr lnr-chevron-down"></i><a href="" class="sf-with-ul">Blog</a>
                <ul style="display: none;">
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
            </li>
            <li><a href="elements.html">Elements</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-body-overly"></div>
</body>
@endsection

@section('script')
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
@stop
