@extends('layouts.app')


@section('content')
    <div class="inside-banner">
        <div class="container" style="display: inline-block">
            <span class="text-right" style="float: right"><a href="{{url('/about')}}" style="color: mediumvioletred">About</a> / About Us</span>
            <h2 class="text-left">About Us</h2>
        </div>
    </div>

<div class="row" style="max-height: 300px;">
    <div class="col-md-8 offset-2">
        <div  id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <img src="{{ asset('storage/images/about/about.jpg') }}" class="d-block w-100 h-75"  alt="realestate" name="about" >
                <a class="left carousel-control" href="#" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        </div>
</div>



<script>
    var pic1=new Image();
    pic1.src="{{ asset('storage/images/about/about.jpg') }}";
    var pic2=new Image();
    pic2.src="{{ asset('storage/images/about/about1.jpg') }}";
    var pic3=new Image();
    pic3.src="{{ asset('storage/images/about/about2.jpg') }}";
    var pic4=new Image();
    pic4.src="{{ asset('storage/images/about/about3.jpg') }}";
    var pic5=new Image();
    pic5.src="{{ asset('storage/images/about/about4.jpg') }}";
    var pic6=new Image();
    pic6.src="{{ asset('storage/images/about/about5.jpg') }}";
    var pic7=new Image();
    pic7.src="{{ asset('storage/images/about/about6.jpg') }}";
    var pic8=new Image();
    pic8.src="{{ asset('storage/images/about/about7.jpg') }}";




    var step=1;
    function slideit()
    {
        document.images.about.src=eval("pic"+step+".src");
        if(step<8)
        { step++;}
        else
        {step=1;}
        setTimeout("slideit()",2500);
    }
    slideit();
</script>

@endsection


