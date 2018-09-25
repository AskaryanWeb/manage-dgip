@include('includes.semantic')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIIPI - UNACH</title>
    @yield('css')

</head>
<body>
  <div class="navbar-fixed valign-wrapper  ">
    <nav>
      <div class="nav-wrapper bg-principal ">
        <a href="#" class="row">
        <img class="logo col" src={{asset('img/logo-unach.png')}} alt="">
          <span class="col">SIIPI - UNACH</span>        
        </a>
      </div>
      
    </nav>
    <a class="btn-floating  btn-large waves-effect waves-light bg-accent"><i class="material-icons">menu</i></a>
  </div>

  <ul class="sidenav" id="slide-out">
     
  </ul>
  


  <ul class="" role="">
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
</ul>
@yield('js')
</body>

</html>
