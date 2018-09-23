<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIIPI - Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700|Noto+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" media="(max-width:600px)" href={{asset('css/responsive/sm-style.css')}}>
    <link rel="stylesheet" media="(min-width:601px)" href={{asset('css/responsive/lg-style.css')}}>
    <!-- Materializecss compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Materialize-Stepper CSS -->
    <link rel="stylesheet" href={{asset('css/materialize-stepper.min.css')}}>
  
</head>
<body >
  <div class="info ">
    <div class="pnel-inicio z-depth-4  bg-accent  color-white">
      <h2 class="noto-r">Sistema Institucional de Información de Proyectos de Investigación.</h2>
      <h4>¡Bienvenido!</h4>
      <div class="body-inicio">
        <h6>Esta plataforma te ofrece servicios como:</h6>
        <li>Realizar el registro de tus Proyectos de Investigación</li>
        <li>Hacer seguimiento de las solicitudes</li>
        <li>Registrar Reportes Técnicos</li>
      </div>
      <p class="" style="font-size:0.8em;">Si tienes alguna duda o sugerencia para mejorar nuestro servicio web, mandanos un correo a diai@unach.mx</p>             
    </div>


    
      @csrf
      <div class="z-depth-4 pnel-login ">
          <form id="loginForm" action={{route('login')}} method="post">
        <div class="logo valign-wrapper">
          <img class="" src={{asset('img/logo-unach.png')}} alt="">
          <span class="">SIIPI- UNACH</span>
        </div>

        <div class="body-login">
          <div class="input-field " >
            <input name="email" id="email" type="email" required  class="validate">
            <label for="email">Correo</label>
            <span class="helper-text right-align" data-error="Error" data-success="Listo">ejemplo@unach.mx</span>
          </div>

            <div class="input-field">
              <input name="password" id="password" type="password"class="validate">
              <label for="password">Contraseña</label>
            </div>
        </div>
        <div class="actions">
          <button class="btn waves-effect bg-principal color-accent" type="submit" id="btn" >Iniciar sesión</button>
          <span>
          <a class="tx-accent" href={{route('register')}}>Registrarme...</a>
          </span>
        </div>
      </form>
      </div>

  </div>
 <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <!-- Materializecss compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <!-- jQueryValidation Plugin (optional) -->
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> --}}
<script src={{asset('js/validaciones.js')}}></script>
 <!--Import Materialize-Stepper JavaScript -->
<script src={{asset('js/materialize-stepper.min.js')}}></script>

<script src="{{ url('/') }}/AjaxLogin/AjaxLogin.js"></script>
<script>
    AL = new Login({
        email:"email",
        password:"password",
        btn:"btn",
        url:"/login",
        successUrl:"/",
        mode:"toast" ///alert or toast
    });
    /*AL.doneLogin = function(){
        alert('login');
    };
    AL.errorLogin = function (error) {
        console.log(error)
    };*/
</script>
</body>
</html>
