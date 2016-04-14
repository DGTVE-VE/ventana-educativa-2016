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
		.BiologiaII{
			position:absolute; top:95.5%; left:25.8%; width:36%; height: 88%;
		}
		.LiteraturaII{
			position: absolute; top:30%; left:34%; width:36%; height: 88%;
		}
		.Estructura{
			position:absolute; top:22.5%; left:64.6%; width:36%; height: 88%;
		}
		.FisicaII{
			position:absolute; top:72.9%; left:79.8%; width:36%; height: 88%;
		}
		.MatematicasIV{
			position: absolute; top:138.2%; left:71.5%; width:36%; height: 88%;
		}
		.LenguaAdicionalIV{
			position:absolute; top:145.6%; left:40.7%; width:36%; height: 88%;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreIV')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreIV')}}" + "/" + idImg + ".png";
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
		<a href="{{(url('educamedia/telebachillerato/IV/22/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/BiologiaII.png','Telebachillerato BiologiaII',['class'=>'BiologiaII', 'id'=>'BiologiaII', 'onmouseover'=>'muestraImgCentro("BiologiaII")', 'onmouseout'=>'ocultaImgCentro("BiologiaII")'])}}
		</a>
            
		<a href="{{(url('educamedia/telebachillerato/IV/25/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LiteraturaII.png','Telebachillerato LiteraturaII',['class'=>'LiteraturaII', 'id'=>'LiteraturaII', 'onmouseover'=>'muestraImgCentro("LiteraturaII")', 'onmouseout'=>'ocultaImgCentro("LiteraturaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/24/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/Estructura.png','Telebachillerato Estructura',['class'=>'Estructura', 'id'=>'Estructura', 'onmouseover'=>'muestraImgCentro("Estructura")', 'onmouseout'=>'ocultaImgCentro("Estructura")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/23/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/FisicaII.png','Telebachillerato FisicaII',['class'=>'FisicaII', 'id'=>'FisicaII', 'onmouseover'=>'muestraImgCentro("FisicaII")', 'onmouseout'=>'ocultaImgCentro("FisicaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/21/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/MatematicasIV.png','Telebachillerato MatematicasIV',['class'=>'MatematicasIV', 'id'=>'MatematicasIV', 'onmouseover'=>'muestraImgCentro("MatematicasIV")', 'onmouseout'=>'ocultaImgCentro("MatematicasIV")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/26/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LenguaAdicionalIV.png','Telebachillerato LenguaAdicionalIV ',['class'=>'LenguaAdicionalIV', 'id'=>'LenguaAdicionalIV', 'onmouseover'=>'muestraImgCentro("LenguaAdicionalIV")', 'onmouseout'=>'ocultaImgCentro("LenguaAdicionalIV")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection