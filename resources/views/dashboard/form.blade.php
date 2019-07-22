@extends('layouts.app-admin')

@section('content')



<div class='conteiner'>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            @if ($message = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Please check the form below for errors
        </div>
        @endif

    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Post Article<small>Sessions</small></h2>
                    <hr>
                    <h3>Judul artikel</h3>
                    <form action="{{route('detail.artikel')}}" method="POST" id="wizardForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row col-sm-12">
                            <div class="form-group">
                                <textarea
                                    class="resizable_textarea form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    placeholder="Isi dengan caption yang akan di tampilkan di documentasi" name="title"
                                    require value="{{ old('title') }}"></textarea>
                                @if ($errors->has('title'))
                                <span class=" p-3 mb-2 bg-danger text-danger">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                            <div class="row col-sm-12">
                                <div class="form-group">
                                    <h3>Isi Artikel</h3>
                                    <textarea
                                        class="ckeditor form-control{{ $errors->has('ckedtor') ? ' is-invalid' : '' }}"
                                        id="ckedtor" name="ckedtor" value="{{ old('ckedtor') }}"></textarea>
                                    @if ($errors->has('ckedtor'))
                                    <span class=" p-3 mb-2 bg-danger text-danger">
                                        <strong>{{ $errors->first('ckedtor') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row col-sm-12">
                                <input type="file" name="fotocover" require>
                                @if ($errors->has('fotocover'))
                                <span class=" p-3 mb-2 bg-danger text-danger">
                                    <strong>{{ $errors->first('fotocover') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row col-sm-12">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>


@stop

@section('script')


<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/gentella/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!--===============================================================================================-->
<!-- bootstrap-wysiwyg -->
<script type="text/javascript" src="{{asset('vendor/gentella/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('vendor/gentella/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/google-code-prettify/src/prettify.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/gentella/parsleyjs/dist/parsley.min.js')}}"></script>




@stop
