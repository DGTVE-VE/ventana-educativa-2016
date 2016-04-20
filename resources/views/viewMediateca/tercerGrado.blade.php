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
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
		<map name="mapaTercerGdo" id="mapaTercerGdo">
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/27/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'orientacion')" onmouseout="normalImgSecu('tercerGrado', 'orientacion')" shape="poly" coords="2,242,99,242,106,193,126,154,152,128,168,118,122,30,87,51,62,80,36,114,8,166,0,191" />
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/28/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'historia')" onmouseout="normalImgSecu('tercerGrado', 'historia')" shape="poly" coords="122,31,170,118,220,100,254,98,286,104,313,119,364,31,324,13,282,1,204,1,163,12" />
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/26/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'espanol')" onmouseout="normalImgSecu('tercerGrado', 'espanol')" shape="poly" coords="314,116,365,31,420,73,450,115,474,161,478,192,483,241,386,242,380,200,364,162,338,134" />
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/30/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'matematicas')" onmouseout="normalImgSecu('tercerGrado', 'matematicas')" shape="poly" coords="309,368,350,334,370,302,382,269,384,241,483,242,479,298,462,346,436,387,401,424,357,456" />
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/25/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'quimica')" onmouseout="normalImgSecu('tercerGrado', 'quimica')" shape="poly" coords="310,370,357,456,282,480,209,481,155,470,117,449,167,365,210,380,266,383" />
			<area alt="" title="" href="{{(url('educamedia/telesecundaria/3/29/0'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'lengua')" onmouseout="normalImgSecu('tercerGrado', 'lengua')" shape="poly" coords="0,243,98,241,105,281,120,315,141,343,167,364,115,450,70,416,31,366,9,306" />
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/tercerGrado.png','Telesecundaria tercer Grado',['id'=>'tercerGrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/formacionCivicaHover.png','Telesecundaria FormacionCivicaII',['class'=>'resaltaImg img-responsive', 'id'=>'orientacionHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/historiaHover.png','Telesecundaria HistoriaII',['class'=>'resaltaImg img-responsive', 'id'=>'historiaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/espanolHover.png','Telesecundaria EspanolIII',['class'=>'resaltaImg img-responsive', 'id'=>'espanolHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/matematicasHover.png','Telesecundaria MatematicasIII',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/quimicaHover.png','Telesecundaria Ciencias III quimica',['class'=>'resaltaImg img-responsive', 'id'=>'quimicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/lenguaHover.png','Telesecundaria InglesIII',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaHover'])}}

		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/quimicaCentro.png','Telesecundaria central quimica',['class'=>'imgPrimeroCentral', 'id'=>'quimicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/imgMapa.png','telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaTercerGdo'])}}
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection