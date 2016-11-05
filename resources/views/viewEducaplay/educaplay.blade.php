@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
	@include('viewVentana.encabezadoVentana')
	<style>
		.bordeBotonBco{
			border-color:white;
		}
		.backBlanco{
			background-color:white;
		}
	</style>
	<script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
		$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
		$('#navegacionVentana').css('zIndex',900);
		$('#buttonColapse').removeClass('bordeBoton');
		$('#buttonColapse').addClass('bordeBotonBco');
		$('#dropdownApps').addClass('col-xs-2');
		$('#dropdownSesion').addClass('col-xs-4');
		$('.backNegro').addClass('backBlanco');
		$('.backNegro').removeClass('backNegro');
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').addClass('fondoDegradadoMenu');
				$('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
				$('#navegacionVentana').removeClass('fondoDegradadoMenu');
			}
		});
	</script>
        @include('viewEducaplay.menuEducaplay')
@endsection
@section('cuerpoEducaplay')
	{{--*/
		function recortaDescripcion($txtDescribe, $tamCadena){
			if(strlen($txtDescribe) > $tamCadena){
				$textoDescribe = substr($txtDescribe, 0, $tamCadena).'...';
				return $textoDescribe;
			}
			else{
				return $txtDescribe;
			}
		}
	/*--}}
        @include('viewEducaplay.bannerEducaplay')
        @include('viewEducaplay.carretesEducaplay')
@endsection
