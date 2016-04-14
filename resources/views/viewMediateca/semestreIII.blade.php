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
		.BiologiaI{
			position:absolute; top:95%; left:25%; width:34%; height: 87%;
		}
		.LiteraturaI{
			position: absolute; top:30.1%; left:32.8%; width:34%; height: 87%;
		}
		.HistoriaMexicoII{
			position:absolute; top:22.5%; left:61.8%; width:34%; height: 87%;
		}
		.FisicaI{
			position:absolute; top:72.6%; left:76.1%; width:34%; height: 87%;
		}
		.MatematicasIII{
			position: absolute; top:137.3%; left:68.3%; width:34%; height: 87%;
		}
		.LenguaAdicionalIII{
			position:absolute; top:144.7%; left:39.2%; width:34%; height: 87%;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreIII')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreIII')}}" + "/" + idImg + ".png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "hidden";*/
		}
	</script>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
		<?php
			generaBreadCrumbs();
		?>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
		<a href="{{(url('educamedia/telebachillerato/III/20/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/BiologiaI.png','Telebachillerato BiologiaI',['class'=>'BiologiaI', 'id'=>'BiologiaI', 'onmouseover'=>'muestraImgCentro("BiologiaI")', 'onmouseout'=>'ocultaImgCentro("BiologiaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/18/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LiteraturaI.png','Telebachillerato LiteraturaI',['class'=>'LiteraturaI', 'id'=>'LiteraturaI', 'onmouseover'=>'muestraImgCentro("LiteraturaI")', 'onmouseout'=>'ocultaImgCentro("LiteraturaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/17/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/HistoriaMexicoII.png','Telebachillerato HistoriaMexicoII',['class'=>'HistoriaMexicoII', 'id'=>'HistoriaMexicoII', 'onmouseover'=>'muestraImgCentro("HistoriaMexicoII")', 'onmouseout'=>'ocultaImgCentro("HistoriaMexicoII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/16/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/FisicaI.png','Telebachillerato FisicaI',['class'=>'FisicaI', 'id'=>'FisicaI', 'onmouseover'=>'muestraImgCentro("FisicaI")', 'onmouseout'=>'ocultaImgCentro("FisicaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/15/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/MatematicasIII.png','Telebachillerato MatematicasIII',['class'=>'MatematicasIII', 'id'=>'MatematicasIII', 'onmouseover'=>'muestraImgCentro("MatematicasIII")', 'onmouseout'=>'ocultaImgCentro("MatematicasIII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/19/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LenguaAdicionalIII.png','Telebachillerato LenguaAdicionalIII ',['class'=>'LenguaAdicionalIII', 'id'=>'LenguaAdicionalIII', 'onmouseover'=>'muestraImgCentro("LenguaAdicionalIII")', 'onmouseout'=>'ocultaImgCentro("LenguaAdicionalIII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection