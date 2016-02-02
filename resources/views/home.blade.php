<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('title','Ventana Educativa')</title>
        <!--  App Descripción  -->
        <meta name="description" content="Ventana Educativa 2016"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<link href="css/principal.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		

        <!-- Estilo Header del Home-->
        <link rel="stylesheet" href="{{ URL::asset('css/estiloBase.css') }}">
        <!--Estilo Red Mesoamericana-->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/estiloRed.css') }}">

        <style>
			.affix {
				top: 0;
				width: 100%;
			}

			.affix + .container-fluid {
				padding-top: 70px;
			}
  
        </style>
    </head>
    <body id="pag_principal">
        <header> @include('layout/header') </header>
		<div class="container-fluid" data-spy="affix" data-offset-top="130" style="z-index:2">
			@yield('menu')
		</div>
        <div class="container-fluid">
            @yield('cuerpo')
        </div>
    </body>
</html>