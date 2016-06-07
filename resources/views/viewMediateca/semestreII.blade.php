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
		<map name="mapaSemII" id="mapaSemII">
			<area alt="informaticaII" onmouseover="resaltaImgSecu('SemestreII','InformaticaII')" onmouseout="normalImgSecu('SemestreII','InformaticaII')" title="" href="{{(url('educamedia/telebachillerato/II/12'))}}" shape="poly" coords="1,232,99,232,103,209,111,183,124,158,140,140,159,124,101,45,83,58,60,81,36,111,13,159,4,192" />
			<area alt="tallerLecturaII" onmouseover="resaltaImgSecu('SemestreII','TallerLecturaII')" onmouseout="normalImgSecu('SemestreII','TallerLecturaII')" title="" href="{{(url('educamedia/telebachillerato/II/11'))}}" shape="poly" coords="161,121,102,44,129,28,156,15,192,5,212,0,256,1,295,5,313,10,282,104,250,96,199,101" />
			<area alt="historiaMexicoI" onmouseover="resaltaImgSecu('SemestreII','HistoriaMexicoI')" onmouseout="normalImgSecu('SemestreII','HistoriaMexicoI')" title="" href="{{(url('educamedia/telebachillerato/II/10'))}}" shape="poly" coords="285,104,316,12,352,25,374,39,397,55,420,76,448,112,466,149,471,164,376,192,357,154,326,124" />
			<area alt="eticaValoresII" onmouseover="resaltaImgSecu('SemestreII','EticaValoresII')" onmouseout="normalImgSecu('SemestreII','EticaValoresII')" title="" href="{{(url('educamedia/telebachillerato/II/14'))}}" shape="poly" coords="378,193,471,166,482,203,483,278,471,322,451,365,367,314,382,273,387,237" />
			<area alt="matematicasII" onmouseover="resaltaImgSecu('SemestreII','MatematicasII')" onmouseout="normalImgSecu('SemestreII','MatematicasII')" title="" href="{{(url('educamedia/telebachillerato/II/8'))}}" shape="poly" coords="265,384,281,481,364,452,392,434,422,406,448,367,450,364,367,316,349,338,323,357,297,373" />
			<area alt="lenguaAdicionalII" onmouseover="resaltaImgSecu('SemestreII','LenguaAdicionalII')" onmouseout="normalImgSecu('SemestreII','LenguaAdicionalII')" title="" href="{{(url('educamedia/telebachillerato/II/13'))}}" shape="poly" coords="281,479,265,383,248,387,224,385,192,377,159,359,144,348,82,422,109,445,157,470,204,482" />
			<area alt="quimicaII" onmouseover="resaltaImgSecu('SemestreII','QuimicaII')" onmouseout="normalImgSecu('SemestreII','QuimicaII')" title="" href="{{(url('educamedia/telebachillerato/II/9'))}}" shape="poly" coords="82,421,143,348,137,340,120,317,107,285,99,253,99,234,95,233,2,234,2,248,2,273,3,298,12,316,21,340,40,381" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/semestreII.png','telebachillerato Semestre II',['class'=>'posicionInicial img-responsive', 'id'=>'SemestreII'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/InformaticaIIHover.png','Telebachillerato InformaticaII',['class'=>'resaltaImg img-responsive', 'id'=>'InformaticaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/TallerLecturaIIHover.png','Telebachillerato TallerLecturaII',['class'=>'resaltaImg img-responsive', 'id'=>'TallerLecturaIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/HistoriaMexicoIHover.png','Telebachillerato HistoriaMexicoI',['class'=>'resaltaImg img-responsive', 'id'=>'HistoriaMexicoIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/EticaValoresIIHover.png','Telebachillerato EticaValoresII',['class'=>'resaltaImg img-responsive', 'id'=>'EticaValoresIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/MatematicasIIHover.png','Telebachillerato MatematicasII',['class'=>'resaltaImg img-responsive', 'id'=>'MatematicasIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/LenguaAdicionalIIHover.png','Telebachillerato LenguaAdicionalII',['class'=>'resaltaImg img-responsive', 'id'=>'LenguaAdicionalIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/QuimicaIIHover.png','Telebachillerato QuimicaII',['class'=>'resaltaImg img-responsive', 'id'=>'QuimicaIIHover'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/EticaValoresI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'EticaValoresIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/matematicasI.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'MatematicasIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/lenguaAdicional.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'LenguaAdicionalIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/quimica.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'QuimicaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/informatica.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'InformaticaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/lecturaRedaccion.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'TallerLecturaIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/historiaMexico.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'HistoriaMexicoICentro'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/SemestreII/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSemII'])}}
		</div>
	</div>
	@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.menuMediatecaTelebachillerato')
@endsection