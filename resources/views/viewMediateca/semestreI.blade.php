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
		<a href="{{(url('educamedia/telebachillerato/I/5/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/InformaticaI.png','Telebachillerato InformaticaI',['class'=>'InformaticaI', 'id'=>'InformaticaI', 'onmouseover'=>'muestraImgCentro("SemestreI","InformaticaI")', 'onmouseout'=>'ocultaImgCentro("SemestreI","InformaticaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/4/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/TallerLectura.png','Telebachillerato TallerLectura',['class'=>'TallerLectura', 'id'=>'TallerLectura', 'onmouseover'=>'muestraImgCentro("SemestreI","TallerLectura")', 'onmouseout'=>'ocultaImgCentro("SemestreI","TallerLectura")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/3/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/IntroCS.png','Telebachillerato IntroCS',['class'=>'IntroCS', 'id'=>'IntroCS', 'onmouseover'=>'muestraImgCentro("SemestreI","IntroCS")', 'onmouseout'=>'ocultaImgCentro("SemestreI","IntroCS")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/7/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/EticaValoresI.png','Telebachillerato EticaValoresI',['class'=>'EticaValoresI', 'id'=>'EticaValoresI', 'onmouseover'=>'muestraImgCentro("SemestreI","EticaValoresI")', 'onmouseout'=>'ocultaImgCentro("SemestreI","EticaValoresI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/1/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/MatematicasI.png','Telebachillerato MatematicasI',['class'=>'MatematicasI', 'id'=>'MatematicasI', 'onmouseover'=>'muestraImgCentro("SemestreI","MatematicasI")', 'onmouseout'=>'ocultaImgCentro("SemestreI","MatematicasI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/6/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/LenguaAdicionalI.png','Telebachillerato LenguaAdicionalI',['class'=>'LenguaAdicionalI', 'id'=>'LenguaAdicionalI', 'onmouseover'=>'muestraImgCentro("SemestreI","LenguaAdicionalI")', 'onmouseout'=>'ocultaImgCentro("SemestreI","LenguaAdicionalI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/2/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/QuimicaI.png','Telebachillerato QuimicaI',['class'=>'QuimicaI', 'id'=>'QuimicaI', 'onmouseover'=>'muestraImgCentro("SemestreI","QuimicaI")', 'onmouseout'=>'ocultaImgCentro("SemestreI","QuimicaI")'])}}
		</a>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection