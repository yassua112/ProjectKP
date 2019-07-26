@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">

<style>
* {
  box-sizing: border-box;
}

.zoom {
 
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>

@stop



@section('content')
<!-- Jumbotron Dokumentasi -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="jumbotron">
                <h2 style="color:#ab1818;">Dokumentasi Kegiatan Antinomi Law Office</h2>
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
                @foreach ($data as $item)
                <div class="p-r-0-lg">
                    <div class="item-blog p-b-30">
                        <p>Nama Kegiatan / Aktivitas : {{$item->judul_dokumentasi}}</p>
                        <p>Deskripsi : {{$item->keterangan}}</p>
                    </div>
                    <div class="row p-l-20">
                    
                        @foreach(json_decode($item->foto) as $foto)
                        <div class="row p-l-20">
                            <div class="col-lg-6">
                           
                                <img src="{{asset('images/dokumentasi/' .$foto)}}" class="rounded float-left zoom"
                                    width="200" height="200">
                                    
                                <div style="width: 0px; height: 200px; border: 1px #000 solid;"></div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <hr>
                @endforeach
                <div class="row">
                    <div class="mx-auto p-l-20">{!! $data->links(); !!}</div>
                </div>
            </div>

            <!-- Right Barr-->
            <div class="col-md-3 col-lg-3 p-b-75">
                <div class="rightbar">
                    <h4 class="m-text10 p-t-5 p-b-5">
                        Dokumentasi Terbaru
                    </h4>
                </div>
                <hr>
                <ul>
                    @foreach ($artikel as $data)
                    <li class="p-t-6 p-b-8 ">
                        <a href="{{url('artikelhukum/'.$data->judul_artikel)}}" class="s-text13 p-t-5 p-b-5">
                            {{$data->judul_artikel}}
                        </a>
                    </li>
                    @endforeach

            </div>
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