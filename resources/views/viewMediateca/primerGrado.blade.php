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
		<p id="parrafoBreadcrumb"> </p><br>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<map name="mapaPrimerGdo" id="mapaPrimerGdo">
			<area alt="artes" href="{{(url('educamedia/telesecundaria/1/1/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'artesI')" onmouseout="normalImgSecu('primerGrado', 'artesI')" shape="poly" coords="15,329,110,295,124,323,146,349,172,369,121,455,78,424,37,378" />
			<area alt="tecnologia" href="{{(url('educamedia/telesecundaria/1/12/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'tecnologia')" onmouseout="normalImgSecu('primerGrado', 'tecnologia')" shape="poly" coords="175,370,205,382,236,387,269,384,290,481,191,481,123,456" />
			<area alt="orientacion" href="{{(url('educamedia/telesecundaria/1/11/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'orientacionI')" onmouseout="normalImgSecu('primerGrado', 'orientacionI')" shape="poly" coords="15,327,107,293,98,250,105,196,12,161,2,197,1,267" />
			<area alt="geografia" href="{{(url('educamedia/telesecundaria/1/8/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'geografia')" onmouseout="normalImgSecu('primerGrado', 'geografia')" shape="poly" coords="106,194,133,149,169,119,120,33,77,63,38,109,13,160" />
			<area alt="espanol" href="{{(url('educamedia/telesecundaria/1/7/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'espanolI')" onmouseout="normalImgSecu('primerGrado', 'espanolI')" shape="poly" coords="120,32,168,118,186,110,212,103,238,96,266,101,282,2,212,1,184,6,158,14" />
			<area alt="matematicas" href="{{(url('educamedia/telesecundaria/1/10/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'matematicasI')" onmouseout="normalImgSecu('primerGrado', 'matematicasI')" shape="poly" coords="281,3,268,103,315,121,350,147,431,89,392,49,348,21" />
			<area alt="ciencias" href="{{(url('educamedia/telesecundaria/1/5/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'biologia')" onmouseout="normalImgSecu('primerGrado', 'biologia')" shape="poly" coords="353,149,434,92,465,146,480,196,483,239,384,242,382,203,369,171" />
			<area alt="lengua" href="{{(url('educamedia/telesecundaria/1/9/0/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'lenguaI')" onmouseout="normalImgSecu('primerGrado', 'lenguaI')" shape="poly" coords="386,244,483,242,475,309,461,355,432,394,432,397,353,338,371,305,384,272" />
			<area alt="educacionFisica" href="{{(url('educamedia/telesecundaria/1/6/1/0'))}}" title="" onmouseover="resaltaImgSecu('primerGrado', 'educacionFisicaI')" onmouseout="normalImgSecu('primerGrado', 'educacionFisicaI')" shape="poly" coords="351,339,428,400,406,424,356,458,295,479,292,477,271,386,307,371,334,352" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/primergrado.png','Telesecundaria primergrado',['id'=>'primergrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/artesIHover.png','Telesecundaria ArtesI',['class'=>'resaltaImg img-responsive', 'id'=>'artesIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/orientacionIHover.png','Telesecundaria OrientacionI',['class'=>'resaltaImg img-responsive', 'id'=>'orientacionIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/geografiaHover.png','Telesecundaria GeografiaI',['class'=>'resaltaImg img-responsive', 'id'=>'geografiaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/espanolIHover.png','Telesecundaria EspanolI',['class'=>'resaltaImg img-responsive', 'id'=>'espanolIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/matematicasIHover.png','Telesecundaria MatematicasI',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/biologiaHover.png','Telesecundaria CienciasI',['class'=>'resaltaImg img-responsive', 'id'=>'biologiaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/lenguaIHover.png','Telesecundaria lengua',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/educacionFisicaIHover.png','Telesecundaria EducacionFisicaI',['class'=>'resaltaImg img-responsive', 'id'=>'educacionFisicaIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/tecnologiaHover.png','Telesecundaria TecnologiaI',['class'=>'resaltaImg img-responsive', 'id'=>'tecnologiaHover'])}}

			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesICentro.gif','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionICentro.gif','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.gif','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/EspanolICentro.gif','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasICentro.gif','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/biologiaCentro.gif','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'biologiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaICentro.gif','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaICentro.gif','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.gif','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/primerGrado/imgMapa.png','Telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaPrimerGdo'])}}
		</div>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection