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
		<a href="{{(url('educamedia/telesecundaria/2/13/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/artes.png','Telesecundaria ArtesII',['class'=>'ArtesII', 'id'=>'artes', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "artes")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "artes")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/20/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/formacionCivica.png','Telesecundaria FormacionCivicaI',['class'=>'FormacionCivicaI', 'id'=>'formacionCivica', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "formacionCivica")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "formacionCivica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/24/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/orientacion.png','Telesecundaria OrientacionII',['class'=>'OrientacionII', 'id'=>'orientacion', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "orientacion")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "orientacion")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/21/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/historia.png','Telesecundaria HistoriaI',['class'=>'HistoriaI', 'id'=>'historia', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "historia")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "historia")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/19/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/espanol.png','Telesecundaria EspanolII',['class'=>'EspanolII', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "espanol")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "espanol")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/23/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/matematicas.png','Telesecundaria MatematicasII',['class'=>'Matematicas2', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "matematicas")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "matematicas")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/18/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/fisica.png','Telesecundaria Ciencias II fisica',['class'=>'CienciasII', 'id'=>'fisica', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "fisica")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "fisica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/22/0'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/lengua.png','Telesecundaria InglesII',['class'=>'InglesII', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "lengua")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "lengua")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/2/17/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/educacionFisica.png','Telesecundaria EducacionFisicaII',['class'=>'EducacionFisicaII', 'id'=>'educacionFisica', 'onmouseover'=>'muestraImgCentroSecu("segundoGrado", "educacionFisica")', 'onmouseout'=>'ocultaImgCentroSecu("segundoGrado", "educacionFisica")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgSegundoCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgSegundoCentral', 'id'=>'formacionCivicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgSegundoCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgSegundoCentral', 'id'=>'historiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgSegundoCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgSegundoCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/fisicaCentro.png','Telesecundaria central fisica',['class'=>'imgSegundoCentral', 'id'=>'fisicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgSegundoCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgSegundoCentral', 'id'=>'educacionFisicaCentro'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection