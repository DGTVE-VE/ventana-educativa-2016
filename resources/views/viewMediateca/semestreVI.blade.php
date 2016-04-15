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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:1%;">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
    <a href="{{(url('educamedia/telebachillerato/VI/29/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Ecologia.png','Telebachillerato Ecologia',['class'=>'Ecologia', 'id'=>'Ecologia', 'onmouseover'=>'muestraImgCentro("SemestreVI","Ecologia")', 'onmouseout'=>'ocultaImgCentro("SemestreVI","Ecologia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/VI/30/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Filosofia.png','Telebachillerato Filosofia',['class'=>'Filosofia', 'id'=>'Filosofia', 'onmouseover'=>'muestraImgCentro("SemestreVI","Filosofia")', 'onmouseout'=>'ocultaImgCentro("SemestreVI","Filosofia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/VI/31/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Metodologia.png','Telebachillerato Geografia',['class'=>'Metodologia', 'id'=>'Metodologia', 'onmouseover'=>'muestraImgCentro("SemestreVI","Metodologia")', 'onmouseout'=>'ocultaImgCentro("SemestreVI","Metodologia")'])}}
    </a>
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection