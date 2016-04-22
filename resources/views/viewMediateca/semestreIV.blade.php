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
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<map name="mapaSemIV" id="mapaSemIV">
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/22'))}}" onmouseover="resaltaImgSecu('SemestreIV','BiologiaII')" onmouseout="normalImgSecu('SemestreIV','BiologiaII')" shape="poly" coords="51,391,130,331,108,287,99,257,101,217,106,190,16,157,7,182,2,216,2,267,14,334" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/25'))}}" onmouseover="resaltaImgSecu('SemestreIV','LiteraturaII')" onmouseout="normalImgSecu('SemestreIV','LiteraturaII')" shape="poly" coords="107,189,17,154,32,121,62,78,106,42,156,17,207,2,221,101,177,109,140,136" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/24'))}}" onmouseover="resaltaImgSecu('SemestreIV','Estructura')" onmouseout="normalImgSecu('SemestreIV','Estructura')" shape="poly" coords="224,99,210,2,270,0,326,16,361,32,403,63,435,92,354,152,329,126,297,108,253,96" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/23'))}}" onmouseover="resaltaImgSecu('SemestreIV','FisicaII')" onmouseout="normalImgSecu('SemestreIV','FisicaII')" shape="poly" coords="357,153,435,96,468,156,481,203,483,260,468,329,375,294,384,260,384,216,373,179" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/21'))}}" onmouseover="resaltaImgSecu('SemestreIV','MatematicasIV')" onmouseout="normalImgSecu('SemestreIV','MatematicasIV')" shape="poly" coords="376,295,465,330,467,331,456,353,438,383,415,412,373,447,338,464,276,482,261,385,297,374,336,352,362,323" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/IV/26'))}}" onmouseover="resaltaImgSecu('SemestreIV','LenguaAdicionalIV')" onmouseout="normalImgSecu('SemestreIV','LenguaAdicionalIV')" shape="poly" coords="261,386,275,480,255,481,210,482,144,464,97,435,53,393,52,391,130,333,144,350,182,372,223,384" />
		</map>
		<div style="width:483px; height:483px; margin:auto; position: relative;">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/semestreIV.png','telebachillerato Semestre V',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreV'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/BiologiaIIHover.png','Telebachillerato BiologiaII',['class'=>'resaltaImg img-responsive', 'id'=>'BiologiaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LiteraturaIIHover.png','Telebachillerato LiteraturaII',['class'=>'resaltaImg img-responsive', 'id'=>'LiteraturaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/EstructuraHover.png','Telebachillerato Estructura',['class'=>'resaltaImg img-responsive', 'id'=>'EstructuraHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/FisicaIIHover.png','Telebachillerato FisicaII',['class'=>'resaltaImg img-responsive', 'id'=>'FisicaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/MatematicasIVHover.png','Telebachillerato MatematicasIV',['class'=>'resaltaImg img-responsive', 'id'=>'MatematicasIVHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/LenguaAdicionalIVHover.png','Telebachillerato LenguaAdicionalIV ',['class'=>'resaltaImg img-responsive', 'id'=>'LenguaAdicionalIVHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIV/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMV', 'usemap'=>'#mapaSemIV'])}}
		</div>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection