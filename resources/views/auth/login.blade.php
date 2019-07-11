@extends('layouts.app-all')



@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<!-- Styles -->
<link href="{{ asset('vendor/login/css/style.css?v=3') }}" rel="stylesheet">
@stop
@section('content')
<div class="log" style="height:60%;padding-top:2%;background-color: #1a8fb4;">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="owl">
            <div class="hand"></div>
            <div class="hand hand-r"></div>
            <div class="arms">
                <div class="arm"></div>
                <div class="arm arm-r"></div>
            </div>
        </div>
        <div class="form" style="width:400px">
            <div class="control">
                <label for="username" class="fa fa-envelope"></label>
                <input id="username" type="username" placeholder="Username"
                    class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                    value="{{ old('username') }}" required autocomplete="username" autofocus>

                @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
            <div class="control">
                <label for="password" class="fa fa-asterisk"></label>
                <input id="password" type="password" placeholder="Password"
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
                    autocomplete="current-password">

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="control">
                <button type="submit" class="form-control btn btn-info">Login</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('script')


<script src="{{ asset('vendor/login/js/index.js?v=2') }}"></script>

@stop

