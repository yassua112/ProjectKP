@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
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

<!-- Content page -->
<section class="bg p-t-55 p-b-65">
<div class="row">
  <div class="col-md-8 col-lg-9 p-b-75">
    <div class = "container">
      <div class="leftbar p-r-20 p-r-0-sm"> 
        <div class=" p-r-50 p-r-0-lg">
        <!-- Item Blog -->
          <div class="item-blog p-b-80">
				  		<a href="{{url('blog/detail/A001')}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
					  		<img src="{{asset('assets/images/blog-04.jpg')}}" alt="IMG-BLOG">

                <span class="dis-block flex-c-m pos1 size20 bg4 s-text1">
								Selamat datang di Website Antinomi Law Office
							</span>	  						
				  		</a>

	  					<div class="item-blog-txt p-t-33">						  
						  	<p class="p-b-12">
						  		Sebagai pendiri dari Antinomi Law Office pada Tahun 2018, rupanya Ucok Tamba menyadari
                  akan kekurangan sebagai single partner...
						  	</p>

						  	<a href="blog-detail.html" class="s-text20">
								Continue Reading
							  	<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
							  </a>
					  	</div>
					  </div>
        </div>  
      </div>
    </div>  
  </div>      
  <div class="col-md-4 col-lg-3 p-b-75">      
    <!--  -->
    <div class="rightbar">
      <h4 class="m-text23 p-t-56 p-b-34 ">
          Mengapa Antinomi Law Office
      </h4>

        <ul class="p-b-54">
           <li class="p-t-4">
              <div class="btn-group open">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" 
                      aria-haspopup="true" aria-expanded="false">
                             We're Reliabic Partner
                                <span class="sr-only">
                                </span>
                </button>
                <div class="dropdown-menu bg-primary">                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu1
                    </a>                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu2
                    </a>                 
                    <a class="dropdown-item" href="#" >
                       dropdownmenu3
                    </a>                  
                </div>               
              </div>
           </li>

           <li class="p-t-4">
           <div class="btn-group open">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" 
                      aria-haspopup="true" aria-expanded="false">
                             We're Reliabic Partner
                                <span class="sr-only">
                                </span>
                </button>
                <div class="dropdown-menu bg-primary">                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu1
                    </a>                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu2
                    </a>                 
                    <a class="dropdown-item" href="#" >
                       dropdownmenu3
                    </a>                  
                </div>               
              </div>
           </li>

           <li class="p-t-4">
              <div class="btn-group open">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" 
                      aria-haspopup="true" aria-expanded="false">
                             We're Reliabic Partner
                                <span class="sr-only">
                                </span>
                </button>
                <div class="dropdown-menu bg-primary">                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu1
                    </a>                  
                    <a class="dropdown-item" href="#" >
                       dropdownmenu2
                    </a>                 
                    <a class="dropdown-item" href="#" >
                       dropdownmenu3
                    </a>                  
                </div>               
              </div>
           </li>           
        </ul>         
     </div>
  </div>
</div> 
</section>
 

	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>
		</div>
			<div class="t-center s-text7 p-t-10">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>	
	</footer>





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
