@section('titleRedmite')
Correo Validado
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="row" style="margin-top: 5%;">
    <div class="col-md-offset-3">{{ HTML::image('imagenes/red/footer/activacionexitosa.jpg','Correo Validado', ['class'=>'img-responsive'])}}</div>        
</div>
@include('viewRed.seccionpie')
@stop
