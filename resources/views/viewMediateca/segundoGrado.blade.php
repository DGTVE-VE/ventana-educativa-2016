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
		<map name="mapaSegundoGdo" id="mapaSegundoGdo">
			<area alt="" href="{{(url('educamedia/telesecundaria/2/20/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'formacionCivica')" onmouseout="normalImgSecu('segundoGrado', 'formacionCivica')" shape="poly" coords="12,162,106,196,99,242,108,294,15,329,3,287,0,227" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/24/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'orientacion')" onmouseout="normalImgSecu('segundoGrado', 'orientacion')" shape="poly" coords="15,162,105,194,123,162,146,138,166,118,119,32,89,53,57,81,33,119" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/21/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'historia')" onmouseout="normalImgSecu('segundoGrado', 'historia')" shape="poly" coords="121,33,169,117,200,104,235,99,266,100,280,2,202,1,157,15" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/19/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'espanol')" onmouseout="normalImgSecu('segundoGrado', 'espanol')" shape="poly" coords="265,100,282,1,326,13,373,37,405,64,429,88,350,147,330,126,303,109" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/23/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'matematicas')" onmouseout="normalImgSecu('segundoGrado', 'matematicas')" shape="poly" coords="349,149,432,87,462,138,475,173,481,208,483,240,384,241,381,204,366,169" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/18/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'fisica')" onmouseout="normalImgSecu('segundoGrado', 'fisica')" shape="poly" coords="386,242,481,240,479,282,474,314,454,356,430,396,352,335,370,304,383,271" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/22/0'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'lengua')" onmouseout="normalImgSecu('segundoGrado', 'lengua')" shape="poly" coords="350,336,427,397,407,420,375,443,345,461,289,480,269,382,300,371,322,358" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/17/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'educacionFisica')" onmouseout="normalImgSecu('segundoGrado', 'educacionFisica')" shape="poly" coords="268,384,288,479,215,482,185,477,155,468,122,453,170,367,201,380,240,384" />
			<area alt="" href="{{(url('educamedia/telesecundaria/2/13/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'artes')" onmouseout="normalImgSecu('segundoGrado', 'artes')" shape="poly" coords="16,329,110,294,125,326,147,350,173,367,120,454,82,430,40,381" />
		</map>
		<div style="width:483px; height:483px; margin:auto;">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/segundoGrado.png','Telesecundaria segundo Grado.png',['id'=>'segundoGrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/artesHover.png','Telesecundaria ArtesII',['class'=>'resaltaImg img-responsive', 'id'=>'artesHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/formacionCivicaHover.png','Telesecundaria FormacionCivicaI',['class'=>'resaltaImg img-responsive', 'id'=>'formacionCivicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/orientacionHover.png','Telesecundaria OrientacionII',['class'=>'resaltaImg img-responsive', 'id'=>'orientacionHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/historiaHover.png','Telesecundaria HistoriaI',['class'=>'resaltaImg img-responsive', 'id'=>'historiaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/espanolHover.png','Telesecundaria EspanolII',['class'=>'resaltaImg img-responsive', 'id'=>'espanolHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/matematicasHover.png','Telesecundaria MatematicasII',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/fisicaHover.png','Telesecundaria Ciencias II fisica',['class'=>'resaltaImg img-responsive', 'id'=>'fisicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/lenguaHover.png','Telesecundaria InglesII',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/educacionFisicaHover.png','Telesecundaria EducacionFisicaII',['class'=>'resaltaImg img-responsive', 'id'=>'educacionFisicaHover'])}}

			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/fisicaCentro.png','Telesecundaria central fisica',['class'=>'imgPrimeroCentral', 'id'=>'fisicaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/imgMapa.png','telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSegundoGdo'])}}
		</div>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection