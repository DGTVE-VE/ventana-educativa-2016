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

        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Exo:400,600,300,700'rel='stylesheet' type='text/css'>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/javascript" rel="stylesheet">
        <link href="css/conocenos/conocenos.css" rel="stylesheet">

        @yield('scripts')
    </head>
    <body>
        <header>
            @yield('menuAConocenos')
        </header>
        <div class="container-fluid">
            @yield('cuerpoConocenos')
        </div>
        <!-- jQuery -->
        <script src="js/conocenos/conocenos.js"></script>
    </body>
</html>
<?php
Log::info('Memory Usage:' . Request::path() . " - " . (memory_get_peak_usage(true) / 1024 / 1024));
?>