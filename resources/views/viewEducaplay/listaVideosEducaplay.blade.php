{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
	@include('viewVentana.encabezadoVentana')
	@include('viewEducaplay.menuEducaplay')
	<script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
	</script>
	@if($episodiosSerie!=null)
		<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
		<script>
			$(window).scroll(function(){
				var scroll_v = this.pageYOffset;
				if(scroll_v > 10){
					$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
				}
				if(scroll_v < 10){
					$('#navegacionVentana').css('background','transparent');
				}
			});
			function refrescaRating(valRating){
				$("#divRating").empty();
				$("#divRating").append('<input type="number" name="rating" id="star-rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)" value="'+ parseInt(valRating) +'"/>');
				$("#star-rating").rating({value: parseInt(valRating)});
			}
			function cargaRating(id_video){
				$.ajax({
					method: "POST",
					url: "{{url('educaplay/queryRate')}}",
					data: { video_id: id_video, _token:"{{csrf_token()}}" },
					error: function(ts) {
						console.log (ts.responseText);
				}})
				.done(function( msg ) {
					refrescaRating(msg);
				});
			}

			function guardaRating(CalifRating){
				var idVideo = $('#episodio7').attr('name');
				$.ajax({
					method: "POST",
					url: "{{url('educaplay/rate')}}",
					data: { video_id: idVideo, rating: CalifRating, _token:"{{csrf_token()}}" },
					error: function(ts) {
						console.log (ts.responseText);
				}})
				.done(function( msg ) {
					console.log ( "Data Saved: " + msg + ' ' + idVideo);
				});
			}

			function muestraVideo(urlVideo, idVideo, serieId){
				cargaRating(idVideo);
				var direccionVideo = "https://www.youtube.com/embed/" + urlVideo + "?autoplay=1";
				$('#episodio7').attr('src',direccionVideo);
				$('#episodio8').css('display','block');
				$('#episodio7').attr('name',idVideo);
				$('#temporadaActual').text($('#temporadaSerie' + idVideo).val());
				$('#capituloActual').text($('#episodioSerie' + idVideo).val());
				$('#sinopsisActual').text($('#sinopsisSerie' + idVideo).val());
				$('#video-id').val(idVideo);
				loadComments(idVideo);
			}

			function quitaTexto(txtComenta){
				if(txtComenta=='Escribe tu comentario'){
					$('#textoComenta').val('');
					$('#textoComenta').css('color','white');
				}
			}
			function ponTexto(txtComenta){
				if(txtComenta==''){
					$('#textoComenta').val('Escribe tu comentario');
					$('#textoComenta').css('color','gray');
				}
			}
		</script>
		<style>
			.estiloTxt{
				color: white;
			}
			.txtSobreImg{
				 position:absolute; top:45px; left:10px; width:90%;
			}
			.txtTitulo{
				color:white; font-size:26px;
			}
			.fondoTrans{
				background-color:transparent; border:none;
			}
			.cambiaPadding{
				padding:0px;
			}
			.reduceAnchoFlecha{
				width:3%;
			}
			.thumbnailVertical{
				width: 260px;
			}
			.margenesFila{
				padding-right:35px; padding-left:35px; margin-top:10px; margin-bottom:30px;
			}
			.tamanoIconoMas{
				width:40%;
				position:relative;
				top: 30px;
			}
			.marcoVideo{
				width:650px; height:450px;
			}
			.efectoLento{
				display:none;
				transition: all 3s ease;
				-webkit-transition: all 3s ease;
				-moz-transition: all 3s ease;
				-o-transition: all 3s ease;
			}
		</style>

		@endsection
		@section('cuerpoEducaplay')
		<div class="row" style="height:100px;">
		</div>
		{{--*/ $imprimeTitulo=1; /*--}}
		@foreach ($episodiosSerie as $serie)
			@if($imprimeTitulo===1)
				<div class="row margenesFila">
					<div class="col-md-12 col-lg-12">
						<p class="txtTitulo">{{$serie->titulo_serie}}</p>
					</div>
				</div>
				@if($urlVideo=='0')
					<div id="episodio8" class="row efectoLento" style="color:white;">
					{{--*/ $srcUrlVideo = ""; /*--}}
				@else
					<div id="episodio8" class="row" style="color:white;">
					{{--*/ $srcUrlVideo = "https://www.youtube.com/embed/".$urlVideo."?autoplay=1";/*--}}
					<input type="hidden" id="VideoReproduce" value="{{EducaplayController::consultaRatingXURL($urlVideo)}}"/>
				@endif
					<div class="col-md-5 col-md-offset-1 text-right">
						<iframe id="episodio7" src="{{$srcUrlVideo}}" frameborder="0" class="marcoVideo">
						</iframe>
						@if(Auth::check ())
							<div id="divRating">
								<input type="number" name="rating" id="star-rating" class="" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)"/>
							</div>
							<script>
								var tmpRating = $('#VideoReproduce').val();
								refrescaRating(tmpRating);
							</script>
						@endif
					</div>
					<div class="col-md-4 col-md-offset-1">
					{{--*/ $infoVideo = EducaplayController::consultaDatosVideo($idVideo); /*--}}
						@if($infoVideo==null)
							{{--*/ $infoTemporada = " "; $infoCapitulo = " "; $infoSinopsis = " "; /*--}}
						@else
							{{--*/ $infoTemporada = $infoVideo->temporada; $infoCapitulo = $infoVideo->capitulo; $infoSinopsis = $infoVideo->sinopsis; /*--}}
						@endif
						<p style="font-size:1.2em;"> Temporada: <span id="temporadaActual">{{$infoTemporada}}</span> Capítulo: <span id="capituloActual">{{$infoCapitulo}}</span></p>
						<p> Sinopsis: <span id="sinopsisActual">{{$infoSinopsis}}</span></p>
						@if (Auth::check ())
							<br>
							<textarea id="comment" rows="3" placeholder="Comenta aquí..." class="form-control textareaTransparencia"></textarea>                
							<a class="linkComentar" id="btn-comentar">Envíar Comentario </a>
							<br><br>                                            
							<div id="comentarios"></div>
						@endif                        
					</div>
					</div>
				</div>
				<div class="row margenesFila">
			@endif
					<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 cambiaPadding">
						<div class="thumbnail fondoTrans">
							<img src="http://img.youtube.com/vi/{{ $serie->url_video}}/2.jpg" class='item-a' style="height:150px; cursor:pointer;" onclick="muestraVideo('{{$serie->url_video}}','{{$serie->id}}','{{$idSerie}}')"/>
							<div class="caption estiloTxt">
								<h4 class="estiloTxt"> Temporada: {{$serie->temporada}} Episodio: {{$serie->capitulo}}</h4>
								<span class="estiloTxt">{{$serie->sinopsis}}</span><br>
							</div>
							<input type="hidden" id="temporadaSerie{{$serie->id}}" value="{{$serie->temporada}}" />
							<input type="hidden" id="episodioSerie{{$serie->id}}" value="{{$serie->capitulo}}" />
							<input type="hidden" id="sinopsisSerie{{$serie->id}}" value="{{$serie->sinopsis}}" />
							<input type="hidden" id="video-id" value="{{$idVideo}}" />
						</div>
					</div>
			@if($imprimeTitulo % 6 === 0 && $imprimeTitulo !== 0)
					</div>
				<div class="row margenesFila">
			@endif
				{{--*/ $imprimeTitulo++; /*--}}
		@endforeach
				</div>
	@else
		<div class="col-md-3 col-md-offset-5" style="position: relative; top: 150px;">
			<p style="color:white;"> SIN DATOS PARA ESTA SERIE</p>
		</div>
	@endif
	<script>
		/*$(document).on('click', "a.linkComentar", function () {
			var $element = $(this);
			var partes = $element.attr('id').split('_');
			var respuesta = $('#responde_' + partes[1]).val();
			console.log(respuesta);
			$.ajax({
				method: "POST",
				url: "{{url('educaplay/guardaComentaVideo')}}",
				data: {comment: respuesta,
					video_id: $("#video-id").val(),
					comment_id: partes[1],
					serie_id: "{{$idSerie}}",
					_token: "{{csrf_token()}}"},
				error: function (ts) {
					console.log(ts.responseText);
				}})
					.done(function (msg) {
						$("#respuestas-" + partes[1]).prepend($(msg).fadeIn('slow'));
						$('#responde_' + partes[1]).val('');
						console.log("Data Saved: " + msg);
					});
		});*/
		$('#btn-comentar').click(function () {
			$.ajax({
				method: "POST",
				url: "{{url('educaplay/guardaComentaVideo')}}",
				data: {comment: $("#comment").val(),
					video_id: $("#video-id").val(),
					comment_id: 0,
					serie_id: "{{$idSerie}}",
					_token: "{{csrf_token()}}"},
				error: function (ts) {
					console.log(ts.responseText);
				}})
					.done(function (msg) {
						$("#comentarios").prepend(msg);
						console.log("Data Saved: " + msg);
					});
		});
		function loadComments(id) {
			var urlget = "{{url('educaplay/comentarioVideo')}}";
			var _url = urlget + '/' + id;
			$.ajax({
				method: "GET",
				url: _url,
				error: function (ts) {
					console.log(ts.responseText);
				}})
					.done(function (msg) {
						
						console.log('Comentarios cargados: ' + id);
						$("#comentarios").html(msg);
						//                    console.log ( "Data Saved: " + msg );
					});
		}
	</script>
@endsection
