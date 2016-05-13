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
		$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').css('background','rgba(0, 0, 0, .6)');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
			}
		});
	</script>
        @include('viewVod.menuVod')
        <script>
              $('#menuVOD').css('top','100px');
        </script>
@endsection

@section('cuerpoVod')
        @include('viewVod.bannerVod')
@endsection
