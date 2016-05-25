<hr class="hrNegra">
<!--Carrete 1 -->
<?php $tira=0; $catAnterior=""; $cuenta=1; $consecutivo=1;?>
@foreach ($carretes as $elemento)
	@if($catAnterior !== $elemento->categoria_id)
		<?php $consecutivo=1; ?>
		<div class="row margenesFila margenInferior">
			<div class="col-md-12 col-lg-12 text-uppercase">
				<a href="{{url('educaplay/detalleSeries')}}"><p style="color:white; font-size:16px;"> {{$elemento->categoria_id}}</p></a>
			</div>
		</div>
		<?php $tira++; ?>
		@if($tira!==1)
			@if($cuenta % 6 === 0)
							</div>
						</div>
			@endif
			<?php $cuenta=1; ?>
						</div>
						<a class="left carousel-control reduceAnchoFlecha" href="#carreteSerie{{$tira - 1}}" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control reduceAnchoFlecha" href="#carreteSerie{{$tira - 1}}" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<span id="btnCerrarDesc{{$tira - 1}}" class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle({{$tira - 1}})"></span>
				</div>
				<iframe id="detalleSerie{{$tira - 1}}" src="{{url('educaplay/descripciones')}}" frameborder="0" class="col-md-12" style="display: none; height:500px;">
				</iframe>
			</div>
		@endif
		<?php $catAnterior = $elemento->categoria_id; ?>
		<div class="row margenesFila margenInferior">
			<div class="col-md-12 col-lg-12">
				<div id="carreteSerie{{$tira}}" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
	@endif
					@if($cuenta === 1)
						<div class="item active">
							<div class="row">
					@elseif(($cuenta - 1 ) %  6 === 0)
						<div class="item">
							<div class="row">
					@endif
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans" onmouseover="muestraTitulo({{$tira}}{{$consecutivo}})" onmouseout="ocultaTitulo({{$tira}}{{$consecutivo}})">
										<img id="imagen{{$tira}}{{$consecutivo}}" class="img-responsive thumbnailVertical" src="{{url($elemento->url)}}" alt="...">
										<div id="titulo{{$tira}}{{$consecutivo}}" class="caption txtSobreImg escondeTitulo">
											<h4 class="estiloTxt">{{$elemento->titulo_serie}}</h4>
											<span class="estiloTxt">{{$elemento->descripcion}}</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle({{$tira}})"/>
										</div>
									</div>
								</div>
					@if($cuenta % 6 === 0)
							</div>
						</div>
					@endif
					<?php $cuenta++; $consecutivo++;?>
@endforeach
					@if(($cuenta - 1) % 6 !== 0)
							</div>
						</div>
					@endif
						</div>
						<a class="left carousel-control reduceAnchoFlecha" href="#carreteSerie{{$tira}}" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control reduceAnchoFlecha" href="#carreteSerie{{$tira}}" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<span id="btnCerrarDesc{{$tira}}" class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle({{$tira}})"></span>
				</div>
				<iframe id="detalleSerie{{$tira}}" src="{{url('educaplay/descripciones')}}" frameborder="0" class="col-md-12" style="display: none; height:500px;">
				</iframe>
			</div>