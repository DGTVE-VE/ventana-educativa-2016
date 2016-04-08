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
{{ HTML::image('imagenes/ventana/envioCorreo/banner1.png','Envío de correo de confirmación', ['class'=>'img-responsive'])}}
<!--    <h3 class = "panel-title tituloRegistro text-center text-uppercase">
         El correo para activación ha sido enviado.
    </h3>-->
<br><br><br><br>
    <br><br>
</div>
@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection
