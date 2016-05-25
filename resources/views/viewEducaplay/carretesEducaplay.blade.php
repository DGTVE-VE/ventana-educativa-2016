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
				</div>
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
				</div>
				<div id="detalleSerie1" class="col-md-12" style="display: none;">
					<div class="tab-content estiloTab">
						<div id="descripcion1" class="tab-pane fade in active">
							<div class="col-md-3">
								<h3>Nombre de la Serie</h3>
								<p>Descripcion de la serie.</p>
								<p>Elenco.</p>
							</div>
							<div class="col-md-9">
								<img src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/banner.jpg')}}" class="img-responsive" onclick="muestraDetalle('1')"/>
							</div>
						</div>
						<div id="similares1" class="tab-pane fade">
							<h3>CAPÍTULOS</h3>
							<div id="carreteCapitulos" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<div class="row">
											<div class="col-md-1">
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="row">
											<div class="col-xs-1 col-sm-1 col-md-1">
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
												<div class="thumbnail fondoTrans">
													<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
													<div id="titulo21" class="caption">
														<h4 class="estiloTxt">Calificacion</h4>
														<span class="estiloTxt">Sinopsis capitulo</span>
														<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="left carousel-control reduceAnchoFlecha" href="#carreteCapitulos" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control reduceAnchoFlecha" href="#carreteCapitulos" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div id="detalles1" class="tab-pane fade">
							<h3>Nombre Serie</h3>
							<div class="col-md-1">
							</div>
							<div class="col-md-2">
								<p>Director.</p>
							</div>
							<div class="col-md-2">
								<p>Generos.</p>
							</div>
							<div class="col-md-2">
								<p>Reseñas.</p>
							</div>
							<div class="col-md-2">
								<p>Clasificación.</p>
							</div>
							<div class="col-md-2">
								<p>Audio.</p>
							</div>
						</div>
					</div>
					<ul class="nav nav-tabs nav-justified">
						<li></li>
						<li class="active"><a data-toggle="tab" href="#descripcion1">DESCRIPCION GENERAL</a></li>
						<li><a data-toggle="tab" href="#similares1">CAPÍTULOS</a></li>
						<li><a data-toggle="tab" href="#detalles1">DETALLES</a></li>
						<li></li>
					</ul>
					<span class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle('1')"></span>
				</div>
			</div>

    <div id="detalleSerie1" class="col-md-12" style="display: none;">
        <div class="tab-content estiloTab">
            <div id="descripcion1" class="tab-pane fade in active">
				<div class="col-md-3">
					<h3>Nombre de la Serie</h3>
					<p>Descripcion de la serie.</p>
					<p>Elenco.</p>
				</div>
				<div class="col-md-9">
					<img src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/banner.jpg')}}" class="img-responsive" onclick="muestraDetalle('1')"/>
				</div>
            </div>
            <div id="similares1" class="tab-pane fade">
                <h3>CAPÍTULOS</h3>
				<div id="carreteCapitulos" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-xs-1 col-sm-1 col-md-1">
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
									<div class="thumbnail fondoTrans">
										<img class="img-responsive" src="{{url('imagenes/educaplay/clasificacion/dgtve/categoria/series/documental/h1.jpg')}}" alt="...">
										<div id="titulo21" class="caption">
											<h4 class="estiloTxt">Calificacion</h4>
											<span class="estiloTxt">Sinopsis capitulo</span>
											<img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control reduceAnchoFlecha" href="#carreteCapitulos" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control reduceAnchoFlecha" href="#carreteCapitulos" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
            </div>
            <div id="detalles1" class="tab-pane fade">
                <h3>Nombre Serie</h3>
				<div class="col-md-1">
				</div>
				<div class="col-md-2">
					<p>Director.</p>
				</div>
                <div class="col-md-2">
					<p>Generos.</p>
				</div>
				<div class="col-md-2">
					<p>Reseñas.</p>
				</div>
				<div class="col-md-2">
					<p>Clasificación.</p>
				</div>
				<div class="col-md-2">
					<p>Audio.</p>
				</div>
            </div>
        </div>
        <ul class="nav nav-tabs nav-justified">
            <li></li>
            <li class="active"><a data-toggle="tab" href="#descripcion1">DESCRIPCION GENERAL</a></li>
            <li><a data-toggle="tab" href="#similares1">CAPÍTULOS</a></li>
            <li><a data-toggle="tab" href="#detalles1">DETALLES</a></li>
            <li></li>
        </ul>
        <span class="glyphicon glyphicon-remove iconoCerrar" aria-hidden="true" onclick="cierraDetalle('1')"></span>
    </div>