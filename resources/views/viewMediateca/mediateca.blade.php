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
		<area alt="" title="" href="{{url('educamedia/telesecundaria')}}" onmouseover="muestraImgCentral('telesec')" shape="poly" coords="1,240,6,176,40,104,83,55,125,28,161,12,214,1,282,0,335,17,396,53,447,111,477,180,482,240,385,242,368,176,330,133,293,107,194,103,142,134,115,180,97,239" />
		<area alt="" title="" href="{{url('educamedia/telebachillerato')}}" onmouseover="muestraImgCentral('telebach')" shape="poly" coords="0,243,7,306,27,357,70,418,114,449,181,479,210,481,275,481,341,464,399,428,442,380,467,330,482,274,482,242,381,246,372,297,344,339,317,361,273,379,212,382,166,365,121,318,107,288,97,241" />
	</map>
		{{HTML::image('imagenes/mediateca/Inicio/home.png','Telesecundaria',['id'=>'iniEducamedia', 'usemap'=>'#inicioEducamedia'])}}
		<a href="{{url('educamedia/telesecundaria')}}">
			{{HTML::image('imagenes/mediateca/Inicio/telesecHover.png','Telesecundaria',['class'=>'telesecundaria', 'id'=>'telesecHover', 'onmouseout'=>'ocultaImgCentral("telesec")'])}}
		</a>
		<a href="{{url('educamedia/telebachillerato')}}">
			{{HTML::image('imagenes/mediateca/Inicio/telebachHover.png','Telesecundaria',['class'=>'telebachillerato', 'id'=>'telebachHover', 'onmouseout'=>'ocultaImgCentral("telebach")'])}}
		</a>
		{{HTML::image('imagenes/mediateca/Inicio/TelebachilleratoCentro.png','Telebachillerato Central',['class'=>'iniImgCentro', 'id'=>'telebachCentro'])}}
		{{HTML::image('imagenes/mediateca/Inicio/TelesecundariaCentro.png','Telesecundaria Central',['class'=>'iniImgCentro', 'id'=>'telesecCentro'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
