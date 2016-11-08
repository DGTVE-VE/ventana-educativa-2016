@section('titleBiblioteca')
	Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<link rel="stylesheet" type="text/css" href="{{url('css/biblioteca/tomos.css')}}"/>
<script src="{{url('js/biblioteca/tomos.js')}}"></script>
@endsection
@section('cuerpoBiblioteca')
<div class="row padTop5px">
    <div class="col-md-12">
    </div>
</div>
<div class="row pad10px">
    <div class="col-md-12">
        <h2 class="text-center">Biblioteca</h2>
    </div>
</div>
@include('viewBiblioteca.menuBiblioteca')
<div class="row posiciona">
    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 posiciona">
		<?php $i=0; ?>
			@foreach ($tomos as $item => $tomo)
				@if(($item % 2 === 0) && $item!=0)
					<div class="visible-xs-block col-xs-12 posiciona">
						<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
						<div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}" class="letrero"></div>
					</div>
				@endif
				@if(($item % 4 === 0) && $item!=0)
					<div class="visible-sm-block col-sm-12 posiciona">
						<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
						<div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}" class="letrero"></div>
					</div>
				@endif
				@if(($item % 9 === 0) && $item!=0)
					<div class="visible-md-block visible-lg-block col-md-12 posiciona">
						<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
						<div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}" class="letrero"></div>
					</div>
				@endif
				@if($item % 9 === 0)
					<?php $i++; ?>
						<div class="col-md-1 contenedor" id="columnaMargen{{$i}}">
						</div>
				@endif
					<div id="contenedor{{$i}}{{$item}}" class="col-xs-3 col-sm-2 col-md-1 col-lg-1 contenedor" onmouseenter="muestraDescripcion({{$i}},{{$item}})" onmouseleave="ocultaDescripcion({{$i}},{{$item}})">
						<a id="ligaBiblioteca{{$i}}{{$item}}" href="{{$tomo->link_consulta}}" class="textoLigaBiblio" target="_blank">
                        <img src="{{ asset('imagenes/biblioteca/tomos/ir_biblioteca.png')}}" alt="Ir a la Biblioteca"></a>
						<img id="imagenLomo{{$i}}" src="{{url($tomo->url_tomo)}}" class="img-responsive imagenLomo" alt="...">
						<img id="descripcion{{$i}}{{$item}}" src="{{url($tomo->url_descripcion)}}" class="img-responsive imagenDescribe contenedor ocultaImgDescribe" alt="...">
					</div>
			@endforeach
		@if($i===0)
			<div class="textoEstante text-uppercase" style="color:black;"> NO HAY BIBLIOTECAS PARA ESTA CLASIFICACI&#211;N </div>
			<script>
				$(document.body).addClass('backCover');
				$(document.body).removeClass('tamBack');
			</script>
		@else
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 posiciona">
				<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
				<div class="textoEstante estanteSuperior text-uppercase"><img src="{{asset($imagenCat)}}" class="letrero"></div>
			</div>
			<script>
				$(document.body).addClass('tamBack');
				$(document.body).removeClass('backCover');
			</script>
		@endif
		</div>
	</div>
@endsection
