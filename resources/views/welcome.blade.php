@extends('layouts.app')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators hidden-xs" data-slide-to="4"></li>

        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('storage/images/slider/slideOne.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-2 offset-5 mb-2">
                            <a class="btn btn-success" href="{{url('/home')}}" style="background-color: mediumvioletred; border: none; border-radius: 10px;">CLICK HERE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('storage/images/slider/slideTwo.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-2 offset-5 mb-2">
                            <a class="btn btn-success" href="{{url('/home')}}" style="background-color: mediumvioletred; border: none; border-radius: 10px;">CLICK HERE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('storage/images/slider/slideThree.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-2 offset-5 mb-2">
                            <a class="btn btn-success" href="{{url('/home')}}" style="background-color: mediumvioletred; border: none; border-radius: 10px;">CLICK HERE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('storage/images/slider/slideFour.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-2 offset-5 mb-2">
                            <a class="btn btn-success" href="{{url('/home')}}" style="background-color: mediumvioletred; border: none; border-radius: 10px;">CLICK HERE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('storage/images/slider/slideFive.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="row">
                        <div class="col-md-2 offset-5 mb-2">
                            <a class="btn btn-success" href="{{url('/home')}}" style="background-color: mediumvioletred; border: none; border-radius: 10px;">CLICK HERE</a>
                        </div>
                    </div>
                </div>
            </div>




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

<br><br>
@endsection



        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{----}}
    {{--</body>--}}
{{--</html>--}}
{{--<script>--}}
    {{--$(function(){--}}
        {{--$(".typed").typed({--}}
            {{--strings:["this is a test","i think it worked"],--}}
            {{--typeSpeed:45,--}}
            {{--loop:true--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}