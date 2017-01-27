{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
<hr class="hrNegra">
<!--Carrete 1 -->
{{--*/ $tira=0; $catAnterior=""; $cuenta=1; $consecutivo=1; /*--}}
@foreach ($carretes as $elemento)
	@if($catAnterior !== $elemento->categoria_id)
		{{--*/ $tira++; /*--}}
		@if($tira!==1)
			@if(($cuenta-1) % 6 !== 0)
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
				<div id="ventanaSerie{{$tira - 1}}" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="color:white; display: none;"></div>
			</div>
		@endif
		{{--*/ $consecutivo=1; 
			$imgCat = 'imagenes/educaplay/categorias/imgCategorias/'.EducaplayController::consultaCategoria($elemento->categoria_id).'.png';
			$imagenCategoria = url($imgCat);
		/*--}}
		<div class="row margenesFila margenInferior">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-uppercase">
				<img src="{{$imagenCategoria}}" class="img-responsive"/>
			</div>
		</div>
		{{--*/ $catAnterior = $elemento->categoria_id; /*--}}
		<div class="row margenesFila margenInferior">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="carreteSerie{{$tira}}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" role="listbox" id="dir-gral-tve">
    @endif
					@if($cuenta === 1)
						<div class="item active">
							<div class="row">
					@elseif(($cuenta - 1 ) %  6 === 0)
						<div class="item">
							<div class="row">
					@endif
								<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 cambiaPadding">
									<div class="thumbnail fondoTrans" onmouseover="muestraTitulo({{$tira}}{{$consecutivo}})" onmouseout="ocultaTitulo({{$tira}}{{$consecutivo}})">
										{{--*/ $ligaDetalle = 'educaplay/detalleSeries/'.$elemento->id.'/0/0' /*--}}
										<a href="{{url($ligaDetalle)}}">
											<img id="imagen{{$tira}}{{$consecutivo}}" class="img-responsive thumbnailVertical" src="{{url($elemento->url)}}" alt="Imagen Serie">
										</a>
										<div id="titulo{{$tira}}{{$consecutivo}}" class="caption txtSobreImg escondeTitulo">
											<h4 class="estiloTxt">
											<p><br><br></p>
											<!--if(strlen($elemento->titulo_serie)>60)
												{{substr($elemento->titulo_serie,0,60).'...'}}
											else
												{{$elemento->titulo_serie}}
											endif-->
											</h4><br>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle({{$tira}},{{$elemento->id}})"/>
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
				<div id="ventanaSerie{{$tira}}" class="col-xs-12 col-sm-12 col-md-12 col-md-12" style="color:white; display: none;"></div>
			</div>