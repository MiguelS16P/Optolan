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
        <link rel="stylesheet" href="{{ asset('css/menu-lateral.css') }}">       
        <!--JS Fontawesom-->
        <script defer src="{{ asset('js/all.min.js') }}"></script>           

    </head>
    <body>
        
        <section id="cabecera">   
            @include("layouts.cabecera-superior")      
            @include("layouts.menu-principal")   
            @yield("cabecera") 

        </section>

        <section id="cuerpo">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            @yield("menu-lateral")
                            
                        </div>
                        <div class="col-9">
                            @yield("cuerpo")

                        </div>
                    </div>
                </div>
            </div>
            

        </section>

        <section id="pie">
            @include("layouts.footer")
            @yield("pie")

        </section>

        
        <!--JS-->
        <script src="{{ asset('js/jquery-3.4.0.slim.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        
        <!--JS para layouts-->
        <script src="{{ asset('js/carusel-articulos.js') }}"></script>
        <script src="{{ asset('js/menu-lateral.js') }}"></script>

        
        
    </body>
</html>
