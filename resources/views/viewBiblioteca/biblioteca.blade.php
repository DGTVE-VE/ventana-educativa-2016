@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<link rel="stylesheet" href="{{asset('css/biblioteca/biblioteca.css')}}"/>
<script src="{{url('js/biblioteca/biblioteca.js')}}"></script>
<script>
	if(	<?php if(Auth::guest()){ echo "0";}else{echo "1";}?>){
		if( <?php if(Auth::user() && !File::exists ('uploaded/avatares/'.Auth::user()->id.'.png') ){ echo "1";}else{echo "0";}?> == 1){
			$('#img-usuario').attr('src','{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
		}
	}
</script>
@endsection
@section('cuerpoBiblioteca')

<div class="container">
	<div class="row">
		<div class="separaMenu"></div>
		<h2 class="text-center">Biblioteca</h2><br>
		<div class="accordionBiblio">
			<ul id="tomosBiblioteca">
				<li onclick="location.href='{{asset('biblioteca/tomos/CR/0')}}'" class="hoverLiBiblioteca" style="background-image: url('{{asset('imagenes/biblioteca/pais/costarica.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/colombia.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/dominicana.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/guatemala.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/honduras.jpg')}}')"></li>
				<li onclick="location.href='{{asset('biblioteca/tomos/MX/0')}}'" class="hoverLiBiblioteca" style="background-image: url('{{asset('imagenes/biblioteca/pais/mexico.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/nicaragua.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/panama.jpg')}}')"></li>
				<li style="background-image: url('{{asset('imagenes/biblioteca/pais/salvador.jpg')}}')"></li>
			</ul>
		</div>
	</div>
</div>
@include('viewMediateca.barraSociales')
@endsection
