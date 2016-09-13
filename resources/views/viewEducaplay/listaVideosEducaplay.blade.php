{{--*/ 	use App\Http\Controllers\EducaplayController; /*--}}
@section('titleEducaplay')
Educaplay
@stop
@extends('indexEducaplay')
@section('menuEducaplay')
@include('viewVentana.encabezadoVentana')
@include('viewEducaplay.menuEducaplay')
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
</script>
@if($episodiosSerie!=null)
<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
<script src="https://www.youtube.com/player_api"></script>
<script>
//	*********************Funciones que guardan y consultan comentarios	*******************
$(document).on('click', "a.linkComentar", function () {
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
    alert('Sus comentarios han sido enviados');
    console.log("Data Saved: " + msg);
    });
});
function guardaComentario() {
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
    console.log("Data Saved: " + msg);
    $("#sinComentarios").css('visibility', 'hidden');
    $("#comentarios").prepend(msg);
    ponTexto();
    alert('Sus comentarios han sido enviados');
    });
}

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
//	********************* Cambia el estilo de la barra de navegación 	*******************
$(window).scroll(function(){
var scroll_v = this.pageYOffset;
if (scroll_v > 10){
$('#navegacionVentana').css('background', 'rgba(0, 0, 0, .3)');
}
if (scroll_v < 10){
$('#navegacionVentana').css('background', 'transparent');
}
});
//	********************* Funciones de Rating	*******************
function refrescaRating(valRating){
$("#divRating").empty();
$("#divRating").append('<input type="number" name="rating" id="star-rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)" value="' + parseInt(valRating) + '"/>');
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
    }})
    .done(function(msg) {
    console.log ("Data Saved: " + msg + ' ' + idVideo);
    });
}

function ponTexto(){
$('#comment').val('');
$('#comment').css('color', 'gray');
}

$(document).ready(function(){
loadComments($("#video-id").val());
});
var player;
var IdVideoYoutube;

	//	*******************		 Funciones para guardar el tiempo de reproducción transcurrido para un video		********************
	function guardaTiempoTranscurrido(){
		$.ajax({
		method: "POST",
			url: "{{url('educaplay/guardaTranscurrido')}}",
			data: { video_id: IdVideoYoutube, transcurrido: player.getCurrentTime(), _token:"{{csrf_token()}}" },
			error: function(ts) {
			console.log (ts.responseText);
		}})
			.done(function(msg) {
			console.log ("Data Saved: " + msg + ' ' + idVideo);
		});
	}
	
	function compruebaGuardaTiempo(){			//		--------------		En video terminado o pausado guarda tiempo transcurrido
		if( player.getPlayerState() == 0 || player.getPlayerState() == 2){
			guardaTiempoTranscurrido();
		}
	}
	
	window.onbeforeunload = function(event) {			// 	---------- Antes de salir de página, guardar tiempo transcurrido
		guardaTiempoTranscurrido();
	};
	
	//	**************************	Carga el reproductor con un video nuevo		*************************************
	function muestraVideo(urlVideo, idVideo, serieId){
		cargaRating(idVideo);
		IdVideoYoutube = urlVideo;
		if(player.getPlayerState() == 1){		// Si estado de video es reproduiciendo, guarda tiempo transcurrido de video actual antes de cargar siguiente
			guardaTiempoTranscurrido();	
		}
		player.loadVideoById(urlVideo);
		$('#episodio8').css('display', 'block');
		$('#episodio7').attr('name', idVideo);
		$('#temporadaActual').text($('#temporadaSerie' + idVideo).val());
		$('#capituloActual').text($('#episodioSerie' + idVideo).val());
		$('#sinopsisActual').text($('#sinopsisSerie' + idVideo).val());
		$('#video-id').val(idVideo);
		loadComments(idVideo);
	}

	function onYouTubePlayerAPIReady() {
		initializeYoutube(IdVideoYoutube, 0);
	}
	
	function initializeYoutube(youtubeId, time) {
		player = new YT.Player('player', {
		width: 640,
		height: 390,
		videoId: youtubeId,
		playerVars: {
		controls: 0, // Los controles no se muestran
				playsinline: 0, // Reproducción a pantalla completa
				iv_load_policy: 3, // Las anotaciones del video no se muestran 
				modestbranding: 1, // Evita que el logo de youtube se muestre en la barra de control
				showinfo: 0, // Evita que se muestre información del video antes de su reproducción
				enablejsapi: 1, // Permite que el reproductor sea controlado por el API de Javascript
				autoplay: 1, // Autoinicio habilitado
				rel: 0, // Evita que muestre videos relacionados al finalizar.
				start: time // Tiempo en el que debe iniciar el video
		},
		events: {
		//'onReady': onPlayerReady,
		'onStateChange': compruebaGuardaTiempo
		}
	});
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
    .estiloEnviar{
        cursor:pointer;
        color:white;
    }
    .estiloEnviar:hover{
        text-decoration: none;
        color: white;
        font-size:1.1em;
    }

    /*Estilo para el registro de usuario en el cambio de avatar*/
    .btn-file-avatar {
        position: relative;
        overflow: hidden;
        background: #67b168;
    }
    .btn-file-avatar input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    /*estilo para los comentarios de los videos*/
    .panel-white{
        background:rgba(0, 0, 0, .1);
        border: 1px solid white;
    }

    .panel-white  .panel-heading {
        color: #333;
        background-color: #fff;
        border-color: #ddd;
    }
    .panel-white  .panel-footer {
        background-color: #fff;
        border-color: #ddd;
    }

    .post .post-heading {
        height: 95px;
        padding: 20px 15px;
    }
    .post .post-heading .avatar {
        width: 60px;
        height: 60px;
        display: block;
        margin-right: 15px;
        background: grey;
    }
    .post .post-heading .meta .title {
        margin-bottom: 0;
    }
    .post .post-heading .meta .title a {
        color: black;
    }
    .post .post-heading .meta .title a:hover {
        color: #aaaaaa;
    }
    .post .post-heading .meta .time {
        margin-top: 8px;
        color: white;
    }
    .post .post-image .image {
        width: 100%;
        height: auto;
    }
    .post .post-description {
        padding: 15px;
    }
    .post .post-description p {
        font-size: 14px;
    }

    .post .post-footer {
        border-top: 1px solid #ddd;
        padding: 15px;
    }
    .post .post-footer .input-group-addon a {
        color: #454545;
    }
    .post .post-footer .comments-list {
        padding: 0;
        margin-top: 20px;
        list-style-type: none;
    }
    .post .post-footer .comments-list .comment {
        display: block;
        width: 100%;
        margin: 20px 0;
    }
    .post .post-footer .comments-list .comment .avatar {
        width: 35px;
        height: 35px;
    }
    .post .post-footer .comments-list .comment .comment-heading {
        display: block;
        width: 100%;
    }
    .post .post-footer .comments-list .comment .comment-heading .user {
        font-size: 14px;
        font-weight: bold;
        display: inline;
        margin-top: 0;
        margin-right: 10px;
    }
    .post .post-footer .comments-list .comment .comment-heading .time {
        font-size: 12px;
        color: #aaa;
        margin-top: 0;
        display: inline;
    }
    .post .post-footer .comments-list .comment .comment-body {
        margin-left: 50px;
    }
    .post .post-footer .comments-list .comment > .comments-list {
        margin-left: 50px;
    }
    /*fin de estilo para comentarios de videos*/
</style>

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
        <script>
            player.loadVideoById('{{$urlVideo}}');
        </script>
        @endif
        <div class="col-md-5 col-md-offset-1 text-right">
            <div id="player" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">    </div>
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
            <p style="font-size:1.2em;"> Temporada: <span id="temporadaActual">{{$infoTemporada}}</span></p> <span style="font-size:1.2em;"> Programa: </span><span id="capituloActual" style="font-size:1.2em;">{{$infoCapitulo}}</span></p>
            <p class="text-justify"> Sinopsis: <span id="sinopsisActual">{{$infoSinopsis}}</span></p>
            @if (Auth::check ())
            <br>
            <textarea id="comment" rows="3" placeholder="Comenta aquí..." class="form-control textareaTransparencia"></textarea>                
            <a class="estiloEnviar" id="btn-comentar" onclick="guardaComentario()">Envíar Comentario </a>
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

@endsection
