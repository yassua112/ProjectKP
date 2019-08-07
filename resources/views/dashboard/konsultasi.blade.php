@extends('layouts.app-admin')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<div class="row">
    <h1 class="text-center">Data Konsultasi Masyarakat</h1>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Waktu</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Deskripsi Konsultasi</th>
        </tr>
        <?php $no=0 ;?>
        @foreach($data_konsultasi as $konsultasi)
        <tr>
            <?php $no++ ;?>
            <th>{{$no}}</th>
            <th>{{$konsultasi->created_at}}</th>
            <th>{{$konsultasi->nama}}</th>
            <th>{{$konsultasi->email}}</th>
            <th>{{$konsultasi->subjek}}</th>
            <th>{{$konsultasi->deskripsi_konsultasi}}</th>
        </tr>
        @endforeach
    </table>
</div>

@endsection