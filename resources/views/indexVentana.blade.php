<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleVentana','Venatana Educativa')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Ventana Educativa 2016. Es una plataforma digital de gestión y distribución de contenidos educativos multimedia."/>
        <meta name="keywords" content="Ventana Educativa, plataforma digital, contenidos educativos, multimedia, Canal Iberoamericano, Idiomas, Salud, Padres, Estudiantes, Educaplay, Docentes, Educamedia, Telesecundaria, Telebachillerato, Red Mesoamericana, Cultura, Biblioteca, MéxicoX">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/red/estiloredmesoamericana.css') }}" >
        <link rel="shortcut icon" href="{{ asset('redmite1.ico') }}" >
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>

        <!--<link rel="stylesheet" href="css/red/ihover.css">  
        <link rel="stylesheet" href="css/red/animate.css">-->
        <link rel="stylesheet" href="{{ asset('css/red/ihover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/red/animate.css') }}" >        

        <!--<link type="text/css" rel="stylesheet" href="http://onlinehtmltools.com/tab-generator/skins/skin3/bottom.css">-->
        <!--<link rel="stylesheet" href="css/ventana/estiloventana2.css">  
        <link rel="stylesheet" href="css/ventana/estiloventana3.css"> -->

        <link rel="stylesheet" href="{{ asset('css/ventana/estiloventana2.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/ventana/estiloventana3.css') }}" >

        <!--CDN FormHelpers-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet"/>
        <!--fin FormHelpers -->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js" type="text/javascript"></script>

        <!--script src="js/ventana/bootstrap-datepicker.js" type="text/javascript"></script-->
        <!--script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script--> <!-- efecto skin3 mení pie-->
        <!--<script type="text/javascript" src="http://onlinehtmltools.com/tab-generator/skinable_tabs.min.js"></script>  efecto skin3 mení pie-->
    <style type="text/css">
/* this would probably be in a CSS file */
#browserWarning { display:none; }
</style>
<!--[if IE 6]>
<style type="text/css">
#browserWarning { display:; }
</style>
<![endif]-->
    </head>
    <body style="background-image:url('{{ asset('imagenes/ventana/background/backgroundDefault.jpg') }}');">     
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
        <header>
            @yield('menuVentana')
        </header>
        <div class="container-fluid">
            @yield('cuerpoVentana')
        </div>
        <div>
            @yield('pieVentana')
        </div>
    </body>
</html>

<script type="text/javascript">
// check if browser is IE6 (when IE) or not FF6 (when FF)
if ((jQuery.browser.msie) && (parseInt(jQuery.browser.version) < 7)
    || ($.browser.mozilla && $.browser.version.substr(0,1) != '3')) {
        $('#browserWarning').show();
}

</script>

<script> 
    /*Scriopt para mensaje emergente de actualización de navegador*/
var $buoop = {c:2}; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}
</script> 
<?php 
Log::info('Memory Usage:'.Request::path()." - " . (memory_get_peak_usage (true)/1024/1024));
?>