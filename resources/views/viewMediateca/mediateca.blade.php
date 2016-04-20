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
		?>
		</p><br>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
	<map name="inicioEducamedia" id="inicioEducamedia">
		<area alt="" title="" href="{{url('educamedia/telesecundaria')}}" onmouseover="resaltaImgSecu('Inicio', 'telesec')" onmouseout="normalImgSecu('Inicio', 'telesec')" shape="poly" coords="1,240,6,176,40,104,83,55,125,28,161,12,214,1,282,0,335,17,396,53,447,111,477,180,482,240,385,242,368,176,330,133,293,107,194,103,142,134,115,180,97,239" />
		<area alt="" title="" href="{{url('educamedia/telebachillerato')}}" onmouseover="resaltaImgSecu('Inicio', 'telebach')" onmouseout="normalImgSecu('Inicio', 'telebach')" shape="poly" coords="0,243,7,306,27,357,70,418,114,449,181,479,210,481,275,481,341,464,399,428,442,380,467,330,482,274,482,242,381,246,372,297,344,339,317,361,273,379,212,382,166,365,121,318,107,288,97,241" />
	</map>
		{{HTML::image('imagenes/mediateca/Inicio/home.png','Telesecundaria',['class'=>'posicionInicial img-responsive', 'id'=>'iniEducamedia', 'usemap'=>'#inicioEducamedia'])}}
			{{HTML::image('imagenes/mediateca/Inicio/telesecHover.png','Telesecundaria',['class'=>'resaltaImg img-responsive', 'id'=>'telesecHover', ])}}
			{{HTML::image('imagenes/mediateca/Inicio/telebachHover.png','Telesecundaria',['class'=>'resaltaImg img-responsive', 'id'=>'telebachHover'])}}
		{{HTML::image('imagenes/mediateca/Inicio/TelebachilleratoCentro.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'telebachCentro'])}}
		{{HTML::image('imagenes/mediateca/Inicio/TelesecundariaCentro.png','Telesecundaria Central',['class'=>'img-responsive iniImgCentro', 'id'=>'telesecCentro'])}}
		{{HTML::image('imagenes/mediateca/Inicio/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'educamediaIni', 'usemap'=>'#inicioEducamedia'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
