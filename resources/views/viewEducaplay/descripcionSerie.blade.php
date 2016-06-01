@section('titleEducaplay')
	Educaplay
@stop
@extends('indexEducaplay')
@section('cuerpoEducaplay')
@if($primerDetalleSerie !== null)
	<div class="col-md-12" style="color:white;">
        <div class="tab-content estiloTab">
            <div id="descripcion1" class="tab-pane fade in active">
				<div class="col-md-10 col-md-offset-1">
					<img src="{{url($primerDetalleSerie->url)}}" class="img-responsive" onclick="muestraDetalle('1')"/>
					<div style="position: absolute; top: 70%; left:2%; width:35%;">
						<p>{{$primerDetalleSerie->descripcion}}</p>
					</div>
				</div>
            </div>
            <div id="similares1" class="tab-pane fade">
				<div class="col-md-10 col-md-offset-1">
					<h3>{{$primerDetalleSerie->titulo_serie}}</h3>
				</div>
				<div class="col-md-12">
				Temporadas: 
				</div>
				<div class="col-md-1">
				{{--*/ 
					for($temp=1; $temp<= $primerDetalleSerie->temporadas_total; $temp++){
						$ligaTemporada = "educaplay/descripciones/temporada/".$primerDetalleSerie->id."/".$temp;
						echo '<div class="col-md-6"> 
								<a href='.url($ligaTemporada).' target="detalleSerie"> 
								<button type="button" class="btn btn-info" style="width:38px;">'.$temp.'</button></a>
							  </div>';
					}
				/*--}}
				</div>
				<div class="col-md-11">
					<iframe name="detalleSerie" id="detalleSerie" src="{{url('educaplay/descripciones/temporada/'.$primerDetalleSerie->id.'/0')}}" frameborder="0" class="col-md-12" style="height:200px;">
					</iframe>
				</div>
            </div>
            <div id="detalles1" class="tab-pane fade" style="height:300px;">
				<div class="col-md-10 col-md-offset-1">
					<h3>{{$primerDetalleSerie->titulo_serie}}</h3>
					<br>
				</div>
				<div class="col-md-12">
				</div>
				<div class="col-md-2 col-md-offset-1">
					<p>{{$primerDetalleSerie->temporadas_total}} Temporadas.</p>
					<p>Clasificaci&#243;n: {{$primerDetalleSerie->clasificacion_id}}</p>
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
@else
	<div class="col-md-3 col-md-offset-4">
		<p style="color:white;"> SIN DATOS PARA ESTA SERIE</p>
	</div>
@endif
@endsection