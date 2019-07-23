@extends('layouts.app-admin')

@section('content')

<div class="row">
    <h1 class="text-center">Data Lawyer Dan Admin</h1>
    <a href="{{route('kariawan.create')}}" class="btn btn-primary btn-sm">Tambah data Lawyer dan Admin</a>
</div>
<hr />
<br />
<div class="clearfix"></div>
<div class="row">
    @foreach($lawyers as $item)

    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
        <div class="well profile_view">
            <div class="col-sm-12">
                <h4 class="brief"><i>Lawyer</i></h4>
                <div class="left col-xs-7">
                    <h2>{{$item->nama}}</h2>
                    <p><strong>About: </strong> {{ substr(strip_tags($item->SekilasTentang), 0, 20) }} ..</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i> NIP: {{$item->NIP}}</li>
                        <li><i class="fa fa-at"></i> Email: {{$item->email}}</li>
                        <li><i class="fa fa-phone"></i> Phone: {{$item->NoHp}}</li>
                    </ul>
                </div>
                <div class="right col-xs-5 text-center">
                    <img src="{{asset('images/kariawan/'. $item->Foto)}}" alt="" class="img-circle img-responsive">
                </div>
            </div>
            <div class="col-xs-12 bottom ">
                <div class="col-xs-12 col-sm-6 emphasis">
                    <a href="/dashboard/data/{{$item->id}}/delete" class="btn btn-danger btn-xs btn-delete" id='form-delete'> Delete <i class="fa fa-user"></i> <i
                            class="fa fa-remove"></i></a>
                    <a href="/dashboard/data/{{$item->id}}/view" class="btn btn-warning btn-xs" > View Profile <i class="fa fa-user"></i> <i class="fa fa-wrench"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
