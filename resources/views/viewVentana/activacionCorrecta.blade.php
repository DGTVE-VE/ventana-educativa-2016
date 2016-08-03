@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class = "panel panel-default frmRegistro col-lg-offset-2 col-md-8">
<br><br>
<br><br>
    <h3 class = "panel-title tituloRegistro text-center text-uppercase">
        Usuario activado
    </h3>
<br><br><br><br>
    <br><br>
</div>
@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection
