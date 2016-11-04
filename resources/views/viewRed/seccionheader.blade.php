<link rel="stylesheet" type="text/css" href="{{url('css/red/seccionheader.css')}}">
<!--	Incluir barra de navegación de ventana y ajuste de elementos	-->
<link rel="stylesheet" type="text/css" href="{{url('css/mediateca/estilomediateca2.css')}}">
<!--div class="altoDivMenu"-->
	@include('viewVentana.encabezadoVentana')
<!--/div-->

<script src="{{url('js/red/seccionheader.js')}}"></script>
	<!--	**************************************	-->
<div class="altoMenuRed">
<nav id="barraSecundaria" class="navbar yamm navbar-default navAlto80" data-spy="affix" data-offset-top="70" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#js-navbar-collapse-red">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('redmite')}}">
                {{ HTML::image('imagenes/red/LogoRed/logoredmesoamericana.png','Logo Red Mesoamericana', array('class'=>'image-responsive subeHorizontal logoRed'))}}
            </a>
        </div>

        <div id="js-navbar-collapse-red" class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite')}}">INICIO</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/quienesSomos')}}">¿QUIÉNES SOMOS?</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/publicaciones')}}">PUBLICACIONES</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/blog')}}">BLOG</a></li>
                <li class="text-uppercase fondoMenu"><a href="{{url('redmite/contacto')}}">CONTACTO</a></li>
            </ul>
        </div>
    </div>
</nav>
</div>