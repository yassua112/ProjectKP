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
              <div class="panel panel-default">
               <div class="panel-body">
                  <h3>Latih Balita Anda Dalam Merangsang Saraf Motorik</h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
                            <li class="pull-right">Category : Education</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object " src = "images/education.jpg" width="100%" height="200px" >
                       </a>
                       <div class = "media-body">
                          <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).
                          A simple shell for an h1 to appropriately space out and segment sections of content on a page.
                          </p> 
                          <p>It can utilize the h1's default small element, as well as most other components (with additional styles).
                            A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles). A simple shell for an h1 to appropriately space out and segment sections of content on a page.
                         </p>
                       </div>
                        <p style="text-align:right;">
                            <a href="artikel_edukasi.html">
                                <button class="btn btn-primary">Read More</button>
                            </a>
                        </p>
                    </div>
                    <hr>
                    <h3>Tip dan Trik dalam memilih laptop untuk penyuka game</h3>
                    <div class="info-meta">
                        <ul class="list-inline">
                            <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </li>
                            <li><i class="fa fa-eye"></i>21k</li>
                            <li><i class="fa fa-heart-o"></i>372</li>
                            <li><i class="fa fa-user"></i> Posting by Ilmu Detil</li>
                            <li class="pull-right">Category : Technology</li>
                        </ul>
                    </div>
                  <hr>
                  
                    <div class = "media">
                       <a class = "pull-left" href = "#">
                          <img class = "media-object" src = "images/technology.jpg" width="300px" height="200px">
                       </a>
                       
                       <div class = "media-body">
                          <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).
                          A simple shell for an h1 to appropriately space out and segment sections of content on a page.
                          </p> 
                          <p>It can utilize the h1's default small element, as well as most other components (with additional styles).
                            A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles). A simple shell for an h1 to appropriately space out and segment sections of content on a page.
                         </p>  
                       </div>
                        <p style="text-align:right;">
                            <button class="btn btn-primary">Read More</button>
                        </p>
                    </div>
               </div>
            </div>
         </div>  
        <div class="col-md-3">
            <div class="panel panel-default">
               <div class="panel-heading"><h4 class="text-center">Latest News</h4></div>
               <div class="panel-body">
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/sport.jpg" alt="" /></a>                
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 5, 2016 </a></li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4>
                            <a href="">Pertandingan Basket NBA berlangsung sangat sengit</a>
                        </h4>
                    </div>
                    
                    <div class="recent">
                        <a href="#"><img class="img-responsive" src="images/technology.jpg" alt="" /></a>                           
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o"></i> Jan 5, 2016</li>
                                <li><i class="fa fa-eye"></i>21k</li>
                                <li><i class="fa fa-heart-o"></i>372</li>
                            </ul>
                        </div>
                        <h4 class="entry-title">
                            <a href="">Tip dan Trik dalam memilih laptop untuk penyuka game</a>
                        </h4>
                    </div><!--recent-->
                </div>
            </div>      
        </div>          
    </div>          
</div>

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
