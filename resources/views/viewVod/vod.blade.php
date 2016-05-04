@section('titleVod')
Videos Bajo Demanda
@stop
@extends('indexVod')
@section('menuVod')
	@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVod')
        @include('viewVod.bannerVod')
@endsection
