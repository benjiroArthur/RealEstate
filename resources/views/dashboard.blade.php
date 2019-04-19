@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @include('inc.navigator')
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3"  style="width: 95%">
            <div class="card-header">Properties Available For Sale</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$saleAvailable}}</p>
            </div>
        </div>
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3"  style="width: 95%">
            <div class="card-header">Properties Available For Rent</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$rentAvailable}}</p>
            </div>
        </div>
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3" style="width: 95%">
            <div class="card-header">Properties Available For Lease</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$leaseAvailable}}</p>
            </div>
        </div>

    </div>

<br><br>
    <div class="row justify-content-center">
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3"  style="width: 95%">
            <div class="card-header">Properties Sold</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$saleUnavailable}}</p>
            </div>
        </div>
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3"  style="width: 95%">
            <div class="card-header">Properties Rented</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$rentUnavailable}}</p>
            </div>
        </div>
        <div class="card mt-2 mr-5 col-sm-12 col-md-6 col-lg-3" style="width: 95%">
            <div class="card-header">Properties Leased</div>
            <div class="card-body">
                <span class="ion ion-home"></span>
                <p style="float: right">{{$leaseUnavailable}}</p>
            </div>
        </div>

    </div>

<br>
@endsection
