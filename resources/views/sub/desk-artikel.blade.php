@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">

@section('content')

<section class="bgwhite p-t-20">
    <div class="container">
        <div class="row">
            <!-- left barr -->

            <div class="col-md-9 col-lg-9 p-b-75">
                <h4 align="center" style="color:#ab1818;">{!! $data->judul_artikel !!}</h4><br>
                <br>
                <div class="row p-t-10">
                    <div class="col-6 col-sm-4">
                        <h4><i class='fa fa-edit'>by : {!! $data->username !!} </i></h4>
                    </div>
                    <div class="col-6 col-sm-4">
                        <h4><i class='fa fa-clock-o'>
                                update:{!!substr(strip_tags($data->created_at), 0, 10) !!}</i></h4>
                    </div>
                </div>
                <br>

                {!! $data->isi_artikel !!}
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>
@endsection
