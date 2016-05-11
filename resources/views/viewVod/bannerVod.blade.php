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
		 position:absolute; top:350px; left:10px; width:90%;
	}
	.fondoTrans{
		background-color:transparent;
		border:none;
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
		padding-right:35px; padding-left:35px;
	}
	.margenInferior{
		margin-bottom:30px;
	}
	.posicionDescripcion{
		right:36%; left:7%; top:37%;
		text-align: left;
	}
	.posicionBotones{
		right:55%; left:7%; bottom:5%;
	}
</style>
<script>
	$(document).ready(function () {
		/* Additional Javascript (required) */
		$('#carouselVod').carousel({
			pause: 'none'
		})
		$('#carreteSerie1').carousel({
			interval: false
		})
		$('#carreteSerie2').carousel({
			interval: false
		})
	});
</script>

<div class="row margenInferior">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
			<div class="carousel-caption posicionDescripcion">
				<div class="col-md-8 col-md-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase"><span class="fa fa-play" aria-hidden="true"></span>&nbsp;&nbsp;Reproducir</div>
					<div class="btn btn-info text-uppercase"><span class="fa fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Mi lista</div>            
				</div>
			</div>
		</div>
		<div class="item">
		  <img src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
		  	<div class="carousel-caption posicionDescripcion">
				<div class="col-md-8 col-lg-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase"><span class="fa fa-play" aria-hidden="true"></span>&nbsp;&nbsp;Reproducir</div>
					<div class="btn btn-info text-uppercase"><span class="fa fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Mi lista</div>            
				</div>
			</div>
		</div>
		<div class="item">
		  <img src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
			<div class="carousel-caption posicionDescripcion">
				<div class="col-md-8 col-lg-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase"><span class="fa fa-play" aria-hidden="true"></span>&nbsp;&nbsp;Reproducir</div>
					<div class="btn btn-info text-uppercase"><span class="fa fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Mi lista</div>            
				</div>
			</div>
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control reduceAnchoFlecha" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control reduceAnchoFlecha" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
</div>

<div class="row margenesFila margenInferior">
	<div class="col-md-12 col-lg-12">
		<a href="{{url('vod/detalleSeries')}}"><p style="color:white; font-size:16px;">MI LISTA</p></a>
	</div>
</div>
<div class="row margenesFila margenInferior">
	<div class="col-md-12 col-lg-12">
		<div id="carreteSerie1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
				</div>
				<div class="item">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
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
				</div>
			</div>
			<a class="left carousel-control reduceAnchoFlecha" href="#carreteSerie1" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control reduceAnchoFlecha" href="#carreteSerie1" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<div class="row margenesFila margenInferior">
	<div class="col-md-12 col-lg-12">
		<a href="{{url('vod/detalleSeries')}}"><p style="color:white; font-size:16px;">CLASIFICACION 2</p></a>
	</div>
</div>
<div class="row margenesFila margenInferior">
	<div class="col-md-12 col-lg-12">
		<div id="carreteSerie2" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
				</div>
				<div class="item">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
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
				</div>
			</div>
			<a class="left carousel-control reduceAnchoFlecha" href="#carreteSerie2" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control reduceAnchoFlecha" href="#carreteSerie2" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>