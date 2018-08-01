@extends('layouts.app')

@section('content')


{{--@if(count($users)>0)--}}
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PHONE NUMBER</th>
        </tr>
        @foreach($users as $user)
            <tr>{{$user->id}}</tr>
            <tr>{{$user->name}}</tr>
            <tr>{{$user->email}}</tr>
            <tr>{{$user->username}}</tr>
            <tr>{{$user->phone_number}}</tr>
        @endforeach
    </table>


{{--@else--}}
    {{--<h2 class="text-danger">No Users Found</h2>--}}
{{--@endif--}}

@endsection