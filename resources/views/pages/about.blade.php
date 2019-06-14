@extends('layouts.app')


@section('content')
    <div class="inside-banner" style="height: 50px; padding-top: 5px;">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/about')}}" style="color: mediumvioletred">About</a> / About Us</span>
            <h2 class="text-left">About Us</h2>
        </div>
    </div>


<br>
    <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($imageIndex = 0; $imageIndex < 8; $imageIndex++ )
                        @if($imageIndex == 0)
                            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
                        @else
                            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="{{$imageIndex}}"></li>
                        @endif
                    @endfor
                </ol>
                <div class="carousel-inner" style="border: 2px solid mediumvioletred; border-radius: 10px;">
                    @for($i = 0; $i < 7; $i++)
                        @if($i == 0)
                            <div class="carousel-item active">
                                <img class="d-block w-100 img-fluid" src="{{asset('storage/images/about/about.jpg')}}" alt="First slide">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100 img-fluid" src="{{asset('storage/images/about/about'.$i.'.jpg')}}" alt="Second slide">
                            </div>
                        @endif
                    @endfor

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

<br>
@endsection


