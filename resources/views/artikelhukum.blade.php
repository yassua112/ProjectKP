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
<!-- Jumbotron Artikel -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="jumbotron">
                <h2>Artikel Hukum Antinomi Law Office</h2>
                <hr width="710px">
                <h6>Kumpulan berita hukum, artikel-artikel hukum terbaru serta pandangan-pandangan Ahli Hukum</h6>
            </div>
        </div>
    </div>
</section>

<!-- Counten -->
<div class="container" style="margin-top:40px">
    @foreach($data as $item)
    <div class="row">
        <div class="col-md-9">
            <div class="media">
                <img src="{{asset('images/cover/' .$item->foto)}}" class="mr-3" alt="...">
                <div class="media-body">
                    <a href="{{url('artikelhukum/'.$item->judul_artikel)}}">
                        <h5 class="mt-0">{{$item->judul_artikel}}</h5>
                    </a><br>
                    {{ substr(strip_tags($item->isi_artikel), 0, 200)}}
                    
                    <button><a href="{{url('artikelhukum/'.$item->judul_artikel)}}">
                    <div class="text-primary">
                    Selengkapnya....
                    </div>
                    
                    </a></button>
                    
                    <p class="p-t-20 p-l-250"><i class='fa fa-edit'>by : {{$item->username}}  </i> <i class='fa fa-clock-o'>  update:{{ substr(strip_tags($item->created_at), 0, 10) }}</i></p>
                    
                </div>
            </div><br>
        </div>
    </div>
    <hr />
    @endforeach
    <div class="row">
        <div class="mx-auto">
            
        {!! $data->links(); !!}        
    </div>
</div>
</div>




<!-- <div class="col-md-3 col-lg-3 p-b-75">
                <div class="rightbar">
                    <h4 class="m-text10 p-t-5 p-b-5">
                        Artikel Terbaru
                    </h4>
                </div>
                <hr>
                <ul>
                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Cara Mengajukan Gugatan Cerai Isteri Kepada Suami di Pengadilan Agama
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Tindak Pidana Lingkungan Hidup yang Mengancam Perusahaan
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Pencemaran Nama Baik Lewat Media Sosial Internet
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Mempekerjakan Anak Di Bawah Umur Bisa Dipidana
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Mewakil di pengadilan
                        </a>
                    </li>
                </ul>
                
                <br>
                <br>
                <div class="rightbar">
                    <h4 class="m-text10 p-t-5 p-b-5">
                        Artikel Terpopuler
                    </h4>
                </div>

                <ul>
                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Mempekerjakan Anak Di Bawah Umur Bisa Dipidana
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Tinjauan Hukum Tentang Judi
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Tanggung Jawab Pemilik PT Atas Keuangan Perusahaan
                        </a>
                    </li>

                    <li class="p-t-6 p-b-8 ">
                        <a href="#" class="s-text13 p-t-5 p-b-5">
                            Akibat Hukum jika Anggota CV Meninggal Dunia
                        </a>
                    </li>
                </ul>
            </div>          
    </div>          
</div> -->

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
