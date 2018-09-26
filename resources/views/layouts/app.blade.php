@include('includes.resources')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIIPI - UNACH</title>
    @yield('css')

</head>
<body>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>


    <div class="ui sidebar inverted vertical menu">
        <a class="item">
          1
        </a>
        <a class="item">
          2
        </a>
        <a class="item">
          3
        </a>
      </div>
      <div class="pusher">
          <div class="ui top fixed huge menu bg-primary">
              <div class="item ui header medium" style="padding:0.6em !important;">
              <img src="{{asset('img/unach-nav.png')}}">
        
                <p style="margin-left:1em;" class="tx-accent">SIIPI - UNACH</p>
        
              </div>
              <div class="right menu">
        
                <a class="item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <button id="sidenav" class="ui huge icon button bg-accent"><i class="icon bars tx-white"></i></button>
              </div>
            </div>
      </div>    






@yield('js')
</body>

</html>
