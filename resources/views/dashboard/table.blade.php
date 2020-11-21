@extends('layouts.app-admin')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<div class="row">
    <h1 class="text-center">Data Bidang Hukum dan Keterangannya</h1>
    <a href="{{route('table.create')}}" class="btn btn-primary btn-sm">Tambah data Bidang Hukum</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama Bidang</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $no=0 ;?>
        @foreach($data_bidang_hukum as $bidanghukum)
        <tr>
            <?php $no++ ;?>
            <th>{{$no}}</th>
            <th>{{$bidanghukum->nama_bid_hukum}}</th>
            <th>{{ substr(strip_tags($bidanghukum->keterangan), 0, 50)}}</th>
            <th>
                <a href="/dashboard/table/{{$bidanghukum->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/dashboard/table/{{$bidanghukum->id}}/delete"
                    class="btn btn-danger btn-sm delete-btn first" onclick="return confirm('Apakah Anda Ingin Menghasus Data INI ??')">Delete</a>
            </th>
        </tr>
        @endforeach
    </table>
</div>

@endsection