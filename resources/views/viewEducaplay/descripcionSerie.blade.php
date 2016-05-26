@section('titleEducaplay')
	Educaplay
@stop
@extends('indexEducaplay')
@section('cuerpoEducaplay')

	<div class="col-md-12">
        <div class="tab-content estiloTab">
            <div id="descripcion1" class="tab-pane fade in active">
				<div class="col-md-3">
					<h3>{{$primerDetalleSerie->titulo_serie}}</h3>
					<p>{{$primerDetalleSerie->descripcion}}</p>
					<p>{{$primerDetalleSerie->temporadas_total}} Temporadas.</p>
				</div>
				<div class="col-md-9">
					<img src="{{url($primerDetalleSerie->url)}}" class="img-responsive" onclick="muestraDetalle('1')"/>
				</div>
            </div>
            <div id="similares1" class="tab-pane fade">
                <h3>{{$primerDetalleSerie->titulo_serie}}</h3>
				<div id="carreteCapitulos" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
					<?php $i=0; ?>
					@foreach($detallesSerie as $detalle)
						@if($i===0)
							<div class="item active">
								<div class="row">
									<div class="col-xs-1 col-sm-1 col-md-1">
									</div>
						@elseif(($i % 5 === 0 ) && ($i !==0))
							<div class="item">
								<div class="row">
									<div class="col-xs-1 col-sm-1 col-md-1">
									</div>
						@endif
									<div class="col-xs-4 col-sm-4 col-md-2 cambiaPadding">
										<div class="thumbnail fondoTrans">
											<img class="img-responsive" src="{{url($detalle->url)}}" alt="..."/>
											<div id="titulo21" class="caption">
												<h4 class="estiloTxt">Clasificacion: {{$detalle->clasificacion_id}}</h4>
												<span class="estiloTxt">{{$detalle->sinopsis}}</span>
												<!--img class="estiloIconoMas divIconoMas" src="{{url('imagenes/educaplay/flechaDetalle.png')}}" onclick="muestraDetalle('1')"/-->
											</div>
										</div>
									</div>
						<?php $i++; ?>
						@if($i % 5 === 0)
								</div>
							</div>
						@endif
					@endforeach
						@if(($i % 5) !== 0)
								</div>
							</div>
						@endif
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
                <h3>{{$primerDetalleSerie->titulo_serie}}</h3>
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