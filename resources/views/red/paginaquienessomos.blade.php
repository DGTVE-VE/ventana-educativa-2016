@section('title')
Quienes Somos
@stop
@extends('home')
@section('menu')
@include('red.seccionheader')
@endsection
<div class="backpaquienes"> 
    <div class="row" style="margin-top: 5%;" >        
        <div class="row fondo_Obscuro">
            <div class="col-md-12 text-center text-uppercase">
                <h2> Quiénes Somos</h2>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10 animated bounceIn" >
            <img src="imagenes/red/quienesSomos/textoquienessomoschico.png" class="img-responsive">
        </div>
        <div class="col-md-1"></div>
    </div>
    </br></br>
</div>
@include('red.seccionpie')


