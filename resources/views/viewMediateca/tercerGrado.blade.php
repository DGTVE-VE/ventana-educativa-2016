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
		<a href="{{(url('educamedia/telesecundaria/3/27/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/formacionCivica.png','Telesecundaria FormacionCivicaII',['class'=>'FormacionCivicaII', 'id'=>'formacionCivica', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "formacionCivica")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "formacionCivica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/28/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/historia.png','Telesecundaria HistoriaII',['class'=>'HistoriaII', 'id'=>'historia', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "historia")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "historia")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/26/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/espanol.png','Telesecundaria EspanolIII',['class'=>'EspanolIII', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "espanol")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "espanol")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/30/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/matematicas.png','Telesecundaria MatematicasIII',['class'=>'Matematicas3', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "matematicas")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "matematicas")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/25/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/quimica.png','Telesecundaria Ciencias III quimica',['class'=>'CienciasIII', 'id'=>'quimica', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "quimica")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "quimica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/3/29/0'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/lengua.png','Telesecundaria InglesIII',['class'=>'InglesIII', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentroSecu("tercerGrado", "lengua")', 'onmouseout'=>'ocultaImgCentroSecu("tercerGrado", "lengua")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgTerceroCentral', 'id'=>'formacionCivicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgTerceroCentral', 'id'=>'historiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgTerceroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgTerceroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/quimicaCentro.png','Telesecundaria central quimica',['class'=>'imgTerceroCentral', 'id'=>'quimicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgTerceroCentral', 'id'=>'lenguaCentro'])}}
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection