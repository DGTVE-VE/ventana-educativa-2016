@extends('indexMediateca')

@section('titleMediateca')
Educamedia
@stop

<style>
    /* estilo en scrollbar*/
    ::-webkit-scrollbar{
        width: 10px;
        background: #000;
        border-radius: 20px
    }
    ::-webkit-scrollbar-button{
        width:8px;
        height: 5px;
    }
    ::-webkit-scrollbar-track{
        background:#000;
        border:thin solid #1a1f25;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        -webkit-border-radius: 10px;
        border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb{
        background: -webkit-linear-gradient(top, #87688A, #c1B5C9);
        -webkit-box-shadow:   inset 0 1px 0 rgba(255,255,225,.5),
            inset 1px 0 0 rgba(255,255,255,.4),
            inset 0 1px 2px rgba(255,255,255,.3);
        border:thin solid #754B7B;
        border-radius: 10px;
        -webkit-border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover{
        background: -webkit-linear-gradient(top, #754B7B, #73688B);
    }
    /* Pseudo-clase */
    ::-webkit-scrollbar-thumb:window-inactive {
        background: rgba(135,78,161,.6);
    }
    .btnDescarga{
        font-size:1.5em;
        cursor: pointer;
        color: white;
    }
    .txtNegro{
        color: black;
    }
	.oculto{
		display: none;
	}
	.punteroMano{
		cursor:pointer;
	}
</style>
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="padding:2%"></div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center textoTitulo txtVideosRed">
            <p>{{ generaBreadCrumbs() }}</p><br>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-10 contenedorVideo transparenciaVideos ">
            <div class="col-md-12 col-xs-12 col-lg-8 col-sm-12 txtVideosRed" id='div-containter'>
                <div class="col-md-12" style="overflow: auto;">
                    <h5 id="materia">{{$videos[0]->asignatura}}</h5>
                    <h4 id="titulo_programa">{{$videos[0]->programa}}</h4>
                    <div id="player" align="center">    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                    </div>
                </div>
                @if(Auth::check ())
                <div class="col-md-3">
                    <div id="divRating">
                    <input type="number" name="rating" id="star-rating" class="rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o"  />
                    </div>
                    <input type="hidden" id="video-id" value="{{ $videos[0]->id }}" />
                    <input type="hidden" id="nivel" value="{{ $nivel }}" />
                </div>
                <div class="col-md-1">
                    <div
                        class="fb-share-button"
                        data-layout="button"
                        data-mobile-iframe="true">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="col-md-5">
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
                </div>
                @endif
                <div class="col-md-1"></div>
                @if (Auth::check ())
                @if($esDocente)
                <div class="col-md-3">
                    <!--br-->
                    <a id="ligaDescargaYoutube" href="{{ url('descarga/getvideo.php/yt/getvideo.mp4?videoid='.$videos[0]->url.'&format=best') }}" target="_self"><span title="descarga video" class="glyphicon glyphicon-cloud-download btnDescarga" aria-hidden="true"></span></a>
                    Descarga Video
                </div>
                @else
                <div class="col-md-3">
                    <span class="glyphicon glyphicon-cloud-download btnDescarga"  data-toggle="modal" data-target="#myModal"></span>Descarga Video
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body backRegistro" style="background-image:url('{{ asset('imagenes/mediateca/tsecundaria/registrate.png') }}');">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <br><br><br><br><br><br><br><br>
                                            <a href="{{url('registro')}}"><img class="pull-right" src="{{url('imagenes/mediateca/tsecundaria/iraregistro.png')}}"/></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                <div class="col-md-12">
                    <li class="list-unstyled"><h5 id="subtitulo_serie">{{ $videos[0]->subtitulo_serie }}</h5></li>
                    <li class="list-unstyled"><h5 id="subtitulo_programa">{{ $videos[0]->subtitulo_programa }}</h5></li>
                    <li class="list-unstyled"><h5 id="grado">Semestre: {{ $videos[0]->semestre }}</h5></li>
					@if(strlen($videos[0]->sinopsis) < 350)
						<li class="list-unstyled text-justify" id="sinopsis">{{ $videos[0]->sinopsis }}</li>
					@else
						<li class="list-unstyled text-justify oculto" id="sinopsis">{{ $videos[0]->sinopsis }}</li>
						<li class="list-unstyled text-justify" id="sinopsis-250">{{ substr($videos[0]->sinopsis, 0, 350).'...'}}</li>
						<div  id="botonmas" data-toggle="collapse" data-target="#massinopsis" class="col-md-12 text-center">
							<span class="punteroMano">Mas </span><span class="glyphicon glyphicon-triangle-bottom punteroMano"></span>
						</div>
						<div  id="botonmenos" data-toggle="collapse" data-target="#massinopsis" class="col-md-12 text-center oculto">
							<span class="punteroMano">Menos </span><span class="glyphicon glyphicon-triangle-top punteroMano"></span>
						</div>
					@endif
					<br>
                </div>
                <div class="col-md-12">
                    @if (Auth::check ())
                    <br>
                    <textarea id="comment" rows="3" placeholder="Comenta aquí..." class="form-control textareaTransparencia"></textarea>
                    <a class="linkComentar" id="btn-comentar">Envíar Comentario </a>
                    <br><br>
                    <br>
                    <div id="comentarios"></div>
                    @endif
                </div>
            </div>
            <br>
            <div class="col-md-12 col-xs-12 col-lg-4 col-sm-12 controls txtVideosRed" id="custom_controls">
                <div class="col-md-12 listVideos">
                    <table class="table table-responsive">
                        @foreach ($videos as $item => $video)
                        <tr>
                            <td data-target="#custom_carousel" data-slide-to="{{$item}}" class="item" data-id='{{ $video->url }}' _id="{{$video->id}}">
                                <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg" class='item-a punteroMano'>
                            </td>
                            <td class="redesText">{{$video->programa}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" >
@endsection

@section('scripts')
<script>
//    $(document).ready(function(){
//    });
</script>
<script src="{{asset ('js/jquery-ui.min.js')}}"></script>

<script src="https://www.youtube.com/player_api"></script>

<!--https://github.com/javiertoledo/bootstrap-rating-input-->
<script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
<!--Facebook SDK-->
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
<script>
    function guardaRating(val){
            console.log('guardando rating'+val);
            $.ajax({
                method: "POST",
                url: "{{url('educamedia/rate')}}",
                data: {nivel: $("#nivel").val(), id: $("#video-id").val(), rating: val, _token: "{{csrf_token()}}"},
                error: function (ts) {
                    console.log(ts.responseText);
                }})
                    .done(function (msg) {
                        console.log("Data Saved: " + msg);
                        loadComments($("#video-id").val());
                });
        }

    function refrescaRating(valRating){
                                                        
        $("#divRating").empty();
        $("#divRating").append('<input type="number" name="rating" id="star-rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)" value="' + parseInt(valRating) + '"/>');
        $("#star-rating").rating({value: parseInt(valRating)});
    }
    function loadComments(id) {
        var urlget = "{{url('educamedia/comments/telebachillerato')}}";
        var _url = urlget + '/' + id;
        $.ajax({
        method: "GET",
        url: _url,
            error: function (ts) {
            console.log(ts.responseText);
                }})
                .done(function (msg) {
                    console.log('Comentarios cargados: ' + id);
                    $("#comentarios").html(msg)
                    //                    console.log ( "Data Saved: " + msg );
                });
        var urlget2 = "{{url('educamedia/rating/telebachillerato')}}";
            var _url2 = urlget2 + '/' + id;
            $.ajax({
                method: "GET",
                url: _url2,
                error: function (ts) {
                    console.log(ts.responseText);
                }}).done(function (msg) {
                    console.log('Refrescando rating');                                                                
                    @if(Auth::check())
                    refrescaRating(msg);
                    @endif
            });
        }
    
    
    
    $(document).ready(function () {
        @if(Auth::check())
        refrescaRating({!! Auth::user()->ratingTelesecundaria ($videos[0] -> id) !!});
        @endif
        /* Se guarda la información de los videos para cambiarla cuando dan click*/
        var videos = {!!(string)$videos!!}
        var _videos = {};         for (i = 0; i < videos.length; i++) {
        _videos[videos[i].id] = videos[i];
        }
        loadComments ({{$videos[0] -> id}});
		$("#botonmas").click(function () {
			$("#sinopsis").removeClass("oculto");
			$("#sinopsis-250").addClass("oculto");
			$("#botonmenos").removeClass("oculto");
			$("#botonmas").addClass("oculto");
		});
		$("#botonmenos").click(function () {
			$("#sinopsis-250").removeClass("oculto");
			$("#sinopsis").addClass("oculto");
			$("#botonmas").removeClass("oculto");
			$("#botonmenos").addClass("oculto");
		});
    
    
                                                    
//        $('#star-rating').change(function () {
//    $.ajax({
//            method: "POST",
//            url: "{{url('educamedia/rate')}}",
//            data: {nivel: $("#nivel").val(), id: $("#video-id").val(), rating: $("#star-rating").val(), _token: "{{csrf_token()}}"},
//            error: function (ts) {
//            console.log(ts.responseText);
//                }})
//                .done(function (msg) {
//                    console.log("Data Saved: " + msg);                     loadComments($("#video-id").val());
//                    });
//    });
    
    $('.item').click(function () {
        $('#div-containter').fadeOut();
        data = $(this).attr('data-id');
        _id = $(this).attr('_id');
        player.loadVideoById(data);         $("#materia").html(_videos[_id].asignatura);
        $("#video-id").val(_videos[_id].id);
        $("#titulo_programa").html(_videos[_id].programa);
        $("#subtitulo_serie").html(_videos[_id].subtitulo_serie);
        $("#subtitulo_programa").html(_videos[_id].subtitulo_programa);
        $("#grado").html(_videos[_id].grado);
        $("#sinopsis").html(_videos[_id].sinopsis);
        $("#sinopsis-250").html(_videos[_id].sinopsis.substring(0, 350));
        $('#div-containter').fadeIn();
        loadComments(_id);
        var ligaDescargaVideo = '{{ url("descarga/getvideo.php")}}' + "/yt/getvideo.mp4?videoid=" + data + "&format=best";
        $('#ligaDescargaYoutube').attr('href',ligaDescargaVideo);
    });
    $(document).on('click', " a.linkComentar", function () {
        var $element = $(this);
        var partes = $element.attr('id').split('_');
        var respuesta = $('#responde_' + partes[1]).val();
        console.log(respuesta);
        $.ajax({
        method: "POST",
            url: "{{url('educamedia/comment/telebachillerato')}}",
            data: {comment: respuesta,
            video_id: $("#video-id").val(),
                comment_id: partes[1],
                _token: "{{csrf_token()}}"},
                error: function (ts) {
            console.log(ts.responseText);
                }})
                .done(function (msg) {
                    $("#respuestas-" + partes[1]).prepend($(msg).fadeIn('slow'));
                    $('#responde_' + partes[1]).val('');
                    console.log("Data Saved: " + msg);
                    });
    });
                $('#btn-comentar').click(function () {
    $.ajax({
            method: "POST",
            url: "{{url('educamedia/comment/telebachillerato')}}",
            data: {comment: $("#comment").val(),
            video_id: $("#video-id").val(),
                comment_id: 0,
                _token: "{{csrf_token()}}"},
                error: function (ts) {
            console.log(ts.responseText);
                }})
                .done(function (msg) {
                $("#comentarios").append(msg)
                    //                    console.log ( "Data Saved: " + msg );
                });
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
                controls: 1, // Los controles no se muestran
                playsinline: 0, // Reproducción a pantalla completa
                iv_load_policy: 3, // Las anotaciones del video no se muestran
                modestbranding: 1, // Evita que el logo de youtube se muestre en la barra de control
                showinfo: 0, // Evita que se muestre información del video antes de su reproducción
                enablejsapi: 1, // Permite que el reproductor sea controlado por el API de Javascript
                autoplay: 0, // Autoinicio habilitado
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
<!--metadados para compartir en facebook-->
<meta property="og:url" content="http://ventana.televisioneducativa.gob.mx/{{Request::path()}}" />
<meta property="fb:app_id" content="1408909052733113" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$videos[0]->programa}}" />
<meta property="og:image" content="http://img.youtube.com/vi/{{ $video->url }}/2.jpg" />
<meta property="og:description" content="{{ $videos[0]->sinopsis }}" />

<!--twitter metas-->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@tveducativamx">
<meta name="twitter:creator" content="@SarahMaslinNir">
<meta name="twitter:title" content="{{$videos[0]->programa}}">
<meta name="twitter:description" content="{{ $videos[0]->sinopsis }}">
<meta name="twitter:image" content="http://img.youtube.com/vi/{{ $video->url }}/2.jpg">
@endsection
