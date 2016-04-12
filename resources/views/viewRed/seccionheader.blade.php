<link rel="stylesheet" type="text/css" href="css/mediateca/estilomediateca2.css">
<style>
	#barraSecundaria.affix{
		top:0;
		width:100%;
	}
	#barraSecundaria.affix + .container-fluid{
		padding-top:70px;
	}
</style>
<div style="height:70px;">
	@include('viewMediateca.encabezadoMediateca')
</div>
<script>
	$('#navegacionMediateca').removeClass('navbar-fixed-top');
	$('#navegacionMediateca').css('height','70px');
	$('#navegacionMediateca').css('background-color','#f8f8f8');
</script>
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
                    <!--<img class="img-responsive subeHorizontal" src="imagenes/red/LogoRed/logoredmesoamericana.png" alt="Logo Red Mesoamericana"/>-->
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
                                    <!--<img class="image-responsive" src="imagenes/red/eventos/logoinntedu.jpg">-->
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
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/contacto')}}">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>