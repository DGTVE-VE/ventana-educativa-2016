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
		<map name="mapaSemIII" id="mapaSemIII">
			<area alt="biologiaI" title="" href="{{(url('educamedia/telebachillerato/III/20'))}}" onmouseover="resaltaImgSecu('SemestreIII','BiologiaI')" onmouseout="normalImgSecu('SemestreIII','BiologiaI')" shape="poly" coords="51,390,129,331,108,291,99,245,101,210,107,191,18,156,15,155,10,173,1,197,1,270,5,306,28,359" />
			<area alt="literaturaI" title="" href="{{(url('educamedia/telebachillerato/III/18'))}}" onmouseover="resaltaImgSecu('SemestreIII','LiteraturaI')" onmouseout="normalImgSecu('SemestreIII','LiteraturaI')" shape="poly" coords="15,154,107,190,134,148,162,123,193,107,222,99,209,2,203,2,189,3,147,19,117,31,76,62,49,96" />
			<area alt="historiaMexicoII" title="" href="{{(url('educamedia/telebachillerato/III/17'))}}" onmouseover="resaltaImgSecu('SemestreIII','HistoriaMexicoII')" onmouseout="normalImgSecu('SemestreIII','HistoriaMexicoII')" shape="poly" coords="224,100,210,2,273,2,296,7,325,14,356,28,390,51,428,85,435,94,356,154,331,128,296,105,259,99" />
			<area alt="fisicaI" title="" href="{{(url('educamedia/telebachillerato/III/16'))}}" onmouseover="resaltaImgSecu('SemestreIII','FisicaI')" onmouseout="normalImgSecu('SemestreIII','FisicaI')" shape="poly" coords="358,156,435,97,463,141,479,190,482,213,482,277,468,331,377,295,385,248,381,197" />
			<area alt="matematicasIII" title="" href="{{(url('educamedia/telebachillerato/III/15'))}}" onmouseover="resaltaImgSecu('SemestreIII','MatematicasIII')" onmouseout="normalImgSecu('SemestreIII','MatematicasIII')" shape="poly" coords="376,296,467,333,448,369,408,419,379,443,326,468,274,480,261,385,315,362,351,339" />
			<area alt="lenguaAdicionalIII" title="" href="{{(url('educamedia/telebachillerato/III/19'))}}" onmouseover="resaltaImgSecu('SemestreIII','LenguaAdicionalIII')" onmouseout="normalImgSecu('SemestreIII','LenguaAdicionalIII')" shape="poly" coords="53,392,129,333,162,362,204,381,238,386,260,386,273,482,200,482,164,473,119,452,73,419" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/semestreIII.png','telebachillerato Semestre III',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreIII'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/BiologiaIHover.png','Telebachillerato BiologiaI',['class'=>'resaltaImg img-responsive', 'id'=>'BiologiaIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LiteraturaIHover.png','Telebachillerato LiteraturaI',['class'=>'resaltaImg img-responsive', 'id'=>'LiteraturaIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/HistoriaMexicoIIHover.png','Telebachillerato HistoriaMexicoII',['class'=>'resaltaImg img-responsive', 'id'=>'HistoriaMexicoIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/FisicaIHover.png','Telebachillerato FisicaI',['class'=>'resaltaImg img-responsive', 'id'=>'FisicaIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/MatematicasIIIHover.png','Telebachillerato MatematicasIII',['class'=>'resaltaImg img-responsive', 'id'=>'MatematicasIIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/LenguaAdicionalIIIHover.png','Telebachillerato LenguaAdicionalIII ',['class'=>'resaltaImg img-responsive', 'id'=>'LenguaAdicionalIIIHover'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/LiteraturaI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'LiteraturaICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/MatematicasIII.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'MatematicasIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/LenguaAdicionalIII.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'LenguaAdicionalIIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/BiologiaI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'BiologiaICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/FisicaI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'FisicaICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/HistoriaMexicoII.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'HistoriaMexicoIICentro'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreIII/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMIII', 'usemap'=>'#mapaSemIII'])}}
		</div>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection