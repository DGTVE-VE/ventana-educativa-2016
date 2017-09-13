<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleEducaplay','Educaplay')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Educaplay. Contenido multimedia publicado por la Dirección General de Televisión Educativa y la Muestra Iberoamericana de Televisoras Educativas y Culturales."/>
        <meta name="keywords" content="Ventana Educativa, plataforma digital, contenidos educativos, multimedia, Canal Iberoamericano, Idiomas, Salud, Padres, Estudiantes, Educaplay, Docentes, Educamedia, Telesecundaria, Telebachillerato, Red Mesoamericana, Cultura, Biblioteca, MéxicoX">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen">

        <link rel="stylesheet" href="{{ asset('css/red/ihover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/red/animate.css') }}" >        

        <!--	-------------------------- Estilos para encabezado ------------------------------------		-->
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca2.css') }}" >

        @yield ('estilos')
        
        <link rel="stylesheet" href="{{ asset('css/educaplay/clasesEstiloVOD.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/educaplay/estilovod3.css') }}" >

        <!-- jQuery library -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
       
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
		<script src="{{ asset('js/educaplay/carreteTemporadas.js') }}"></script>
        @yield ('scripts')
        
    </head>
    <body>     
        <header>
			<div class="container-fluid">
				@yield('menuEducaplay')
			</div>
        </header>
        <div class="container-fluid">
            @yield('cuerpoEducaplay')
        </div>
        <div class="container-fluid">
            @yield('pieEducaplay')
        </div>
    </body>
</html>

<!--        Script para Google Analytics de la red Mesoamericana	-->
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