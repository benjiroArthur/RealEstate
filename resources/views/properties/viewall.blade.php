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
                                @if(count($properties)>0)
                                    <table class="table table-striped">
                                        <tr class="h4">
                                            <td>Property Name</td>
                                            <td>Price</td>
                                            <td>Type</td>
                                            <td>Status</td>
                                        </tr>
                                        @foreach($properties as $property)
                                            <tr>
                                                <td>{{$property->name}}</td>
                                                <td>{{$property->price}}</td>
                                                <td>For {{$property->transaction_type}}</td>
                                                <td>
                                                    @if($property->available == 1)
                                                        Available
                                                    @elseif($property->available == 0 && $property->transaction_type == "Sale")
                                                        Sold
                                                    @elseif($property->available == 0 && $property->transaction_type == "Rent")
                                                        Rented
                                                    @elseif($property->available == 0 && $property->transaction_type == "Lease")
                                                        Leased
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection