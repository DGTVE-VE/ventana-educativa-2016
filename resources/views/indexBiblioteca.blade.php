<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleBiblioteca','Biblioteca')</title>
        <!--  App Descripción  -->
        <meta name="description" content="Ventana Educativa 2016"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >
		
		<!-- CDN JQuery 1.12.3 -->
		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="crossorigin="anonymous"></script>
        
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen">

        <link rel="stylesheet" href="{{ asset('css/cultura/hover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/red/animate.css') }}" >        
        <link rel="stylesheet" href="{{ asset('css/biblioteca/estiloBiblioteca.css') }}" >        

        <!--	-------------------------- Estilos para encabezado ------------------------------------		-->
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca2.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca3.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/biblioteca/estiloBiblioteca3.css') }}" >
        @yield ('estilos')

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        @yield ('scripts')

    </head>
    <body style="background-image:url('{{ asset('imagenes/biblioteca/backgroundBiblioteca.jpg') }}');">     
        <header>
            @yield('menuBiblioteca')
        </header>
        <div class="container-fluid">
            @yield('cuerpoBiblioteca')
        </div>
    </body>
</html>

<!--        Script para Google Analytics  -->
<script>
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-75232922-1', 'auto');
ga('send', 'pageview');

</script>
<?php
Log::info('Memory Usage:' . Request::path() . " - " . (memory_get_peak_usage(true) / 1024 / 1024));
?>
