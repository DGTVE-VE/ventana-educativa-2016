@section('titleEducaplay')
	Educaplay
@stop
@extends('indexEducaplay')
@section('cuerpoEducaplay')
<div class="col-md-12">
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
    </div>
@endsection