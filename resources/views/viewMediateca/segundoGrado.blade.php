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
		<map name="mapaSegundoGdo" id="mapaSegundoGdo">
			<area alt="formacionCivica" href="{{(url('educamedia/telesecundaria/2/20/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'formacionCivicaII')" onmouseout="normalImgSecu('segundoGrado', 'formacionCivicaII')" shape="poly" coords="12,162,106,196,99,242,108,294,15,329,3,287,0,227" />
			<area alt="orientacion" href="{{(url('educamedia/telesecundaria/2/24/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'orientacionII')" onmouseout="normalImgSecu('segundoGrado', 'orientacionII')" shape="poly" coords="15,162,105,194,123,162,146,138,166,118,119,32,89,53,57,81,33,119" />
			<area alt="historia" href="{{(url('educamedia/telesecundaria/2/21/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'historiaII')" onmouseout="normalImgSecu('segundoGrado', 'historiaII')" shape="poly" coords="121,33,169,117,200,104,235,99,266,100,280,2,202,1,157,15" />
			<area alt="espanol" href="{{(url('educamedia/telesecundaria/2/19/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'espanolII')" onmouseout="normalImgSecu('segundoGrado', 'espanolII')" shape="poly" coords="265,100,282,1,326,13,373,37,405,64,429,88,350,147,330,126,303,109" />
			<area alt="matematicas" href="{{(url('educamedia/telesecundaria/2/23/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'matematicasII')" onmouseout="normalImgSecu('segundoGrado', 'matematicasII')" shape="poly" coords="349,149,432,87,462,138,475,173,481,208,483,240,384,241,381,204,366,169" />
			<area alt="fisica" href="{{(url('educamedia/telesecundaria/2/18/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'fisica')" onmouseout="normalImgSecu('segundoGrado', 'fisica')" shape="poly" coords="386,242,481,240,479,282,474,314,454,356,430,396,352,335,370,304,383,271" />
			<area alt="lengua" href="{{(url('educamedia/telesecundaria/2/22/0'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'lenguaII')" onmouseout="normalImgSecu('segundoGrado', 'lenguaII')" shape="poly" coords="350,336,427,397,407,420,375,443,345,461,289,480,269,382,300,371,322,358" />
			<area alt="educacionFisica" href="{{(url('educamedia/telesecundaria/2/17/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'educacionFisicaII')" onmouseout="normalImgSecu('segundoGrado', 'educacionFisicaII')" shape="poly" coords="268,384,288,479,215,482,185,477,155,468,122,453,170,367,201,380,240,384" />
			<area alt="artes" href="{{(url('educamedia/telesecundaria/2/13/1'))}}" title="" onmouseover="resaltaImgSecu('segundoGrado', 'artesII')" onmouseout="normalImgSecu('segundoGrado', 'artesII')" shape="poly" coords="16,329,110,294,125,326,147,350,173,367,120,454,82,430,40,381" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/segundoGrado.png','Telesecundaria segundo Grado.png',['id'=>'segundoGrado', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/artesIIHover.png','Telesecundaria ArtesII',['class'=>'resaltaImg img-responsive', 'id'=>'artesIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/formacionCivicaIIHover.png','Telesecundaria formacionCivicaIII',['class'=>'resaltaImg img-responsive', 'id'=>'formacionCivicaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/orientacionIIHover.png','Telesecundaria OrientacionII',['class'=>'resaltaImg img-responsive', 'id'=>'orientacionIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/historiaIIHover.png','Telesecundaria HistoriaI',['class'=>'resaltaImg img-responsive', 'id'=>'historiaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/espanolIIHover.png','Telesecundaria EspanolII',['class'=>'resaltaImg img-responsive', 'id'=>'espanolIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/matematicasIIHover.png','Telesecundaria MatematicasII',['class'=>'resaltaImg img-responsive', 'id'=>'matematicasIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/fisicaHover.png','Telesecundaria Ciencias II fisica',['class'=>'resaltaImg img-responsive', 'id'=>'fisicaHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/lenguaIIHover.png','Telesecundaria InglesII',['class'=>'resaltaImg img-responsive', 'id'=>'lenguaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/educacionFisicaIIHover.png','Telesecundaria EducacionFisicaII',['class'=>'resaltaImg img-responsive', 'id'=>'educacionFisicaIIHover'])}}

			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesIICentro.png','Telesecundaria central artesII',['class'=>'imgPrimeroCentral', 'id'=>'artesIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/formacionCivicaIICentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'formacionCivicaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionIICentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/historiaIICentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'historiaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolIICentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasIICentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/fisicaCentro.png','Telesecundaria central fisica',['class'=>'imgPrimeroCentral', 'id'=>'fisicaCentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaIICentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaIICentro.png','Telesecundaria central educacionFisicaII',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tsecundaria/segundoGrado/imgMapa.png','telesecundaria',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSegundoGdo'])}}
		</div>
	</div>
    @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelesecundaria')
@endsection