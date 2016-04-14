@section('titleMediateca')
    Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	<style>
		.bajaFila{
			position:relative; top:80px; z-index:10;
		}
		.FormacionCivicaII{
			position:absolute; top:42.7%; left:26.2%; width:36%; height: 88%;
		}
		.HistoriaII{
			position: absolute; top:14%; left:49.7%; width:36%; height: 88%;
		}
		.EspanolIII{
			position:absolute; top:43%; left:73%; width:36%; height: 88%;
		}
		.MatematicasIII{
			position:absolute; top:119.7%; left:72.9%; width:36%; height: 88%;
		}
		.CienciasIII{
			position: absolute; top:147.6%; left:48.9%; width:36%; height: 88%;
		}
		.InglesIII{
			position:absolute; top:118.7%; left:26%; width:36%; height: 88%;
		}
		.imgPrimeroCentral{
			position: absolute; top:92%; left:54%; width:30%; height: 75%; z-index:0; visibility: hidden;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).addClass("bounceIn");
			$(idImgCentro).addClass("animated");
			$(idImgCentro).css("visibility", "visible");
			$(idImgCentro).fadeIn();
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria/tercerGrado')}}" + "/" + idImg + ".png";
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
		<a href="{{(url('educamedia/telesecundaria/3/27/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/formacionCivica.png','Telesecundaria FormacionCivicaII',['class'=>'FormacionCivicaII', 'id'=>'formacionCivica', 'onmouseover'=>'muestraImgCentro("formacionCivica")', 'onmouseout'=>'ocultaImgCentro("formacionCivica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/28/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/historia.png','Telesecundaria HistoriaII',['class'=>'HistoriaII', 'id'=>'historia', 'onmouseover'=>'muestraImgCentro("historia")', 'onmouseout'=>'ocultaImgCentro("historia")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/26/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/espanol.png','Telesecundaria EspanolIII',['class'=>'EspanolIII', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentro("espanol")', 'onmouseout'=>'ocultaImgCentro("espanol")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/30/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/matematicas.png','Telesecundaria MatematicasIII',['class'=>'MatematicasIII', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentro("matematicas")', 'onmouseout'=>'ocultaImgCentro("matematicas")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/25/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/quimica.png','Telesecundaria Ciencias III quimica',['class'=>'CienciasIII', 'id'=>'quimica', 'onmouseover'=>'muestraImgCentro("quimica")', 'onmouseout'=>'ocultaImgCentro("quimica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/29/0'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/lengua.png','Telesecundaria InglesIII',['class'=>'InglesIII', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentro("lengua")', 'onmouseout'=>'ocultaImgCentro("lengua")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/quimicaCentro.png','Telesecundaria central quimica',['class'=>'imgPrimeroCentral', 'id'=>'quimicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection