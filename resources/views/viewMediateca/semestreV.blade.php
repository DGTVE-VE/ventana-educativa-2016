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
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bajaFila" style="padding:10%;">
    <a href="{{(url('educamedia/telebachillerato/V/27/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/Geografia.png','Telebachillerato Geografia',['class'=>'Geografia', 'id'=>'Geografia', 'onmouseover'=>'muestraImgCentro("SemestreV","Geografia")', 'onmouseout'=>'ocultaImgCentro("SemestreV","Geografia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/V/28/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/HistoriaUniv.png','Telebachillerato HistoriaUniv',['class'=>'HistoriaUniv', 'id'=>'HistoriaUniv', 'onmouseover'=>'muestraImgCentro("SemestreV","HistoriaUniv")', 'onmouseout'=>'ocultaImgCentro("SemestreV","HistoriaUniv")'])}}
    </a>
    {{HTML::image('imagenes/mediateca/Inicio/TelebachilleratoCentro.png','Telebachillerato Central',['class'=>'telebachilleratoCentro', 'id'=>'telebachCentro'])}}
    {{HTML::image('imagenes/mediateca/Inicio/TelesecundariaCentro.png','Telesecundaria Central',['class'=>'telesecundariaCentro', 'id'=>'telesecCentro'])}}
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection