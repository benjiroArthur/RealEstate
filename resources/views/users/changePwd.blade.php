@extends('layouts.app')

@section('content')

    <section style="background: none !important;">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="loginBox text-center">
                    <img src="{{asset('/storage/images/user.png')}}" alt="user" class="user">
                    <h2>CHANGE PASSWORD</h2>
                    {!! Form::open(['action' => ['UsersController@updatePwd', $userId], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {!! Form::hidden('_method', 'PUT') !!}
                    {{ csrf_field() }}

                    <p><span class="ti ti-lock"></span>NEW PASSWORD</p>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                    <p><span class="ti ti-lock"></span>CONFIRM PASSWORD</p>
                    <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif

                    <input type="submit" value="SUBMIT">


                    {!! Form::close() !!}

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
