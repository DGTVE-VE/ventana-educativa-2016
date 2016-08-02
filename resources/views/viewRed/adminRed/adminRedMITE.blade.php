@section('titleRedmite')
Busca Usuario
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="container">
    <div class="row">
        <hr>
        <br><br><br>
        <a href="{{url('redmite/admin/buscaIntegrantes')}}">Capturar Integrante</a>
        <br><br><br>
        <hr>
    </div>
</div>
@include('viewRed.seccionpie')
@stop