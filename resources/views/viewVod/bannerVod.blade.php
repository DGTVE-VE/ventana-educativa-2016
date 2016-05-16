<style>
	.fondoDegradadoMenuInicial{
		background: rgba(0, 0, 0, .3); /* For browsers that do not support gradients */
		background: -webkit-linear-gradient(rgba(0, 0, 0, .3), transparent); /* For Safari 5.1 to 6.0 */
		background: -o-linear-gradient(rgba(0, 0, 0, .3), transparent); /* For Opera 11.1 to 12.0 */
		background: -moz-linear-gradient(rgba(0, 0, 0, .3), transparent); /* For Firefox 3.6 to 15 */
		background: linear-gradient(rgba(0, 0, 0, .3), transparent); /* Standard syntax */
		border: none;
	}
	.fondoDegradadoMenu{
		background: rgba(0, 0, 0, .6); /* For browsers that do not support gradients */
		background: -webkit-linear-gradient(rgba(0, 0, 0, .6), transparent); /* For Safari 5.1 to 6.0 */
		background: -o-linear-gradient(rgba(0, 0, 0, .6), transparent); /* For Opera 11.1 to 12.0 */
		background: -moz-linear-gradient(rgba(0, 0, 0, .6), transparent); /* For Firefox 3.6 to 15 */
		background: linear-gradient(rgba(0, 0, 0, .6), transparent); /* Standard syntax */
		border: none;
	}
	.estiloTxt{
		color: white;
	}
	.estiloIconoMas{
		color: white; font-size:30px; cursor:pointer
	}
	.divIconoMas{
		height:20px; width:20px; margin:auto;
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
		padding-right:35px; padding-left:35px;
	}
	.margenInferior{
		margin-bottom:30px;
	}
	.margenMenuChico{
		padding-top:55px;
	}
	.estiloTab{
		 height:350px; color:white;
	}
	.iconoCerrar{
		cursor:pointer; position:absolute; right:2%; font-size:2em;
	}
	.escondeTitulo{
		visibility:hidden;
	}
	@media(min-width:300px){
		.posicionDescripcion{
			visibility:hidden;
			right:36%; left:7%; top:37%;
			text-align: left;
		}
		.posicionBotones{
			visibility:hidden;
			right:55%; left:7%; bottom:5%;
		}
		.txtSobreImg{
			 display:none;
		}
	}
	@media(min-width:425px){
		.posicionDescripcion{
			visibility:hidden;
			right:36%; left:7%; top:37%;
			text-align: left;
		}
		.posicionBotones{
			visibility:visible;
			right:55%; left:7%; bottom:5%;
		}
		.anchoBtnRep{
			width:70px;
		}
		.anchoBtnLista{
			width:55px;
		}
		.textoPeque{
			font-size:0.5em;
		}
		.txtSobreImg{
			 position:absolute; top:75%; left:20%; width:90%; display:none;
		}
	}
	@media(min-width:768px){
		.posicionDescripcion{
			visibility:visible;
			right:36%; left:7%; top:33%;
			text-align: left;
		}
		.posicionBotones{
			visibility:visible;
			right:55%; left:7%; bottom:3%;
		}
		.anchoBtnRep{
			width:120px;
		}
		.anchoBtnLista{
			width:100px;
		}
		.textoPeque{
			font-size:0.8em;
		}
		.txtSobreImg{
			 position:absolute; top:65%; left:15%; width:90%; display:block;
		}
		.divIconoMas{
			height:20px; width:20px; margin-left:25%; margin-right:30%;
		}
	}
	@media(min-width:992px){
		.posicionDescripcion{
			visibility:visible;
			right:36%; left:7%; top:38%;
			text-align: left;
		}
		.posicionBotones{
			visibility:visible;
			right:55%; left:7%; bottom:5%;
		}
		.anchoBtnRep{
			width:140px;
		}
		.anchoBtnLista{
			width:120px;
		}
		.textoPeque{
			font-size:1em;
		}
		.txtSobreImg{
			 position:absolute; top:55%; left:10%; width:90%; display:block;
		}
		.divIconoMas{
			height:20px; width:20px; margin:auto;
		}
	}
	@media(min-width:1400px){
		.txtSobreImg{
			 position:absolute; top:65%; left:15%; width:90%; display:block;
		}
		.divIconoMas{
			height:20px; width:20px; margin-left:30%; margin-right:30%;
		}
	}
	@media(min-width:1500px){
		.imgBanerPrincipal{
			 width:100%;
		}
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
	function muestraDetalle(numDiv){
		var nombreDivDetalle = '#detalleSerie' + numDiv;
		$(nombreDivDetalle).css('display','block');
		console.log($(nombreDivDetalle).offset().top);
		var windowTop = $(nombreDivDetalle).offset().top - '350';
		$(document).scrollTop(windowTop)
	}
	
	function cierraDetalle(numDiv){
		var nombreDivDetalle = '#detalleSerie' + numDiv;
		$(nombreDivDetalle).css('display','none');
	}
	function muestraTitulo(idTitulo){
		var divTitulo = '#titulo' + idTitulo;
		$(divTitulo).removeClass('escondeTitulo');
	}
	function ocultaTitulo(idTitulo){
		var divTitulo = '#titulo' + idTitulo;
		$(divTitulo).addClass('escondeTitulo');
	}
</script>
<div class="row visible-xs margenMenuChico">
</div>
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
			<img class="imgBanerPrincipal" src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
			<div class="carousel-caption posicionDescripcion">
				<div class="col-sm-8 col-md-8 col-md-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase anchoBtnRep textoPeque"><span class="fa fa-play hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Reproducir</div>
					<div class="btn btn-info text-uppercase anchoBtnLista textoPeque"><span class="fa fa fa-plus hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Mi lista</div>            
				</div>
			</div>
		</div>
		<div class="item">
		  <img class="imgBanerPrincipal" src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
		  	<div class="carousel-caption posicionDescripcion">
				<div class="col-sm-8 col-md-8 col-md-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase anchoBtnRep textoPeque"><span class="fa fa-play hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Reproducir</div>
					<div class="btn btn-info text-uppercase anchoBtnLista textoPeque"><span class="fa fa fa-plus hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Mi lista</div>            
				</div>
			</div>
		</div>
		<div class="item">
		  <img class="imgBanerPrincipal" src="{{asset('imagenes/vod/series/bannerPrincipal.jpg')}}" alt="...">
			<div class="carousel-caption posicionDescripcion">
				<div class="col-sm-8 col-md-8 col-md-8">
					Texto de prueba con descripción de la serie en el banner principal Texto de prueba con descripción de la serie en el banner principal
				</div>
			</div>
			<div class="carousel-caption posicionBotones">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="btn btn-danger text-uppercase anchoBtnRep textoPeque"><span class="fa fa-play hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Reproducir</div>
					<div class="btn btn-info text-uppercase anchoBtnLista textoPeque"><span class="fa fa fa-plus hidden-xs" aria-hidden="true"></span><span class="hidden-xs">&nbsp;&nbsp;</span>Mi lista</div>            
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
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('11')" onmouseout="ocultaTitulo('11')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo11" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 1</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('12')" onmouseout="ocultaTitulo('12')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo12" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 2</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('13')" onmouseout="ocultaTitulo('13')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo13" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 3</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('14')" onmouseout="ocultaTitulo('14')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo14" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 4</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('15')" onmouseout="ocultaTitulo('15')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo15" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 5</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('16')" onmouseout="ocultaTitulo('16')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo16" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 6</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('17')" onmouseout="ocultaTitulo('17')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo17" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 1</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('18')" onmouseout="ocultaTitulo('18')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo18" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 2</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('19')" onmouseout="ocultaTitulo('19')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo19" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 3</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('110')" onmouseout="ocultaTitulo('110')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo110" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 4</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('111')" onmouseout="ocultaTitulo('111')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo111" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 5</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('112')" onmouseout="ocultaTitulo('112')">
								<img class="img-responsive thumbnailVertical" src="{{url('imagenes/vod/series/thumbnailVertical.jpg')}}" alt="...">
								<div id="titulo112" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 6</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('1')" aria-hidden="true"></span>
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
	<div id="detalleSerie1" class="col-md-12" style="display: none;">
		<div class="tab-content estiloTab">
			<div id="descripcion1" class="tab-pane fade in active">
				<h3>DESCRIPCION GENERAL</h3>
				<p>Some content.</p>
			</div>
			<div id="similares1" class="tab-pane fade">
				<h3>TITULOS SIMILARES</h3>
				<p>Some content in menu 1.</p>
			</div>
			<div id="detalles1" class="tab-pane fade">
				<h3>DETALLES</h3>
				<p>Some content in menu 2.</p>
			</div>
		</div>
		<ul class="nav nav-tabs nav-justified">
			<li></li>
			<li class="active"><a data-toggle="tab" href="#descripcion1">DESCRIPCION GENERAL</a></li>
			<li><a data-toggle="tab" href="#similares1">TITULOS SIMILARES</a></li>
			<li><a data-toggle="tab" href="#detalles1">DETALLES</a></li>
			<li></li>
		</ul>
		<span class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle('1')"></span>
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
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('21')" onmouseout="ocultaTitulo('21')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo21" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 1</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('22')" onmouseout="ocultaTitulo('22')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo22" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 2</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('23')" onmouseout="ocultaTitulo('23')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo23" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 3</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('24')" onmouseout="ocultaTitulo('24')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo24" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 4</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('25')" onmouseout="ocultaTitulo('25')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo25" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 5</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('26')" onmouseout="ocultaTitulo('26')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo26" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 6</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('27')" onmouseout="ocultaTitulo('27')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo27" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 1</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('28')" onmouseout="ocultaTitulo('28')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo28" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 2</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('29')" onmouseout="ocultaTitulo('29')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo29" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 3</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('210')" onmouseout="ocultaTitulo('210')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo210" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 4</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('211')" onmouseout="ocultaTitulo('211')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo211" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 5</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans" onmouseover="muestraTitulo('212')" onmouseout="ocultaTitulo('212')">
								<img class="img-responsive" src="http://placehold.it/260x480" alt="...">
								<div id="titulo212" class="caption txtSobreImg escondeTitulo">
									<h4 class="estiloTxt">Serie 6</h4>
									<span class="estiloTxt">Resumen de descripción</span>
									<div class="divIconoMas">
										<span class="glyphicon glyphicon glyphicon-menu-down estiloIconoMas" onclick="muestraDetalle('2')" aria-hidden="true"></span>
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
	<div id="detalleSerie2" class="col-md-12" style="display: none;">
		<div class="tab-content estiloTab">
			<div id="descripcion2" class="tab-pane fade in active">
				<h3>DESCRIPCION GENERAL</h3>
				<p>Some content.</p>
			</div>
			<div id="similares2" class="tab-pane fade">
				<h3>TITULOS SIMILARES</h3>
				<p>Some content in menu 1.</p>
			</div>
			<div id="detalles2" class="tab-pane fade">
				<h3>DETALLES</h3>
				<p>Some content in menu 2.</p>
			</div>
		</div>
		<ul class="nav nav-tabs nav-justified">
			<li></li>
			<li class="active"><a data-toggle="tab" href="#descripcion2">DESCRIPCION GENERAL</a></li>
			<li><a data-toggle="tab" href="#similares2">TITULOS SIMILARES</a></li>
			<li><a data-toggle="tab" href="#detalles2">DETALLES</a></li>
			<li></li>
		</ul>
		<span class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle('2')"></span>
	</div>
</div>