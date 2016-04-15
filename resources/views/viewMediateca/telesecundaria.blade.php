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
		<map name="mapaTelesecPrimer">
			<area alt="primer grado" shape="poly" coords="46.8,442.3,45.6,345.2,94.8,226.8,158.4,156.2,244.8,107.1,328.8,95.8,462.0,128.5,415.2,243.2,337.2,224.3,282.0,230.6,232.8,257.0,199.2,302.4,175.2,349.0,168.0,425.9" href="{{url('educamedia/telesecundaria/primergrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'primerGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'primerGrado')">
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/primerGrado.png','Telesecundaria Primero',['class'=>'telesecPrimero', 'id'=>'primerGrado', 'usemap'=>'#mapaTelesecPrimer'])}}
		<map name="mapaTelesecSegundo">
			<area alt="segundo grado" shape="poly" coords="147.6,144,201.6,1.6,290,72,336.25,142.4,368.75,233.6,383.75,342.4,372.5,396.2,348.75,463.4,276.1,523.6,203,459.8,149,369.6,199.1,328.9,220,287.1,247.2,340.8,238.8,268.8,199.2,187.2" href="{{url('educamedia/telesecundaria/segundogrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'segundoGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'segundoGrado')">
			<area alt="primer grado" shape="poly" coords="144,140.8,199.2,0,1.2,3.2,2.4,179.2,46.8,132.8,102,120" href="{{url('educamedia/telesecundaria/primergrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'primerGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'primerGrado')">
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/segundoGrado.png','Telesecundaria Segundo',['class'=>'teleSecSegundo', 'id'=>'segundoGrado','usemap'=>'#mapaTelesecSegundo'])}}
		<map name="mapaTelesecTercero">
			<area alt="primer grado" shape="poly" coords="25.2,141.6,144,126,141.6,67.2,163.2,0,50.4,1.2,37.2,1.2,27.6,72" href="{{url('educamedia/telesecundaria/primergrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'primerGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'primerGrado')">
			<area alt="segundo grado" shape="poly" coords="455,2.4,532.5,1.2,531.25,319.2,510,400,400,247.2" href="{{url('educamedia/telesecundaria/segundogrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'segundoGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'segundoGrado')">
			<area alt="tercer grado" shape="poly" coords="26.4,147.5,144,131.25,164.4,196.25,201.6,248.75,234,271.25,300,291.25,361.2,285,417.6,256.25,487.2,353.75,422.4,397.5,338.4,415,261.6,415,211.2,398.75,134.4,355,84,305,54,258.75" href="{{url('educamedia/telesecundaria/tercergrado')}}" onmouseover="muestraImgCentroSecu('Inicio', 'tercerGrado')" onmouseout="ocultaImgCentroSecu('Inicio', 'tercerGrado')">
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/tercerGrado.png','Telesecundaria Tercero',['class'=>'telesecTercero', 'id'=>'tercerGrado', 'usemap'=>'#mapaTelesecTercero'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralPrimero.png','Telesecundaria central Primero',['class'=>'imgTelesecCentro', 'id'=>'primerGradoCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralSegundo.png','Telesecundaria central Segundo',['class'=>'imgTelesecCentro', 'id'=>'segundoGradoCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralTercero.png','Telesecundaria central Tercero',['class'=>'imgTelesecCentro', 'id'=>'tercerGradoCentro'])}}
	</div>
	 @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection