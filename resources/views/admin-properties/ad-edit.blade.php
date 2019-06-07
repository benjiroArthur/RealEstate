@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @include('inc.admin_navigator')
        </div>
    </div><br>

    <div class="row justify-content-center" id="baba">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="bg-transparent baba">
                <div class="card-header text-center"><h2>EDIT PROPERTY</h2></div>
                {{--form body to add properties--}}
                <div class="card-body">
                    {!! Form::open(['action' => ['PropertiesController@update', $properties->id], 'method' => 'POST', 'enctype' => 'multipart/form-data','files'=>'true']) !!}
                    {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group text-center">
                                {{Form::label('name', 'PROPERTY NAME')}}
                                {{Form::text('name', $properties->name,['class'=>'form-control', 'placeholder'=>'Property Name'])}}
                            </div>

                            <div class="form-group text-center row">
                                <div class="col-md-6 col-sm-12">
                                    {{Form::label('price', 'PRICE')}}
                                    {{Form::text('price', $properties->price,['class'=>'form-control', 'placeholder'=>'Price'])}}
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    {{--{{Form::label('transaction_type', 'TRANSACTION TYPE')}}--}}
                                    {{--{{Form::text('transaction_type', '',['class'=>'form-control', 'placeholder'=>'Transaction Type'])}}--}}
                                    {{--<div class="col-md-6 col-sm-12">--}}
                                    <label for="transaction_type" >{{ __('TRANSACTION TYPE') }}</label>


                                    <select class="form-group form-control bg-transparent" name="transaction_type"  style="width: 100%;">
                                        <option style="color: grey;">{{$properties->transaction_type}}</option>
                                        <option>Sale</option>
                                        <option>Rent</option>
                                        <option>Lease</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group text-center">
                                {{Form::label('address', 'ADDRESS')}}
                                {{Form::text('address', $properties->address,['class'=>'form-control', 'placeholder'=>'Address'])}}
                            </div>

                            <div class="form-group text-center">
                                <label for="Structure_type" >{{ __('STRUCTURE TYPE') }}</label>


                                <select class="form-group form-control bg-transparent" name="structure_type"  style="width: 100%;">
                                    <option style="color: grey;">{{$properties->structure_type}}</option>
                                    <option>Bungalow</option>
                                    <option>Cottage</option>
                                    <option>Detached</option>
                                    <option>Detached Storey</option>
                                    <option>Farmhouse</option>
                                    <option>Flat</option>
                                    <option>Mansion</option>
                                    <option>Semi-Detached</option>
                                    <option>Semi-Detached Storey</option>
                                    <option>Terraced</option>
                                </select>
                            </div>


                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group text-center">
                                {{Form::label('access', 'ACCESS')}}
                                {{Form::text('access', $properties->access,['class'=>'form-control', 'placeholder'=>'Access'])}}
                            </div>

                            <div class="form-group text-center row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="available" >{{ __('AVAILABLE') }}</label>


                                    <select class="form-group form-control bg-transparent" name="available"  style="width: 100%;">
                                        <option style="color: grey;">
                                            @if($properties->available == 1)
                                                {{"Yes"}}
                                            @else
                                                {{"No"}}
                                            @endif
                                        </option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="property_type" >{{ __('PROPERTY TYPE') }}</label>


                                    <select class="form-group form-control bg-transparent" name="property_type"  style="width: 100%;">
                                        <option style="color: grey;">{{$properties->property_type}}</option>
                                        <option>Home</option>
                                        <option>Store</option>
                                        <option>Office Space</option>
                                        <option>Land</option>
                                        <option>Hostel</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group text-center row">

                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    {{Form::label('floor_space', 'FLOOR SPACE')}}
                                    {{Form::text('floor_space', $properties->floor_space,['class'=>'form-control', 'placeholder'=>'Floor Space'])}}
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="class" >{{ __('PREMIUM') }}</label>
                                    <select class="form-group form-control bg-transparent" name="class"  style="width: 100%;">
                                        <option style="color: grey;">
                                            @if($properties->class == 1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>

                                </div>

                            </div>

                            <div class="form-group text-center">
                                {{Form::label('utility', 'UTILITY')}}
                                {{Form::text('utility', $properties->utility,['class'=>'form-control', 'placeholder'=>'Utility'])}}
                            </div>


                        </div>

                    </div>
                    <div class="form-group text-center">
                        {{Form::label('description', 'DESCRIPTION')}}
                        {{Form::textarea('description', $properties->description,['class'=>'form-control','rows'=>'3', 'placeholder'=>'description'])}}
                        <br>
                        <input type="file" class="form-control" name="images[]"  multiple>
                    </div>




                    {{Form::hidden('_method', 'PUT')}}
                    <div class="form-group row mb-0">
                        <div class="col-md-4 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="background: mediumvioletred;">
                                {{ __('Update Property') }}
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <br>


    <style type="text/css">
        .baba {
            margin-left: 100px;
            margin-right: 100px;
        }
        #baba{
            background: url("{{asset('storage/images/bglog.jpg')}}")center center no-repeat;
            margin-left: 5px;
            margin-right: 5px;
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
        input[type="file"],
        select,
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
