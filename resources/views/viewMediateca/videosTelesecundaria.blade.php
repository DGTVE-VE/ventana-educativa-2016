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
        <div class="col-md-10 contenedorVideo transparenciaVideos">
            <div class="row" id='div-containter'>
                <div class="col-md-8 txtVideosRed">
                    <div class="col-md-12" style="overflow: auto;">
                        <h5 id="materia">{{$videos[0]->materia}}</h5>                
                        <h4 id="titulo_programa">{{$videos[0]->titulo_programa}}</h4>                
                        <div id="player" align="center">    </div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<br>
						</div>
					</div>
                    <div class="row">
						@if(Auth::check ())
						<div class="col-md-1">
						</div>
						<div class="col-md-2">                    
                            <input type="number" name="rating" id="star-rating" class="rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o"  />
                            <input type="hidden" id="video-id" value="{{ $videos[0]->id }}" />
                            <input type="hidden" id="nivel" value="{{ $nivel }}" />
                        </div>
                        <div class="col-md-2">
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
						<div class="col-md-2">
							<div 
								class="fb-share-button" 
								data-layout="button" 
								data-mobile-iframe="true"
								>
							</div>
						</div>
						@endif
						@if($esDocente)
						<div class="col-md-3">
							<a id="ligaDescargaYoutube" href="{{ url('descarga/getvideo.php/yt/getvideo.mp4?videoid='.$videos[0]->url.'&format=best') }}"><span title="descarga video" class="glyphicon glyphicon-cloud-download btnDescarga" aria-hidden="true"></span></a>
							Descarga Video
						</div>
						@else
						<div class="col-md-3">
							<span class="glyphicon glyphicon-cloud-download btnDescarga"  data-toggle="modal" data-target="#myModal"></span>Descarga Video
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title txtNegro">Registro</h4>
										</div>
										<div class="modal-body">
											<p class="txtNegro">¡Registrate! (Función solo habilitada para docentes telesecundaria)</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endif
                    </div>

                    <div class="col-md-12">
                        <li class="list-unstyled"><h5 id="subtitulo_serie">{{ $videos[0]->subtitulo_serie }}<h5></li>
                                    <li class="list-unstyled"><h5 id="subtitulo_programa">{{ $videos[0]->subtitulo_programa }}<h5></li>                                                
                                                <li class="list-unstyled"><h5 id="grado">Grado: {{ $videos[0]->grado }}</h5></li>

                                                <li class="list-unstyled text-justify" id="sinopsis" style="display: none;">{{ $videos[0]->sinopsis }}</li>

                                                <li class="list-unstyled text-justify" id="sinopsis-250">{{ substr($videos[0]->sinopsis, 0, 350).'...'}}</li>
                                                <div id="botonmas" data-toggle="collapse" data-target="#massinopsis" class="col-md-12 text-center">
                                                </div>  
                                                </div>
                                                <div class="col-md-12">
                                                    @if (Auth::check ())                    
                                                    <br>
                                                    <textarea id="comment" rows="3" placeholder="Comenta aquí..." class="form-control textareaTransparencia"></textarea>                
                                                    <a class="linkComentar" id="btn-comentar">Envíar Comentario </a>
                                                    <br><br>                                            
                                                    <div id="comentarios"></div>
                                                    @endif                        
                                                </div>
                                                </div>                
                                                <div class="col-md-4 pager txtVideosRed" id="custom_controls">
                                                    <div class="col-md-12 ">                    
                                                        <h5 class="col-md-2">Bloque</h5>
                                                        <div class="col-md-10">
                                                            @foreach ($paginacion as $item => $bloquePagina)
                                                            @if($bloquePagina->bloque!='0')
                                                            <li class="list-inline">                                
                                                                <a class="bloqueMed" href="{{url($url.'/'.$bloquePagina->bloque)}}">
                                                                    {{$bloquePagina->bloque}}   
                                                                </a>                                    
                                                            </li>                        
                                                            &nbsp;&nbsp;&nbsp;
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                    </div>    
                                                    <div class="col-md-12 listVideos">
                                                        <table class="table table-responsive">                
                                                            @foreach ($videos as $item => $video)
                                                            <tr>
                                                                <td data-target="#custom_carousel" data-slide-to="{{$item}}" class="item" data-id='{{ $video->url }}' _id="{{$video->id}}">
                                                                    <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg" class='item-a' style="cursor:pointer;">                            
                                                                </td>
                                                                <td class="redesText">{{$video->titulo_programa}}</td>
                                                            </tr>                
                                                            @endforeach 
                                                        </table>
                                                    </div>
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

                                                <script src="{{asset ('js/jquery-ui.min.js')}}"></script>

                                                <script src="https://www.youtube.com/player_api"></script>

                                                <!--https://github.com/javiertoledo/bootstrap-rating-input-->
                                                <script src="{{asset ('js/bootstrap-rating-input.min.js')}}"></script>
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
                                                <script>
                                                    $(document).ready(function () {
                                                        /* Se guarda la información de los videos para cambiarla cuando dan click*/
                                                        var videos = {!!(string)$videos!!}
                                                        var _videos = {};
                                                        for (i = 0; i < videos.length; i++) {
                                                        _videos[videos[i].id] = videos[i];
                                                        }
                                                        loadComments ({{$videos[0] -> id}});
                                                    $("massinopsis").collapse({toggle: false});

                                                    $("botonmas").click(function () {
                                                        $("nomuestra").addClass("hidden");
                                                    });

                                                    $('#star-rating').change(function () {
                                                        $.ajax({
                                                            method: "POST",
                                                            url: "{{url('educamedia/rate')}}",
                                                            data: {nivel: $("#nivel").val(), id: $("#video-id").val(), rating: $("#star-rating").val(), _token: "{{csrf_token()}}"},
                                                            error: function (ts) {
                                                                console.log(ts.responseText);
                                                            }})
                                                                .done(function (msg) {
                                                                    console.log("Data Saved: " + msg);
                                                                    loadComments($("#video-id").val());
                                                                });
                                                    });

                                                    $('.item').click(function () {
                                                        $('#div-containter').fadeOut();
                                                        data = $(this).attr('data-id');
                                                        _id = $(this).attr('_id');
                                                        player.loadVideoById(data);
                                                        $("#materia").html(_videos[_id].materia);
                                                        $("#video-id").val(_videos[_id].id);
                                                        $("#titulo_programa").html(_videos[_id].titulo_programa);
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

                                                    $(document).on('click', "a.linkComentar", function () {
                                                        var $element = $(this);
                                                        var partes = $element.attr('id').split('_');
                                                        var respuesta = $('#responde_' + partes[1]).val();
                                                        console.log(respuesta);
                                                        $.ajax({
                                                            method: "POST",
                                                            url: "{{url('educamedia/comment/telesecundaria')}}",
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
                                                        console.log('si entro');
                                                        $.ajax({
                                                            method: "POST",
                                                            url: "{{url('educamedia/comment/telesecundaria')}}",
                                                            data: {comment: $("#comment").val(),
                                                                video_id: $("#video-id").val(),
                                                                comment_id: 0,
                                                                _token: "{{csrf_token()}}"},
                                                            error: function (ts) {
                                                                console.log(ts.responseText);
                                                            }})
                                                                .done(function (msg) {
                                                                    $("#comentarios").prepend(msg)
                                                                    console.log("Data Saved: " + msg);
                                                                });
                                                    });
                                                    function loadComments(id) {
                                                        var urlget = "{{url('educamedia/telesecundaria/comments')}}";
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
                                                    }
                                                    console.log("http://ventana.televisioneducativa.gob.mx/{{Request::path()}}");
                                                    }
                                                    );
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
                                                                controls: 2, // Los controles no se muestran
                                                                playsinline: 0, // Reproducción a pantalla completa
                                                                iv_load_policy: 3, // Las anotaciones del video no se muestran 
                                                                modestbranding: 0, // Evita que el logo de youtube se muestre en la barra de control
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
                                                <meta property="og:title" content="{{$videos[0]->titulo_programa}}" /> 
                                                <meta property="og:image" content="http://img.youtube.com/vi/{{ $video->url }}/2.jpg" />                                             
                                                <meta property="og:description" content="{{ $videos[0]->sinopsis }}" />

                                                <!--twitter metas-->
                                                <meta name="twitter:card" content="summary_large_image">
                                                <meta name="twitter:site" content="@tveducativamx">
                                                <meta name="twitter:creator" content="@SarahMaslinNir">
                                                <meta name="twitter:title" content="{{$videos[0]->titulo_programa}}">
                                                <meta name="twitter:description" content="{{ $videos[0]->sinopsis }}">
                                                <meta name="twitter:image" content="http://img.youtube.com/vi/{{ $video->url }}/2.jpg">

                                                @endsection