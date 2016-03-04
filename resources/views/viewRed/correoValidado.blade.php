@section('titleRedmite')
Correo Validado
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="row" style="margin-top: 5%;">
    <a href="indexRed"><img class="responsive center-block" src="imagenes/red/footer/activacionexitosa.jpg"></a>
</div>
@include('viewRed.seccionpie')
@stop
