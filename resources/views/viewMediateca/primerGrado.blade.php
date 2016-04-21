@section('titleMediateca')
    Mediateca
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
		<map name="mapaPrimerGdo" id="mapaPrimerGdo">
			<area alt="" href="{{(url('mediateca/telesecundaria/1/1/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'artes')" onmouseout="normalImgSecu('primerGrado', 'artes')" shape="poly" coords="15,329,110,295,124,323,146,349,172,369,121,455,78,424,37,378" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/12/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'tecnologia')" onmouseout="normalImgSecu('primerGrado', 'tecnologia')" shape="poly" coords="175,370,205,382,236,387,269,384,290,481,191,481,123,456" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/11/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'orientacion')" onmouseout="normalImgSecu('primerGrado', 'orientacion')" shape="poly" coords="15,327,107,293,98,250,105,196,12,161,2,197,1,267" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/8/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'geografia')" onmouseout="normalImgSecu('primerGrado', 'geografia')" shape="poly" coords="106,194,133,149,169,119,120,33,77,63,38,109,13,160" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/7/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'espanol')" onmouseout="normalImgSecu('primerGrado', 'espanol')" shape="poly" coords="120,32,168,118,186,110,212,103,238,96,266,101,282,2,212,1,184,6,158,14" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/10/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'matematicas')" onmouseout="normalImgSecu('primerGrado', 'matematicas')" shape="poly" coords="281,3,268,103,315,121,350,147,431,89,392,49,348,21" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/5/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'ciencias')" onmouseout="normalImgSecu('primerGrado', 'ciencias')" shape="poly" coords="353,149,434,92,465,146,480,196,483,239,384,242,382,203,369,171" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/9/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'lengua')" onmouseout="normalImgSecu('primerGrado', 'lengua')" shape="poly" coords="386,244,483,242,475,309,461,355,432,394,432,397,353,338,371,305,384,272" />
			<area alt="" href="{{(url('educamedia/telesecundaria/1/6/1'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'educacionFisica')" onmouseout="normalImgSecu('primerGrado', 'educacionFisica')" shape="poly" coords="351,339,428,400,406,424,356,458,295,479,292,477,271,386,307,371,334,352" />
		</map>
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/primergrado.png','Telesecundaria primergrado',['id'=>'primergrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/artesHover.png','Telesecundaria ArtesI',['class'=>'resaltaImg img-responsive', 'id'=>'artesHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/orientacionHover.png','Telesecundaria OrientacionI',['class'=>'resaltaImg img-responsive', 'id'=>'orientacionHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/geografiaHover.png','Telesecundaria GeografiaI',['class'=>'resaltaImg img-responsive', 'id'=>'geografiaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/espanolHover.png','Telesecundaria EspanolI',['class'=>'resaltaImg img-responsive', 'id'=>'espanolHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/matematicasHover.png','Telesecundaria MatematicasI',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/cienciasHover.png','Telesecundaria CienciasI',['class'=>'resaltaImg img-responsive', 'id'=>'cienciasHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/lenguaHover.png','Telesecundaria lengua',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/educacionFisicaHover.png','Telesecundaria EducacionFisicaI',['class'=>'resaltaImg img-responsive', 'id'=>'educacionFisicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/tecnologiaHover.png','Telesecundaria TecnologiaI',['class'=>'resaltaImg img-responsive', 'id'=>'tecnologiaHover'])}}

		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
		{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/imgMapa.png','Telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaPrimerGdo'])}}
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection