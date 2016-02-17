@section('title')
    Red Mesoamericana
@stop
@extends('home')
@section('menu')
	@include('red.seccionheader')
@endsection
@section('cuerpo')
	@include('red.seccionslider')
	@include('red.seccionareastematicas')
	@include('red.seccionproyectos')
	@include('red.seccionusabilidadpedagogica')
	@include('red.seccionintegrantes')
	@include('red.seccionretosregionales')
	@include('red.seccionpie')
@endsection