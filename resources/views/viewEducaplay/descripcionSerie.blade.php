@section('titleEducaplay')
	Educaplay
@stop
@extends('indexEducaplay')
@section('cuerpoEducaplay')
	<div class="col-md-12" style="color:white;">
        <div class="tab-content estiloTab">
            <div id="descripcion1" class="tab-pane fade in active">
				<div class="col-md-3">
					<p>{{$primerDetalleSerie->descripcion}}</p>
				</div>
				<div class="col-md-9">
					<img src="{{url($primerDetalleSerie->url)}}" class="img-responsive" onclick="muestraDetalle('1')"/>
				</div>
            </div>
            <div id="similares1" class="tab-pane fade">
				<div class="col-md-12">
					<h3>{{$primerDetalleSerie->titulo_serie}}</h3>
				</div>
				<div class="col-md-2">
					{{--*/ for($temp=1; $temp<= $primerDetalleSerie->temporadas_total; $temp++) echo '<a href="#"> temporada '.$temp.'</a><br>'; /*--}}
				</div>
				<div class="col-md-10">
					<iframe id="detalleSerie" src="{{url('educaplay/descripciones/temporada/'.$primerDetalleSerie->id.'/0')}}" frameborder="0" class="col-md-12" style="height:200px;">
					</iframe>
				</div>
            </div>
            <div id="detalles1" class="tab-pane fade" style="height:300px;">
				<div class="col-md-12">
					<h3>{{$primerDetalleSerie->titulo_serie}}</h3>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-2">
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
@endsection