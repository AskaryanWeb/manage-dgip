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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
  <div class="" style="width:90%; margin:auto; margin-top:7rem">
    <div class="row" style="display:flex; justify-content:space-between;">
      <div class="bg-accent">
        <h4 class="color-white">Sistema Institucional de Información de Proyectos de Investigación.</h4>
      </div>
      <div class="col s7" style="margin-left:1.5rem">
        <div class="card">
          <div class="card-title left-align valing-wrapper">
            <picture style="margin:10px;">
              <img height="65px" src={{asset('img/logo_unach.png')}} alt="">
            </picture>
              <span>SIIPI - UNACH</span>
          </div>

          <div class="card-content">
            <div  style="margin-bottom:0px !important;" class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div  style="margin-top:0px !important;"class="row">
              <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Contraseña</label>
              </div>
            </div>
            <div class="card-actions row">
              <button class="btn waves-effect bg-primary col s12" type="button" name="button">Ingresar </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
