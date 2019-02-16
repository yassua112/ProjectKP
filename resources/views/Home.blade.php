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

<!-- Instagram -->
<section class="instagram p-t-20">
  <div class="sec-title p-b-52 p-l-15 p-r-15">
    <h3 class="m-text5 t-center">
      @ follow us on Instagram
    </h3>
  </div>

  <div class="flex-w">
    <!-- Block4 -->
    <div class="block4 wrap-pic-w">
      <img src="{{asset('assets/images/gallery-03.jpg')}}" alt="IMG-INSTAGRAM">

      <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
        <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
          <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
          <span class="p-t-2">39</span>
        </span>

        <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
          <p class="s-text10 m-b-15 h-size1 of-hidden">
            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
          </p>

          <span class="s-text9">
            Photo by @nancyward
          </span>
        </div>
      </a>
    </div>

    <!-- Block4 -->
    <div class="block4 wrap-pic-w">
      <img src="{{asset('assets/images/gallery-07.jpg')}}" alt="IMG-INSTAGRAM">

      <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
        <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
          <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
          <span class="p-t-2">39</span>
        </span>

        <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
          <p class="s-text10 m-b-15 h-size1 of-hidden">
            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
          </p>

          <span class="s-text9">
            Photo by @nancyward
          </span>
        </div>
      </a>
    </div>

    <!-- Block4 -->
    <div class="block4 wrap-pic-w">
      <img src="{{asset('assets/images/gallery-09.jpg')}}" alt="IMG-INSTAGRAM">

      <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
        <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
          <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
          <span class="p-t-2">39</span>
        </span>

        <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
          <p class="s-text10 m-b-15 h-size1 of-hidden">
            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
          </p>

          <span class="s-text9">
            Photo by @nancyward
          </span>
        </div>
      </a>
    </div>

    <!-- Block4 -->
    <div class="block4 wrap-pic-w">
      <img src="{{asset('assets/images/gallery-13.jpg')}}" alt="IMG-INSTAGRAM">

      <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
        <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
          <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
          <span class="p-t-2">39</span>
        </span>

        <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
          <p class="s-text10 m-b-15 h-size1 of-hidden">
            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
          </p>

          <span class="s-text9">
            Photo by @nancyward
          </span>
        </div>
      </a>
    </div>

    <!-- Block4 -->
    <div class="block4 wrap-pic-w">
      <img src="{{asset('assets/images/gallery-15.jpg')}}" alt="IMG-INSTAGRAM">

      <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
        <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
          <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
          <span class="p-t-2">39</span>
        </span>

        <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
          <p class="s-text10 m-b-15 h-size1 of-hidden">
            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
          </p>

          <span class="s-text9">
            Photo by @nancyward
          </span>
        </div>
      </a>
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

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="{{asset('assets/images/icons/paypal.png')}}" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('assets/images/icons/visa.png')}}" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('assets/images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('assets/images/icons/express.png')}}" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="{{asset('assets/images/icons/discover.png')}}" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
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
