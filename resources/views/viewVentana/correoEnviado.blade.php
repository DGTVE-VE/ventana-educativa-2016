@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class = "col-lg-offset-4 col-md-12">
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <a href="ventana_educativa">
    {{ HTML::image('imagenes/ventana/envioCorreo/banner1.png','modelos educativos', array('class'=>'image-responsive', 'width' => 600, 'height' => 400))}}
    </a>
    <br><br><br><br>
    <br><br>
</div>
@endsection