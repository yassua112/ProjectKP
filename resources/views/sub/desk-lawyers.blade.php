@extends('layouts.app-all')

@section('css')


@section('content')
<section class="bgwhite p-t-20">
    <div class="container">
        <div class="row">
            <!-- left barr -->
            <div class="col-md-9 col-lg-9 p-b-75">
                        
                <div class="mx-auto">
                    <img src="{{asset('images/kariawan/' .$data->Foto)}}" class="rounded " width="300"
                        height="300">
                        <hr />
                        <h3> {{$data->nama}} </h3>
                <hr />    
                </div>
                <h4> NoHp <i class ="fa fa-phone"> : {{$data->NoHp}} </i> </h4>
                <hr />
                <h4> Email <i class ="fa fa-at"> : {{$data->email}} </i> </h4>
                <hr />
                <h4> Jenis Kelamin <i class ="fa fa-male"> : {{$data->gender}} </i> </h4>
                <hr />
               
                <h4>{{$data->SekilasTentang}}</h4>
                <h4>Berikut in adalah cv dari {{$data->nama}}</h4><br>
                <button><a href="url{{asset('cv-folder/'. $data->fileCV)}}">Unduh</a></button>
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>
@endsection
