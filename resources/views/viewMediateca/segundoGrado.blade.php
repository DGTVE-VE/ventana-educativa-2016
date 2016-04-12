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
			position:relative; top:80px; z-index:10; z-index:10;
		}
		.ArtesII{
			position:absolute; top:146.8%; left:30.3%; width:26%; height: 64%;
		}
		.FormacionCivicaI{
			position: absolute; top:97.8%; left:24.2%; width:26%; height: 64%;
		}
		.OrientacionII{
			position:absolute; top:47%; left:30%; width:26%; height: 64%;
		}
		.HistoriaI{
			position:absolute; top:26%; left:47%; width:26%; height: 64%;
		}
		.EspanolII{
			position: absolute; top:32.5%; left:69.8%; width:26%; height: 64%;
		}
		.MatematicasII{
			position:absolute; top:66.4%; left:80.7%; width:26%; height: 64%;
		}
		.CienciasII{
			position:absolute; top:125%; left:80.8%; width:26%; height: 64%;
		}
		.InglesII{
			position: absolute; top:159.5%; left:70%; width:26%; height: 64%;
		}
		.EducacionFisicaII{
			position:absolute; top:166.5%; left:47.8%; width:26%; height: 64%;
		}
		.imgPrimeroCentral{
			position: absolute; top:92%; left:52%; width:30%; height: 75%; z-index:0; visibility: hidden;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/segundoGrado')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).addClass("bounceIn");
			$(idImgCentro).addClass("animated");
			$(idImgCentro).css("visibility", "visible");
			$(idImgCentro).fadeIn();
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/segundoGrado')}}" + "/" + idImg + ".png";
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
		<a href="{{(url('mediateca/telesecundaria/2/13/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/artes.png','Telesecundaria ArtesII',['class'=>'ArtesII', 'id'=>'artes', 'onmouseover'=>'muestraImgCentro("artes")', 'onmouseout'=>'ocultaImgCentro("artes")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/20/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/formacionCivica.png','Telesecundaria FormacionCivicaI',['class'=>'FormacionCivicaI', 'id'=>'formacionCivica', 'onmouseover'=>'muestraImgCentro("formacionCivica")', 'onmouseout'=>'ocultaImgCentro("formacionCivica")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/24/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/orientacion.png','Telesecundaria OrientacionII',['class'=>'OrientacionII', 'id'=>'orientacion', 'onmouseover'=>'muestraImgCentro("orientacion")', 'onmouseout'=>'ocultaImgCentro("orientacion")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/21/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/historia.png','Telesecundaria HistoriaI',['class'=>'HistoriaI', 'id'=>'historia', 'onmouseover'=>'muestraImgCentro("historia")', 'onmouseout'=>'ocultaImgCentro("historia")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/19/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/espanol.png','Telesecundaria EspanolII',['class'=>'EspanolII', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentro("espanol")', 'onmouseout'=>'ocultaImgCentro("espanol")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/23/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/matematicas.png','Telesecundaria MatematicasII',['class'=>'MatematicasII', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentro("matematicas")', 'onmouseout'=>'ocultaImgCentro("matematicas")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/18/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/ciencias.png','Telesecundaria CienciasII',['class'=>'CienciasII', 'id'=>'ciencias', 'onmouseover'=>'muestraImgCentro("ciencias")', 'onmouseout'=>'ocultaImgCentro("ciencias")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/22/0'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/lengua.png','Telesecundaria InglesII',['class'=>'InglesII', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentro("lengua")', 'onmouseout'=>'ocultaImgCentro("lengua")'])}}
		</a>
		<a href="{{(url('mediateca/telesecundaria/2/17/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/educacionFisica.png','Telesecundaria EducacionFisicaII',['class'=>'EducacionFisicaII', 'id'=>'educacionFisica', 'onmouseover'=>'muestraImgCentro("educacionFisica")', 'onmouseout'=>'ocultaImgCentro("educacionFisica")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection