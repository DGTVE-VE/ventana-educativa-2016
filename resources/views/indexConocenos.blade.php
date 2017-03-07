<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleAdmin','Conocenos')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Sección Conoce Ventana Educativa"/>
        <meta name="keywords" content="Ventana Educativa, plataforma digital, contenidos educativos, multimedia, Canal Iberoamericano, Idiomas, Salud, Padres, Estudiantes, Educaplay, Docentes, Educamedia, Telesecundaria, Telebachillerato, Red Mesoamericana, Cultura, Biblioteca, MéxicoX">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        
                <!--facebook metas-->

        <meta property="og:url"                content="http://ventana.televisioneducativa.gob.mx/conocenos" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="Ventana Educativa" />
        <meta property="og:description"        content="" />
        <meta property="og:image"              content="http://ventana.televisioneducativa.gob.mx/imagenes/conocenos/compartir.jpg" />

        <!--twitter metas-->

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="">
        <meta name="twitter:creator" content="@SarahMaslinNir">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="http://ventana.televisioneducativa.gob.mx/imagenes/conocenos/compartir.jpg">

        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
<!--        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Exo:400,600,300,700'rel='stylesheet' type='text/css'>-->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/javascript" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/ventana/estiloventana2.css') }}" >
        <link href="{{ asset('css/conocenos/conocenos.css') }}" rel="stylesheet">        
        @yield('scripts')
    </head>
    <style>
        body{
            font-family: 'Exo', sans-serif;
        }
    </style>
    <body>
        <header>
            @yield('menuConocenos')
        </header>
        <div id="cuerpoHTML" class="container-fluid" style="padding:0; overflow:hidden;">
            @yield('cuerpoConocenos')
        </div>
        <!-- jQuery -->
        <script src="{{url('js/conocenos/conocenos.js')}}"></script>
    </body>
</html>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCKFRHjU3HCfrtam4fusUFE52wbVvRbCKM"></script> 
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