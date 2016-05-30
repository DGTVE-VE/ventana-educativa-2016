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
<style>
	.estiloTxt{
		color: white;
	}
	.txtSobreImg{
		 position:absolute; top:45px; left:10px; width:90%;
	}
	.txtTitulo{
		color:white; font-size:26px;
	}
	.fondoTrans{
		background-color:transparent; border:none;
	}
	.cambiaPadding{
		padding:0px;
	}
	.reduceAnchoFlecha{
		width:3%;
	}
	.thumbnailVertical{
		width: 260px;
	}
	.margenesFila{
		padding-right:35px; padding-left:35px; margin-top:10px; margin-bottom:30px;
	}
	.tamanoIconoMas{
		width:40%;
		position:relative;
		top: 30px;
	}
</style>
@include('viewEducaplay.menuEducaplay')
@endsection
@section('cuerpoEducaplay')
	<div class="row" style="height:100px;">
	</div>
	
	{{--*/ $imprimeTitulo=0; /*--}}
	@foreach ($episodiosSerie as $serie)
		@if($imprimeTitulo===0)
			<div class="row margenesFila">
				<div class="col-md-12 col-lg-12">
					<p class="txtTitulo">{{$serie->titulo_serie}}</p>
				</div>
			</div>
			<div class="row margenesFila">
			{{--*/ $imprimeTitulo++; /*--}}
		@endif
				<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
					<div class="thumbnail fondoTrans">
						<img src="http://img.youtube.com/vi/{{ $serie->url_video}}/2.jpg" class='item-a' style="height:150px;"> 
						<div class="caption estiloTxt">
							<h4 class="estiloTxt"> Temporada: {{$serie->temporada}} Episodio: {{$serie->capitulo}}</h4>
							<span class="estiloTxt">{{$serie->sinopsis}}</span><br>
							<!--img class="estiloIconoMas tamanoIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle(1,2)"/-->
						</div>
					</div>
				</div>
	@endforeach
			</div>
@endsection