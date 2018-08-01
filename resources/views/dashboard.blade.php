@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @component('components.who')
                            @endcomponent
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a class="btn btn-primary" style="background: mediumvioletred" href="{{route('properties.create')}}">ADD PROPERTY</a>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <a class="btn btn-primary" style="background: mediumvioletred" href="{{route('properties.index')}}">VIEW PROPERTY</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
