@extends('layouts.app')


@section('content')
    <div class="inside-banner" style="height: 50px; padding-top: 5px;">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/home')}}" style="color: mediumvioletred">Home</a> / Buy, Sale & Rent</span>
            <h4 class="text-left" style="color: white;">Buy, Sale & Rent</h4>
        </div>
    </div>

    <div class="container-fluid">
        <div class="property-listing spacer">
            <div class="row">
                <div class="col-lg-2 col-sm-12">
                    <div class="search-form">
                        @include('inc.searchform')
                    </div>

                    <div class="hot-properties hidden-xs"></div>
                </div>

                <div class="col-lg-10 col-sm-10" >
                    <h3 CLASS="text-center">FEATURED PROPERTIES</h3>
                    {{--{!! dd($premiumProperties) !!}--}}
                    @if(count($premiumProperties) > 0)
                        <div class="row">
                        @foreach($premiumProperties as $property)

                            <?php
                                    $image = explode(',',$property->images);
//                                    dd($image);
                            ?>
                            <di class="col-sm-12 col-md-3 col-lg-3">
                            <div class="card mt-2 mr-1" style="background: white; width: 16rem; height: 400px;">
                                <div class="properties text-center m-1">
                                    <div class="image-holder">
                                        <img src="{{asset('storage/images/properties/'.$image[0])}}" class="image-responsive" style="width: 15rem; height: 200px;">
                                    </div>

                                    <h4><a href="" style="color: mediumvioletred">{{$property->name}}</a></h4><hr>
                                    <p class="h5">{{'Price: ¢'.$property->price}}</p><hr>
                                    <a href="{{url('/properties/'.$property->id)}}" class="btn btn-primary" style="background: mediumvioletred">View Details</a>
                                    <h5>For {{$property->transaction_type}}</h5>
                                </div>
                            </div>
                            </di>

                        @endforeach

                        </div>
                    <br>
                       <div style="display:-webkit-flex;align-items:center;">{{$premiumProperties->links()}}</div>
                    @else
                        <h5 class="text-center" style="color: #c71585">No Properties Available</h5>
                    @endif
                </div>
            </div>
            <hr style="color: mediumvioletred; border: none; background-color: mediumvioletred; height: 3px;">
            <h3 class="text-center">RESENT LISTING</h3>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    @if(count($resentProperties) > 0)
                        <div class="row">
                            @foreach($resentProperties as $resentProperty)
                                <?php
                                $image = explode(',',$resentProperty->images);
                                //                                    dd($image);
                                ?>
                                <div class="card mt-2 mr-1" style="background: white; width: 15rem; height: 370px;">
                                    <div class="properties text-center m-1">
                                        <div class="image-holder">
                                            <img src="{{asset('storage/images/properties/'.$image[0])}}" class="image-responsive" style="width: 14rem; height: 180px;">
                                        </div>

                                        <h4><a href="" style="color: mediumvioletred">{{$resentProperty->name}}</a></h4><hr>
                                        <p class="h5">{{'Price: ¢'.$resentProperty->price}}</p><hr>
                                        <a href="{{url('/properties/'.$resentProperty->id)}}" class="btn btn-primary" style="background: mediumvioletred">View Details</a>
                                        <h5>For {{$resentProperty->transaction_type}}</h5>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <br>
                        <div style="display:-webkit-flex;align-items:center;">{{$resentProperties->links()}}</div>
                    @else
                        <h5 class="text-center" style="color: #c71585">No Properties Available</h5>
                    @endif
                </div>
            </div>

            <hr style="color: mediumvioletred; border: none; background-color: mediumvioletred; height: 3px;">
            <h3 class="text-center">ALL PROPERTIES</h3>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    @if(count($allProperties) > 0)
                        <div class="row">
                            @foreach($allProperties as $allproperty)
                                <?php
                                $image = explode(',',$allproperty->images);
                                //                                    dd($image);
                                ?>
                                <div class="card mt-2 mr-1" style="background: white; width: 15rem; height: 370px;">
                                    <div class="properties text-center m-1">
                                        <div class="image-holder">
                                            <img src="{{asset('storage/images/properties/'.$image[0])}}" class="image-responsive" style="width: 14rem; height: 180px;">
                                        </div>

                                        <h4><a href="" style="color: mediumvioletred">{{$allproperty->name}}</a></h4><hr>
                                        <p class="h5">{{'Price: ¢'.$allproperty->price}}</p><hr>
                                        <a href="{{url('/properties/'.$allproperty->id)}}" class="btn btn-primary" style="background: mediumvioletred">View Details</a>
                                        <h5>For {{$allproperty->transaction_type}}</h5>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <br>
                        <div style="display:-webkit-flex;align-items:center;">{{$allProperties->links()}}</div>
                    @else
                        <h5 class="text-center" style="color: #c71585">No Properties Available</h5>
                    @endif
                </div>
            </div>

        </div>
    </div>




@endsection