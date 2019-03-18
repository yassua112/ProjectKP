@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">

@stop

@section('countent')
<!-- Counten -->
<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <!-- left bar -->
            <div class="col-md-9 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    <div class="item-blog p-b-30">
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
                        </div>
                    </div>
                    <hr>
                    <h2 class="m-text23 p-t-10 p-b-34 text-center">
                        MOTTO ANTINOMI LAW OFFICE
                    </h2>
                    <div class="wrap-tags flex-w justify-content-center ">
                        <a class="tag-item">
                            <p class="m-text11"> PROFESIONAL </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text10"> FAST TEAMWORK </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text12"> QUICK INFO CENTER </p>
                        </a>

                        <a class="tag-item">
                            <p class="m-text15"> LIGAT </p>
                        </a>                    
                    </div>
                    <div class="raw">
                        <div class="p-t-50">
                            <h2 class="m-text20 text-center">
                                THE FOUNDER
                            </h2>
                            <div class="mx-auto">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded mx-auto d-block" alt="theManager1">
                            </div>
                        </div>
                    
                        <!-- The founder Barr -->
                        <h2 class="m-text20 text-center p-t-20">
                                LAW OFFICE MANAGER
                                </h2>
                        <div class="row p-l-20 " >                        
                            <div class="col-md-7 col-lg-6 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-left" alt="theManager1">                        
                            </div>
                            <div class="col-md-4 col-lg-5 p-b-75">
                                <img src="{{asset('assets/images/item-cart-01.jpg')}}" class="rounded float-right p-l-20" alt="theManager2">
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

@endsection

