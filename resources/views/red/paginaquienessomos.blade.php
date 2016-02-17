@section('title')
    Quienes Somos
@stop
@extends('home')
@section('menu')
	@include('red.headerRed')
@endsection
@section('cuerpo')
	
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-12 thumbnail item square animated bounceIn">
                        <!--<img src="http://placehold.it/1600x900" alt="">-->
                    <img class="img-responsive" src="imagenes/red/quienesSomos/ventanaquienessomos2.jpg" alt="">
                </div>
            </div>   
        </div>
        @include('red.pie')
@stop


