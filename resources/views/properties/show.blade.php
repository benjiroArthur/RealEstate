@extends('layouts.app')

@section('content')
    <div class="inside-banner">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/home')}}" style="color: mediumvioletred">Home</a> / Perform Transaction</span>
            <h2 class="text-left">Perform Transaction</h2>
        </div>
    </div>

<div class="container">
    <div class="Properties-listing-spacer">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                {{--<h2>{{$imageCount}}</h2>--}}
                <h2 class="text-left" style="color: mediumvioletred;">{{$property->name}}</h2><br>
                <div class="row">
                    <br>

                    <div class="col-md-7">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @for($imageIndex = 0; $imageIndex < $imageCount; $imageIndex++ )
                                    @if($imageIndex == 0)
                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
                                    @else
                                <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="{{$imageIndex}}"></li>
                                @endif
                                    @endfor
                            </ol>
                            <div class="carousel-inner" style="border: 2px solid mediumvioletred; border-radius: 10px;">
                                @for($i = 0; $i < $imageCount; $i++)
                                    @if($i == 0)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('storage/images/properties/'.$image[0])}}" alt="First slide">
                                </div>
                                    @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('storage/images/properties/'.$image[$i])}}" alt="Second slide">
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
                    <div class="col-md-5 property-info">
                            <p class="price"  style="color: mediumvioletred">${{$property->price}}</p>
                            <p class="" ><span class="ion ion-location text-dark h5"></span>Address: {{$property->address}}</p>
                        <p class="" ><span class="ti ti-menu-alt text-dark h6"></span>Floor Space: {{$property->floor_space}}</p>
                        <p class="" ><span class="ti ti-menu-alt text-dark h6"></span>Utility: {{$property->utility}}</p>
                        <p class="" ><span class="ti ti-menu-alt text-dark h6"></span>Access: {{$property->access}}</p>
                        <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success h3 text-center" style="background: mediumvioletred; color: white; width: 150px; border-radius: 25px;border:1px solid mediumvioletred;">Book Appointment</button><br><br>


                    </div>


                </div>

                <div class="row mt-3 ml-2">
                    <div class="col-md-12">
                    <p class="h4 text-dark"><span class="ti ti-menu-alt h4 text-dark"></span> Property Details</p>

                    <p>{{$property->description}}</p>
                    </div>
                </div>

        </div>
    </div>
</div>
</div>







@endsection


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title float-right" id="exampleModalCenterTitle">BOOK APPOINTMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="modal-header text-center" >
                    <h6 class="text-center">AGENT INFORMATION</h6>
                </div>
                <ul>
                    <li>{{$name}}</li>
                    <li>{{$phone}}</li>
                </ul>
            </div>
            <hr style="color: black; height: 20px;">
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<style>
    .loginBox {
        /*position: absolute;*/
        /*top: 150px;*/
        /*left: 50%;*/
        /*transform: translate(-50%, -50%);*/
        width: 80%;
        height: auto;
        padding: 80px 40px;

        box-sizing: border-box;
        background: rgba(0, 0, 0, .5);
    }

    .loginBox p{
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: white;
        text-align: center;
    }
    .loginBox input,.loginBox select{
        width: 100%;
        margin-bottom: 20px;
    }
    .loginBox input[type="text"],
    .loginBox input[type="password"],
    .loginBox input[type="number"],
    .loginBox select
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .loginBox textarea[type="text"]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 80px;
        color: #fff;
        font-size: 16px;
    }

    .loginBox input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 24px;
        background: #ff267e;
        cursor: pointer;
        border-radius: 20px;
    }

    .loginBox input[type="submit"]:hover
    {
        background: #efed40;
        color: #262626;
    }

    #dbase
    {


        position: absolute;
        top: 500px;
    }
</style>