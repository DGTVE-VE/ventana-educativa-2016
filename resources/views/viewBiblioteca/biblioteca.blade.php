@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<style>
.fondoDegradadoMenuInicial{
	background: rgba(0, 0, 0, .3);
	border: none;
}
.fondoDegradadoMenu{
	background: rgba(0, 0, 0, .3);
	border: none;
}
</style>
<script>
$('#buscar').css('display', 'none');
$('#iconoBuscar').css('display', 'none');
$('#navegacionVentana').css('height', '55px');
$('.imgLogo').attr('src','{{url("imagenes/biblioteca/imgMenu/ventanaEducativa.png")}}');
$('.appsLogo').attr('src','{{url("imagenes/biblioteca/imgMenu/menu.png")}}');

if(	<?php if(Auth::guest()){ echo "0";}else{echo "1";}?>){

	if( <?php if(Auth::user() && !File::exists ('uploaded/avatares/'.Auth::user()->id.'.png') ){ echo "1";}else{echo "0";}?> == 1){

		$('#img-usuario').attr('src','{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
	}

}
$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
$(window).scroll(function(){
	var scroll_v = this.pageYOffset;
	if(scroll_v > 10){
		$('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
		$('#navegacionVentana').addClass('fondoDegradadoMenu');
	}
	if(scroll_v < 10){
		$('#navegacionVentana').removeClass('fondoDegradadoMenu');
		$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
	}
});
</script>
@endsection
@section('cuerpoBiblioteca')



<div class="container">
	<div class="row">
		<br><br>
		<h2 class="text-center">Biblioteca</h2>
		<br>
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
