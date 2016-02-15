@section('title')
    Red Mesoamericana
@stop
@extends('home')
@section('menu')
	@include('red.headerRed')
@endsection
@section('cuerpo')
	@include('red.slider')
@endsection
@section('cuerpo2')
	@include('red.areasTematicas')
	@include('red.proyectos')
	@include('red.usabilidadPedagogica')
	@include('red.integrantes')
	@include('red.retosRegionales')
	@include('red.pie')
@endsection
