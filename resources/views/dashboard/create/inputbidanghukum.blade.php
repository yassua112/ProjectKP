@extends('layouts.app-admin')

@section('content')

<form action="{{route('bidanghukum')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Bidang Hukum</label>
        <input type="text" name="nama_bid_hukum" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp" placeholder="Nama Bidang Hukum">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Keterangan</label>
        <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection