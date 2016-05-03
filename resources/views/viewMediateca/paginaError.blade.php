@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class="container">
    <br/><br/>
    <div class="thumbnail color-fondo-error"> <br/><br/>
        {{ HTML::image('imagenes/mediateca/encabezado/logoventana.png','logo-ventana',['class'=>'img-responsive'])}}
        <div class="centrar-texto-error"> <br/></br>
            <h1>Página no Disponible <small>Error 404</small></h1>
            <h4>Por el momento no se encuentra disponible la página</h4><br/>
            <a href="{{url('http://localhost/ventanaEducativa/public/ventana_educativa')}}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Ir a Página Principal</a>
            <br/><br/>
        </div>
    </div>
</div>
@endsection

