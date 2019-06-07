@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @include('inc.admin_navigator')
        </div>
    </div><br>
{{--@if(count($users)>0)--}}
<div class="row justify-content-center">
    <div class="col-sm-12 col-lg-12 col-md-12">
        <table class="table table-striped justify-content-center" xmlns="http://www.w3.org/1999/html" id="ViewUsers">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>USERNAME</th>
                <th>PHONE NUMBER</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>

                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>
                        <button class="btn btn-warning mr-2 edit"><span class="ion ion-edit"></span></button>
                        <button class="btn btn-danger delete"><span class="ion ion-android-delete"></span></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


{{--@else--}}
    {{--<h2 class="text-danger">No Users Found</h2>--}}
{{--@endif--}}


    {{--edit modal starts--}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="container-fluid">
            <div class="row justify-content-center d-block">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <div class="modal-dialog" role="document">
                        <form action="/users" method="post" id="FormEdit" >
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="modal-content">
                                <div class="modal-header text-center" style="display: inline !important;">
                                    <h5 class="modal-title" id="editModalLabel"> EDIT USER</h5>
                                </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>

                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="tel" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                            @if ($errors->has('phone_number'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <br>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Submit</button>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    {{--edit modal ends--}}

    {{--delete modal starts--}}

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="/users" method="post" id="FormDelete" >
                @csrf
                {!! method_field('DELETE') !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do You Really Want To Delete This User?
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--delete modal ends--}}
@endsection

<style>
    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="tel"]
    {
        border: 1px solid mediumvioletred !important;
        /*border-bottom: 1px solid #fff !important;*/
        background: transparent !important;
        outline: mediumvioletred !important;
        /*height: 40px;*/

        /*font-size: 16px;*/
    }

</style>