@section('title')
Correo Validado
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
@section('cuerpo')
<div class="row" style="margin-top: 5%;">
    <a href="indexRed"><img class="responsive center-block" src="imagenes/red/footer/activacionexitosa.jpg"></a>
</div>
@include('red.seccionpie')
@stop
