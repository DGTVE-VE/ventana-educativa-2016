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
		.InformaticaI{
			position: absolute; top:53.3%; left:29.1%; width:30.5%; height: 75%;
		}
		.TallerLectura{
			position: absolute; top:26.3%; left:47.4%; width:30%; height: 75%;
		}
		.IntroCS{
			position: absolute; top:39.8%; left:71.6%; width:30%; height: 75%;
		}
		.EticaValoresI{
			position: absolute; top:98.4%; left:78.2%; width:30.5%; height: 75%;
		}
		.MatematicasI{
			position: absolute; top:145%; left:68.9%; width:30%; height: 75%;
		}
		.LenguaAdicionalI{
			position: absolute; top:151.8%; left:43.7%; width:30%; height: 75%;
		}
		.QuimicaI{
			position: absolute; top:120.5%; left:28%; width:30.3%; height: 75%;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreI')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreI')}}" + "/" + idImg + ".png";
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
		<a href="{{(url('educamedia/telebachillerato/I/5/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/InformaticaI.png','Telebachillerato InformaticaI',['class'=>'InformaticaI', 'id'=>'InformaticaI', 'onmouseover'=>'muestraImgCentro("InformaticaI")', 'onmouseout'=>'ocultaImgCentro("InformaticaI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/4/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/TallerLectura.png','Telebachillerato TallerLectura',['class'=>'TallerLectura', 'id'=>'TallerLectura', 'onmouseover'=>'muestraImgCentro("TallerLectura")', 'onmouseout'=>'ocultaImgCentro("TallerLectura")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/3/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/IntroCS.png','Telebachillerato IntroCS',['class'=>'IntroCS', 'id'=>'IntroCS', 'onmouseover'=>'muestraImgCentro("IntroCS")', 'onmouseout'=>'ocultaImgCentro("IntroCS")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/7/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/EticaValoresI.png','Telebachillerato EticaValoresI',['class'=>'EticaValoresI', 'id'=>'EticaValoresI', 'onmouseover'=>'muestraImgCentro("EticaValoresI")', 'onmouseout'=>'ocultaImgCentro("EticaValoresI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/1/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/MatematicasI.png','Telebachillerato MatematicasI',['class'=>'MatematicasI', 'id'=>'MatematicasI', 'onmouseover'=>'muestraImgCentro("MatematicasI")', 'onmouseout'=>'ocultaImgCentro("MatematicasI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/6/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/LenguaAdicionalI.png','Telebachillerato LenguaAdicionalI',['class'=>'LenguaAdicionalI', 'id'=>'LenguaAdicionalI', 'onmouseover'=>'muestraImgCentro("LenguaAdicionalI")', 'onmouseout'=>'ocultaImgCentro("LenguaAdicionalI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/I/2/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/QuimicaI.png','Telebachillerato QuimicaI',['class'=>'QuimicaI', 'id'=>'QuimicaI', 'onmouseover'=>'muestraImgCentro("QuimicaI")', 'onmouseout'=>'ocultaImgCentro("QuimicaI")'])}}
		</a>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection