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
        
        <link rel="shortcut icon" href="{{ asset('redmite.ico') }}" >
        <link rel="stylesheet" href="{{ asset('css/red/estilored2.css') }}">
        <link rel="stylesheet" href="{{ asset('css/red/estilored3.css') }}">
        <link rel="stylesheet" href="{{ asset('css/red/bootstrap-social.css') }}">
        <link rel="stylesheet" href="{{ asset('css/red/estiloredmesoamericana.css') }}">

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

        <link rel="stylesheet" href="{{url('css/red/ihover.css')}}">  
        <link rel="stylesheet" href="{{url('css/red/animate.css')}}">

        @yield('header')

        <!--<link rel="stylesheet" href="css/red/full-slider.css">-->  

    </head>
    <body id="pag_principal" style="padding:0px; overflow-x:hidden">     
        <!--        Script para Google Analytics de la red Mesoamericana-->
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
<!--        Sirve para que navbar-fixed-top no oculte parte del cuerpo-->
        <nav class="navbar navbar-default "></nav>
<!--        //-->
        <nav class="navbar yamm navbar-default navbar-fixed-top" style='height: 70px' role="navigation" >

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="redmite">
                    <img class="img-responsive subeHorizontal" src="{{url ('imagenes/red/LogoRed/logoredmesoamericana.png')}}" alt="Logo Red Mesoamericana"/>
                </a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="text-uppercase fondoMenu"><a href="redmite">INICIO</a></li>
                    <li class="text-uppercase fondoMenu"><a href="quienesSomos">¿QUIÉNES SOMOS?</a></li>
                    <li class="dropdown menu-large">
                        <a href="#" class="dropdown-toggle text-uppercase fondoMenu" data-toggle="dropdown">Eventos <b class="caret"></b></a>				
                        <ul class="dropdown-menu yamm-fw">
                            <li class="col-md-12">
                                <ul>
                                    <li class="dropdown-header text-center"><h3>INNTEDU 2016</h3></li>
                                    <div class="col-md-2"><img class="image-responsive" src="{{url ('imagenes/red/eventos/logoinntedu.jpg')}}"></div>
                                    <div class="col-md-4">
                                        <h4 class="text-uppercase text-center">Descripción</h4>
                                        <p class="text-justify">El Primer Encuentro Internacional de Innovación y Tecnología para la Educación se realizará los próximos 11, 12 y 13 de octubre, en las instalaciones de Centro Nacional de la Artes de la Ciudad de México. </p>
                                        <p class="text-justify">Este evento tiene como objetivo dar a conocer la importancia del uso de las Tecnologías de la Información y Comunicación en la labor docente, como formas de potencializar el proceso de enseñanza y aprendizaje, a partir de nuevos modelos pedagógicos, así como metodologías que orienten hacia una educación de calidad. </p>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="text-uppercase text-center">Programa</h4>
                                        <ul>
                                            <li>Conferencias Magistrales</li>
                                            <li>Conversatorios con expertos en la educación</li>
                                            <li>Talleres de habilidades digitales para el docente</li>
                                            <li>TED Talk Docentes de México</li>
                                            <li>Expo Innovación y Tecnología para la Educación </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="text-uppercase text-center">Contáctanos</h4>
                                        <table>
                                            <tr>
                                                <td><span class="fa fa-map-marker text-center"></span></td>
                                                <td style="padding-left:3%;" class="text-justify">Av. Circunvalación s/n, esquina Tabiqueros,
                                                    Col. Morelos, Del. Venustiano Carranza.
                                                    C.P. 15270, Ciudad de México.</td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-phone text-center"></span></td>
                                                <td style="padding-left:3%;">
                                                    <p>(55) 3601 8100 <br>
                                                        01 800 2284 883 <br>
                                                        01 866 5729 837
                                                    </p>							
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="fa fa-envelope text-center"></span></td>
                                                <td style="padding-left:3%;">redmite@televisioneducativa.gob.mx</td>
                                            </tr>
                                        </table>
                                    </div>                  
                                </ul>
                            </li>

                        </ul>

                    </li>
                    <li class="text-uppercase fondoMenu"><a href="{{url ('publicaciones')}}">PUBLICACIONES</a></li>
                    <li class="text-uppercase fondoMenu"><a href="{{url ('contacto')}}">CONTACTO</a></li>
                </ul>

            </div>
        </nav>
        <div class="container-fluid" > <!--data-spy="affix" data-offset-top="80"-->
            @yield('menuRedmite')
        </div>
        <div class="container-fluid">
            @yield('cuerpoRedmite')
        </div>
        <script src="{{ asset('js/red/jsredmesoamericana.js')}}"></script>
    </body>
</html>