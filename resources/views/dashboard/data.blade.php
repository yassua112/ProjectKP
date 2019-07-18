@extends('layouts.app-admin')

@section('content')

<div class="row">
	<h1 class="text-center">Data Kariawan Dan Admin</h1>
    <a href="{{route('kariawan.create')}}" class="btn btn-primary btn-sm">Tambah data Kariawan dan Admin</a>
</div>
<hr />
<br />
@foreach($lawyers as $item)
<div class="clearfix"></div>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
    <div class="well profile_view">
        <div class="col-sm-12">
            <h4 class="brief"><i>Kariawan</i></h4>
            <div class="left col-xs-7">
                <h2>{{$item->nama}}</h2>
                <p><strong>About: </strong> {{$item->SekilasTentang}} </p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-building"></i> NIP: {{$item->NIP}}</li>
                    <li><i class="fa fa-at"></i> Email: {{$item->email}}</li>
                    <li><i class="fa fa-phone"></i> Phone: {{$item->nohp}}</li>                    
                </ul>
            </div>
            <div class="right col-xs-5 text-center">
                <img src="{{asset('images/kariawan/'. $item->Foto)}}" alt="" class="img-circle img-responsive">
            </div>
        </div>
        <div class="col-xs-12 bottom text-center">            
            <div class="col-xs-12 col-sm-6 emphasis">
                <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                    </i> <i class="fa fa-comments-o"></i> </button>
                <button type="button" class="btn btn-primary btn-xs">
                    <i class="fa fa-user"> </i> View Profile
                </button>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach

@endsection

