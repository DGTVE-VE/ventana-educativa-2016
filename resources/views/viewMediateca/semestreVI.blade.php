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
		<p id="parrafoBreadcrumb"> </p><br>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<map name="mapaSemVI" id="mapaSemVI">
			<area alt="filosofia" title="" href="{{(url('educamedia/telebachillerato/VI/30/0'))}}" onmouseover="resaltaImgSecu('SemestreVI','Filosofia')" onmouseout="normalImgSecu('SemestreVI','Filosofia')" shape="poly" coords="286,7,268,102,334,136,372,184,386,230,378,291,354,339,428,399,458,354,476,301,483,250,481,196,460,137,430,88,385,46,338,22" />
			<area alt="metodologia" title="" href="{{(url('educamedia/telebachillerato/VI/31/0'))}}" onmouseover="resaltaImgSecu('SemestreVI','Metodologia')" onmouseout="normalImgSecu('SemestreVI','Metodologia')" shape="poly" coords="109,296,17,330,38,379,86,430,136,463,197,483,288,483,340,466,392,435,428,400,353,339,323,359,239,387,180,374,134,341" />
			<area alt="ecologia" title="" href="{{(url('educamedia/telebachillerato/VI/29/0'))}}" onmouseover="resaltaImgSecu('SemestreVI','Ecologia')" onmouseout="normalImgSecu('SemestreVI','Ecologia')" shape="poly" coords="108,295,16,329,2,262,1,200,19,148,51,97,105,48,147,23,200,7,258,2,286,7,267,105,256,100,215,101,165,122,120,167,99,226" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/semestreVI.png','telebachillerato Semestre VI',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreVI'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/EcologiaHover.png','Telebachillerato Ecologia',['class'=>'resaltaImg img-responsive', 'id'=>'EcologiaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/FilosofiaHover.png','Telebachillerato Filosofia',['class'=>'resaltaImg img-responsive', 'id'=>'FilosofiaHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/MetodologiaHover.png','Telebachillerato Geografia',['class'=>'resaltaImg img-responsive', 'id'=>'MetodologiaHover'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/EcologiaI.gif','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'EcologiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/FilosofiaI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'FilosofiaCentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/Metodologia.gif','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'MetodologiaCentro'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSemVI'])}}
		</div>
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection