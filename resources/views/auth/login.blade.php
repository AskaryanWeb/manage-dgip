<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DGIP UNACH') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body >
    <div >
        <main>
            <div class="container" >
                <div class="row justify-content-lg-around align-items-center">
                    <div class="px-lg-5 px-3 pt-5 col-lg-7 col order-lg-0 order-2 shadow text-light" style="background:#18386b;">
                        <h1 class="h2 mb-4">Sistema Institucional de Información de Proyectos de Investigación.</h1>
                        <h4 class="mb-4">¡Bienvenido!</h4>
                        <div class="ml-lg-4 ml-2 mb-3">
                            <h6 class="h6">Esta plataforma te ofrece servicios como:</h6>
                            <li>Realizar el registro de tus Proyectos de Investigación</li>
                            <li>Hacer seguimiento de las solicitudes</li>
                            <li>Registrar Reportes Técnicos</li>
                        </div>
                        <p class="py-4" style="font-size:13px;">Si tienes alguna duda o sugerencia para mejorar nuestro servicio web, mandanos un correo a diai@unach.mx</p>
                    </div>
                    <div class="col-lg-4  mb-lg-0 mb-4 ">
                        <div class="card shadow ">
                           <div class="card card-header mb-2 p-0"  style="background-color:#d2a92d">
                                <img class="ml-3" width="90%" src={{asset('img/posgrado.png')}} alt="">
                           </div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                        <div class="mb-3" >
                                            <input id="email" type="email" placeholder={{ __('E-Mail Address') }} class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                               
            
                                        <div class="mb-4">
                                            <input id="password" placeholder={{ __('Password') }} type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                        
            
                                    <div class="form-group pl-2">

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                       
                                    </div>
            
                                    <button type="submit" class="btn btn-block btn-outline-primary " >
                                        {{ __('Login') }}
                                    </button>

                                        <div>
                                            <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>

                                            <a class="btn btn-link text-danger" href={{route('register')}}>
                                                Crear una cuenta
                                            </a>
                                        </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
