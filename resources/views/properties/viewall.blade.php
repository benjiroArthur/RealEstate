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

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h3 class="text-center">List Of Properties</h3>
                                @if(count($properties)>0)
                                    <table class="table table-striped" id="viewProperties">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID</th>
                                            <th>Property ID</th>
                                            <th>Property Name</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php( $id = 1)
                                        @foreach($properties as $property)
                                            <tr>
                                                <td>{{$property->id}}</td>
                                                <td>{{$id}}</td>
                                                <td>{{$property->p_id}}</td>
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
                                            @php( $id++)
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>No Properties Found</p>
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

@endsection