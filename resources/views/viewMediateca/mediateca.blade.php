@section('titleMediateca')
    Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
        
@endsection
@section('cuerpoMediateca')
	@include('viewMediateca.cuerpoMediateca')
        @include('viewMediateca.barraSociales')
@endsection
