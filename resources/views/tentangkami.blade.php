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
<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item2-slick1" style="background-image: url({{asset('assets/images/background1.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        Welcome to Antinomi Law Office's Website Official
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{{route('tentangkami')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            LIHAT PROFILE
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url({{asset('assets/images/background2.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        Welcome to Antinomi Law Office's Website Official
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{{route('tentangkami')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            LIHAT PROFILE
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url({{asset('assets/images/background3.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        Welcome to Antinomi Law Office's Website Official
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{{route('tentangkami')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            LIHAT PROFILE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counten -->
<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <!-- left bar -->
            <div class="col-md-9 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    <div class="item-blog p-b-30">
                        
                        <a href="{{url('blog/detail/A001')}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
                            <img src="{{asset('assets/images/logoantinomi.jpg')}}" alt="IMG-BLOG">
                        </a>

                        <div class="item-blog-txt p-t-33">
                            <p class="p-b-12">
                                Sebagai pendiri dari Antinomi Law Office pada Tahun 2018, rupanya Ucok Tamba menyadari
                                akan kekurangan sebagai single partner...
                            </p>                            
                        </div>
                    </div>
                    <hr>
                    <h2 class="m-text23 p-t-10 p-b-34 text-center">
                        MOTTO ANTINOMI LAW OFFICE
                    </h2>
                    <div class="wrap-tags flex-w justify-content-center ">
                        <a class="tag-item">
                            <p class="m-text11"> PROFESIONAL </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text10"> FAST TEAMWORK </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text12"> QUICK INFO CENTER </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text15"> LIGAT </p>
                        </a>                    
                    </div>
                    <div class="raw">
                        <div class="p-t-50">
                            <h2 class="m-text20 text-center">
                                THE FOUNDER
                            </h2>
                            <div class="mx-auto">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded mx-auto d-block" alt="theManager1">
                            </div>
                        </div>
                    
                        <!-- The founder Barr -->
                        <h2 class="m-text20 text-center p-t-20">
                                LAW OFFICE MANAGER
                                </h2>
                        <div class="row p-l-20 " >                        
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">                        
                            </div>
                            <div class="col-md-4 col-lg-5 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-right p-l-20" alt="theManager2">
                            </div>                    
                        </div>                                           
                    </div>                
                </div>         
            </div>

            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')





<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
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
