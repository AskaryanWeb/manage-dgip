@include('includes.resources')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - SIIPI</title>
    @yield('css')
</head>
<body>

<div class="ui container">
    <div class="ui card">
        <div class="content">
            <h2 class="ui header">
            <img class="ui image" src="{{asset('img/logo-unach.png')}}">
                <div class="content ">
                  SIIPI-LOGIN
                </div>
            </h2>

            <div class="description" style="margin-top:2em;">
                <form action="" class="ui form">
                    <div class="field">
                        <input type="text" name="email" placeholder="Correo institucional">
                    </div>                
                </form>
            </div>            
        </div>
    </div>
</div>


    @yield('js')
</body>
</html>