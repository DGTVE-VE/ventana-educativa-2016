@section('titleMediateca')
    Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
	@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
	@include('viewMediateca.cuerpoSemestreVI')
@endsection
@section('pieMediateca')
    @include('viewMediateca.pieMediateca')
@endsection