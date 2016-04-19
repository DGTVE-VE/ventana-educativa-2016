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
		<map name="mapaSemVI" id="mapaSemVI">
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/VI/30/1'))}}" onmouseover="resaltaImgSecu('SemestreVI','Filosofia')" onmouseout="normalImgSecu('SemestreVI','Filosofia')" shape="poly" coords="1,260,100,253,100,220,109,184,133,147,169,116,206,103,253,100,283,103,306,113,351,26,328,17,310,10,283,2,275,2,202,1,173,9,144,18,91,48,46,93,25,131,8,167,2,211" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/VI/31/1'))}}" onmouseover="resaltaImgSecu('SemestreVI','Metodologia')" onmouseout="normalImgSecu('SemestreVI','Metodologia')" shape="poly" coords="1,260,99,253,109,290,126,326,153,353,187,375,218,384,255,384,296,377,321,362,375,444,355,457,313,472,273,483,208,482,177,475,121,455,72,415,34,369,10,322" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/VI/29/1'))}}" onmouseover="resaltaImgSecu('SemestreVI','Ecologia')" onmouseout="normalImgSecu('SemestreVI','Ecologia')" shape="poly" coords="307,114,351,25,400,58,445,112,474,172,482,212,483,278,453,367,434,391,375,446,321,362,353,333,377,289,386,240,377,188,344,138" />
		</map>
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/semestreVI.png','telebachillerato Semestre VI',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreVI'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/EcologiaHover.png','Telebachillerato Ecologia',['class'=>'resaltaImg img-responsive', 'id'=>'EcologiaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/FilosofiaHover.png','Telebachillerato Filosofia',['class'=>'resaltaImg img-responsive', 'id'=>'FilosofiaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/MetodologiaHover.png','Telebachillerato Geografia',['class'=>'resaltaImg img-responsive', 'id'=>'MetodologiaHover'])}}
		{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/ImgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSemVI'])}}
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection