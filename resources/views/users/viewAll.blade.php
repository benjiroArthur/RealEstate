@extends('layouts.app')

@section('content')


{{--@if(count($users)>0)--}}
<table class="table table-responsive" xmlns="http://www.w3.org/1999/html">
        <tr>

            <th>NAME</th>
            <th>EMAIL</th>
            <th>USERNAME</th>
            <th>PHONE NUMBER</th>
            <th>ACTION</th>
        </tr>
        @foreach($users as $user)
            <tr>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->phone_number}}</td>
            <td>
                <form>
                    <input><span></span></input>
                </form>
            </td>
            </tr>
        @endforeach
    </table>


{{--@else--}}
    {{--<h2 class="text-danger">No Users Found</h2>--}}
{{--@endif--}}

@endsection