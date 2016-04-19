@extends('indexMediateca')

@section('titleMediateca')
Mediateca
@stop

@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<div class="container">
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo" style="padding-top:80px;">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo">
			<?php
				generaBreadCrumbs();
			?>
		</div>
	</div>
    <div class="row transparenciaVideos">
        <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="col-md-8" id='div-containter'>
                
                <h3>{{$videos[0]->serie}}</h2>                
                <div id="player" align="center">    </div>
                
                <input type="number" name="rating" id="star-rating" class="rating" />
                <input type="hidden" id="video-id" value="{{ $videos[0]->id }}" />
                <input type="hidden" id="nivel" value="{{ $nivel }}" />
                
                <li class="list-unstyled"><h4>{{ $videos[0]->subtitulo_serie.' '.$videos[0]->subtitulo_programa}}<h3></li>
                <li class="list-unstyled"><h4>{{ $videos[0]->titulo_programa }}<h3></li>                                                
                <li class="list-unstyled"><h4>Grado: {{ $videos[0]->grado }}</h4></li>
                <li class="list-unstyled"><h4>Sinopsis</h4></li>
                <li class="list-unstyled text-justify">{{ $videos[0]->sinopsis }}</li>
            </div>
        </div>
        <div class="col-md-4 controls" id="custom_controls">
            <div class="col-md-12">
                <div class="col-md-3 centrarTextDiv"><h4>Bloque</h4></div>
                <ul class="pager col-md-9">
                    @foreach ($paginacion as $item => $bloquePagina)
                        <li class="{{ ($item) ? '' : ' active' }}">
                            <a href="{{url($url.'/'.$bloquePagina->bloque)}}">
                                {{$bloquePagina->bloque}}
                            </a>
                        </li>                        
                     @endforeach 
                </ul>
            </div>
            <div class="col-md-12 listVideos">
            <table class="table table-condensed">                
                @foreach ($videos as $item => $video)
                <tr>
                    <td data-target="#custom_carousel" data-slide-to="{{$item}}" class="item" data-id='{{ $video->url }}'>
                            <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg" class='item-a'>                            
                    </td>
                    <td>{{$video->titulo_programa}}</td>
                </tr>                
                @endforeach 
            </table>
            </div>
        </div>
        
        <!-- End Carousel -->
    </div>                                                        
<div class='row'> <br></div>
</div>
@endsection                                                
@section('estilos')

@endsection

@section('scripts')
<script src="https://www.youtube.com/player_api"></script>

<!--https://github.com/javiertoledo/bootstrap-rating-input-->
<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
<script>
    $(document).ready( function (){
    
        $('#star-rating').change (function (){
            $.ajax({
                method: "POST",
                url: "{{url('educamedia/rate')}}",
                data: { nivel: $("#nivel").val(), id: $("#video-id").val(), rating:$("#star-rating").val(), _token:"{{csrf_token()}}" },                
                error: function(ts) { 
                    console.log (ts.responseText); 
                }})
                .done(function( msg ) {
                    console.log ( "Data Saved: " + msg );
                });
        });
        
        $('.item').click (function() {
            $('#div-containter').fadeOut ();
            data = $(this).attr ('data-id');
            player.loadVideoById(data);
            $('#div-containter').fadeIn ();
        });
    });
    
    /** URL del api de ventana educativa*/
//var api = "http://localhost/ventana-educativa/api/v1/";
/** Tiempo transcurrido del video */
var timeElapsed;
/** Objeto de youtube reproductor de video */
var player;
/** Identificador del video (PK) obtenido del URL */
var id;

/**
 * La función se ejecuta cuando el usuario abandona la ventana (cuando cierra 
 * el navegador o cuando navega a otro sitio. Al salir de la ventana se almacena 
 * el tiempo transcurrido del video en la base de datos, para tener control del 
 * punto dónde se quedó el usuario. El almacenamiento se realiza a través de 
 * el api de la aplicación. Los datos del tiempo transcurrido y el id del video 
 * se envían por POST.
 * Los callbacks de éxito y error sólo muestran el mensaje de éxito o error
 * respectivamente.
 * La función DEBE regresar algo para funcionar, así que regresa NULL.
 * 
 * @param {Event} e 
 * @returns {null}
 */
