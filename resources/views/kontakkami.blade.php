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
            <div class="item-slick1 item1-slick1" style="background-image: url({{asset('assets/images/master-slide-02.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Women Collection 2018
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="{{asset('assets/product.html')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            LIHAT PROFILE
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url({{asset('assets/images/master-slide-03.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Women Collection 2018
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{{asset('assets/product.html')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            LIHAT PROFILE
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url({{asset('assets/images/master-slide-04.jpg')}});">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                        Women Collection 2018
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                        New arrivals
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="{{asset('assets/product.html')}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
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
                Kantor Hukum Antinomi</h4><hr>
                <p>Jika Anda ingin diwakili oleh firma hukum terbaik untuk kasus Anda maka jangan ragu untuk kirimkan email kepada kami atau mengisi form di bawah ini :</p><br>
                <form>
                  <div class="form-group">
                    <label for="exampleInputNama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputNama" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleEmail">Subjek</label>
                    <input type="text" class="form-control" id="exampleSubjek" placeholder="Masukkan Subjek Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlPesan">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlPesan" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

            <!-- Right Barr-->
            <div class="col-md-3 col-lg-3">
                <h4 class="m-text23 t-center" style="color:#ab1818;">
                    Lokasi Kantor
                </h4>
                <hr>
                <div class="row">
                    <div class="col-2 p-l-2">
                      <i class="fa fa-home" style="font-size:48px;color:#ab1818"></i>
                    </div>
                    <div class="col-10 p-l-25">
                      <h5 style="color:#ab1818">Alamat</h5>
                      <h6 style="color:#ab1818">Jl. Wira Angun-Angun No. 21, Kota Bandung</h6>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-2 p-l-2">
                      <i class="fa fa-envelope" style="font-size:40px;color:#ab1818"></i>
                    </div>
                    <div class="col-10 p-l-25">
                      <h5 style="color:#ab1818">No. Telp / WA</h5>
                      <h6 style="color:#ab1818">085294419970</h6>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-2 p-l-2">
                      <i class="fa fa-phone" style="font-size:48px;color:#ab1818"></i>
                    </div>
                    <div class="col-10 p-l-25">
                      <h5 style="color:#ab1818">Email</h5>
                      <h6 style="color:#ab1818">antinomilawoffice@yahoo.com</h6>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="m-text23 t-center" style="color:#ab1818;">
            Kami Berlokasi di Kota Bandung</h4><hr>
        <h6 class="t-center" style="color:#ab1818">
        Jl. Wira Angun-Angun No. 21, Kota Bandung</h6><hr>

        <div id="googleMap" style="width:100%;height:400px;"></div><br>

        <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(51.508742,-0.120850),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<!--Google Maps-->
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
