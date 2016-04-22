@section('titleMediateca')
    Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="padding:4%">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo">
		<p><?php
			generaBreadCrumbs();
		?></p><br>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
		<map name="telesecGrados" id="telesecGrados">
			<area alt="" href="{{url('educamedia/telesecundaria/primergrado')}}" onmouseover="resaltaImgSecu('Inicio', 'primerGrado')" onmouseout="normalImgSecu('Inicio', 'primerGrado')" title="" shape="poly" coords="0,268,1,207,8,173,28,125,58,84,101,44,160,14,208,2,272,1,316,12,346,23,300,111,251,95,204,97,166,114,129,154,112,183,102,209,100,257"/>
			<area alt="" href="{{url('educamedia/telesecundaria/segundogrado')}}" onmouseover="resaltaImgSecu('Inicio', 'segundoGrado')" onmouseout="normalImgSecu('Inicio', 'segundoGrado')" title="" shape="poly" coords="328,358,383,437,440,381,461,345,479,282,482,263,481,215,475,170,460,136,437,95,410,65,370,35,347,22,302,111,333,133,360,162,379,200,385,260,372,302,353,331"/>
			<area alt="" href="{{url('educamedia/telesecundaria/tercergrado')}}" onmouseover="resaltaImgSecu('Inicio', 'tercerGrado')" onmouseout="normalImgSecu('Inicio', 'tercerGrado')" title="" shape="poly" coords="0,269,98,258,122,316,166,365,216,383,252,384,295,374,327,359,382,438,333,467,286,480,264,481,214,481,162,471,109,449,60,405,22,356"/>
		</map>
		<div style="width:483px; height:483px; margin:auto;">
			{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/telesecundaria.png','Telesecundaria Primero',['class'=>'posicionInicial img-responsive','id'=>'primerGrado'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/primerGradoHover.png','Telesecundaria Primero',['class'=>'resaltaImg img-responsive', 'id'=>'primerGradoHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/segundoGradoHover.png','Telesecundaria Segundo',['class'=>'resaltaImg img-responsive', 'id'=>'segundoGradoHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/tercerGradoHover.png','Telesecundaria Tercero',['class'=>'resaltaImg img-responsive', 'id'=>'tercerGradoHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralPrimero.png','Telesecundaria central Primero',['class'=>'imgTelesecCentro', 'id'=>'primerGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralSegundo.png','Telesecundaria central Segundo',['class'=>'imgTelesecCentro', 'id'=>'segundoGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/centralTercero.png','Telesecundaria central Tercero',['class'=>'imgTelesecCentro', 'id'=>'tercerGradoCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/Inicio/imgMapa.png','telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#telesecGrados'])}}
		</div>
	</div>
	 @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection