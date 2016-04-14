@section('titleMediateca')
    Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
    
	<style>
		.formaPropedeutica{
			position: absolute; top:25.5%; left:94.7%; width:30%; height: 79%;
		}
		.bachSemI{
			position: absolute; top:29.5%; left:68.4%; width:30.5%; height: 79%;
		}
		.bachSemII{
			position: absolute; top:-23.4%; left:58.4%; width:30.5%; height: 79%;
		}
		.bachSemIII{
			position: absolute; top:36.8%; left:64.5%; width:30%; height: 79%;
		}
		.bachSemVI{
			position: absolute; top:63%; left:108%; width:30.5%; height: 79%;
		}
		.bachSemV{
			position: absolute; top:28%; left:106.1%; width:30%; height: 79%;
		}
		.bachSemIV{
			position: absolute; top:53.7%; left:87.3%; width:30%; height: 79%;
		}
		.bajaFila{
			position:relative; top:80px; z-index:10;
		}
	</style>
	<script>
		function muestraImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/Inicio')}}" + "/" + idImg + "Hov.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato/Inicio')}}" + "/" + idImg + ".png";
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
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
		<a href="{{url('educamedia/telebachillerato/componente')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/formaPropedeutica.png','Telebachillerato',['class'=>'formaPropedeutica', 'id'=>'formaPropedeutica', 'onmouseover'=>'muestraImgCentro("formaPropedeutica")', 'onmouseout'=>'ocultaImgCentro("formaPropedeutica")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreI')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreI.png','Telebachillerato',['class'=>'bachSemI', 'id'=>'semestreI', 'onmouseover'=>'muestraImgCentro("semestreI")', 'onmouseout'=>'ocultaImgCentro("semestreI")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreVI')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreVI.png','Telebachillerato',['class'=>'bachSemVI', 'id'=>'semestreVI', 'onmouseover'=>'muestraImgCentro("semestreVI")', 'onmouseout'=>'ocultaImgCentro("semestreVI")'])}}
		</a>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:10%;">
		<a href="{{url('educamedia/telebachillerato/semestreII')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreII.png','Telebachillerato',['class'=>'bachSemII', 'id'=>'semestreII', 'onmouseover'=>'muestraImgCentro("semestreII")', 'onmouseout'=>'ocultaImgCentro("semestreII")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreV')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreV.png','Telebachillerato',['class'=>'bachSemV', 'id'=>'semestreV', 'onmouseover'=>'muestraImgCentro("semestreV")', 'onmouseout'=>'ocultaImgCentro("semestreV")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreIV')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIV.png','Telebachillerato',['class'=>'bachSemIV', 'id'=>'semestreIV', 'onmouseover'=>'muestraImgCentro("semestreIV")', 'onmouseout'=>'ocultaImgCentro("semestreIV")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato/semestreIII')}}">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIII.png','Telebachillerato',['class'=>'bachSemIII', 'id'=>'semestreIII', 'onmouseover'=>'muestraImgCentro("semestreIII")', 'onmouseout'=>'ocultaImgCentro("semestreIII")'])}}
		</a>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection