@include('includes.resources')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIRPI - UNACH</title>
    @yield('css')

</head>
<body class=" animated fadeIn">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>


    <div class="ui sidebar inverted bg-primary vertical menu tx-dark">

        <a class="item btn-accent">
          1asdfasdfasdfasdfasdfasd
        </a>
        <a class="item">
          2
        </a>
        <a class="item">
          3
        </a>
    </div>
      <div class="ui top fixed huge menu bg-accent">
          <div class="item ui header medium" style="padding:0em !important; padding-left:0.4em !important;">
          <img src="{{asset('img/unach.png')}}">
    
            <span class="tx-white mx-1">SIRPI - UNACH</span>
    
          </div>
          <div class="right menu">
            
            <div class="item ui mobile hidden pointing dropdown link tx-white">
            <div class="text">{{Auth::user()->name}}</div>
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
              </a>
            </div>
            </div>
            <div class="item">
                <button id="sidenav" class="ui btn-primary icon button bg-primary"><i class="icon bars tx-dark "></i></button>
            </div>
          </div>
        </div>
      <div class="pusher ">
          @yield('contenido')
      </div>    






@yield('js')
</body>

</html>
