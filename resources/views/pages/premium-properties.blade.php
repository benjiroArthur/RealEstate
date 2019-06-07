
    <h3 CLASS="text-center">FEATURED PROPERTIES</h3>
    {{--{!! dd($premiumProperties) !!}--}}
    @if(count($premiumProperties) > 0)
        <div class="row">
            @foreach($premiumProperties as $property)

                <?php
                $image = explode(',',$property->images);
                //                                    dd($image);
                ?>
                <div class="col-sm-12 col-md-3 col-lg-3">
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
                </div>

            @endforeach

        </div>
        <br>
        <div style="display:-webkit-flex;align-items:center;" class="premium">{!! $premiumProperties->render() !!}</div>
    @else
        <h5 class="text-center" style="color: #c71585">No Properties Available</h5>
    @endif
