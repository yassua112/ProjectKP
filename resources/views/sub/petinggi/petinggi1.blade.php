@extends('layouts.app-all')

@section('css')


@section('content')
<section class="bgwhite p-t-20">
    <div class="container">
        <div class="row">
            <!-- left barr -->
            <div class="col-md-9 col-lg-9 p-b-75">
                        
                <div class="mx-auto">
                    <img src="{{asset('assets/images/profile-founder.jpg')}}" class="rounded " width="300"
                        height="300">
                        <hr />
                        <h3> Ucok Rolando Parulian Tamba, S.H., M.H </h3>
                <hr />    
                </div>
                <h4> NoHp <i class ="fa fa-phone"> : 085294419970 </i> </h4>
                <hr />
                <h4> Email <i class ="fa fa-at"> : ucok@gmail.com </i> </h4>
                <hr />
                <h4> Jenis Kelamin <i class ="fa fa-male"> : Pria </i> </h4>
                <hr />
                <p align="justify">Ucok Rolando Parulian Tamba adalah salah satu alumni Universitas Jendral Soedirman yang lulus dengan predikat cumlaude.</p>
            </div>
            <!-- Right Barr-->
            @include('layouts.right-bar')
        </div>
    </div>
</section>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 268244db5e532b16b46617a7e32bcc435c6fb931
