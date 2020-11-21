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
    <div class="row">
        <div class="col-md-9">
            <div class="media">
                <img src="{{asset('assets/images/profile-manager.jpg')}}" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">Cara Mengajukan Gugatan Cerai Istri Kepada Suami di Pengadilan Agama</h5><br>
                <p>Bahwa Pengadilan Agama berwenang memeriksa dan mengadiki perkara cerai bagi perkawinan yang dilakukan menurut agama islam yang diakui sah oleh hukum negara Indonesia. salah satu ciri utama bahwa perkawinan dilakukan secara agama islam dan sah secara hukum negara Indonesia adalah Buku Nikah yang dikeluarkan oleh kantor Urusan Agama (KUA). Sehingga semua perkawinan warga negara Indonesia yang mempunyai Buku Nikah, maka saat akan melakukan perceraian harus diajukan di Pengadilan Agama setempat.</p><br>
                <p>Bahwa gugatan cerai di Pengadilan Agama tersebut dapat diajukan baik oleh Suami kepada Istrinya maupun oleh Istri kepada Suaminya. Gugatan yang diajukan Suami kepada Istrinya disebut dengan Permohonan Cerai Talak, dimana nantinya suami menjadi Pemohon dan Istri menjadi Termohon. Sedangkan terhadap gugatan cerai yang diajukan oleh Istri kepada Suaminya disebut Gugatan Perceraian, dimana istri sebagai Penggugat dan suami sebagai Tergugat.</p><br>
                </div>
            </div><br>
        </div>  
        <div class="col-md-3 col-lg-3 p-b-75">
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
</div>
<!--
<div class="col-sm-9">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Blog Title</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.
                        </p>
                        <div class="text-center">
                            <a href="#"><span class="glyphicon glyphicon-plus"></span> Readmore</a>
                            <a href="#"><span class="glyphicon glyphicon-comment"></span> 12 Comments</a>
                            <a href="#"><span class="glyphicon glyphicon-share"></span> 11 Shares</a>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Blog Title</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.
                        </p>
                        <div class="text-center">
                            <a href="#"><span class="glyphicon glyphicon-plus"></span> Readmore</a>
                            <a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a>
                            <a href="#"><span class="glyphicon glyphicon-share"></span> 211 Shares</a>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Blog Title</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                            Aliquam in felis sit amet augue.
                        </p>
                        <div class="text-center">
                            <a href="#"><span class="glyphicon glyphicon-plus"></span> Readmore</a>
                            <a href="#"><span class="glyphicon glyphicon-comment"></span> 7 Comments</a>
                            <a href="#"><span class="glyphicon glyphicon-share"></span> 67 Shares</a>
                        </div>
                    </div>
                </div>
                <hr />
            </div>-->

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