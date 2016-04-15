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
		<a href="{{(url('educamedia/telebachillerato/III/20/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/BiologiaI.png','Telebachillerato BiologiaI',['class'=>'BiologiaI', 'id'=>'BiologiaI', 'onmouseover'=>'muestraImgCentro("SemestreIII","BiologiaI")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","BiologiaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/18/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LiteraturaI.png','Telebachillerato LiteraturaI',['class'=>'LiteraturaI', 'id'=>'LiteraturaI', 'onmouseover'=>'muestraImgCentro("SemestreIII","LiteraturaI")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","LiteraturaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/17/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/HistoriaMexicoII.png','Telebachillerato HistoriaMexicoII',['class'=>'HistoriaMexicoII', 'id'=>'HistoriaMexicoII', 'onmouseover'=>'muestraImgCentro("SemestreIII","HistoriaMexicoII")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","HistoriaMexicoII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/16/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/FisicaI.png','Telebachillerato FisicaI',['class'=>'FisicaI', 'id'=>'FisicaI', 'onmouseover'=>'muestraImgCentro("SemestreIII","FisicaI")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","FisicaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/15/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/MatematicasIII.png','Telebachillerato MatematicasIII',['class'=>'MatematicasIII', 'id'=>'MatematicasIII', 'onmouseover'=>'muestraImgCentro("SemestreIII","MatematicasIII")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","MatematicasIII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/III/19/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LenguaAdicionalIII.png','Telebachillerato LenguaAdicionalIII ',['class'=>'LenguaAdicionalIII', 'id'=>'LenguaAdicionalIII', 'onmouseover'=>'muestraImgCentro("SemestreIII","LenguaAdicionalIII")', 'onmouseout'=>'ocultaImgCentro("SemestreIII","LenguaAdicionalIII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection