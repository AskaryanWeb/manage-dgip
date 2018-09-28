@include('includes.resources')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - SIRPI</title>
    @yield('css')
</head>
<body>

    <div class="ui container centered grid principal" >
        <div class="two column row stackable middle aligned">
            <div class="ui raised card column bg-accent ">
                <div class="content muli ">
                        <div class="ui huge header tx-white  muli">
                            <p>Sistema Institucional de Registro de Proyectos de Investigación.</p>
                        </div>
                        <div class="ui large header tx-white muli">
                            <p>¡Bienvenido!</p>
                        </div>
                        
                        <div class="ui medium header tx-white">
                            <p>Esta plataforma te ofrece servicios como:</p>
                        </div>
                        <div class="description tx-white">
                            <li>Realizar el registro de tus Proyectos de Investigación</li>
                            <li>Hacer seguimiento de las solicitudes</li>
                            <li>Registrar Reportes Técnicos</li>
                        </div>
                        <div class="info-footer tx-white">
                            <p>Si tienes alguna duda o sugerencia para mejorar nuestro servicio web, mandanos un correo a diai@unach.mx</p>                                                                
                        </div>
                </div>
                
            </div>
            <div class="column one wide"></div>

            <div class=" column six wide" style="min-width:320px; ">
            

                @if ($errors->has('email'))
                    <div class="ui negative message">
                        {{-- <i class="close icon"></i> --}}
                        <div class="header">
                          <i class="icon info circle"></i> Lo sentimos, ha ocurrido un problema
                        </div>
                        <p>{{$errors->first('email')}}</p>
                    </div>
                    @endif       
                
                <div class="ui segment  piled" >
                    <h2 class="ui header ">
                    <img  src="{{asset('img/logo-unach.png')}}">
                        <div class="content tx-accent ">
                          SIRPI - Login
                        </div>
                    </h2>
        
                    <div class="description" style="margin-top:2em;">
                    <form action="{{route('login')}}" method="POST" class="ui form">
                            @csrf
                            <div class="field">
                                <input type="text" name="email" placeholder="Correo institucional" required>
                            </div>    
                            <div class="field">
                                <input type="password" placeholder="Contraseña" name="password" required>
                            </div>
                            <div class="ui grid stackable relaxed ">
                                <div class="field seven wide  column">
                                    <div class="ui checkbox ">
                                        <input type="checkbox" tabindex="0" class="hidden" {{ old('remember') ? 'checked' : '' }}>
                                        <label>Recordarme</label>
                                    </div>
                                </div>
                                <a class="nine wide column" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>                                        
                            </div>
                            <div class="content login-btn">
                                <button class="fluid ui button medium bg-primary btn-primary">Iniciar sesión</button>
                            </div>
                            <div class="row">
                                <a class="column" href="{{route('register')}}">Registro</a> 
                            </div>                              
                            
                        </form>
                    </div>
                          
                </div>    
           
            </div>
        </div>
    </div>
    @yield('js')
</body>
</html>