@extends('layouts.app-admin')

@section('content')

@section('css')

@stop

<div class="">
    <div class="page-title">
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <span class="input-group-btn">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Post Article<small>Sessions</small></h2>
                    <hr>
                    <h3>Judul artikel</h3>

                    <form action="{{route('detail.artikel')}}" method="POST" id="wizardForm">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <textarea class="resizable_textarea form-control"
                                    placeholder="Isi dengan caption yang akan di tampilkan di documentasi"
                                    name="title"></textarea>
                            </div>
                            <div class="form-group">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br />
                        <br />  
                        
                        <div class="form-group">
                        <textarea class="ckeditor" id="ckedtor" name="ckedtor"></textarea>
                        <div class="form-group">
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                </div>
                </form>
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



@stop
