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
					<p class="lead">{{$primerDetalleSerie->temporadas_total}} Temporadas.</p>
					<p class="lead">Clasificaci&#243;n: {{EducaplayController::consultaClasificacion($primerDetalleSerie->clasificacion_id)}}</p>
				</div>
                <div class="col-md-9">
					<div class="row">
						<div class="col-md-6 col-md-offset-1">
							<p class="text-center lead">Comentarios a videos de esta serie.</p>
							    <script src="{{asset ('js/jquery-ui.min.js')}}"></script>
							<div id="comentariosDetalle" style="color:white; max-height:200px;"></div>
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
						@if( $primerDetalleSerie->categoria_id == 2)
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" >

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

}
		function loadComments(id) {
			var urlget = "{{url('educaplay/comentarioSerie')}}";
			var _url = urlget + '/' + id;
			$.ajax({
				method: "GET",
				url: _url,
				error: function (ts) {
					console.log(ts.responseText);
				}})
					.done(function (msg) {
						
						console.log('Comentarios cargados: ' + id);
						$("#comentariosDetalle").html(msg);
						//                    console.log ( "Data Saved: " + msg );
					});
		}
		
		$(document).ready(function(){
			loadComments('{{$primerDetalleSerie->id}}');
		});
</script>
