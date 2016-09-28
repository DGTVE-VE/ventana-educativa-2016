<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleMediateca','Educamedia')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Educamedia: Telesecundaria y Telebachillerato. Brindar a los grupos más vulnerables del país educación secundaria y bachillerato, con una sólida formación en cada disciplina con principios éticos y de solidaridad social."/>
        <meta name="keywords" content="Ventana Educativa, plataforma digital, contenidos educativos, multimedia, Canal Iberoamericano, Idiomas, Salud, Padres, Estudiantes, Educaplay, Docentes, Educamedia, Telesecundaria, Telebachillerato, Red Mesoamericana, Cultura, Biblioteca, MéxicoX"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <!--metadatos para facebook-->
               
        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen">

        <link rel="stylesheet" href="{{ asset('css/red/ihover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/red/animate.css') }}" >        

        <!--	-------------------------- Estilos para encabezado ------------------------------------		-->
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca2.css') }}" >

        <!--	-------------------------- Estilos para menus de Telesecundaria, Telebachillerato y redes sociales-->
        <link rel="stylesheet" href="{{ asset('css/mediateca/estilomediateca3.css') }}" >

        @yield ('estilos')

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        @yield ('scripts')

    </head>
    <body style="background-image:url('{{ asset('imagenes/mediateca/background/backgroundAzul.jpg') }}');">     
        <header>
            @yield('menuMediateca')
        </header>
        <div class="container-fluid">
			<div class="col-xs-12 visible-xs-block" style="padding:4%"></div>
			<div class="col-sm-12 visible-sm-block" style="padding:2%"></div>
            @yield('cuerpoMediateca')
        </div>
        <div class="container-fluid">
            @yield('pieMediateca')
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

	/*		*****	Cambio de color iconos redes sociales		*****		*/
	if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1 ){
		document.body.style.backgroundAttachment = 'scroll';
	}else{
		if($(window).width()<'992'){
			$('.cambiacolorredesSociales').addClass('iconoBlanco');
			$('.cambiacolorredesSociales').removeClass('cambiacolorredesSociales');
		}
	}
	
	/*		*****	Función que llama función que genera breadcrumbs		*****		*/
	function imprimeBreadCrumbs(){
		var paginaActual = window.location.href;
		console.log(paginaActual);
		$.ajax({
			method: "GET",
			url: "{{url('educamedia/breadcrumbs')}}",
			data: {url: paginaActual},
			error: function (ts) {
				console.log(ts.responseText);
			}})
			.done(function (msg) {
					//console.log("Correcto breadcrumbs: " + msg);
					$('#parrafoBreadcrumb').html(msg);
			});
	}
	imprimeBreadCrumbs();

</script>

<?php 
Log::info('Memory Usage:'.Request::path()." - " . (memory_get_peak_usage (true)/1024/1024));
?>
