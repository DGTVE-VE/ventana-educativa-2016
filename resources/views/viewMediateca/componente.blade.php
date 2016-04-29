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
		<map name="mapaSemPedagogico" id="mapaSemPedagogico">
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/35'))}}" onmouseover="resaltaImgSecu('componente','CienciasSaludII')" onmouseout="normalImgSecu('componente','CienciasSaludII')" shape="poly" coords="8,182,104,207,119,168,140,138,170,119,120,32,92,47,68,70,47,96,24,134" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/34'))}}" onmouseover="resaltaImgSecu('componente','CienciasSaludI')" onmouseout="normalImgSecu('componente','CienciasSaludI')" shape="poly" coords="121,32,172,115,210,103,245,98,278,103,306,6,279,3,263,1,201,1,158,17" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/32'))}}" onmouseover="resaltaImgSecu('componente','CienciasComunicacionI')" onmouseout="normalImgSecu('componente','CienciasComunicacionI')" shape="poly" coords="281,103,308,8,324,14,348,24,374,40,399,58,421,78,453,123,367,171,347,141,315,118" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/33'))}}" onmouseover="resaltaImgSecu('componente','CienciasComunicacionII')" onmouseout="normalImgSecu('componente','CienciasComunicacionII')" shape="poly" coords="369,173,454,125,471,159,478,186,483,216,483,270,476,306,380,282,386,244,383,211" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/36'))}}" onmouseover="resaltaImgSecu('componente','ProbabilidadI')" onmouseout="normalImgSecu('componente','ProbabilidadI')" shape="poly" coords="380,283,475,308,462,348,439,382,417,408,395,432,365,453,314,367,347,341,369,311" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/37'))}}" onmouseover="resaltaImgSecu('componente','ProbabilidadII')" onmouseout="normalImgSecu('componente','ProbabilidadII')" shape="poly" coords="361,452,313,369,284,380,246,386,205,382,182,476,219,482,269,483,317,474" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/39'))}}" onmouseover="resaltaImgSecu('componente','PsicologiaII')" onmouseout="normalImgSecu('componente','PsicologiaII')" shape="poly" coords="119,315,33,364,59,401,94,433,117,449,179,475,204,382,172,368,134,339" />
			<area alt="" title="" href="{{(url('educamedia/telebachillerato/Propedéutico/38'))}}" onmouseover="resaltaImgSecu('componente','PsicologiaI')" onmouseout="normalImgSecu('componente','PsicologiaI')" shape="poly" coords="117,315,34,362,12,319,3,273,1,209,7,183,101,209,96,237,102,282" />
		</map>
		<div class="contenedorAro">
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/Componente.png','Telesecundaria SemestrePedagogico',['class'=>'posicionInicial img-responsive', 'id'=>'Pedagogico'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionIHover.png','Telesecundaria CienciasComunicacionI',['class'=>'resaltaImg img-responsive', 'id'=>'CienciasComunicacionIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionIIHover.png','Telesecundaria CienciasComunicacionII',['class'=>'resaltaImg img-responsive', 'id'=>'CienciasComunicacionIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludIHover.png','Telesecundaria CienciasSaludI',['class'=>'resaltaImg img-responsive', 'id'=>'CienciasSaludIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludIIHover.png','Telesecundaria CienciasSaludII',['class'=>'resaltaImg img-responsive', 'id'=>'CienciasSaludIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadIHover.png','Telesecundaria ProbabilidadI',['class'=>'resaltaImg img-responsive', 'id'=>'ProbabilidadIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadIIHover.png','Telesecundaria ProbabilidadII',['class'=>'resaltaImg img-responsive', 'id'=>'ProbabilidadIIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaIHover.png','Telesecundaria PsicologiaI',['class'=>'resaltaImg img-responsive', 'id'=>'PsicologiaIHover'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaIIHover.png','Telesecundaria PsicologiaII',['class'=>'resaltaImg img-responsive', 'id'=>'PsicologiaIIHover'])}}

			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/salud.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'CienciasSaludICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/salud.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'CienciasSaludIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/cienciasComunicacion.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'CienciasComunicacionICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/cienciasComunicacion.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'CienciasComunicacionIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/probabilidad.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'ProbabilidadICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/probabilidad.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'ProbabilidadIICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/psicologia.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'PsicologiaICentro'])}}
			{{HTML::image('imagenes/mediateca/tbachillerato/imgCentral/psicologiaSilla.png','Telebachillerato Central',['class'=>' img-responsive iniImgCentro', 'id'=>'PsicologiaIICentro'])}}
			
			{{HTML::image('imagenes/mediateca/tbachillerato/componente/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'telebachilleratoSEMII', 'usemap'=>'#mapaSemPedagogico'])}}
		</div>
	</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelesecundaria')
@endsection