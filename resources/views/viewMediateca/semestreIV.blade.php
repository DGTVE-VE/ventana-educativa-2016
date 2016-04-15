@section('titleMediateca')
    Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
		<?php
			generaBreadCrumbs();
		?>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
		<a href="{{(url('educamedia/telebachillerato/IV/22/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/BiologiaII.png','Telebachillerato BiologiaII',['class'=>'BiologiaII', 'id'=>'BiologiaII', 'onmouseover'=>'muestraImgCentro("SemestreIV","BiologiaII")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","BiologiaII")'])}}
		</a>
            
		<a href="{{(url('educamedia/telebachillerato/IV/25/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LiteraturaII.png','Telebachillerato LiteraturaII',['class'=>'LiteraturaII', 'id'=>'LiteraturaII', 'onmouseover'=>'muestraImgCentro("SemestreIV","LiteraturaII")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","LiteraturaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/24/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/Estructura.png','Telebachillerato Estructura',['class'=>'Estructura', 'id'=>'Estructura', 'onmouseover'=>'muestraImgCentro("SemestreIV","Estructura")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","Estructura")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/23/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/FisicaII.png','Telebachillerato FisicaII',['class'=>'FisicaII', 'id'=>'FisicaII', 'onmouseover'=>'muestraImgCentro("SemestreIV","FisicaII")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","FisicaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/21/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/MatematicasIV.png','Telebachillerato MatematicasIV',['class'=>'MatematicasIV', 'id'=>'MatematicasIV', 'onmouseover'=>'muestraImgCentro("SemestreIV","MatematicasIV")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","MatematicasIV")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/IV/26/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LenguaAdicionalIV.png','Telebachillerato LenguaAdicionalIV ',['class'=>'LenguaAdicionalIV', 'id'=>'LenguaAdicionalIV', 'onmouseover'=>'muestraImgCentro("SemestreIV","LenguaAdicionalIV")', 'onmouseout'=>'ocultaImgCentro("SemestreIV","LenguaAdicionalIV")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection