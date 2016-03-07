@section('titleVentana')
    Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
	@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
	@include('viewVentana.cuerpoVentana')
@endsection
