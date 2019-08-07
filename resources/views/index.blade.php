@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">

@stop
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>

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
                            <img src="{{asset('assets/images/logoantinomi2.jpg')}}" alt="IMG-BLOG">
                        </a>

                        <div class="item-blog-txt p-t-33">
                            <p class="p-b-12" align="justify">
                                Sebagai pendiri dari Antinomi Law Office pada Tahun 2008, rupanya Ucok Tamba menyadari
                                akan kekurangan sebagai single partner dalam melayani masyarakat terkait bidang hukum. Bersama dengan kedua rekan advokatnya, yakni Dr. Sahat Maruli Tua Situmeang, S.H., M.H, dan Dr. Musa Darwin Pane, S.H., M.H, bersepakat untuk membangun suatu lembaga pelayanan jasa bidang hukum yang berfokus pada keadilan dan solusi pada setiap permasalahan hukum pada masyarakat yang terjadi di Indonesia. <br><br>
                                Berbekal pengalaman dalam menangani berbagai kasus bidang hukum, Antinomi Law Office senantiasa mendedikasikan diri untuk membantu klien mencapai tujuannya, yaitu hak hukum yang adil dengan berbagai saran, strategi, dan dukungan yang solutif dan respon yang cepat sepanjang waktu.

                            </p>                            
                        </div>
                    </div>
                    <hr>
                    <h4 class="m-text23 t-center" style="color:#ab1818;">
                    MOTTO ANTINOMI LAW OFFICE</h4>
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
                            <p class="m-text15"> KEKELUARGAAN </p>
                        </a>
                    </div>
                    <hr>
                    <div class="raw">
                        <div class="p-t-50">
                        <h4 class="m-text23 t-center" style="color:#ab1818;">
                            THE FOUNDER
                        </h4>
                            <div class="mx-auto p-t-10">
                                <img src="{{asset('assets/images/profile-founder.jpg')}}" class="rounded mx-auto d-block" alt="theManager1">
                            </div>
                            <a href="#">
                            <h5 class="text-uppercase text-center">Ucok Rolando Parulian Tamba, S.H., M.H</h5>
                            </a>
                        </div>

                        <<h4 class="m-text23 t-center" style="color:#ab1818;">
                            LAW OFFICE MANAGER
                        </h4>
                        <div class="row p-l-18 p-r-17 p-t-10">
                            <div class="col-md-7 col-lg-6">
                                <div class="single-feedback">
                                    <img align="center" src="{{asset('assets/images/profile-manager.jpg')}}" class="rounded float-left" alt="theManager1">
                                    <div class="col text-center">
                                    <h5 class="text-uppercase text-center">Dr. Musa Darwin Pane, S.H., M.H</h5></div>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-6">
                                <div class="single-feedback p-r-10">
                                    <img align="center" src="{{asset('assets/images/profile-manager2.jpg')}}" class="rounded float-right" alt="theManager2">
                                    <div class="col text-center">
                                    <h5 class="text-uppercase text-center">Dr. Sahat Maruli Tua Situmeang, S.H., M.H</h5></div>
                                </div>
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