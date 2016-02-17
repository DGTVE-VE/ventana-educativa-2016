@section('title')
    Quienes Somos
@stop
@extends('home')
@section('menu')
	@include('red.headerRed')
@endsection
@section('cuerpo')
	@include('red.quienesSomos')
        @include('red.pie')
@stop

