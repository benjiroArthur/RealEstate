@extends('layouts.app')

@section('content')

<section style="background: none !important;">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-6 offset-md-6">
        <div class="loginBox text-center">
            <img src="{{asset('/storage/images/user.png')}}" alt="user" class="user">
            <h2>USER LOGIN</h2>
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <p><span class="ti ti-user"></span>  USERNAME</p>
                <input id="email" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                @endif

                <p><span class="ti ti-lock"></span>  PASSWORD</p>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif


                <div class="form-group row">
                    <div class="col-md-6 offset-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label offset-6" for="remember" style="color: white">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <input type="submit" value="Login">



                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> <br>

                {{--<a class="btn btn-link" href="{{ route('admin.login') }}">--}}
                    {{--{{ __('Login As Admin') }}--}}
                {{--</a>--}}
            </form>

        </div>
        </div>
    </div>
</section>

    <style type="text/css">
        body{
            background: url("{{asset('storage/images/bglog.jpg')}}")center center no-repeat;;
        }
        h2
        {
            margin: 0;
            padding: 0 0 20px;
            color: mediumvioletred;
            text-align: center;
            font-size: 28px;
            font-weight: bolder;
        }

    </style>
@endsection
