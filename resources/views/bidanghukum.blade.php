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
                <h4 class="m-text23 t-center" style="color:#ab1818;">
                Bidang Praktik Hukum
                </h4>
                <hr>
                <div class="list-group">
                    @foreach($data as $item)
                    <a href="{{url('bidang-hukum/'.$item->nama_bid_hukum)}}"
                        class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                        <div class="d-flex w-100 justify-content-between link-bidang-praktik">
                            <h5 class="mb-1 link-bidang-praktik">{{$item->nama_bid_hukum}}</h5>
                        </div>
                    </a>
                    @endforeach

                </div>
                <br>
                <h4 class="m-text23 t-center" style="color:#ab1818;">
                    Kantor Hukum Antinomi
                </h4>
                <hr>
                <p>Apabila Saudara memiliki pertanyaan terkait jasa hukum kami, silahkan hubungi kami :</p>
                <span class="border">
                    Email Kami : antinomilawoffice@yahoo.com <br>
                    No. Telp : 085294419970 <br>
                    No. WA : 085294419970 <br>
                </span>

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
