@extends('layouts.app-admin')

@section('content')

<div class="div">
    <div class="page-title">
        <div class="title_left">
            <h3>User Profile</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" src="{{asset('/images/kariawan/'. $data->Foto)}}" alt="Avatar"
                                    title="Change the avatar">
                            </div>
                        </div>
                        <h3>{{$data->nama}}</h3>

                        <ul class="list-unstyled user_data">
                            <li><i class="fa fa-building user-profile-icon"></i> {{$data->NIP}}
                            </li>

                            <li>
                            <i class="fa fa-at user-profile-icon"></i> {{$data->email}}

                            <li class="m-top-xs">
                            <i class="fa fa-phone user-profile-icon"></i> {{$data->NoHp}}
                            </li>
                        </ul>

                        <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                        <br />
                    </div>
                    
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                        data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                </li>                               
                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2"
                                        data-toggle="tab" aria-expanded="false">Profile</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                    aria-labelledby="home-tab">

                                    <!-- start recent activity -->
                                    <ul class="messages">
                                        <li>
                                            <img src="{{asset('vendor/images/picture.jpg')}}" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Desmond Davison</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard
                                                    of them jean shorts Austin. Nesciunt tofu stumptown aliqua
                                                    butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance
                                                        Test.doc </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{asset('vendor/images/picture.jpg')}}" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-error">21</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Brian Michaels</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard
                                                    of them jean shorts Austin. Nesciunt tofu stumptown aliqua
                                                    butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                    <a href="#" data-original-title="">Download</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{asset('vendor/images/picture.jpg')}}" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-info">24</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Desmond Davison</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard
                                                    of them jean shorts Austin. Nesciunt tofu stumptown aliqua
                                                    butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                    <a href="#"><i class="fa fa-paperclip"></i> User Acceptance
                                                        Test.doc </a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{asset('vendor/images/picture.jpg')}}" class="avatar" alt="Avatar">
                                            <div class="message_date">
                                                <h3 class="date text-error">21</h3>
                                                <p class="month">May</p>
                                            </div>
                                            <div class="message_wrapper">
                                                <h4 class="heading">Brian Michaels</h4>
                                                <blockquote class="message">Raw denim you probably haven't heard
                                                    of them jean shorts Austin. Nesciunt tofu stumptown aliqua
                                                    butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                                <br />
                                                <p class="url">
                                                    <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                    <a href="#" data-original-title="">Download</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end recent activity -->
                                </div>
                                
                                <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                    aria-labelledby="profile-tab">
                                    <p>{{$data->SekilasTentang}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
