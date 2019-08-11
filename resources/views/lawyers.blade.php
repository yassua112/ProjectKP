@extends('layouts.app-all')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->


@stop

@section('content')

<!-- Counten -->
<section class="bgwhite p-t-20">
    <div class="container">
        <div class="row">
            <!-- left bar -->
            <div class="col-md-9 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto">
                                <div class="row">
                                    <h4 class="m-text20 mx-auto" style="color:#ab1818;">
                                        THE FOUNDER
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="mx-auto">
                                        <img src="{{asset('assets/images/profile-founder.jpg')}}"
                                            class="rounded mx-auto d-block" alt="theManager1">

                                        <div class="mx-auto">
                                            <a href="lawyers/ucokrolando">
                                                <h5 class="text-uppercase text-center">Ucok Rolando Parulian Tamba,S.H.,
                                                    M.H
                                                </h5>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class=" row mx-auto">
                                    <h4 class="m-text20 text-center p-t-50" style="color:#ab1818;">
                                        LAW OFFICE MANAGER
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="row p-l-18 p-r-17 p-t-10">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="single-feedback">
                                                <div class="row">
                                                    <div class="mx-auto">
                                                        <img align="center"
                                                            src="{{asset('assets/images/profile-manager.jpg')}}"
                                                            class="rounded float-left" alt="theManager1">
                                                    </div>
                                                </div>
                                                <div class="row col text-center">
                                                    <div class="mx-auto">
                                                        <a href="lawyers/musadarwinpane">
                                                            <h5 class="text-uppercase text-center">Dr. Musa Darwin Pane,
                                                                S.H., M.H
                                                            </h5>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-6">
                                            <div class="single-feedback p-r-10">
                                                <div class="row">
                                                    <div class="mx-auto">
                                                        <img align="center"
                                                            src="{{asset('assets/images/profile-manager2.jpg')}}"
                                                            class="rounded float-right" alt="theManager2">
                                                    </div>
                                                </div>
                                                <div class="col text-center">
                                                <a href="lawyers/sahatmarulitua">
                                                    <h5 class="text-uppercase text-center">Dr. Sahat Maruli Tua Situmeang, S.H., M.H</h5>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($data as $item)
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <div class="mx-auto">
                                                    <img src="{{asset('images/kariawan/' .$item->Foto)}}"
                                                        class="rounded " alt="theManager2" width="100" height="100">
                                                </div>
                                                <a href="{{url('lawyers/'.$item->NIP)}}">
                                                    <h5 class="text-uppercase text-center">{{$item->nama}}
                                                    </h5>
                                                </a>
                                                <p>{{$item->NIP}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <div class="row">
                                            <div class="col align-self-center">
                                                <div class="mx-auto">
                                                    <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                                        class="rounded " alt="theManager2" width="100" height="100">
                                                </div>
                                                <a href="#">
                                                    <h5 class="text-uppercase">Dahman Sinaga, S.H</h5>
                                                </a>
                                                <p>CEO at Google</p>
                                                <hr>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target=".bd-example-modal-sm1">See Profile</button>
                                                <div class="modal fade bd-example-modal-sm1" tabindex="-1" role="dialog"
                                                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            ...2
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <a href="#">
                                            <h5 class="text-uppercase">Anton Saeful Hidayat, S.H</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm2">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm2" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...3
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <a href="#">
                                            <h5 class="text-uppercase text-center">Marco Van Bastem Malau, S.H</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm3">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm3" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...4
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <a href="#">
                                            <h5 class="text-uppercase">Andreas D.L.A Situmeang, S.H</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm4">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm4" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...5
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <a href="#">
                                            <h5 class="text-uppercase">Art Tra Gusti, S.H., CLA</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm5">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm5" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...6
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <a href="#">
                                            <h5 class="text-uppercase">Neysa Myanda, S.H., M.H</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm6">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm6" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...7
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <p>
                                            
                                        </p>
                                        <a href="#">
                                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm7">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm7" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...8
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-feedback">
                                        <img src="{{asset('assets/images/profile-chrisman-damanik.jpg')}}"
                                            class="rounded " alt="theManager2" width="100" height="100">
                                        <p>
                                            
                                        </p>
                                        <a href="#">
                                            <h5 class="text-uppercase">Mark Alviro Wiens</h5>
                                        </a>
                                        <p>CEO at Google</p>
                                        <hr>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bd-example-modal-sm8">See Profile</button>
                                        <div class="modal fade bd-example-modal-sm8" tabindex="-1" role="dialog"
                                            aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    ...9
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')

        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')






<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
@endsection

@section('script')
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
@stop