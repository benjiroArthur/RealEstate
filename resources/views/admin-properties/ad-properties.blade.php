@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @include('inc.admin_navigator')
        </div>
    </div><br>

    <div class="row justify-content-center">

        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header text-center h2">List Of Properties</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">

                        </div>
{{--{{dd($properties)}}--}}

                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h3 class="text-center"></h3>
                            @if(!empty($properties))
                                @php
                                    $id = 1
                                @endphp
                                <table class="table table-striped" id="AdminViewProperties">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID</th>
                                        <th>Property Name</th>
                                        <th>User Name</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Premium</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{$id++}}</td>
                                            <td>{{$property->id}}</td>
                                            <td>{{$property->name}}</td>
                                            <td>{{$property->user->name}}</td>
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
                                            <td>
                                                @if($property->class == 1)
                                                    Yes
                                                @else
                                                    No
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('ad-properties/'.$property->id.'/edit')}}"><button class="btn btn-warning mr-2"><span class="ion ion-edit"></span></button></a>
                                                <button class="btn btn-danger delete"><span class="ion ion-android-delete"></span></button>
                                            </td>
                                        </tr>
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



    {{--delete modal starts--}}

    <div class="modal fade" id="ad-deleteModal" tabindex="-1" role="dialog" aria-labelledby="ad-deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="/ad-properties" method="post" id="ad-FormDelete" >
                @csrf
                {!! method_field('DELETE') !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ad-deleteModalLabel"></h5>
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

    {{--delete modal ends--}}

@endsection


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