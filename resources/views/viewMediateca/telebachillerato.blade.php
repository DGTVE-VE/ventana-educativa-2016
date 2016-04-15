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
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
		<a href="{{url('educamedia/telebachillerato/componente')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/formaPropedeutica.png','Telebachillerato',['class'=>'formaPropedeutica', 'id'=>'formaPropedeutica', 'onmouseover'=>'muestraImgCentro("Inicio","formaPropedeutica")', 'onmouseout'=>'ocultaImgCentro("Inicio","formaPropedeutica")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreI')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreI.png','Telebachillerato',['class'=>'bachSemI', 'id'=>'semestreI', 'onmouseover'=>'muestraImgCentro("Inicio","semestreI")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreI")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreVI')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreVI.png','Telebachillerato',['class'=>'bachSemVI', 'id'=>'semestreVI', 'onmouseover'=>'muestraImgCentro("Inicio","semestreVI")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreVI")'])}}
		</a>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
		<a href="{{url('educamedia/telebachillerato/semestreII')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreII.png','Telebachillerato',['class'=>'bachSemII', 'id'=>'semestreII', 'onmouseover'=>'muestraImgCentro("Inicio","semestreII")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreII")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreV')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreV.png','Telebachillerato',['class'=>'bachSemV', 'id'=>'semestreV', 'onmouseover'=>'muestraImgCentro("Inicio","semestreV")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreV")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreIV')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIV.png','Telebachillerato',['class'=>'bachSemIV', 'id'=>'semestreIV', 'onmouseover'=>'muestraImgCentro("Inicio","semestreIV")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreIV")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreIII')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIII.png','Telebachillerato',['class'=>'bachSemIII', 'id'=>'semestreIII', 'onmouseover'=>'muestraImgCentro("Inicio","semestreIII")', 'onmouseout'=>'ocultaImgCentro("Inicio","semestreIII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection