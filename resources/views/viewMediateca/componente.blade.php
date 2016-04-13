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
		.CienciasSaludII{
			position:absolute; top:47%; left:27%; width:28%; height: 69%;
		}
		.CienciasSaludI{
			position:absolute; top:24.7%; left:45.7%; width:28%; height: 69%;
		}
		.CienciasComunicacionI{
			position: absolute; top:36.3%; left:68.9%; width:28%; height: 69%;
		}
		.CienciasComunicacionII{
			position:absolute; top:82.7%; left:77.9%; width:28%; height: 69%;
		}
		.ProbabilidadI{
			position:absolute; top:139.2%; left:73.4%; width:28%; height: 69%;
		}
		.ProbabilidadII{
			position: absolute; top:162%; left:54.8%; width:28%; height: 69%;
		}
		.PsicologiaII{
			position:absolute; top:150.5%; left:31.6%; width:28%; height: 69%;
		}
		.PsicologiaI{
			position: absolute; top:104.3%; left:22.6%; width:28%; height: 69%;
		}
		.imgPrimeroCentral{
			position: absolute; top:90%; left:50%; width:30%; height: 75%; z-index:0; visibility: hidden;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/componente')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).addClass("bounceIn");
			$(idImgCentro).addClass("animated");
			$(idImgCentro).css("visibility", "visible");
			$(idImgCentro).fadeIn();
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/componente')}}" + "/" + idImg + ".png";
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
			<area alt="" title=""  href="{{url('mediateca/telebachillerato/componente')}}" shape="poly" coords="150,314,140,264,58,182,2,66,180,2,222,64,214,96,312,140" onmouseover="muestraImgCentro('CienciasComunicacionI')" onmouseout="ocultaImgCentro('CienciasComunicacionI')"/>
		</map>
		{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionI.png','Telesecundaria CienciasComunicacionI',['class'=>'CienciasComunicacionI', 'id'=>'CienciasComunicacionI', 'usemap'=>'#mapaartes1o'])}}
		<a href="{{(url('educamedia/telebachillerato/1/1/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionII.png','Telesecundaria CienciasComunicacionII',['class'=>'CienciasComunicacionII', 'id'=>'CienciasComunicacionII', 'onmouseover'=>'muestraImgCentro("CienciasComunicacionII")', 'onmouseout'=>'ocultaImgCentro("CienciasComunicacionII")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludI.png','Telesecundaria CienciasSaludI',['class'=>'CienciasSaludI', 'id'=>'CienciasSaludI', 'onmouseover'=>'muestraImgCentro("CienciasSaludI")', 'onmouseout'=>'ocultaImgCentro("CienciasSaludI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludII.png','Telesecundaria CienciasSaludII',['class'=>'CienciasSaludII', 'id'=>'CienciasSaludII', 'onmouseover'=>'muestraImgCentro("CienciasSaludII")', 'onmouseout'=>'ocultaImgCentro("CienciasSaludII")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadI.png','Telesecundaria ProbabilidadI',['class'=>'ProbabilidadI', 'id'=>'ProbabilidadI', 'onmouseover'=>'muestraImgCentro("ProbabilidadI")', 'onmouseout'=>'ocultaImgCentro("ProbabilidadI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadII.png','Telesecundaria ProbabilidadII',['class'=>'ProbabilidadII', 'id'=>'ProbabilidadII', 'onmouseover'=>'muestraImgCentro("ProbabilidadII")', 'onmouseout'=>'ocultaImgCentro("ProbabilidadII")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaI.png','Telesecundaria PsicologiaI',['class'=>'PsicologiaI', 'id'=>'PsicologiaI', 'onmouseover'=>'muestraImgCentro("PsicologiaI")', 'onmouseout'=>'ocultaImgCentro("PsicologiaI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaII.png','Telesecundaria PsicologiaII',['class'=>'PsicologiaII', 'id'=>'PsicologiaII', 'onmouseover'=>'muestraImgCentro("PsicologiaII")', 'onmouseout'=>'ocultaImgCentro("PsicologiaII")'])}}
		</a>
		<!--{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
		-->
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection