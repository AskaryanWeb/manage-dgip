@include('includes.resources')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro</title>
    <!-- Styles -->
    
    @yield('css')
</head>
<body class="bg-light openSans">
    <div class="ui container animated fadeIn registro" >

        <div class="ui segment bg-accent" >
            <div class="ui medium header tx-primary">
                Registro
            </div>
        </div>              
        <div class="ui segment content">
            
            <form method="POST" action="{{route('register')}}" id="regform"  novalidate> 
                @csrf
        
                                                            
            <div class="content grid">

                <section class="mb-3 ui small form hide" id="form1">

                    <div class="ui horizontal divider">
                        <div class="ui medium header tx-accent">
                            Datos personales
                        </div>
                    </div>                    
                    <div class="three fields">
                        <div class="field required">
                            <label>Nombre</label>
                            <input placeholder="" type="text" name="name" required>
                        </div>
                        <div class="field required">
                            <label>Primer apellido</label>
                            <input placeholder="" type="text" name="paterno" required>
                        </div>
                        <div class="field required">
                            <label>Segundo apellido</label>                            
                            <input placeholder="" type="text" name="materno" required>
                        </div>                        
                    </div>
                    <div class="three fields equal required">
                        <div class="field ">
                            <label>Telefono</label>
                            <input placeholder="" type="text" name="telefono" required>
                        </div>
                        <div class="field three wide desktop required">
                            <label>Genero</label>                            
                            <select name="genero" class="ui dropdown" required>
                                <option value=""></option>
                                <option value="f">Mujer</option>
                                <option value="m">Hombre</option>
                            </select>
                        </div>   
                    </div>                    
                </section>

                <section class="mb-3 hide ui small form" id="form2">
                    <div class="ui horizontal divider">
                        <div class="ui medium header tx-accent">
                                Datos académicos
                        </div>
                    </div>
    
                    <div class="three fields row ">
                        <div class="field three wide required">
                            <label>Numero de plaza</label>
                            <input placeholder="" type="text" name="plaza" required>
                        </div>
    
                        <div class="field required">
                            <label>Unidad académica</label>                            
                            <select name="unidad_academica" class="ui dropdown" required>
                                <option></option>
                                <option value="41101">Contaduría y Administración C1</option>
    
                            </select>
                        </div> 
    
                        <div class="field four wide desktop required">
                            <label>Grado académico</label>                            
                            <select name="grado_academico" class="ui dropdown" required>
                                <option></option>
                                <option value="licenciatura">Licenciatura</option>
                                <option value="maestria">Maestria</option>
                                <option value="doctorado">Doctorado</option>
                            </select>
                        </div> 
                    </div>                    
                </section>

                <section class="mb-3 hide ui small form" id="form3">
                    <div class="ui horizontal divider">
                        <div class="ui medium header tx-accent">
                                Datos de cuenta
                        </div>
                    </div>
    
                    <div class="three fields ">
                    <div class="field five wide required">
                            <label>Correo institucional</label>
                            <input placeholder="ejemplo@unach.mx" autocomplete="username" type="text" name="email" required>
                        </div>
    
                        <div class="field required">
                            <label>Contraseña</label>                            
                            <input placeholder="" type="password" name="password" autocomplete="new-password" required>
                        </div>    
                        <div class="field ">
                            <label>Confirmar contraseña</label>                            
                            <input placeholder="" type="password" name="password_confirmation" autocomplete="new-password" required>
                        </div>                      
                    </div>  
                </section>

            </form>
            </div>              
        </div>
        <div class=" mb-3">
            <div class="ui buttons fluid large ">
                <button class="ui labeled  icon button" id="back" onclick="nextStep(-1)">
                  <i class="left chevron icon"></i>
                  Atras
                </button>
    
                <button class="ui color bg-accent  btn-accent tx-white right labeled icon button" id="next" onclick="nextStep(1)">
                  Siguiente
                  <i class="right chevron icon"></i>
                </button>
            </div>           
        </div>

        <div class="ui grid mt-3 mb-3 link nine wide centered " >
            ¿Ya tienes cuenta?
            <a class="" href="{{route('login')}}" style="font-size:1.3em">Iniciar sesión</a>
        </div>           

   @yield('js')
      
   <script src="{{asset('js/registro.js')}}"></script>
</body>
</html>