{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
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
				</div>
				<div class="col-md-1">
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle" type="button" id="btntemporada" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Temporada	<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="btntemporada">
				{{--*/
					for($temp=1; $temp<= $primerDetalleSerie->temporadas_total; $temp++){
						$urlTemporada = "educaplay/descripciones/temporada/".$primerDetalleSerie->id."/".$temp;
						echo '<li><a href='.url($urlTemporada).' target="detalleSerie">'.$temp.'</a></li>';
					}
				/*--}}
						</ul>
					</div>
				</div>
				<div class="col-md-11">
					<iframe name="detalleSerie" id="detalleSerie" src="{{url('educaplay/descripciones/temporada/'.$primerDetalleSerie->id.'/0')}}" frameborder="0" class="col-md-12" style="height:300px;">
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
					<p>Clasificaci&#243;n: {{EducaplayController::consultaClasificacion($primerDetalleSerie->clasificacion_id)}}</p>
				</div>
                <div class="col-md-9">
					<div class="row">
						<div class="col-md-6 col-md-offset-1">
							<p>Comentarios.</p>
						@if($comentarios!=null)
							@foreach($comentarios as $elemComentario)
								<p style="color:white;">Temporada {{$elemComentario->temporada}}. Capitulo {{$elemComentario->capitulo}}</p>
								<p style="color:white;">{{$elemComentario->comment}}</p>
							@endforeach
						@else
							<p style="color:white;"> AUN NO HAY COMENTARIOS PARA ESTA SERIE</p>
						@endif
						</div>
					</div>
				</div>
            </div>
        </div>
        <ul class="nav nav-tabs nav-justified">
            <li></li>

            <li class="active"><a data-toggle="tab" href="#descripcion1">DESCRIPCION GENERAL</a></li>
            <li><a data-toggle="tab" href="#similares1">CAPÍTULOS</a></li>
            <li><a data-toggle="tab" href="#detalles1">DETALLES</a></li>
						@if($primerDetalleSerie->categoria_id == 2)
            <li><a type="button" onclick="votacion('{!!$primerDetalleSerie->titulo_serie!!}')" class="btn btn-danger btn-lg">VOTAR POR ESTA SERIE</a></li>
						@endif
            <li></li>
        </ul>
    </div>
@else
	<div class="col-md-3 col-md-offset-4">
		<p style="color:white;"> SIN DATOS PARA ESTA SERIE</p>
	</div>
@endif
@endsection
<script>
function votacion(nombre_serie){

var r = confirm("Va de emitir un voto para esta categoria, ¿Está seguro?");

if ( r == true){

	var request = $.ajax({
	  url: "{{ url ('votacion') }}",
	  method: "GET",
	  data: { name : nombre_serie },
	  dataType: "html"
	});

	request.done(function( msg ) {
	  //console.log (msg);
	  alert(msg);

	  });

}


};
</script>
