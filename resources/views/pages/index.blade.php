@extends('layouts.app')


@section('content')
    <div class="inside-banner">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/home')}}" style="color: mediumvioletred">About</a> / Buy, Sale & Rent</span>
            <h2 class="text-left">Buy, Sale & Rent</h2>
        </div>
    </div>

    <div class="container">
        <div class="property-listing spacer">
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    <div class="search-form">
                        <h4><span class="fa fa-search"></span> Search of Properties</h4>
                        <form action="" method="get" class="form form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address">
                            <button class="btn btn-primary" style="background: mediumvioletred">Find Now</button>
                        </form>
                    </div>




                    <div class="hot-properties hidden-xs"></div>
                </div>
                <div class="col-lg-9 col-sm-8">

                </div>
            </div>
        </div>
    </div>

@endsection