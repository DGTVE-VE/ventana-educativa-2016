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
        <meta name="description" content="Ventana Educativa 2016"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/red/estiloredmesoamericana.css')}}">
        <link rel="shortcut icon" href="{{ asset('redmite.ico') }}" >
        <link rel="stylesheet" href="{{asset('css/red/estilored2.css')}}">
        <link rel="stylesheet" href="{{asset('css/red/estilored3.css')}}">
        <link rel="stylesheet" href="{{asset('css/red/bootstrap-social.css')}}">


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- efecto barra desplazamiento horizontal -->
        <!--link rel="stylesheet" href="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">
        <script src="malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="malihu-custom-scrollbar-plugin-master/usarCustomScrollbar.js"></script-->

        <!-- Estilo Header del Home-->
<!--        <link rel="stylesheet" href="{{ URL::asset('css/estiloBase.css') }}">
        Estilo Red Mesoamericana
        <link rel="stylesheet" href="{{ URL::asset('css/estiloRed.css') }}">-->

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Exo:400,600,300,700'rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="{{asset('css/red/ihover.css')}}">  
        <link rel="stylesheet" href="{{asset('css/red/animate.css')}}">

<<<<<<< HEAD
=======
        @yield('header')
>>>>>>> 1e3cf2944b7f053973e8326ca65bbae7704e207b

        <!--<link rel="stylesheet" href="css/red/full-slider.css">-->  

    </head>
    <body id="pag_principal" style="padding:0px; overflow-x:hidden">     
<!--        Script para Google Analytics de la red Mesoamericana-->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74532543-1', 'auto');
        ga('send', 'pageview');

      </script>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=876445959080347";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container-fluid" style="z-index:2; padding:0px;"> <!--data-spy="affix" data-offset-top="80"-->
            @yield('menuRedmite')
        </div>
        <div class="container-fluid">
            @yield('cuerpoRedmite')
        </div>
        <script src="{{asset('js/red/jsredmesoamericana.js')}}"></script>
    </body>
</html>