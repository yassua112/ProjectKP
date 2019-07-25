@extends('layouts.app-admin')


@section('style')
<style>
    .uploader2 {
        float: left;
        overflow: hidden;
        height: 250px;
        width: 30%;
        border: 2px solid #e8e8e8;
        border-radius: 25px;
        margin: 1%;
    }

    .filePhoto {
        position: relative;
        width: 100%;
        height: 250px;
        top: -250px;
        left: 0px;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
    }

    .uploader2 img {
        /* position:absolute; */
        width: 100%;
        height: 100%;
        z-index: 1;
        border: none;
        border-radius: 25px;
    }

    .uploadzone {
        min-height: 400px;
        border: 1px solid #e5e5e5;
        background: #fff
    }
</style>
@stop
@section('content')

<div class="">
    <div class="page-title">
    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            Please check the form below for errors
        </div>
        @endif
        <div class="title_right">
            <h2> Upload Gambar Sesuai kategori </h2>
           
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <span class="input-group-btn">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <form action="{{route('create.gambar')}}" method="POST" id="wizardForm"
                        enctype="multipart/form-data" >
                        @csrf
    <div id="wizard" class="form_wizard wizard_horizontal">
        <ul class="wizard_steps">
            <li>
                <a href="#step-1">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                        Step 1<br />
                        <small>Step 1 description</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                        Step 2<br />
                        <small>Step 2 description</small>
                    </span>
                </a>
            </li>
            <li>
                <a href="#step-3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                        Step 3<br />
                        <small>Step 3 description</small>
                    </span>
                </a>
            </li>         
        </ul>
        <div id="step-1">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="box-title m-t-40 number"> Select Pictures Category <h3>
                            <hr />
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" name="category" required>
                                    @foreach($data as $item)
                                        <option>{{$item->nama_bid_hukum}}</option>
                                    @endforeach                                    
                                    </select>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div id="step-2">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="box-title m-t-40 number"> Caption <h3>
                            <hr />
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea class="resizable_textarea form-control" name="caption"
                                        placeholder="Isi dengan caption yang akan di tampilkan di documentasi" required></textarea>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div id="step-3">
            <div class="row">
                <div class="col-md-12">
                    <div class='image' id="image" style=" margin-button :40px;">
                        <h3 class="box-title m-t-40 number">Upload Gambar</h3>
                        <hr>
                        <div class="row">
                            <div class="uploadzone">
                                <div class="col-md-12 ">
                                    <div class="nopadding col-sm-12 images-space">
                                        <br>
                                        <div class="col-sm-12 images-upload">
                                            <div class="uploader2">
                                                <img class="img none" src="{{asset('vendor/images/add.png')}}" />
                                                <input type="file" name="fotodokumentasi[]" class="filePhoto"
                                                    id="filePhoto" required/>
                                                <button type="button" class="btn  btn-info btn-delete last hidden"
                                                    style="position: relative;top: -290px; left: 31%;z-index:2">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    </form>
</div>


@stop
@section('script')
<script>
    var image = $('#image .images-space .images-upload .uploader2').clone();

    $(document).on('change', '.filePhoto', function (e) {
        var fileUpload = $(this);
        var img = $(this).siblings('.img');
        var btn_delete = $(this).siblings('.btn-delete');
        var reader = new FileReader();
        var imageContainer = $(this).parent().parent();
        reader.onload = function (event) {
            img.attr('src', event.target.result);
            if (img.hasClass('none')) {
                imageContainer.append(image.clone());
                img.removeClass('none');
            }
        }
        reader.readAsDataURL(e.target.files[0]);
        btn_delete.removeClass('hidden');
        btn_delete.removeClass('last');
    });

    $('#image .images-space').on('click', '.btn-delete', function (event) {
        let uploader2 = $(this).parents('.uploader2');
        let img = $(this).closest(".uploader2").find(".img");
        console.log("image element", img);
        console.log('sukses');
        uploader2.detach().remove();
    });
</script>
<script type="text/javascript" src="{{asset('vendor/gentella/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
@stop