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
<style>
	.estiloTxt{
		color: white;
	}
	.estiloIconoMas{
		color: white; font-size:36px; cursor:pointer
	}
	.divIconoMas{
		height:20px; width:20px; margin:auto;
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
</style>
@endsection
@section('cuerpoVod')
	<div class="row" style="height:100px;">
	</div>
	<div class="row margenesFila">
		<div class="col-md-12 col-lg-12">
			<a href="#"><p class="txtTitulo">MI LISTA</p></a>
		</div>
	</div>
	<div class="row margenesFila">
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg estiloTxt">
					<h4 class="estiloTxt">Serie 1</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 2</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 3</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 4</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 5</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 6</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row margenesFila">
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 1</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 2</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 3</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 4</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 5</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="http://placehold.it/260x150" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 6</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row margenesFila">
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 1</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 2</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 3</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 4</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 5</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img class="img-responsive" src="{{url('imagenes/vod/series/thumbnailHorizontal.jpg')}}" alt="...">
				<div class="caption txtSobreImg">
					<h4 class="estiloTxt">Serie 6</h4>
					<span class="estiloTxt">Resumen de descripción</span>
					<div class="divIconoMas">
						<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" aria-hidden="true"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection