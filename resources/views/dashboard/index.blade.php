@extends('layouts.app-admin')

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Data Bidang Hukum</h3>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
            </tr>
            <?php $no=0 ;?>
            @foreach($data_bidang_hukum as $bidanghukum)
            <tr>
                <?php $no++ ;?>
                <th>{{$no}}</th>
                <th>{{$bidanghukum->nama_bid_hukum}}</th>
                <th>{{ substr(strip_tags($bidanghukum->keterangan), 0, 50)}}</th>
            </tr>
            @endforeach
        </table>
        <hr />
    </div>
</div>
<div class="div">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Data Dokumentasi</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">Gugatan Ahli Waris terhadap hak warisan</a></td>
                </tr>
            </tbody>
        </table>
        <hr />
    </div>
</div>
<div class="div">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Data Judul Artikel</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">Gugatan Ahli Waris terhadap hak warisan</a></td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Data Lawyers</h3>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama Lawyers dan Gelar</th>
            </tr>
            <?php $no=0 ;?>
            @foreach($lawyers as $item)
            <tr>
                <?php $no++ ;?>
                <th>{{$no}}</th>
                <th>{{$item->nama}}</th>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop

@section('script')

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/gentella/Chart.js/dist/Chart.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/gentella/iCheck/icheck.min.js')}}"></script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/gentella/DateJS/build/date.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/gentella/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<!--===============================================================================================-->
<!-- Flot -->
<script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.time.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/Flot/jquery.flot.stack.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/jquery.flot.resize.js')}}"></script>
<!-- DateJS -->
<script type="text/javascript" src="{{asset('vendor/gentella/DateJS/build/date.js')}}"></script>



<!-- bootstrap-daterangepicker -->
<script type="text/javascript" src="{{asset('vendor/gentella/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


@stop
