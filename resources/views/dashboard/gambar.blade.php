@extends('layouts.app-admin')

@section('content')
<div class="countener">
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
    <div class="row">
        <h2> Data Dokumentasi </h2>
        <a href="{{route('admin.gambar')}}" class="btn btn-primary btn-sm">Tambah data Lawyer </a>
    </div>
    <div class="row">
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>cover</th>
                <th>Bidang Hukum</th>
                <th>Captions</th>
                <th>Aksi</th>
            </tr>
            <?php $no=0 ;?>

            @foreach($data as $item)
            <tr>

                <?php $no++ ;?>
                <th>{{$no}}</th>
                @if($item->foto != null && $item->foto != '' )
                <th>@foreach(json_decode($item->foto) as $foto)<img src="{{asset('images/dokumentasi/'. $foto)}}"
                        width="100" height="100">@endforeach</th>
                @endif
                <th>{{$item->judul_dokumentasi}}</th>
                <th>{{$item->keterangan}}</th>
                <th>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/dashboard/gambar/{{$item->id}}/delete" class="btn btn-danger btn-sm delete-btn first"
                        onclick="return confirm('Apakah Anda Ingin Menghasus Data INI ??')">Delete</a>
                </th>
            </tr>

            @endforeach

        </table>
    </div>

</div>

@endsection