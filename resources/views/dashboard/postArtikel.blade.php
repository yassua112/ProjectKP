@extends('layouts.app-admin')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<div class="row">
    <h1 class="text-center">Data Artikel</h1>
    <a href="{{route('artikel.create')}}" class="btn btn-primary btn-sm">Buat Artikel Baru</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>cover</th>
            <th>Judul Artikel</th>
            <th>Isi Artikel</th>
            <th>Aksi</th>
        </tr>
        <?php $no=0 ;?>
        @foreach($artikel as $item)
        <tr>
            <?php $no++ ;?>
            <th>{{$no}}</th>
            <th><img src="{{asset('images/cover/'. $item->foto)}}" width="100" height="100"></th>
            <th>{{$item->judul_artikel}}</th>
            <th>{{ substr(strip_tags($item->isi_artikel), 0, 20) }}</th>
            <th>
                <a href="/dashboard/artikel/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/dashboard/artikel/{{$item->id}}/delete" class="btn btn-danger btn-sm delete-btn first" onclick="return confirm('Apakah Anda Ingin Menghasus Data INI ??')">Delete</a>
            </th>
        </tr>
        @endforeach
    </table>
</div>

@endsection