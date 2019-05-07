<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">        
        <!--Bootstrap-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">       
        <!--CSS Layouts-->     
        <link rel="stylesheet" href="{{ asset('css/carusel-articulos.css') }}">       
        <!--JS Fontawesom-->
        <script defer src="{{ asset('js/all.min.js') }}"></script>           

    </head>
    <body>
        
        <div class="cabecera">   
            @include("layouts.cabecera-superior")      
            @include("layouts.menu-principal")   
            @yield("cabecera") 

        </div>

        <div class="cuerpo">
            @yield("cuerpo")

        </div>

        <div class="pie">
            @include("layouts.footer")
            @yield("pie")

        </div>

        
        <!--JS-->
        <script src="{{ asset('js/jquery-3.4.0.slim.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!--JS para layouts-->
        <script src="{{ asset('js/carusel-articulos.js') }}"></script>
        
        
    </body>
</html>
