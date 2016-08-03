@section('titleDocente')
Módulo de Administración
@stop
@extends('indexAdmin')
@section('menuAdmin')
@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
@include('viewAdmin.inicio')
@endsection