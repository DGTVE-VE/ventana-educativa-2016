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
	<script src="js/educaplay/menuVentana.js"></script>
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
