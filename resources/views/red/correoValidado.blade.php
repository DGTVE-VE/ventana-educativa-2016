@section('title')
Correo Validado
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
@section('cuerpo')
<div class="row">
    <a href="indexRed"><img src="imagenes/red/footer/activacionexitosa.jpg"></a>
</div>
@include('red.seccionpie')
@stop
