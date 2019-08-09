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
            
                {!! $data->keterangan !!}
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 268244db5e532b16b46617a7e32bcc435c6fb931
