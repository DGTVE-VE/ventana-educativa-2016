{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
@include('viewVentana.encabezadoVentana')
@include('viewEducaplay.menuEducaplay')

@if($episodiosSerie!=null)
	<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
	<script src="https://www.youtube.com/player_api"></script>
        <!--El siguiente fragmento de codigo es para el uso de Facebook en la aplicación-->
	<script>
		window.fbAsyncInit = function () {
		FB.init({
		appId: '1408909052733113',
		xfbml: true,
		version: 'v2.6'
		});
		};

		(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {
		return;
		}
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
    </script>
    <!--fin codigo facebook-->
     <!--sdk twitter-->
    <script>window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id))
                return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));</script>
    <!--fin sdk twitter-->
	<script src="{{url('js/educaplay/listaVideos.js')}}"></script>
	<script>
		//		--------------		En video terminado o pausado guarda tiempo transcurrido
		function compruebaGuardaTiempo(){
			if( player.getPlayerState() == 0 || player.getPlayerState() == 2){
				guardaTiempoTranscurrido("{{url('educaplay/guardaTranscurrido')}}", "{{csrf_token()}}");
			}
		}
			
		//	*********************Funciones que guardan y consultan comentarios	*******************
		$(document).on('click', "a.linkComentar",
			function (){
				elemLigaClic = $(this);
				clicLigaComentar(elemLigaClic, "{{url('educaplay/guardaComentaVideo')}}", "{{$idSerie}}", "{{csrf_token()}}");
			}
		);

		function llamaGuardaComentario(){
			guardaComentario("{{url('educaplay/guardaComentaVideo')}}", "{{$idSerie}}", "{{csrf_token()}}");
		}

		function loadComments(id) {
			leeComentarios(id, "{{url('educaplay/comentarioVideo')}}");

		}

		function cargaRating(id_video){
			$.ajax({
			method: "POST",
				url: "{{url('educaplay/queryRate')}}",
				data: { video_id: id_video, _token:"{{csrf_token()}}" },
				error: function(ts) {
					console.log (ts.responseText);
				}
			})
			.done(function(msg) {
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
				}
			})
			.done(function(msg) {
				console.log ("Data Saved: " + msg + ' ' + idVideo);
			});
		}

		var player;
		var IdVideoYoutube = '{{$urlVideo}}';

		window.onbeforeunload = function(event) {			// 	---------- Antes de salir de página, guardar tiempo transcurrido
			guardaTiempoTranscurrido("{{url('educaplay/guardaTranscurrido')}}", "{{csrf_token()}}");
		};
			
		//	**************************	Carga el reproductor con un video nuevo		*************************************
		function muestraVideo(urlVideo, idVideo, serieId){
			if(player.getPlayerState() == 1){		// Si estado de video es reproduiciendo, guarda tiempo transcurrido de video actual antes de cargar siguiente
				guardaTiempoTranscurrido("{{url('educaplay/guardaTranscurrido')}}", "{{csrf_token()}}");	
			}
			preparaInfoVideo(urlVideo, idVideo, serieId);
		}
	</script>
	<link rel="stylesheet" href="{{url('css/educaplay/listaVideos.css')}}"/>

	@endsection
	@section('cuerpoEducaplay')
	<div class="row" style="height:100px;">
	</div>
	{{--*/ $imprimeTitulo=1; /*--}}

	@foreach ($episodiosSerie as $serie)
	@if($imprimeTitulo===1)
	<div class="row margenesFila">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<p class="txtTitulo">{{$serie->titulo_serie}}</p>
		</div>
	</div>
	@if($urlVideo=='0')
	<div id="episodio8" class="row efectoLento" style="color:white;">
		@else
		<div id="episodio8" class="row" style="color:white;">
			<input type="hidden" id="VideoReproduce" value="{{EducaplayController::consultaRatingXURL($urlVideo)}}"/>
			@endif                        
			<div class="col-md-5 col-md-offset-1 text-right">
				<div id="player" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">    </div>
                                @if(Auth::check ())
                                <div class="col-md-12">
                                    <br>
                                </div>
                                <div class="col-xs-6 col-sm-5 col-md-6 col-lg-6">
                                    <div class="col-xs-12 align-left">
                                        <div id="divRating" class="align-left">
                                            <input type="number" name="rating" id="star-rating" class="" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)"/>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = p + '://platform.twitter.com/widgets.js';
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            }(document, 'script', 'twitter-wjs');</script>
                                    </div>
                                    <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
                                
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                        <div 
                                            class="fb-share-button" 
                                            data-layout="button" 
                                            data-mobile-iframe="true"
                                            >
                                        </div>
                                    </div>
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
				<p style="font-size:1.2em;"> Temporada: <span id="temporadaActual">{{$infoTemporada}}</span></p> <span style="font-size:1.2em;"> Programa: </span><span id="capituloActual" style="font-size:1.2em;">{{$infoCapitulo}}</span></p>
				<p class="text-justify"> Sinopsis: <span id="sinopsisActual">{{$infoSinopsis}}</span></p>
				@if (Auth::check ())
				<br>
				<textarea id="comment" rows="3" placeholder="Comenta aquí..." class="form-control textareaTransparencia"></textarea>                
				<a class="estiloEnviar" id="btn-comentar" onclick="llamaGuardaComentario()">Envíar Comentario </a>
				<br><br>
				@endif
				<div id="comentarios" style="color:white"></div>
			</div>
		</div>
	</div>
	<div class="row margenesFila">
		@endif
		<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 cambiaPadding">
			<div class="thumbnail fondoTrans">
				<img src="http://img.youtube.com/vi/{{ $serie->url_video}}/2.jpg" class='item-a' style="height:150px; cursor:pointer;" onclick="muestraVideo('{{$serie->url_video}}','{{$serie->id}}','{{$idSerie}}')"/>
				<div class="caption estiloTxt text-justify">
					<h4 class="estiloTxt"> Programa: {{$serie->capitulo}}</h4>
					@if($longCadena = strlen($serie->sinopsis) < 100)
					<span class="estiloTxt">{{$serie->sinopsis}}</span><br>                                                                
					@else
					<span class="estiloTxt">{{substr($serie->sinopsis,0,101)."....."}}</span><br>
					@endif
				</div>
                                <!--<h4>Hola a todos</h4>-->
				<input type="hidden" id="temporadaSerie{{$serie->id}}" value="{{$serie->temporada}}" />
				<input type="hidden" id="episodioSerie{{$serie->id}}" value="{{$serie->capitulo}}" />
				<input type="hidden" id="sinopsisSerie{{$serie->id}}" value="{{$serie->sinopsis}}" />
				<input type="hidden" id="video-id" value="{{$idVideo}}" />
			</div>
		</div>
		@if($imprimeTitulo % 2 === 0 && $imprimeTitulo !== 0)
		<div class="col-xs-12 visible-xs-block">
		</div>
		@endif
		@if($imprimeTitulo % 3 === 0 && $imprimeTitulo !== 0)
		<div class="col-sm-12 visible-sm-block">
		</div>
		@endif
		@if($imprimeTitulo % 6 === 0 && $imprimeTitulo !== 0)
		<div class="col-md-12 col-lg-12 hidden-xs hidden-sm">
		</div>
		@endif
		{{--*/ $imprimeTitulo++; /*--}}
		@endforeach
	</div>
@else
	<div class="col-xs-5 col-sm-5 col-md-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-5" style="position: relative; top: 150px;">
		<p style="color:white; font-size:2em;"> P R Ó X I M A M E N T E </p>
	</div>
@endif

        <!--metadatos para compartir en facebook-->
	<meta property="og:url" content="http://ventana.televisioneducativa.gob.mx/{{Request::path()}}" /> 
	<meta property="fb:app_id" content="1408909052733113" /> 
	<meta property="og:type" content="article" />                                  
	<meta property="og:title" content="{{$serie->titulo_serie}}" /> 
	<meta property="og:image" content="" />                                             
	<meta property="og:description" content="" />

	<!--twitter metas-->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@tveducativamx">
	<meta name="twitter:creator" content="@SarahMaslinNir">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">

@endsection
