@section('titleRedmite')
Correo Validado
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="row" style="margin-top: 5%;">
    <a href="{{url('indexRed')}}">
        <!--<img class="responsive center-block" src="imagenes/red/footer/activacionexitosa.jpg">-->
        {{ HTML::image('imagenes/red/footer/activacionexitosa.jpg','activacion exitosa', array('class'=>'responsive center-block'))}}
    </a>
</div>
@include('viewRed.seccionpie')
@stop
