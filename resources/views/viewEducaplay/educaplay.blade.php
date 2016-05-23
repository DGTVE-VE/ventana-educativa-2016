@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
	@include('viewVentana.encabezadoVentana')
        <script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
		$('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
		$('#navegacionVentana').css('zIndex',900);
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
        @include('viewEducaplay.bannerEducaplay')
<<<<<<< HEAD
	@include('viewEducaplay.carretes')
=======
		@include('viewEducaplay.carretesEducaplay')
>>>>>>> 18e9b9253026f3024839f1c0bf8f2eff72f40493
@endsection
