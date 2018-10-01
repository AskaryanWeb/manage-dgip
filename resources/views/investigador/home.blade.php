@extends('layouts.app')

@section('contenido')
    <div class="ui container grid centered">
        <div class="ui column aligned centered" style="transform:translateY(9rem)">
                <div class="ui content">
                        <img src="{{asset('img/project2.svg')}}" alt="" width="30%">
                    </div>
                    <h2 class="ui header" >
                        <div class="content">
                            Crea tu primer proyecto
                            <div class="sub header">Así podrás iniciar tu registro y dar seguimiento del proceso.</div>

                            <a href="#" class="ui icon button primary mt-2">Nuevo proyecto&nbsp;&nbsp;<i class="icon add"></i></a>
                        </div>
                    </h2>               
        </div>
    </div>
@endsection