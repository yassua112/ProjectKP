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
                <!--<div class="row">
                  <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                    </div>
                  </div>
                </div> -->
                <h2>Bidang Praktik Hukum</h2><hr>
                <div class="list-group">
                  @foreach($data as $item)
                  <a href="{{url('bidang-hukum/'.$item->id_desk)}}" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between link-bidang-praktik">
                      <h5 class="mb-1 link-bidang-praktik">{{$item->bidang}}</h5>
                    </div>
                  </a>
                  @endforeach
                  <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PERUSAHAAN & NIAGA</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">ARBITRASI</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PASAR MODAL</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">LITIGASI</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PERDAGANGAN INTERNASIONAL</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PENANAMAN MODAL ASING & JOINT VENTURE</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PIDANA</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">AGRARIA</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PERDATA</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">HAK ATAS KEKAYAAN INTELEKTUAl</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">PERTAMBANGAN & ENERGI</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">KESEHATAN</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">ASURANSI</h5>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start link-bidang-praktik">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1 link-bidang-praktik">TELEKOMUNIKASI</h5>
                    </div>
                  </a> -->

                </div>
                <hr>
                <h2 align="center">Hubungi Kami</h2>
                <hr>
                <h4>Apabila Saudara memiliki pertanyaan terkait jasa hukum kami, silahkan hubungi kami :</h4>
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
