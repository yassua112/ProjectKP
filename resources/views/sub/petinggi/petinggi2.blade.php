@extends('layouts.app-all')

@section('css')


@section('content')
<section class="bgwhite p-t-20">
    <div class="container">
        <div class="row">
            <!-- left barr -->
            <div class="col-md-9 col-lg-9 p-b-75">
                        
                <div class="mx-auto">
                    <img src="{{asset('assets/images/profile-manager.jpg')}}" class="rounded " width="300"
                        height="300">
                        <hr />
                        <h3>Dr. Musa Darwin Pane, S.H., M.H </h3>
                <hr />    
                </div>
                <h4> NoHp <i class ="fa fa-phone"> : 081321386530 </i> </h4>
                <hr />
                <h4> Email <i class ="fa fa-at"> : musa@gmail.com </i> </h4>
                <hr />
                <h4> Jenis Kelamin <i class ="fa fa-male"> : Pria </i> </h4>
                <hr />
                <p align="justify">Musa Darwin Pane (atau lebih sering kenal MDP) adalah ketua DPC Peradi Kota Bandung. </p>
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>
@endsection