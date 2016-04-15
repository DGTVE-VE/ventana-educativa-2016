@section('titleMediateca')
    Mediateca
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
		<map name="mapaartes1o" id="mapaartes1o">
			<area alt="" title=""  href="{{(url('educamedia/telesecundaria/1/1/1'))}}" shape="poly" coords="150,314,140,264,58,182,2,66,180,2,222,64,214,96,312,140" onmouseover="muestraImgCentroSecu('primerGrado', 'artes')" onmouseout="ocultaImgCentroSecu('primerGrado', 'artes')"/>
		</map>
                <!--<a href="{{(url('mediateca/telesecundaria/1/1/1'))}}">-->
		        {{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/artes.png','Telesecundaria ArtesI',['class'=>'ArtesI', 'id'=>'artes', 'usemap'=>'#mapaartes1o'])}}
                <!--</a>-->
		<a href="{{(url('educamedia/telesecundaria/1/11/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/orientacion.png','Telesecundaria OrientacionI',['class'=>'OrientacionI', 'id'=>'orientacion', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "orientacion")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "orientacion")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/8/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/geografia.png','Telesecundaria GeografiaI',['class'=>'GeografiaI', 'id'=>'geografia', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "geografia")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "geografia")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/7/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/espanol.png','Telesecundaria EspanolI',['class'=>'EspanolI', 'id'=>'espanol', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "espanol")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "espanol")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/10/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/matematicas.png','Telesecundaria MatematicasI',['class'=>'Matematicas1', 'id'=>'matematicas', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "matematicas")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "matematicas")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/5/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/ciencias.png','Telesecundaria CienciasI',['class'=>'CienciasI', 'id'=>'ciencias', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "ciencias")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "ciencias")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/9/0'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/lengua.png','Telesecundaria lengua',['class'=>'LenguaI', 'id'=>'lengua', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "lengua")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "lengua")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/6/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/educacionFisica.png','Telesecundaria EducacionFisicaI',['class'=>'EducacionFisicaI', 'id'=>'educacionFisica', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "educacionFisica")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "educacionFisica")'])}}
		</a>
		<a href="{{(url('educamedia/telesecundaria/1/12/1'))}}">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/tecnologia.png','Telesecundaria TecnologiaI',['class'=>'TecnologiaI', 'id'=>'tecnologia', 'onmouseover'=>'muestraImgCentroSecu("primerGrado", "tecnologia")', 'onmouseout'=>'ocultaImgCentroSecu("primerGrado", "tecnologia")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection