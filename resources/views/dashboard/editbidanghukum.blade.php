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
				<form action="/dashboard.table/{{$bidang_hukum->id_bid_hukum}}/update" method="post">
				{{ csrf_field() }}
					  <div class="form-group">
					    <label for="exampleInputEmail1">ID Bidang Hukum</label>
					    <input type="text" name="id_bid_hukum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Bidang Hukum" value="{{$bidang_hukum->id_bid_hukum}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Bidang Hukum</label>
					    <input type="text" name="nama_bid_hukum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Bidang Hukum" value="{{$bidang_hukum->nama_bid_hukum}}">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Keterangan</label>
					    <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$bidang_hukum->keterangan}}</textarea>
					  </div>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-warning">Update</button>
				</form>
			</div>
		</div>
@endsection
