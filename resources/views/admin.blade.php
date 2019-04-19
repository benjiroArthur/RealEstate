@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card mt-4">
                <div class="card-header text-center"  style="color: mediumvioletred"><span class="ti ti-user"></span> ADMIN</div>
                <div class="row justify-content-center" style="display: inline-block; margin: 20px;
">


                <div class="card-body col-md-6 btn btn-default text-center" id="cardd" style="display: inline; float: left;  background-color: transparent; height: 150px; width: 90%; padding-top: 50px; ">

                    <a href="{{ route('admin.add.user') }}" style="color: mediumvioletred; font-size: 40px"><span class="ionicons ion-plus-round"></span>ADD USER</a>

                </div>

                    <div class="card-body col-md-6 btn btn-default text-center" id="cardd" style="display: inline; float: left; background-color: transparent; height: 150px; width: 90%; padding-top: 50px;">

                            <a href="{{route('users.index')}}" style="color: mediumvioletred; font-size: 40px"><span class="ti ti-eye" ></span>VIEW USERS</a>

                    </div>

                </div>
            </div>

        </div>
    </div>


</div>

    <style>
        #cardd
        {
            border: 1px solid mediumvioletred;
        }
    </style>
@endsection
