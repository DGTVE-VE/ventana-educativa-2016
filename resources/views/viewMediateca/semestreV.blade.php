@section('titleMediateca')
Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<style>
    .Geografia{
        position: absolute; top:9%; left:65%; width:70%; height: 95%; z-index:1;
    }
    .HistoriaUniv{
        position: absolute; top:96.5%; left:65%; width:70%; height: 95%; z-index:1;
    }
    .bajaFila{
        position:relative; top:80px; z-index:10;
    }
    .telebachilleratoCentro{
        position: absolute; top:35%; left:72%; width:55%; height: 120%;	z-index:0; visibility: hidden;
    }
    .telesecundariaCentro{
        position: absolute; top:35%; left:73%; width:55%; height: 120%; z-index:0; visibility: hidden;
    }
</style>
<script>
    function muestraImgCentro(idImg) {
        var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreV')}}" + "/" + idImg + "Hover.png";
        document.getElementById(idImg).src = idImgHover;
        /*var idImgCentro = idImg + "Centro";
         document.getElementById(idImgCentro).style.visibility = "visible";*/

    }
    function ocultaImgCentro(idImg) {
        var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreV')}}" + "/" + idImg + ".png";
        document.getElementById(idImg).src = idImgHover;
        /*var idImgCentro = idImg + "Centro";
         document.getElementById(idImgCentro).style.visibility = "hidden";*/
    }
</script>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo bajaFila">
    <?php
    generaBreadCrumbs();
    ?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bajaFila" style="padding:10%;">
    <a href="{{(url('educamedia/telebachillerato/V/27/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/Geografia.png','Telebachillerato Geografia',['class'=>'Geografia', 'id'=>'Geografia', 'onmouseover'=>'muestraImgCentro("Geografia")', 'onmouseout'=>'ocultaImgCentro("Geografia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/V/28/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreV/HistoriaUniv.png','Telebachillerato HistoriaUniv',['class'=>'HistoriaUniv', 'id'=>'HistoriaUniv', 'onmouseover'=>'muestraImgCentro("HistoriaUniv")', 'onmouseout'=>'ocultaImgCentro("HistoriaUniv")'])}}
    </a>
    {{HTML::image('imagenes/mediateca/Inicio/TelebachilleratoCentro.png','Telebachillerato Central',['class'=>'telebachilleratoCentro', 'id'=>'telebachCentro'])}}
    {{HTML::image('imagenes/mediateca/Inicio/TelesecundariaCentro.png','Telesecundaria Central',['class'=>'telesecundariaCentro', 'id'=>'telesecCentro'])}}
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection