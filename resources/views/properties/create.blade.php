@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background: rgba(0,0,0,.5);">
                    <div class="card-header text-center"><h2>ADD PROPERTY</h2></div>
                {{--form body to add properties--}}
                    <div class="card-body">
                        {!! Form::open(['action' => 'PropertiesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','files'=>'true']) !!}
                        {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group text-center">
                                        {{Form::label('name', 'PROPERTY NAME')}}
                                        {{Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Property Name'])}}
                                    </div>

                                    <div class="form-group text-center">
                                        {{Form::label('price', 'PRICE')}}
                                        {{Form::text('price', '',['class'=>'form-control', 'placeholder'=>'Price'])}}
                                    </div>

                                    <div class="form-group text-center">
                                        {{Form::label('address', 'ADDRESS')}}
                                        {{Form::text('address', '',['class'=>'form-control', 'placeholder'=>'Address'])}}
                                    </div>


                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group text-center">
                                        {{Form::label('access', 'ACCESS')}}
                                        {{Form::text('access', '',['class'=>'form-control', 'placeholder'=>'Access'])}}
                                    </div>

                                    <div class="form-group text-center">
                                        {{Form::label('floor_space', 'FLOOR SPACE')}}
                                        {{Form::text('floor_space', '',['class'=>'form-control', 'placeholder'=>'Floor Space'])}}
                                    </div>

                                    <div class="form-group text-center">
                                        {{Form::label('utility', 'UTILITY')}}
                                        {{Form::text('utility', '',['class'=>'form-control', 'placeholder'=>'Utility'])}}
                                    </div>
                                </div>

                            </div>
                        <div class="form-group text-center">
                            {{Form::label('description', 'DESCRIPTION')}}
                            {{Form::textarea('description', '',['class'=>'form-control','rows'=>'3', 'placeholder'=>'description'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('images'}}
                        </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background: mediumvioletred;">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


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
        label{
            color: white;
        }

        input[type="text"],
        textarea,
        input[type="password"],
        input[type="email"]
        {
            border: none !important;
            border-bottom: 1px solid #fff !important;
            background: transparent !important;
            outline: none !important;
            /*height: 40px;*/
            color: #fff !important;
            /*font-size: 16px;*/
        }

    </style>
@endsection