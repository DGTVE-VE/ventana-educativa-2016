@section('titleMediateca')
Educamedia
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<style>
    .Ecologia{
        position:absolute; top:15.8%; left:22.2%; width:60%; height: 152%;
    }
    .Filosofia{
        position: absolute; top:29%; left:56%; width:60%; height: 152%;
    }
    .Metodologia{
        position:absolute; top:98.2%; left:33.5%; width:60%; height: 152%;
    }
    .bajaFila{
        position:relative; top:80px; z-index:10;
    }
</style>
<script>
    function muestraImgCentro(idImg) {
        var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreVI')}}" + "/" + idImg + "Hover.png";
        document.getElementById(idImg).src = idImgHover;
        /*var idImgCentro = idImg + "Centro";
         document.getElementById(idImgCentro).style.visibility = "visible";*/

    }
    function ocultaImgCentro(idImg) {
        var idImgHover = "{{url('imagenes/mediateca/tbachillerato/SemestreVI')}}" + "/" + idImg + ".png";
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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:1%;">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" style="padding:10%;">
    <a href="{{(url('educamedia/telebachillerato/VI/29/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Ecologia.png','Telebachillerato Ecologia',['class'=>'Ecologia', 'id'=>'Ecologia', 'onmouseover'=>'muestraImgCentro("Ecologia")', 'onmouseout'=>'ocultaImgCentro("Ecologia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/VI/30/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Filosofia.png','Telebachillerato Filosofia',['class'=>'Filosofia', 'id'=>'Filosofia', 'onmouseover'=>'muestraImgCentro("Filosofia")', 'onmouseout'=>'ocultaImgCentro("Filosofia")'])}}
    </a>
    <a href="{{(url('educamedia/telebachillerato/VI/31/1'))}}">
        {{HTML::image('imagenes/mediateca/tbachillerato/SemestreVI/Metodologia.png','Telebachillerato Geografia',['class'=>'Metodologia', 'id'=>'Metodologia', 'onmouseover'=>'muestraImgCentro("Metodologia")', 'onmouseout'=>'ocultaImgCentro("Metodologia")'])}}
    </a>
</div>
@include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
@include('viewMediateca.menuMediatecaTelebachillerato')
@endsection