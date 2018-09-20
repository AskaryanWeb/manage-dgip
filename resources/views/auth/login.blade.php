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
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700|Noto+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
</head>
<body >
  <div class="info container d-flex align-items-center justify-content-center pt-5 ">
    <div class="z-depth-3 px-lg-5 mr-lg-4 px-3 col-lg-9 col  bg-accent  color-white">
      <h2 class="noto-r mb-3">Sistema Institucional de Información de Proyectos de Investigación.</h2>
      <h4>¡Bienvenido!</h4>
      <div class="card-body">
        <h6>Esta plataforma te ofrece servicios como:</h6>
        <li>Realizar el registro de tus Proyectos de Investigación</li>
        <li>Hacer seguimiento de las solicitudes</li>
        <li>Registrar Reportes Técnicos</li>
      </div>
      <p class="pt-4 pb-3" style="font-size:0.8em;">Si tienes alguna duda o sugerencia para mejorar nuestro servicio web, mandanos un correo a diai@unach.mx</p>             
    </div>



    <div class="col-lg-6 col-md-8 col">
      <div class="z-depth-3">
        <div class="card-body valign-wrapper">
          <img class="logo" src={{asset('img/logo-unach.png')}} alt="">
          <span class="logo-title">SIIPI- UNACH</span>
        </div>

        <div class="card-body">
          <div class="input-field ">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">ejemplo@unach.mx</span>
          </div>

            <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password">Contraseña</label>
            </div>
        </div>
        <div class="border-top card-body right-align">
          <button class="btn waves-effect bg-principal color-accent col-12 mb-3" type="submit" name="action">Iniciar sesión</button>
          <a class="tx-accent" href="#">Registrarme...</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
