@section('titleMediateca')
    Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
        
@endsection
@section('cuerpoMediateca')
	@include('viewMediateca.cuerpoTelesecundaria')
        @include('viewMediateca.barraSociales')
@endsection
@section('pieMediateca')
    @include('viewMediateca.pieMediateca')
@endsection