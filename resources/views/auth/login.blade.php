@include('includes.resources')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - SIIPI</title>
    @yield('css')
</head>
<body>

    <div class="ui container centered grid">
        <div class="two column row stackable">
            <div class="ui card column">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eligendi impedit deleniti fugit quaerat tempora repellendus, nobis non odio amet vel officia id consequatur suscipit ratione quisquam recusandae. Totam, quibusdam!</p>
            </div>
            <div class="column one wide"></div>
                <div class="ui card column four wide">
                        <div class="content">
                            <h2 class="ui header">
                            <img class="ui image" src="{{asset('img/logo-unach.png')}}">
                                <div class="content tx-accent ">
                                  SIIPI-LOGIN
                                </div>
                            </h2>
                
                            <div class="description" style="margin-top:2em;">
                                <form action="" class="ui form">
                                    <div class="field">
                                        <input type="text" name="email" placeholder="Correo institucional">
                                    </div>    
                                    <div class="field">
                                        <input type="text" placeholder="Contraseña" name="password">
                                    </div>
                                    <div class="field right aligned">
                                        <div class="ui checkbox ">
                                            <input type="checkbox" tabindex="0" class="hidden">
                                            <label>Recordarme</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <button class="fluid ui button medium bg-primary btn-primary">Iniciar sesión</button>
                                    </div>
                                    <div class="content">
                                        <a class="align-center" href="#">Registro</a>
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