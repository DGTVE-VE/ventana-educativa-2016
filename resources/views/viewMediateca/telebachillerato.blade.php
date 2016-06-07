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
		<map name="mapaTelebachillerato" id="mapaTelebachillerato">
			<area alt="semestreI" title="" href="{{url('educamedia/telebachillerato/semestreI')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreI')" onmouseout="normalImgSecu('telebachillerato','semestreI')" shape="poly" coords="120,164,38,112,65,74,99,47,131,26,165,14,194,6,216,1,227,100,183,107,150,127" />
			<area alt="formaPropedeutica" title="" href="{{url('educamedia/telebachillerato/Propedéutico')}}" onmouseover="resaltaImgSecu('telebachillerato','formaPropedeutica')" onmouseout="normalImgSecu('telebachillerato','formaPropedeutica')" shape="poly" coords="228,98,219,1,265,1,299,6,335,18,365,32,401,60,419,76,343,144,312,116,270,98" />
			<area alt="semestreVI" title="" href="{{url('educamedia/telebachillerato/semestreVI')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreVI')" onmouseout="normalImgSecu('telebachillerato','semestreVI')" shape="poly" coords="349,144,420,78,459,133,475,176,482,228,483,275,385,262,385,218,374,177" />
			<area alt="semestreV" title="" href="{{url('educamedia/telebachillerato/semestreV')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreV')" onmouseout="normalImgSecu('telebachillerato','semestreV')" shape="poly" coords="385,265,481,278,450,368,417,409,372,447,320,363,347,339,371,309" />
			<area alt="semestreIV" title="" href="{{url('educamedia/telebachillerato/semestreIV')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreIV')" onmouseout="normalImgSecu('telebachillerato','semestreIV')" shape="poly" coords="319,366,369,449,322,472,288,479,266,482,213,483,159,470,192,376,228,384,276,382" />
			<area alt="semestreIII" title="" href="{{url('educamedia/telebachillerato/semestreIII')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreIII')" onmouseout="normalImgSecu('telebachillerato','semestreIII')" shape="poly" coords="10,319,108,287,128,328,150,350,190,374,158,468,127,458,91,433,54,397,33,364" />
			<area alt="semestreII" title="" href="{{url('educamedia/telebachillerato/semestreII')}}" onmouseover="resaltaImgSecu('telebachillerato','semestreII')" onmouseout="normalImgSecu('telebachillerato','semestreII')" shape="poly" coords="104,286,10,317,2,257,3,197,10,171,23,137,37,114,119,166,106,192,99,236" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/telebachillerato.png','Telebachillerato',['id'=>'telebachillerato', 'class'=>'posicionInicial img-responsive'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/formaPropedeuticaHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'formaPropedeuticaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreVIHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreVIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIIHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreVHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreVHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIVHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreIVHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/semestreIIIHover.png','Telebachillerato',['class'=>'resaltaImg img-responsive', 'id'=>'semestreIIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem1.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'semestreICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem2.png','Telesecundaria Central',['class'=>'img-responsive iniImgCentro', 'id'=>'semestreIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem3.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'semestreIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem4.png','Telesecundaria Central',['class'=>'img-responsive iniImgCentro', 'id'=>'semestreIVCentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem5.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'semestreVCentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/sem6.png','Telesecundaria Central',['class'=>'img-responsive iniImgCentro', 'id'=>'semestreVICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/formaPropedeutica.png','Telesecundaria Central',['class'=>'img-responsive iniImgCentro', 'id'=>'formaPropedeuticaCentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/Inicio/ImgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaTelebachillerato'])}}
		</div>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection