@section('titleMediateca')
    Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	<style>
		.textoTitulo{
			color: black;
			font-family:'Ubuntu';
			font-size:2em;
		}
		.bajaFila{
			position:relative; top:80px; z-index:10;
		}
		.ArtesI{
			position:absolute; top:146.5%; left:28.1%; width:24.5%; height: 63%;
		}
		.OrientacionI{
			position: absolute; top:96.6%; left:21.4%; width:26%; height: 64%;
		}
		.GeografiaI{
			position:absolute; top:47%; left:27%; width:26.3%; height: 64%;
		}
		.EspanolI{
			position:absolute; top:26%; left:44%; width:27%; height: 64%;
		}
		.MatematicasI{
			position: absolute; top:32.5%; left:67.8%; width:26%; height: 64%;
		}
		.CienciasI{
			position:absolute; top:66%; left:78.7%; width:26%; height: 64%;
		}
		.LenguaI{
			position:absolute; top:124.7%; left:78.8%; width:26%; height: 64%;
		}
		.EducacionFisicaI{
			position: absolute; top:159%; left:68.2%; width:26%; height: 64%;
		}
		.TecnologiaI{
			position:absolute; top:165.8%; left:44.5%; width:28%; height: 64%;
		}
		.imgPrimeroCentral{
			position: absolute; top:90%; left:50%; width:30%; height: 75%; z-index:0; visibility: hidden;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/primerGrado')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).addClass("bounceIn");
			$(idImgCentro).addClass("animated");
			$(idImgCentro).css("visibility", "visible");
			$(idImgCentro).fadeIn();
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/primerGrado')}}" + "/" + idImg + ".png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).css("visibility", "hidden");
			$(idImgCentro).fadeOut();
			$(idImgCentro).removeClass("animated");
			$(idImgCentro).removeClass("bounceIn");
		}
	</script>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
		<?php
			generaBreadCrumbs();
		?>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
		<map name="mapaartes1o" id="mapaartes1o">
			<area alt="" title=""  href="{{url('mediateca/telesecundaria/tercergrado')}}" shape="poly" coords="150,314,140,264,58,182,2,66,180,2,222,64,214,96,312,140" onmouseover="muestraImgCentro('artes')" onmouseout="ocultaImgCentro('artes')"/>
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/artes.png','Telesecundaria ArtesI',['class'=>'ArtesI', 'id'=>'artes', 'usemap'=>'#mapaartes1o'])}}
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/orientacion.png','Telesecundaria OrientacionI',['class'=>'OrientacionI', 'id'=>'orientacion', 'onmouseover'=>'muestraImgCentro("orientacion")', 'onmouseout'=>'ocultaImgCentro("orientacion")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/geografia.png','Telesecundaria GeografiaI',['class'=>'GeografiaI', 'id'=>'geografia', 'onmouseover'=>'muestraImgCentro("geografia")', 'onmouseout'=>'ocultaImgCentro("geografia")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/espanol.png','Telesecundaria EspanolI',['class'=>'EspanolI', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentro("espanol")', 'onmouseout'=>'ocultaImgCentro("espanol")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/matematicas.png','Telesecundaria MatematicasI',['class'=>'MatematicasI', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentro("matematicas")', 'onmouseout'=>'ocultaImgCentro("matematicas")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/ciencias.png','Telesecundaria CienciasI',['class'=>'CienciasI', 'id'=>'ciencias', 'onmouseover'=>'muestraImgCentro("ciencias")', 'onmouseout'=>'ocultaImgCentro("ciencias")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/lengua.png','Telesecundaria lengua',['class'=>'LenguaI', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentro("lengua")', 'onmouseout'=>'ocultaImgCentro("lengua")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/educacionFisica.png','Telesecundaria EducacionFisicaI',['class'=>'EducacionFisicaI', 'id'=>'educacionFisica', 'onmouseover'=>'muestraImgCentro("educacionFisica")', 'onmouseout'=>'ocultaImgCentro("educacionFisica")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/tecnologia.png','Telesecundaria TecnologiaI',['class'=>'TecnologiaI', 'id'=>'tecnologia', 'onmouseover'=>'muestraImgCentro("tecnologia")', 'onmouseout'=>'ocultaImgCentro("tecnologia")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection