<style type="text/css">
    .logotext
    {
        font-family: Arial bold; font-size: 16px; font-weight: bolder;
        text-shadow: rgb(110,110,110) 3px 3px 5px;
        color: mediumvioletred;

    }
    .logotext1
    {
        font-family: Arial bold; font-size: 9px; font-weight: bold;
        text-shadow: rgb(110,110,110) 3px 3px 5px;
        color: mediumvioletred;
        text-decoration: none;

    }
    #inout
    {
        background: transparent;
        border: 4px mediumvioletred;
        border-radius: 25px;
        color: white;
        /*top: 20px;*/
        /*position: absolute;*/
        padding: 15px 15px;
    }
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

</style>


<div class="navbar-wrapper">
<nav class="navbar navbar-expand-md bg-dark navbar-dark  navbar-fixed-top" style="background-image: url('{{asset('storage/images/banner.jpg')}}');">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img class="card-img" src="{{asset('storage/images/logo2.png')}}"  style="width: 100px; height: 20px;"><br>
          <small class="logotext1">LYNC-GH REALESTATE</small>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon text-white" style="color: white"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <ul class="nav navbar-nav mr-2 mt-2 mt-lg-0" >
              <li class="nav-item active" id="bgg1">
                <a class="nav-link" href="{{url('/home')}}" id="bgg">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{url('/about')}}" id="bgg">About</a>
              </li>
              <li class="nav-item" id="bgg1">
                <a class="nav-link" href="{{url('/contact')}}" id="bgg">Contact</a>
              </li>
              {{--<li class="nav-item" id="bgg1">--}}
                      {{--<a class="nav-link" href="{{url('/posts')}}" id="bgg">Blog</a>--}}
              {{--</li>--}}
            </ul>

            {{-- <ul class="nav navbar-nav navbar-right mr-auto mt-2 mt-lg-0">
                <li class="nav-item"><a class="nav-link" href="/lsapp/public/posts/create">Create Posts</a></li>
            </ul> --}}

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item" id="bgg1">
                      <a class="nav-link" href="{{ route('login') }}" id="bgg">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item" id="bgg1">
                      <a class="nav-link" href="{{ route('admin.dashboard') }}" id="bgg">{{ __('Admin') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          @if(Auth::guard('admin')->check())
                        <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                              <a class="dropdown-item" href="{{ route('admin.login') }}">{{ __('Login As Admin') }}</a>

                              <a class="dropdown-item" href="{{ route('admin.add.user') }}">{{ __('Add User') }}</a>

                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                            @else
                              <a class="dropdown-item" href="{{url('/dashboard')}}">Dashboard</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            @endif

                      </div>
                  </li>
              @endguest
          </ul>

      </div>
  </div>
</nav>
</div>

<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <br><br>
        <a href="index.php" style="text-decoration: none;"><img src="{{asset('storage/images/logo.png')}}" alt="Realestate" style="width: 200px"><br><p class="logotext">LYNC - GH <?php echo "&nbsp"; echo "&nbsp"; ?>REALESTATE</p></a>

    </div>
    <!-- #Header Starts -->
</div>



