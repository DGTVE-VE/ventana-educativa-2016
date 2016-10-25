<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleRedmite','Red Mesoamericana')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Red Mesoamericana de Investigación y Tecnología Educativa. Es un espacio para que los profesionales en educación realicen estudios, artículos, propuestas y análisis, en torno al uso de las TIC en la educación básica"/>
        <meta name="keywords" content="Ventana Educativa, plataforma digital, contenidos educativos, multimedia, Canal Iberoamericano, Idiomas, Salud, Padres, Estudiantes, Educaplay, Docentes, Educamedia, Telesecundaria, Telebachillerato, Red Mesoamericana, Cultura, Biblioteca, MéxicoX">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <!--facebook metas-->

        <meta property="og:url"                content="http://ventana.televisioneducativa.gob.mx/redmite" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="Red Mesoamericana de Investigación y Tecnología Educativa" />
        <meta property="og:description"        content="La Red Mesoamericana de Investigación y Tecnología Educativa, 
              nace de las propuestas resultantes del Primer Encuentro de Investigadores,
              Evaluadores y Técnicos en el Diseño de Recursos Educativos,
              celebrado en Costa Rica, el pasado 2015; en donde se destacó la importancia
              de conformar un espacio para que los profesionales en educación realicen estudios,
              artículos, propuestas y análisis, en torno al uso de las TIC en la educación básica,
              su funcionamiento como medio articulador de la comunidad escolar, la renovación del
              papel docente, así como la identificación de mecanismos orientados a nuevas
              metodologías y modelos pedagógicos, que permitan ofrecer una calidad educativa en la
              región mesoamericana." />
        <meta property="og:image"              content="http://ventana.televisioneducativa.gob.mx/imagenes/red/compartirfacebook.jpg" />

        <!--twitter metas-->

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Red_Mesoamerica">
        <meta name="twitter:creator" content="@SarahMaslinNir">
        <meta name="twitter:title" content="Red Mesoamericana de Investigación y Tecnología Educativa">
        <meta name="twitter:description" content="La Red Mesoamericana de Investigación y Tecnología Educativa, 
              nace de las propuestas resultantes del Primer Encuentro de Investigadores,
              Evaluadores y Técnicos en el Diseño de Recursos Educativos,
              celebrado en Costa Rica, el pasado 2015; en donde se destacó la importancia
              de conformar un espacio para que los profesionales en educación realicen estudios,
              artículos, propuestas y análisis, en torno al uso de las TIC en la educación básica,
              su funcionamiento como medio articulador de la comunidad escolar, la renovación del
              papel docente, así como la identificación de mecanismos orientados a nuevas
              metodologías y modelos pedagógicos, que permitan ofrecer una calidad educativa en la
              región mesoamericana.">
        <meta name="twitter:image" content="http://ventana.televisioneducativa.gob.mx/imagenes/red/compartirfacebook.jpg">

        <link rel="stylesheet" href="{{asset('css/red/estiloredmesoamericana.css')}}"/>
        <link rel="shortcut icon" href="{{ asset('redmite.ico') }}" />
        <link rel="stylesheet" href="{{asset('css/red/estilored2.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/red/estilored3.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/red/bootstrap-social.css')}}"/>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Exo:400,600,300,700'rel='stylesheet' type='text/css'/>

        <link rel="stylesheet" href="{{asset('css/red/ihover.css')}}"/>  
        <link rel="stylesheet" href="{{asset('css/red/animate.css')}}"/>
        <!--	Libreria Parallax	-->
        <script src="{{url('js/parallax.js-1.4.2/parallax.min.js')}}"></script>

        @yield('header')
    </head>
    <body id="pag_principal" style="padding:0px; overflow-x:hidden">

        <div id="fb-root"></div>
        <div class="container-fluid" style="z-index:2; padding:0px;">
            @yield('menuRedmite')
        </div>
        <div class="container-fluid">
            @yield('cuerpoRedmite')
        </div>
        <script src="{{asset('js/red/jsredmesoamericana.js')}}"></script>
    </body>
</html>
<script src="{{url('js/red/index.js')}}"></script>
<?php
    Log::info('Memory Usage:' . Request::path() . " - " . (memory_get_peak_usage(true) / 1024 / 1024));
?>