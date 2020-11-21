@extends('layouts.app-admin')


@section('style')
<!-- bootstrap-wysiwyg -->
<link rel="stylesheet" type="text/css"
    href="{{asset('vendor/gentella/google-code-prettify/bin/prettify.min.css?v=1')}}">
<!-- Select2 -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/select2/dist/css/select2.min.css?v=1')}}">
<!-- Switchery -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/switchery/dist/switchery.min.css?v=1')}}">
<!-- starrr -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/bootstrap/dist/css/bootstrap.min.css?v=1')}}">
<!-- iCheck -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/iCheck/skins/flat/green.css')}}">
<!-- bootstrap-daterangepicker -->
<link rel="stylesheet" type="text/css"
    href="{{asset('vendor/gentella/bootstrap-daterangepicker/daterangepicker.css?v=1')}}">
<!-- Custom Theme Style -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/gentella/build/css/custom.min.css?v=1')}}">

<!-- <link rel="stylesheet" type="text/css" href="{{asset('vendor/mdb/css/agile-form.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendor/mdb/css/compiled-4.8.5.min.css')}}"> -->

@stop

@section('content')
<div class="contenier">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
    <div class="clearfix"></div>
    <div class="row">
    <label><h2>Edit Lawyer</h2></label>
        <div class="x_content">
       
            <div class="col-md-6 col-xs-12">
                <div class="x-panel">
                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate enctype="multipart/form-data" method="POST"
                        action="{{url('/dashboard/data/'. $lawyers->id.'/update')}}" id="form">
                        @csrf
                        <div class=row>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="fullname">Full Name * :</label>
                                <input type="text" class="form-control has-feedback-left required" id="inputSuccess2"
                                    placeholder="Full Name" name="nama" value="{{$lawyers->nama}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="fullname">Email * :</label>
                                <input type="email" class="form-control has-feedback-left required" id="inputSuccess2"
                                    placeholder="Full Name" name="email" value="{{$lawyers->email}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="fullname">NoHP * :</label>
                                <input type="text" class="form-control has-feedback-left required" id="nohp"
                                    placeholder="NoHP" name="nohp" value="{{$lawyers->NoHp}}">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="fullname">Nip * :</label>
                                <input type="text" class="form-control has-feedback-left required" id="inputSuccess2"
                                    placeholder="Nip" name="Nip" value="{{$lawyers->NIP}}">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label>Gender *:</label>
                                <p>
                                    Pria:
                                    <input type="radio" class="flat" name="gender" id="genderM" value="Pria" checked=""
                                        required value="{{$lawyers->gender}}" />
                                    Wanita:
                                    <input type="radio" class="flat" name="gender" id="genderF" value="Wanita" value="{{$lawyers->gender}}" />
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label for="message">Sedikit Tentang Anda :</label>
                                <textarea id="message" required="required" class="form-control" name="tentang"
                                    data-parsley-trigger="keyup" data-parsley-minlength="20"
                                    data-parsley-maxlength="500"
                                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters "
                                    data-parsley-validation-threshold="10">{{$lawyers->SekilasTentang}}"</textarea>
                                <br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                Select image to upload:
                                <input type="file" name="FotoKariawan" id="fileToUpload">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                Select Your CV file:
                                <input type="file" name="CVfile" id="fileToUpload">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!-- end form for validations -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- iCheck -->
<script type="text/javascript" src="{{asset('vendor/gentella/iCheck/icheck.min.js')}}"></script>
<!-- Parsley -->
<script type="text/javascript" src="{{asset('vendor/gentella/parsleyjs/dist/parsley.min.js')}}"></script>


<<<<<<< HEAD
@stop
=======
@stop
>>>>>>> 268244db5e532b16b46617a7e32bcc435c6fb931
