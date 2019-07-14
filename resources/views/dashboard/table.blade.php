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
		@foreach($data_bidang_hukum as $bidanghukum)
		<tr>
			<th>{{$bidanghukum->id_bid_hukum}}</th>
			<th>{{$bidanghukum->nama_bid_hukum}}</th>
			<th>{{$bidanghukum->keterangan}}</th>
			<th>
				<a href="/dashboard/table/{{$bidanghukum->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
				<a href="/dashboard/table/{{$bidanghukum->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
			</th>
		</tr>
		@endforeach
	</table>
</div>
@endsection
