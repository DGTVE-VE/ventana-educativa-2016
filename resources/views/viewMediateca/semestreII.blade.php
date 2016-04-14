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
		.InformaticaII{
			position: absolute; top:53%; left:29%; width:30.5%; height: 75%;
		}
		.TallerLecturaII{
			position: absolute; top:26%; left:47.3%; width:30%; height: 75%;
		}
		.HistoriaMexicoI{
			position: absolute; top:39.5%; left:71.6%; width:30%; height: 75%;
		}
		.EticaValoresII{
			position: absolute; top:98%; left:78.2%; width:30.5%; height: 75%;
		}
		.MatematicasII{
			position: absolute; top:145%; left:68.8%; width:30%; height: 75%;
		}
		.LenguaAdicionalII{
			position: absolute; top:152%; left:43.7%; width:30%; height: 75%;
		}
		.QuimicaII{
			position: absolute; top:120.3%; left:28%; width:30.2%; height: 75%;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreII')}}" + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreII')}}" + "/" + idImg + ".png";
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
		<a href="{{(url('educamedia/telebachillerato/II/12/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/InformaticaII.png','Telebachillerato InformaticaII',['class'=>'InformaticaII', 'id'=>'InformaticaII', 'onmouseover'=>'muestraImgCentro("InformaticaII")', 'onmouseout'=>'ocultaImgCentro("InformaticaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/11/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/TallerLecturaII.png','Telebachillerato TallerLecturaII',['class'=>'TallerLecturaII', 'id'=>'TallerLecturaII', 'onmouseover'=>'muestraImgCentro("TallerLecturaII")', 'onmouseout'=>'ocultaImgCentro("TallerLecturaII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/10/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/HistoriaMexicoI.png','Telebachillerato HistoriaMexicoI',['class'=>'HistoriaMexicoI', 'id'=>'HistoriaMexicoI', 'onmouseover'=>'muestraImgCentro("HistoriaMexicoI")', 'onmouseout'=>'ocultaImgCentro("HistoriaMexicoI")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/14/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/EticaValoresII.png','Telebachillerato EticaValoresII',['class'=>'EticaValoresII', 'id'=>'EticaValoresII', 'onmouseover'=>'muestraImgCentro("EticaValoresII")', 'onmouseout'=>'ocultaImgCentro("EticaValoresII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/8/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/MatematicasII.png','Telebachillerato MatematicasII',['class'=>'MatematicasII', 'id'=>'MatematicasII', 'onmouseover'=>'muestraImgCentro("MatematicasII")', 'onmouseout'=>'ocultaImgCentro("MatematicasII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/13/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/LenguaAdicionalII.png','Telebachillerato LenguaAdicionalII',['class'=>'LenguaAdicionalII', 'id'=>'LenguaAdicionalII', 'onmouseover'=>'muestraImgCentro("LenguaAdicionalII")', 'onmouseout'=>'ocultaImgCentro("LenguaAdicionalII")'])}}
		</a>
		<a href="{{(url('educamedia/telebachillerato/II/9/1'))}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/QuimicaII.png','Telebachillerato QuimicaII',['class'=>'QuimicaII', 'id'=>'QuimicaII', 'onmouseover'=>'muestraImgCentro("QuimicaII")', 'onmouseout'=>'ocultaImgCentro("QuimicaII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection