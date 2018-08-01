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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slitslider/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('slitslider/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('owl-carousel/owl.theme.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>



<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('slitslider/js/jquery.ba-cond.min.js') }}"></script>
<script src="{{ asset('slitslider/js/jquery.slitslider.js') }}"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('js/typed.js') }}"></script>
<script src="{{ asset('slitslider/js/modernizr.custom.79639.js') }}"></script>
<script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>


<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</body>
</html>
