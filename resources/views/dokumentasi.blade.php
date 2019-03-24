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
                    <div class="jumbotron">
                    <h2>Dokumentasi Kegiatan Antinomi Law Office</h2>
                    <hr width="710px">
                    <h6>Bagian ini berisi dokumentasi kegiatan dan aktivitas para Lawyers Antinomi Law Office</h6>
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
                        <p>Nama Kegiatan / Aktivitas : Sidang Ahli Waris</p>
                        <p>Deskripsi : Sidang ini doasfaf eioafhaof hoeahdoaeihf efioahfiahf eafeaihoef oefahiea ifoeh iahfeaif aeoifhea hfaeif</p>
                    </div>
                    <div class="raw">
                        <div class="row p-l-20">
                            <div class="col-md-7 col-lg-6 p-b-75">

                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="p-r-50 p-r-0-lg">
                    <div class="item-blog p-b-30">
                        <p>Nama Kegiatan / Aktivitas : Sidang Ahli Waris</p>
                        <p>Deskripsi : Sidang ini doasfaf eioafhaof hoeahdoaeihf efioahfiahf eafeaihoef oefahiea ifoeh iahfeaif aeoifhea hfaeif</p>
                    </div>
                    <div class="raw">
                        <div class="row p-l-20">
                            <div class="col-md-7 col-lg-6 p-b-75">

                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="p-r-50 p-r-0-lg">
                    <div class="item-blog p-b-30">
                        <p>Nama Kegiatan / Aktivitas : Sidang Ahli Waris</p>
                        <p>Deskripsi : Sidang ini doasfaf eioafhaof hoeahdoaeihf efioahfiahf eafeaihoef oefahiea ifoeh iahfeaif aeoifhea hfaeif</p>
                    </div>
                    <div class="raw">
                        <div class="row p-l-20">
                            <div class="col-md-7 col-lg-6 p-b-75">

                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="p-r-50 p-r-0-lg">
                    <div class="item-blog p-b-30">
                        <p>Nama Kegiatan / Aktivitas : Sidang Ahli Waris</p>
                        <p>Deskripsi : Sidang ini doasfaf eioafhaof hoeahdoaeihf efioahfiahf eafeaihoef oefahiea ifoeh iahfeaif aeoifhea hfaeif</p>
                    </div>
                    <div class="raw">
                        <div class="row p-l-20">
                            <div class="col-md-7 col-lg-6 p-b-75">

                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
                            </div>
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">
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
