
<div class="row inside-banner justify-content-center" id="bar" style="background-image: url('{{asset('storage/images/banner.jpg')}}');">
    <div class="col-sm-12 col-lg-2 col-md-2">
        <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" style="display: inline-block; float: right;">
            <li class="nav-item active" id="bgg1">
                <a class="nav-link" href="{{url('/admin')}}" id="bgg">Dashboard<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>

    <div class="col-sm-12 col-lg-2 col-md-2">
        <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" style="display: inline-block; float: right;">
            <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{route('admin.add.user')}}" id="bgg">Add Users</a>
            </li>
        </ul>
    </div>

    <div class="col-sm-12 col-lg-2 col-md-2">
        <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" style="display: inline-block; float: right;">
            <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{route('users.index')}}" id="bgg">View Users</a>
            </li>

        </ul>
    </div>

    <div class="col-sm-12 col-lg-2 col-md-2">
        <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" style="display: inline-block; float: right;">
            <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{route('ad-properties.index')}}" id="bgg">View Properties</a>
            </li>

        </ul>
    </div>

    <div class="col-sm-12 col-lg-2 col-md-2">
        <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" style="display: inline-block; float: right;">
            <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{route('admin.feedback')}}" id="bgg">FeedBacks</a>
            </li>

        </ul>
    </div>
</div>



<style type="text/css">



    #bgg:hover
    {
        color: white;
        background-color:transparent;
    }
    #bgg
    {
        padding-right: 25px;
        padding-left: 25px;
        color: lightgrey;
        border: 2px mediumvioletred;
        text-decoration: #1fad83;
    }
    #bgg1:hover{
        border-bottom: 2px solid mediumvioletred;
    }
    #bgg:active{
        border-bottom: 2px solid mediumvioletred !important;
    }

</style>