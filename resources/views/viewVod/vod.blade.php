@section('titleVod')
Videos Bajo Demanda
@stop
@extends('indexVod')
@section('menuVod')
	@include('viewVentana.encabezadoVentana')
	<script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').css('background','transparent');
			}
		});
	</script>
@endsection

@section('cuerpoVod')
        @include('viewVod.bannerVod')
@endsection
@section('menuVod')
    @include('viewVod.menuVod')
@endsection