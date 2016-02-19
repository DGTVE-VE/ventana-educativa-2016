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
                <h2> Quienes Somos</h2>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8 animated bounceIn imgquienes" >
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@include('red.seccionpie')


