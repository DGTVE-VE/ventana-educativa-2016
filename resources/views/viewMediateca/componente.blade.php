@section('titleMediateca')
Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
    <?php
    generaBreadCrumbs();
    ?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
    <map name="mapaartes1o" id="mapaartes1o">
        <area alt="" title=""  href="{{url('mediateca/telebachillerato/componente')}}" shape="poly" coords="150,314,140,264,58,182,2,66,180,2,222,64,214,96,312,140" onmouseover="muestraImgCentro('componente','CienciasComunicacionI')" onmouseout="ocultaImgCentro('componente','CienciasComunicacionI')"/>
    </map>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/32/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionI.png','Telesecundaria CienciasComunicacionI',['class'=>'CienciasComunicacionI', 'id'=>'CienciasComunicacionI', 'usemap'=>'#mapaartes1o'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/33/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasComunicacionII.png','Telesecundaria CienciasComunicacionII',['class'=>'CienciasComunicacionII', 'id'=>'CienciasComunicacionII', 'onmouseover'=>'muestraImgCentro("componente","CienciasComunicacionII")', 'onmouseout'=>'ocultaImgCentro("componente","CienciasComunicacionII")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/34/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludI.png','Telesecundaria CienciasSaludI',['class'=>'CienciasSaludI', 'id'=>'CienciasSaludI', 'onmouseover'=>'muestraImgCentro("componente","CienciasSaludI")', 'onmouseout'=>'ocultaImgCentro("componente","CienciasSaludI")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/35/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/CienciasSaludII.png','Telesecundaria CienciasSaludII',['class'=>'CienciasSaludII', 'id'=>'CienciasSaludII', 'onmouseover'=>'muestraImgCentro("componente","CienciasSaludII")', 'onmouseout'=>'ocultaImgCentro("componente","CienciasSaludII")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/36/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadI.png','Telesecundaria ProbabilidadI',['class'=>'ProbabilidadI', 'id'=>'ProbabilidadI', 'onmouseover'=>'muestraImgCentro("componente","ProbabilidadI")', 'onmouseout'=>'ocultaImgCentro("componente","ProbabilidadI")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/37/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/ProbabilidadII.png','Telesecundaria ProbabilidadII',['class'=>'ProbabilidadII', 'id'=>'ProbabilidadII', 'onmouseover'=>'muestraImgCentro("componente","ProbabilidadII")', 'onmouseout'=>'ocultaImgCentro("componente","ProbabilidadII")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/38/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaI.png','Telesecundaria PsicologiaI',['class'=>'PsicologiaI', 'id'=>'PsicologiaI', 'onmouseover'=>'muestraImgCentro("componente","PsicologiaI")', 'onmouseout'=>'ocultaImgCentro("componente","PsicologiaI")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/Propedéutico/39/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/componente/PsicologiaII.png','Telesecundaria PsicologiaII',['class'=>'PsicologiaII', 'id'=>'PsicologiaII', 'onmouseover'=>'muestraImgCentro("componente","PsicologiaII")', 'onmouseout'=>'ocultaImgCentro("componente","PsicologiaII")'])}}
    </a>
    <!--{{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/artesCentro.png','Telesecundaria central artes',['class'=>'imgPrimeroCentral', 'id'=>'artesCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/orientacionCentro.png','Telesecundaria central orientacion',['class'=>'imgPrimeroCentral', 'id'=>'orientacionCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/geografiaCentro.png','Telesecundaria central geografia',['class'=>'imgPrimeroCentral', 'id'=>'geografiaCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/espanolCentro.png','Telesecundaria central espanol',['class'=>'imgPrimeroCentral', 'id'=>'espanolCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/matematicasCentro.png','Telesecundaria central matematicas',['class'=>'imgPrimeroCentral', 'id'=>'matematicasCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/cienciasCentro.png','Telesecundaria central ciencias',['class'=>'imgPrimeroCentral', 'id'=>'cienciasCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/lenguaCentro.png','Telesecundaria central lengua',['class'=>'imgPrimeroCentral', 'id'=>'lenguaCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/educacionFisicaCentro.png','Telesecundaria central educacionFisica',['class'=>'imgPrimeroCentral', 'id'=>'educacionFisicaCentro'])}}
    {{HTML::image('imagenes/mediateca/tsecundaria/iconoCentral/tecnologiaCentro.png','Telesecundaria central tecnologia',['class'=>'imgPrimeroCentral', 'id'=>'tecnologiaCentro'])}}
    -->
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelesecundaria')
@endsection