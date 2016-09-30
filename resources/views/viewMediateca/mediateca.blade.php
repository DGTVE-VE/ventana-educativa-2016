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
    <map name="inicioEducamedia" id="inicioEducamedia">
        <area alt="telesecundaria" title="" href="{{url('educamedia/telesecundaria')}}" onmouseover="resaltaImgSecu('Inicio', 'telesec')" onmouseout="normalImgSecu('Inicio', 'telesec')" shape="poly" coords="6,188,105,213,108,280,123,315,144,345,185,370,227,383,266,381,285,378,312,474,279,482,211,482,165,473,109,448,60,407,21,348,9,307,1,264,2,209" />
        <area alt="telebachillerato" title="" href="{{url('educamedia/telebachillerato')}}" onmouseover="resaltaImgSecu('Inicio', 'telebach')" onmouseout="normalImgSecu('Inicio', 'telebach')" shape="poly" coords="283,378,324,359,357,326,380,284,384,230,372,182,355,158,340,140,412,67,437,95,462,137,480,184,486,224,485,277,474,323,453,371,417,415,390,439,312,476" />
		<area alt="SEA" title="" href="{{url('educamedia/sea')}}" onmouseover="resaltaImgSecu('Inicio', 'sea')" onmouseout="normalImgSecu('Inicio', 'sea')" shape="poly" coords="7,188,103,212,122,171,149,138,185,114,227,102,260,102,306,116,340,141,410,67,384,43,344,21,300,4,276,0,204,1,157,14,112,36,79,64,47,96,17,145" />
    </map>
    <div class="contenedorAro">
        {{HTML::image('imagenes/mediateca/Inicio/home.png','Telesecundaria',['class'=>'posicionInicial img-responsive', 'id'=>'iniEducamedia'])}}
        {{HTML::image('imagenes/mediateca/Inicio/telesecHover.png','Telesecundaria',['class'=>'resaltaImg img-responsive', 'id'=>'telesecHover'])}}
        {{HTML::image('imagenes/mediateca/Inicio/telebachHover.png','Telesecundaria',['class'=>'resaltaImg img-responsive', 'id'=>'telebachHover'])}}
		{{HTML::image('imagenes/mediateca/Inicio/seaHover.png','SEA',['class'=>'resaltaImg img-responsive', 'id'=>'seaHover'])}}
        {{HTML::image('imagenes/mediateca/Inicio/gifs/1.gif','Telebachillerato Central',['class'=>' img-responsive iniImgCentro img-circle', 'id'=>'telebachCentro'])}}
        {{HTML::image('imagenes/mediateca/Inicio/gifs/8.gif','Telesecundaria Central',['class'=>'img-responsive iniImgCentro img-circle', 'id'=>'telesecCentro'])}}
        {{HTML::image('imagenes/mediateca/Inicio/imgMapa.png','Telebachillerato',['class'=>'posicionMapa img-responsive', 'id'=>'educamediaIni', 'usemap'=>'#inicioEducamedia'])}}
    </div>
</div>
@include('viewMediateca.barraSociales')
@endsection
