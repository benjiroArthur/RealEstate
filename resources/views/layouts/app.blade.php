<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'RealEstate') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pre-load.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slitslider/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('slitslider/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('owl-carousel/owl.theme.css') }}" rel="stylesheet">
</head>
<body>
<div class="site-preloader-wrap">
    <div class="spinner">
        <img src="{{asset('storage/images/logo2.png')}}" style="width: 150px">

    </div>

</div><!-- Preloader -->
<div class="container-fluid">
    @include('inc.navbar')

    <div class="container-fluid mt-5">
        <br>
        @include('inc.messages')
        @yield('content')
    </div>
    @include('inc.footer')
</div>

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}


<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/venobox.min.js') }}"></script>

{{--<script src="{{ asset('slitslider/js/jquery.ba-cond.min.js') }}"></script>--}}
{{--<script src="{{ asset('slitslider/js/jquery.slitslider.js') }}"></script>--}}
{{--<script src="{{ asset('js/dropzone.js') }}"></script>--}}
{{--<script src="{{ asset('js/typed.js') }}"></script>--}}
{{--<script src="{{ asset('slitslider/js/modernizr.custom.79639.js') }}"></script>--}}
{{--<script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>--}}


<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>
