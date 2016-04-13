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
			position: absolute; top:25%; left:94%; width:32%; height: 80%;
		}
		.bachSemI{
			position: absolute; top:29.3%; left:66%; width:32.5%; height: 80%;
		}
		.bachSemII{
			position: absolute; top:-22%; left:55.4%; width:32%; height: 80%;
		}
		.bachSemIII{
			position: absolute; top:39.5%; left:61.8%; width:32%; height: 80%;
		}
		.bachSemVI{
			position: absolute; top:63.7%; left:108.3%; width:32.5%; height: 80%;
		}
		.bachSemV{
			position: absolute; top:30%; left:106.3%; width:32%; height: 80%;
		}
		.bachSemIV{
			position: absolute; top:56.4%; left:86.1%; width:32%; height: 80%;
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