window.onbeforeunload = function (e) {

//    var datos = {'timeElapsed': timeElapsed, 'idVideo': id};
//    $.ajax({
//        url: api + 'vodConsumido/update',
//        type: 'POST',
//        data: datos,
//        ContentType: 'application/json; charset=utf-8',
//        async: true,
//        success: function (msg) {
//            console.log(msg);
//        },
//        error: function (jqXHR, textStatus, errorThrown) {
//            console.error(textStatus);
//        }
//    });
//    return null;
}

/* Se iba a obtener el capítulo a partir de una variable de sesión, pero 
 * al final cambió la estrategia para hacer la consulta directamente a la BD.
 * Se deja esta función como referencia*/
//function getCapitulos() {
//    var capitulos;
//    $.ajax({
//        url: '/session/get/capitulos',
//        type: 'GET',
//        async: false,
//        success: function (msg) {
//            capitulos = msg;
//        },
//        error: function (jqXHR, textStatus, errorThrown) {
//            console.error(textStatus);
//        }
//    });
//    return $.parseJSON(capitulos);
//}

/**
 * La función onYouTubePlayerAPIReady() que se especifica aquí se invoca 
 * automáticamente cuando se carga el código de la API del reproductor de IFrame. 
 * Obtiene de la URL el identificador del video, que es el último parámetro del
 * URL.
 * Posteriormente consulta el API para obtener la información del capítulo.
 * Al final inicializa el API de youtube con el ID del video a reproducir.
 * 
 * @see {@link https://developers.google.com/youtube/iframe_api_reference?hl=es|
 *      Youtube Player API}
 */

function onYouTubePlayerAPIReady() {
//    pos = window.location.href.toString().lastIndexOf("/");
//    id = window.location.href.toString().substring(pos + 1);
//    $.getJSON(api + "vod/capitulo/" + id, function (data) {
//        capitulo = data;
//        var seconds;
//        $.ajax({//se obtiene el tiempo en el que se quedó el usuario.
//            url: api + 'vodConsumido/initialTime/' + id,
//            type: 'GET',
//            async: false,
//            success: function (msg) {
//                var a = msg.split(':'); // split it at the colons
//                seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
//            },
//            error: function (jqXHR, textStatus, errorThrown) {
//                console.error(textStatus);
//            }
//        });
        initializeYoutube('{{$videos[0]->url}}', 0);
//    });
}

/**
 * Inicializa el reproductor de Youtube a través del api. Establece el tamaño del 
 * reproductor a pantalla completa. 
 * 
 * @see {@link https://developers.google.com/youtube/player_parameters?hl=es | 
 * Youtube API}
 * @param {String} youtubeId ID de youtube del video.
 * @param {Seconds} time Tiempo en el que se quedó el video la última vez.
 * @returns {undefined}
 */

function initializeYoutube(youtubeId, time) {
    console.log(time);
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
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}



function showProgress() {
    timeElapsed = player.getCurrentTime();
    document.getElementById("progress").innerHTML = timeElapsed;
}

/**
 * Se ejecuta una vez que el reproductor se encuentra listo. Inicia la 
 * reproducción del video y establece que cada 100 milisegundos se ejecutará la 
 * función  showProgress.
 * 
 * @param {Event} event
 * @returns {undefined}
 */
function onPlayerReady(event) {
//    event.target.playVideo();
//    setInterval(showProgress, 100);
}

/**
 * Se ejecuta cuando termina la reproducción del video, falta probar este método.
 * 
 * Cuando termina la reproducción se debe guardar el valor de visto = true en la 
 * base de datos.
 * 
 * @param {Event} event
 * @returns {undefined}
 */
function onPlayerStateChange(event) {
//    if (event.data === 0) {
//        id = window.location.href.toString().substring(pos + 1);
////         alert('done' + id);
//        window.location.assign('vod/finish/' + id);    
//    }
}
</script>
@endsection