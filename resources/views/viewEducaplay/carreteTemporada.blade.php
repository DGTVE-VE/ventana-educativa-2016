@if($detallesSerie != null)
	<div id="carreteCapitulos" class="carousel slide" data-ride="carousel" data-interval="false">
		<div class="carousel-inner" role="listbox">
		{{--*/ $i=0; /*--}}
		@foreach($detallesSerie as $detalle)
			@if($i===0)
				<div class="item active">
					<div class="row">
						<div class="hidden-xs hidden-sm col-md-1 col-lg-1">
						</div>
			@elseif(($i % 5 === 0 ) && ($i !==0))
				<div class="item">
					<div class="row">
						<div class="hidden-xs col-md-1 col-lg-1">
						</div>
			@endif
						<div class="col-xs-12 col-sm-4 col-md-2 cambiaPadding">
							<div class="thumbnail fondoTrans">
								{{--*/ $ligaDetalle = 'educaplay/detalleSeries/'.$detalle->id.'/'.$detalle->url_video.'/'.$detalle->videoId /*--}}
								<a href="{{url($ligaDetalle)}}" target="_top"><img src="http://img.youtube.com/vi/{{ $detalle->url_video }}/2.jpg" class='item-a'></a>
								<div id="titulo21" class="caption text-justify">
									<span class="estiloTxt">{{$detalle->sinopsis}}</span><br><br>
									<p class="estiloTxt">Temporada: {{$detalle->temporada}}</p>
								</div>
							</div>
						</div>
			{{--*/ $i++; /*--}}
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
@else
	<div class="col-md-3 col-md-offset-5" style="position: relative; top: 150px;">
		<p style="color:white;"> NO SE ENCONTRARON VIDEOS PARA ESTA TEMPORADA</p>
	</div>
@endif