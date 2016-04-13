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
			position: absolute; top:48.7%; left:29.6%; width:32.5%; height: 80%;
		}
		.TallerLectura{
			position: absolute; top:20%; left:49%; width:32%; height: 80%;
		}
		.IntroCS{
			position: absolute; top:34.5%; left:74.7%; width:32%; height: 80%;
		}
		.EticaValoresI{
			position: absolute; top:96.7%; left:81.7%; width:32.5%; height: 80%;
		}
		.MatematicasI{
			position: absolute; top:146.5%; left:71.7%; width:32%; height: 80%;
		}
		.LenguaAdicionalI{
			position: absolute; top:153.5%; left:45%; width:32%; height: 80%;
		}
		.QuimicaI{
			position: absolute; top:120.3%; left:28.6%; width:32%; height: 80%;
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
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/TallerLectura.png','Telebachillerato TallerLectura',['class'=>'TallerLectura', 'id'=>'TallerLectura', 'onmouseover'=>'muestraImgCentro("TallerLectura")', 'onmouseout'=>'ocultaImgCentro("TallerLectura")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/IntroCS.png','Telebachillerato IntroCS',['class'=>'IntroCS', 'id'=>'IntroCS', 'onmouseover'=>'muestraImgCentro("IntroCS")', 'onmouseout'=>'ocultaImgCentro("IntroCS")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/EticaValoresI.png','Telebachillerato EticaValoresI',['class'=>'EticaValoresI', 'id'=>'EticaValoresI', 'onmouseover'=>'muestraImgCentro("EticaValoresI")', 'onmouseout'=>'ocultaImgCentro("EticaValoresI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/MatematicasI.png','Telebachillerato MatematicasI',['class'=>'MatematicasI', 'id'=>'MatematicasI', 'onmouseover'=>'muestraImgCentro("MatematicasI")', 'onmouseout'=>'ocultaImgCentro("MatematicasI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/LenguaAdicionalI.png','Telebachillerato LenguaAdicionalI',['class'=>'LenguaAdicionalI', 'id'=>'LenguaAdicionalI', 'onmouseover'=>'muestraImgCentro("LenguaAdicionalI")', 'onmouseout'=>'ocultaImgCentro("LenguaAdicionalI")'])}}
		</a>
		<a href="{{('')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreI/QuimicaI.png','Telebachillerato QuimicaI',['class'=>'QuimicaI', 'id'=>'QuimicaI', 'onmouseover'=>'muestraImgCentro("QuimicaI")', 'onmouseout'=>'ocultaImgCentro("QuimicaI")'])}}
		</a>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection