{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
<hr class="hrNegra">
<!--Carrete 1 -->
{{--*/ $tira=0; $catAnterior=""; $cuenta=1; $consecutivo=1; /*--}}
@foreach ($carretes as $elemento)
	@if($catAnterior !== $elemento->categoria_id)
		{{--*/ $tira++; /*--}}
		@if($tira!==1)
			@if($cuenta % 6 === 0)
							</div>
						</div>
			@endif
			{{--*/ $cuenta=1; /*--}}
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
				<iframe id="detalleSerie{{$tira - 1}}" src="" frameborder="0" class="col-md-12" style="display: none; height:500px;">
				</iframe>
			</div>
		@endif
		{{--*/ $consecutivo=1; 
			$nombreCat = EducaplayController::consultaCategoria($elemento->categoria_id);
		/*--}}
		<div class="row margenesFila margenInferior">
			<div class="col-md-12 col-lg-12 text-uppercase">
				<p style="color:white; font-size:16px;"> {{$nombreCat}}</p>
			</div>
		</div>
		{{--*/ $catAnterior = $elemento->categoria_id; /*--}}
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
										<!-- $ligaDetalle = 'educaplay/detalleSeries/'.$elemento->id /*-->
										{{--*/ $ligaDetalle = 'educaplay/detalleSeries/2/0' /*--}}
										<a href="{{url($ligaDetalle)}}">
											<img id="imagen{{$tira}}{{$consecutivo}}" class="img-responsive thumbnailVertical" src="{{url($elemento->url)}}" alt="...">
										</a>
										<div id="titulo{{$tira}}{{$consecutivo}}" class="caption txtSobreImg escondeTitulo">
											<h4 class="estiloTxt">
											@if(strlen($elemento->titulo_serie)>60)
												{{substr($elemento->titulo_serie,0,60).'...'}}
											@else
												{{$elemento->titulo_serie}}
											@endif
											</h4><br>
											<!--span class="estiloTxt">{{$elemento->descripcion}}</span-->
											<!--img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle({{$tira}},{{$elemento->id}})"/-->
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle({{$tira}},2)"/>
										</div>
									</div>
								</div>
					@if($cuenta % 6 === 0)
							</div>
						</div>
					@endif
					{{--*/ $cuenta++; $consecutivo++; /*--}}
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
				<iframe id="detalleSerie{{$tira}}" src="" frameborder="0" class="col-md-12" style="display: none; height:500px;">
				</iframe>
			</div>