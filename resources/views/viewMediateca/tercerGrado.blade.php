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
		<p> {{ generaBreadCrumbs() }} </p><br>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<map name="mapaTercerGdo" id="mapaTercerGdo">
			<area alt="orientacion" title="" href="{{(url('educamedia/telesecundaria/3/27/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'formacionCivicaII')" onmouseout="normalImgSecu('tercerGrado', 'formacionCivicaII')" shape="poly" coords="2,242,99,242,106,193,126,154,152,128,168,118,122,30,87,51,62,80,36,114,8,166,0,191" />
			<area alt="historia" title="" href="{{(url('educamedia/telesecundaria/3/28/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'historiaII')" onmouseout="normalImgSecu('tercerGrado', 'historiaII')" shape="poly" coords="122,31,170,118,220,100,254,98,286,104,313,119,364,31,324,13,282,1,204,1,163,12" />
			<area alt="espanol" title="" href="{{(url('educamedia/telesecundaria/3/26/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'espanolIII')" onmouseout="normalImgSecu('tercerGrado', 'espanolIII')" shape="poly" coords="314,116,365,31,420,73,450,115,474,161,478,192,483,241,386,242,380,200,364,162,338,134" />
			<area alt="matematicas" title="" href="{{(url('educamedia/telesecundaria/3/30/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'matematicasIII')" onmouseout="normalImgSecu('tercerGrado', 'matematicasIII')" shape="poly" coords="309,368,350,334,370,302,382,269,384,241,483,242,479,298,462,346,436,387,401,424,357,456" />
			<area alt="quimica" title="" href="{{(url('educamedia/telesecundaria/3/25/1'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'quimica')" onmouseout="normalImgSecu('tercerGrado', 'quimica')" shape="poly" coords="310,370,357,456,282,480,209,481,155,470,117,449,167,365,210,380,266,383" />
			<area alt="lengua" title="" href="{{(url('educamedia/telesecundaria/3/29/0'))}}" onmouseover="resaltaImgSecu('segundoGrado', 'lenguaIII')" onmouseout="normalImgSecu('tercerGrado', 'lenguaIII')" shape="poly" coords="0,243,98,241,105,281,120,315,141,343,167,364,115,450,70,416,31,366,9,306" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/tercerGrado.png','Telesecundaria tercer Grado',['id'=>'tercerGrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/formacionCivicaIIHover.png','Telesecundaria FormacionCivicaII',['class'=>'resaltaImg img-responsive', 'id'=>'formacionCivicaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/historiaIIHover.png','Telesecundaria HistoriaII',['class'=>'resaltaImg img-responsive', 'id'=>'historiaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/espanolIIIHover.png','Telesecundaria EspanolIII',['class'=>'resaltaImg img-responsive', 'id'=>'espanolIIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/matematicasIIIHover.png','Telesecundaria MatematicasIII',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasIIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/quimicaHover.png','Telesecundaria Ciencias III quimica',['class'=>'resaltaImg img-responsive', 'id'=>'quimicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/lenguaIIIHover.png','Telesecundaria InglesIII',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaIIIHover'])}}

			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaIICentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaIICentro.gif','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolIIICentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasIIICentro.gif','Telesecundaria central matematicasIII',['class'=>'imgPrimeroCentral', 'id'=>'matematicasIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/quimicaCentro.png','Telesecundaria central quimica',['class'=>'imgPrimeroCentral', 'id'=>'quimicaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaIIICentro.gif','Telesecundaria central lenguaIII',['class'=>'imgPrimeroCentral', 'id'=>'lenguaIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/tercerGrado/imgMapa.png','telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaTercerGdo'])}}
		</div>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection