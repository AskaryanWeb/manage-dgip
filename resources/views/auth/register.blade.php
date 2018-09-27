@include('includes.resources')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <!-- Styles -->
    
    @yield('css')
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="pt-5">
                <div class="card shadow  mt-5" >
   
                        <div class="card card-header mb-2 p-0"  style="background-color:#d2a92d">
                            <img class="ml-3" width="60%" src={{asset('img/posgrado.png')}} alt="">
                        </div>
    
                    <div class="card-body">
                        <form method="POST" novalidate action="{{ route('register') }}">
                            @csrf
    
                                <div class="mb-3 row mx-1">
                                    <input id="name" class="col form-control"  placeholder=Nombre type="text" name="name" value="{{ old('name') }}" required autofocus>
                                    <input class="form-control col mx-2 " name="paterno" type="text" placeholder="Primer apellido" required >
                                    <input class="form-control col" placeholder="Segundo apellido " name="materno" type="text">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>


    
                                <div class="row">
                                    <div class="col form-group">
                                        <input class="form-control" type="text" placeholder="Numero de plaza" name="plaza">
                                    </div>
                                    <div class="mb-3 col form-group">
                                        <input id="email" placeholder={{ __('E-Mail Address') }} type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>            
                                    <input placeholder="unidad academica" type="text" name="ua" class="form-control col">                        
                                </div>

    
                                <div class="mb-3">
                                    <input id="password" placeholder={{ __('Password') }} type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            
                                <div class="mb-3">
                                    <input id="password-confirm" placeholder={{ __('Confirm Password') }} type="password" class="form-control" name="password_confirmation" required>
                                </div>
    
                                <button type="submit" class="btn btn-outline-primary btn-block mb-3 mt-4">
                                    {{ __('Register') }}
                                </button>
 
                            ¿Ya tienes cuenta? <a class="btn btn-link" href={{route('login')}}>Iniciar sesión</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @yield('js')
</body>
</html>