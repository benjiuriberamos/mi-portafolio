@extends('template._base')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/laravel.css') }}">
@endsection

@section('content')

<section class="b5">
    <div class="b5_autopista" id="autopista">
        <div class="b5_auto" id="auto">
            Node
        </div>
        {{-- <div class="b5_auto" id="auto">
        </div> --}}
    </div>
    <div class="controls">
        {{-- <button class="control-left">Left</button>
        <button class="control-rigth">Rigth</button>
        <button class="control-bottom">Bottom</button>
        <button class="control-top">Top</button> --}}
        <button class="control-bottom" id="btn-start">Start</button>
        <button class="control-bottom" id="btn-stop">Stop</button>
    </div>
</section>

<section class="b6">
    {{-- <p>
        Hola estos son mis proyectos con laravel:
        <ul>
            <li>
                1 Proyecto lavanderia:
                <ol>
                    <li>El despliegue esta hecho con docker, tengo un contenedor nginx, y otro contenedor con php8.0. </li>
                    <li>Támbien se esta usando el contenedor general de base de datos Mysql. Para el fronted se esta usando el motor de plantila de laravel, blade.</li>
                </ol>
            </li>

            <li></li>
            <li></li>
        </ul>
    </p> --}}
</section>

@endsection

@section('js')
<script src="{{ asset('js/laravel.js')}}" ></script>

    
@endsection