 <style>
  .modal.modal-fullscreen .modal-content {
    background: rgba(0, 0, 0, .5);
  }
  .modal.modal-fullscreen .modal-header {
    border: 0;
    color: #fff;
  }
  .modal.modal-fullscreen .modal-footer {
    border-color: rgba(0, 0, 0, .5);
  }
  #myModal .carousel-caption {
    background-color: rgba(0, 0, 0, .5);
    bottom: -100%;
    -webkit-transition: bottom 1s;
    transition: bottom 1s;
  }
  #myModal .item.active >.carousel-caption {
    bottom: 0;
  }
</style>
@section('title')
    Red Mesoamericana
@stop
@extends('home')
@section('menu')
	@include('red.headerRed')
@endsection
@section('cuerpo')
	@include('red.slider')
	@include('red.areasTematicas')
	@include('red.proyectos')
	@include('red.usabilidadPedagogica')
	@include('red.integrantes')
	@include('red.retosRegionales')
	@include('red.pie')
@endsection
