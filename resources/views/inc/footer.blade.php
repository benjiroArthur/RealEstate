


<div class="footer">

    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Information</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{url('/about')}}" style="color: mediumvioletred">About</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('login') }}" style="color: mediumvioletred">Agents</a></li>
                    {{--<li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php" style="color: mediumvioletred">Blog</a></li>--}}
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{url('/contact')}}" style="color: mediumvioletred">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Newsletter</h4>
                <p>Get notified about the latest properties in our marketplace.</p>

                {!! Form::open(['action' => 'notifyMeController@store', 'method' => 'POST']) !!}
                {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
                {{ csrf_field() }}


                        <div class="form-group text-center">
                            {{--{{Form::label('email', 'EMAIL')}}--}}
                            {{Form::text('email', '',['class'=>'form-control', 'placeholder'=>'Email'])}}
                        </div>

                <div class="form-group row mb-0">

                        <button type="submit" class="btn btn-primary" style="background: mediumvioletred;">
                            {{ __('Notify Me!') }}
                        </button>

                </div>
                {!! Form::close() !!}



            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Follow us</h4>

                    <a style="padding-right: 25px; color: mediumvioletred;" href="http://www.facebook.com/arthur.benjiro"><i class="ti ti-facebook"></i></a>
                    <a style="padding-right: 25px; color: mediumvioletred;" href="#"><i class="ti ti-twitter"></i></a>
                    <a style="padding-right: 25px; color: mediumvioletred;" href="#"><i class="ti ti-instagram"></i></a>
                    <a style="padding-right: 25px; color: mediumvioletred;" href="#"><i class="ti ti-pinterest"></i></a>
                    <a style="padding-right: 25px; color: mediumvioletred;" href="#"><i class="ti ti-linkedin"></i></a>

            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Contact us</h4>
                <p><b>Lync-Gh Realestate </b><br>
                    <span class="ion ion-location"></span> Takoradi Technical University Campus, Takoradi-Ghana <br>
                    <span class="ion ion-email"></span> majorcaios@gmail.com<br>
                    <span class="ion ion-android-phone-portrait"></span> +233 241 824 651</p>
            </div>
        </div>

        <!--    <div style="background: mediumvioletred;"><marquee style="white; font-size: 18px; font-weight: bolder;">*DESIGNED BY BENJIRO*</marquee></div>-->


    </div>
    <p class="copyright text-center" style="font-size: large;">Copyright 2018 - {{date("Y")}}. All rights reserved.	</p>
</div>


</div>


