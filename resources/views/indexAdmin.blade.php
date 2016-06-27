<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang='en'>
    <head>
        <title>@yield('titleAdmin','Administración')</title>
        <!--  App Descripción  -->
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta name="description" content="Sección de Administración"/>
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

        <link href="css/admin/bootstrap.min.css" rel="stylesheet">
        <link href="css/admin/simple-sidebar.css" rel="stylesheet">

        @yield('header')
    </head>
    <body>
        <nav class="navbar navbar-default no-margin">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header fixed-brand">
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/admin/logoventana.png','Ventana Educativa', ['class'=>'image-responsive imgLogo']) }}
                    </a>                    
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                </ul>
            </div><!-- bs-example-navbar-collapse-1 -->
        </nav>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">

                    <li class="active">
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa  fa-book fa-stack-1x "></i></span> Biblioteca</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#">link1</a></li>
                            <li><a href="#">link2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-binoculars fa-stack-1x "></i></span> Conocenos</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Cultura</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span> Educamedia</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li> 
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-film fa-stack-1x "></i></span> Educaplay</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-globe fa-stack-1x "></i></span> Redmite</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li>                    
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-md fa-stack-1x "></i></span> Salud</a>
                        <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                            <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                        </ul>
                    </li>                    
                </ul>
            </div><!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid xyz">
                    <div class="row">
                        <div class="col-lg-12">
                            </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="js/admin/sidebar_menu.js"></script>
    </body>
</html>
<?php
Log::info('Memory Usage:' . Request::path() . " - " . (memory_get_peak_usage(true) / 1024 / 1024));
?>