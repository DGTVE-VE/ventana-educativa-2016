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
		<map name="mapaSemV" id="mapaSemV">
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/V/27'))}}" onmouseover="resaltaImgSecu('SemestreV','Geografia')" onmouseout="normalImgSecu('SemestreV','Geografia')" shape="poly" coords="2,243,100,243,103,209,121,164,157,126,218,101,277,104,308,115,353,152,379,200,385,243,483,243,482,204,462,139,419,78,373,38,308,8,276,1,202,1,144,19,90,48,43,101,15,151,4,193" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/V/28'))}}" onmouseover="resaltaImgSecu('SemestreV','HistoriaUniv')" onmouseout="normalImgSecu('SemestreV','HistoriaUniv')" shape="poly" coords="1,245,100,245,108,287,129,328,156,355,191,376,244,387,280,379,321,363,354,332,379,287,387,244,483,244,479,295,455,363,412,416,369,452,319,472,275,482,206,483,142,466,86,432,41,382,11,321,3,278" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/semestreV.png','telebachillerato Semestre V',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreV'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/GeografiaHover.png','Telebachillerato Geografia',['class'=>'resaltaImg img-responsive', 'id'=>'GeografiaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/HistoriaUnivHover.png','Telebachillerato HistoriaUniv',['class'=>'resaltaImg img-responsive', 'id'=>'HistoriaUnivHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMV', 'usemap'=>'#mapaSemV'])}}
		</div>
	</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection