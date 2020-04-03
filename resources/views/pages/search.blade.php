@extends('layouts.app')

@section('content')
    <div class="inside-banner">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/search')}}" style="color: mediumvioletred"></a>

                @if(count($properties) == 1)
                    {{$properties->total()." "}}
                    Property Found
            @elseif(count($properties) > 1)
                    {{$properties->total()." "}}
                    Properties Found
            @else
                No Properties Found
            @endif
            </span>
            <h2 class="text-left">Search Result</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-sm-2">
            @include('inc.searchform')
        </div>
        <div class="col-lg-10 col-sm-10" >

            {{--{!! dd($properties) !!}--}}
            @if(count($properties) > 0)
                <div class="row">
                    @foreach($properties as $property)
                        {{--{!!   dd($property); !!}--}}

                        <?php  $image = explode(',',$property->images);

                        //  dd($image);

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
                <div style="display:-webkit-flex;align-items:center;">{{$properties->appends($_GET)->links()}}</div>
            @endif
        </div>
    </div>
@endsection