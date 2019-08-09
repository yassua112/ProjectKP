@extends('layouts.app-admin')

@section('content')

		<h1>Edit Bidang Hukum</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-12">
				<form action="{{url('/dashboard/table/'. $data->id.'/update')}}" method="POST">
				@csrf				
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Bidang Hukum</label>
					    <input type="text" name="nama_bid_hukum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Bidang Hukum" value="{{$bidanghukum->nama_bid_hukum}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Keterangan</label>
					    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$bidanghukum->keterangan}}</textarea>
					  </div>
					  <a href="{{route('table')}}" class="btn btn-primary btn-sm">Close</a>
						<button type="submit" class="btn btn-warning">Update</button>
				</form>
			</div>
		</div>
@endsection