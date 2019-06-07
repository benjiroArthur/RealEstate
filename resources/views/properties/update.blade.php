@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @include('inc.navigator')
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header text-center h2">Dashboard</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                {{--@if (session('status'))--}}
                                {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                                {{--</div>--}}
                                {{--@endif--}}

                                {{--@component('components.who')--}}
                                {{--@endcomponent--}}
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h3 class="text-center">List Of Properties</h3>
                                {{--{{dd($properties)}}--}}
                                @if(count($properties)<= 0)
                                    <p>No Properties Found</p>
                                    @else
                                    <table class="table table-striped" id="UpdateTable">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>ID</td>
                                            <td>Property ID</td>
                                            <td>Property Name</td>
                                            <td>Price</td>
                                            <td></td>
                                            <td></td>
                                            <td>Action</td>
                                        </tr>
                                        </thead>
                                        @php
                                        $id = 1;
                                        @endphp
                                        @foreach($properties as $property)
                                            <tr>
                                                <td>{{$id}}</td>
                                                <td>{{$property->id}}</td>
                                                <td>{{$property->p_id}}</td>
                                                <td>{{$property->name}}</td>
                                                <td>{{$property->price}}</td>
                                                <td>For {{$property->transaction_type}}</td>
                                                <td><a class="btn btn-primary float-right" href="{{url('/properties/'.$property->id.'/edit')}}" style="border-radius: 6px; width: 100px;"><span class="ion ion-edit"></span> Edit</a></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger float-right delete">
                                                        <span class="ion ion-android-delete"></span>
                                                    </button>
                                                    {{--{!! Form::open(['action'=>['PropertiesController@destroy', $property->id], 'method'=>'POST', 'class'=>'float-right']) !!}--}}
                                                    {{--{!! Form::hidden('_method', 'DELETE') !!}--}}
                                                    {{--{!! Form::button('<i class="ion ion-android-delete"></i>',['type'=>'submit','class'=>'btn btn-danger']) !!}--}}
                                                    {{--{!! Form::close() !!}--}}
                                                </td>
                                            </tr>

                                            @php
                                                $id += 1;
                                            @endphp
                                        @endforeach
                                    </table>

                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/properties" method="post" id="FormDelete" >
                    @csrf
                    {!! method_field('DELETE') !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do You Really Want To Delete This Property?
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes</button>

                    </div>
                </div>
                </form>
            </div>
        </div>

@endsection