<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleDocente','Docente')</title>
        <!--  App Descripción  -->
        <meta name="description" content="Ventana Educativa"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{ asset('css/cultura/hover.css') }}" media="all" >
        <link rel="stylesheet" href="{{ asset('css/red/animate.css') }}" >        

        <!--	-------------------------- Estilos para encabezado ------------------------------------		-->
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca2.css') }}" > 
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca3.css') }}" > 
        <link rel="stylesheet" href="{{ asset('css/cultura/estilocultura.css') }}" >      

        @yield ('estilos')

        <!-- jQuery library -->
        <!--con esta no funciona el calendario-->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!--links para calendario-->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        
        @yield ('scripts')
    </head>
    <body style="background-image:url('{{ asset('imagenes/docente/backgroundDocente.jpg') }}');">     
        <header>
            @yield('menuDocente')
        </header>
        <div class="container-fluid">
            @yield('cuerpoDocente')
        </div>
    </body>
</html>

<!--        Script para Google Analytics       -->
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

