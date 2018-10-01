@include('materialize')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIIPI - Login</title>
 
    <link rel="stylesheet" media="(max-width:600px)" href={{asset('css/responsive/sm-style.css')}}>
    <link rel="stylesheet" media="(min-width:601px)" href={{asset('css/responsive/lg-style.css')}}>
    @yield('css')
  
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
          <form id="loginForm"  method="post">
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
              <input name="password" id="password" type="password"class="validate" required>
              <label for="password">Contraseña</label>
              <span class="helper-text right-align" data-error="Error" data-success="Listo"></span>
            </div>
        </div>
        <div class="actions">
          <button class="btn waves-effect bg-principal color-accent" type="submit" id="btn" >Iniciar sesión</button>
          
          <div class="row ">
            <label class=" col tx-light ">
              <input type="checkbox" class="tx-accent" name="remember">
              <span>Recordarme</span>
            </label>
            <a class="tx-light col" href={{route('register')}}>¿Olvidaste tu contraseña?</a>
          </div>
        </div>
      </form>
      </div>

  </div>
  @yield('js')
<script src="{{ url('/') }}/AjaxLogin/AjaxLogin.js"></script>
<script>
    AL = new Login({
        email:"email",
        password:"password",
        btn:"btn",
        url:"/login",
        successUrl:"/home",
        // mode:"toast" ///alert or toast
    });
    // AL.doneLogin = function(){
    //     alert('login');
    //     window.location.replace("/home");
    // };
    AL.errorLogin = function (error) {
        console.log(error)
          var toastHTML = '<span class="nunito"><i class="material-icons left">report</i>'+error.email+'</span><a class="btn-flat" style="color:#d2a92d;font-weight:500;font-size:1em;"  href="/register">Registrarme</a>';
          M.toast({html: toastHTML,displayLength:6000,classes:'rounded'});          
       
    };
</script>
</body>
</html>
