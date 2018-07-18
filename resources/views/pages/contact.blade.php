

    @extends('layouts.app')


    @section('content')
        <div class="inside-banner">
            <div class="container" style="display: inline-block">
                <span class="text-right" style="float: right"><a href="{{url('/contact')}}" style="color: mediumvioletred">About</a> / Contact Us</span>
                <h2 class="text-left">Contact Us</h2>
            </div>
        </div>



        <div class="container">
            <div class="spacer">
                <div class="row contact">
                    <div class="col-lg-6 offset-3" style="background: rgba(0,0,0,.5);">
                        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','files'=>'true']) !!}
                        {{ csrf_field() }}


                        <div class="form-group text-center">
                            {{Form::label('name', 'Name', ['class'=>'text-white'])}}
                            {{Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Name'])}}
                        </div>

                        <div class="form-group text-center">
                            {{Form::label('email', 'Email', ['class'=>'text-white'])}}
                            {{Form::email('email', '',['class'=>'form-control', 'placeholder'=>'Email'])}}
                        </div>

                        <div class="form-group text-center">
                            {{Form::label('phone_number', 'Contact Number',['class'=>'text-white'])}}
                            {{Form::text('phone_number', '',['class'=>'form-control', 'placeholder'=>'Contact Number'])}}
                        </div>

                        <div class="form-group text-center">
                            {{Form::label('message', 'Message',['class'=>'text-white'])}}
                            {{Form::textarea('message', '',['id'=>'tarea','class'=>'form-control','rows'=>'5', 'placeholder'=>'Message'])}}
                        </div>


                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        <a class="btn btn-danger btn-block" href="{{url('/home')}}" style="border-radius: 25px;" >Cancel</a>

                        {!! Form::close() !!}
                        
                        

                    </div>
                </div>
            </div>
        </div>

    @endsection



<style>

    body
    {
        background: url('{{asset("storage/images/bglog.jpg")}}')center center no-repeat !important;
    }
    input[type="text"],input[type="email"]

    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        /*color: #fff;*/
        font-size: 16px;
        color: white !important;
    }
    #tarea{border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        /*color: #fff;*/
        font-size: 16px;
        color: white !important;}
    input[type="text"],input[type="email"]:focus{
        background: transparent !important;
    }


</style>