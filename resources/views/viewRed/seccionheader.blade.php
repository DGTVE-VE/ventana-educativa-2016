<style>
	#barraSecundaria.affix{
		top:0;
		width:100%;
	}
	#barraSecundaria.affix + .container-fluid{
		padding-top:70px;
	}
	.tablaMenuApps{
	    position: fixed; right:3%;
		box-shadow: 5px 5px 1px rgba(0, 0, 0, .2);
		background:rgba(0, 0, 0, .7);
	}
	.fondoRegistroMedia{
		background:rgba(0, 0, 0, .7);
		width:320px;
		height:230px;
	}
	.menuVentanaRedmite{
		padding:5px;
	}
	
	@media (min-width: 250px) { 
		.iconoApp{width:10px; height:10px;
		}
		.appsLogo{width:15px; height:10px;
		}
	}

	@media (min-width: 350px) { 
		.iconoApp{width:10px; height:10px;
		}
		.appsLogo{width:15px; height:10px;
		}
	}
	@media (min-width: 768px) { 
		.iconoApp{width:25px; height:25px;
		}
		.appsLogo{width:25px; height:16px;
		}
	}

	@media (min-width: 1024px) { 
		.iconoApp{width:30px; height:30px;
		}
		.appsLogo{width:30px; height:20px;
		}
	}

	@media (min-width: 1200px) {
		.appsLogo{margin-top: 15% !important;width:30px; height:20px;
		}
		.menuVentanaApps{margin-top: 20% !important;
		}
	}
	.parallax-window {
		min-height: 500px;
		background: transparent;
	}
</style>
<!--	Incluir barra de navegación de ventana y ajuste de elementos	-->
<link rel="stylesheet" type="text/css" href={{url('css/mediateca/estilomediateca2.css')}}>
<div style="height:55px;">
	@include('viewVentana.encabezadoVentana')
</div>

<script>
	$('#buscar').css('visibility','hidden');
	$('#iconoBuscar').css('visibility','hidden');
	$('#navegacionVentana').removeClass('menuVentana');
	$('#navegacionVentana').addClass('menuVentanaRedmite');
	$('#navegacionVentana').addClass('navbar-inverse');
	$('#navegacionVentana').removeClass('navbar-fixed-top');
	$('#navegacionVentana').css('height','55px');
	$('#mueveTablaApps').removeClass('mueveTabla');
	$('#mueveTablaApps').addClass('tablaMenuApps');
	$('#menuVentanaRegistro').removeClass('fondoRegistro');
	$('#menuVentanaRegistro').addClass('fondoRegistroMedia');
</script>
	<!--	**************************************	-->
<div style="height:80px;">
<nav id="barraSecundaria" class="navbar yamm navbar-default" data-spy="affix" data-offset-top="70" role="navigation" style="height:80px; z-index:10;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('redmite')}}">
                {{ HTML::image('imagenes/red/LogoRed/logoredmesoamericana.png','Logo Red Mesoamericana', array('class'=>'image-responsive subeHorizontal'))}}
            </a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite')}}">INICIO</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/quienesSomos')}}">¿QUIÉNES SOMOS?</a></li>
                <li class="dropdown menu-large">
                    <a href="#" class="dropdown-toggle text-uppercase fondoMenu" data-toggle="dropdown">Eventos <b class="caret"></b></a>				
                    <ul class="dropdown-menu yamm-fw">
                        <li class="col-md-12">
                            <ul>
                                <li class="dropdown-header text-center"><h3>INNTEDU 2016</h3></li>
                                <div class="col-md-2">
                                    {{ HTML::image('imagenes/red/eventos/logoinntedu.jpg','Logo tedu', array('class'=>'image-responsive'))}}

                                </div>
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
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/publicaciones')}}">PUBLICACIONES</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/blog')}}">BLOG</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/contacto')}}">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>