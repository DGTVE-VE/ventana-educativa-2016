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
		<a href="{{(url('educamedia/telebachillerato/II/12/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/InformaticaII.png','Telebachillerato InformaticaII',['class'=>'InformaticaII', 'id'=>'InformaticaII', 'onmouseover'=>'muestraImgCentro("SemestreII","InformaticaII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","InformaticaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/11/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/TallerLecturaII.png','Telebachillerato TallerLecturaII',['class'=>'TallerLecturaII', 'id'=>'TallerLecturaII', 'onmouseover'=>'muestraImgCentro("SemestreII","TallerLecturaII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","TallerLecturaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/10/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/HistoriaMexicoI.png','Telebachillerato HistoriaMexicoI',['class'=>'HistoriaMexicoI', 'id'=>'HistoriaMexicoI', 'onmouseover'=>'muestraImgCentro("SemestreII","HistoriaMexicoI")', 'onmouseout'=>'ocultaImgCentro("SemestreII","HistoriaMexicoI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/14/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/EticaValoresII.png','Telebachillerato EticaValoresII',['class'=>'EticaValoresII', 'id'=>'EticaValoresII', 'onmouseover'=>'muestraImgCentro("SemestreII","EticaValoresII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","EticaValoresII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/8/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/MatematicasII.png','Telebachillerato MatematicasII',['class'=>'MatematicasII', 'id'=>'MatematicasII', 'onmouseover'=>'muestraImgCentro("SemestreII","MatematicasII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","MatematicasII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/13/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/LenguaAdicionalII.png','Telebachillerato LenguaAdicionalII',['class'=>'LenguaAdicionalII', 'id'=>'LenguaAdicionalII', 'onmouseover'=>'muestraImgCentro("SemestreII","LenguaAdicionalII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","LenguaAdicionalII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/9/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/QuimicaII.png','Telebachillerato QuimicaII',['class'=>'QuimicaII', 'id'=>'QuimicaII', 'onmouseover'=>'muestraImgCentro("SemestreII","QuimicaII")', 'onmouseout'=>'ocultaImgCentro("SemestreII","QuimicaII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection