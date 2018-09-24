@section('css')

<link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,500,700|Noto+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800'" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo:400,700,800,900">
<link rel="stylesheet" href={{asset('css/style.css')}}>
<!-- Materializecss compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import Materialize-Stepper CSS -->
<link rel="stylesheet" href={{asset('css/materialize-stepper.min.css')}}>    
@endsection

@section('js')
<!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <!-- Materializecss compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <!-- jQueryValidation Plugin (optional) -->
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> --}}
<script src={{asset('js/scripts.js')}}></script>
 <!--Import Materialize-Stepper JavaScript -->
<script src={{asset('js/materialize-stepper.min.js')}}></script>
@endsection