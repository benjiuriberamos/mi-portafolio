@extends('template._base')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/laravel.css') }}">
@endsection

@section('content')

<section class="b5">
    <div class="b5_autopista" id="autopista">
        <div class="b5_auto" id="auto">
            Symfony
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
    {{-- 
    <p>
        Hola estos son mis proyectos con symfony:
        <ul>
            <li>
                1 Proyecto hecho con symfony 6.4:
                <ol>
                    <li>Herramientas de despliegue: nginx, mysql 5.7, php 8.2, ubuntu 22</li>
                    <li>Link: <a href="http://almacen.benjadev.shop" targe="_blank">Ver</a></li>
                    <li>
                        Puedes: acceder a la plataforma para poder visualizar.<br>
                        Usuario: admin@admin.com <br>
                        Password: 123456789
                    </li>
                </ol>
            </li>
            <li>
                2 Proyecto almacen de productos:
                <ol>
                    <li>Herramientas de desarrollo: git, bootstrap, Framework symfony</li>
                    <li>Herramientas de despliegue: nginx, mysql 5.7, php 8.2, ubuntu 22</li>
                    <li>Link: <a href="http://almacen.benjadev.shop" targe="_blank">Ver</a></li>
                    <li>
                        Puedes: acceder a la plataforma para poder visualizar.<br>
                        Usuario: admin@admin.com <br>
                        Password: 123456789
                    </li>
                </ol>
            </li>
            <li></li>
            <li></li>
        </ul>
    </p>
     --}}
</section>

@endsection

@section('js')
<script src="{{ asset('js/laravel.js')}}" ></script>

    
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Symfony | Proyectos</title>
</head>
<body>
    
</body>
</html>