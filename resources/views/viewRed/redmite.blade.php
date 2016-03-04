@section('titleRedmite')
    Red Mesoamericana
@stop
@extends('indexRed')
@section('menuRedmite')
	@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
	@include('viewRed.seccionslider')
	@include('viewRed.seccionareastematicas')
	@include('viewRed.seccionproyectos')
	@include('viewRed.seccionusabilidadpedagogica')
	@include('viewRed.seccionintegrantes')
	@include('viewRed.seccionretosregionales')
	@include('viewRed.seccionpie')
@endsection