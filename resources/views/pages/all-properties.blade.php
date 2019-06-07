
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
            <div style="display:-webkit-flex;align-items:center;" class="all-properties">{!! $allProperties->rendr() !!}</div>
        @else
            <h5 class="text-center" style="color: #c71585">No Properties Available</h5>
        @endif
    </div>
