		//		*****	*****		El siguiente fragmento de codigo es para el uso de Facebook en la aplicación		*****	*****
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

		//		*****	*****	sdk twitter		*****
		
		window.twttr = (function (d, s, id) {
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
        }(document, "script", "twitter-wjs"));

		//		*****	*****	sdk twitter		*****
        function guardaRating(val){
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
        
         function loadComments(id) {
            var urlget = "{{url('educamedia/telesecundaria/comments')}}";
            var _url = urlget + '/' + id;
            $.ajax({
                method: "GET",
                url: _url,
                error: function (ts) {
                    console.log(ts.responseText);
                }}).done(function (msg) {
                    console.log('Comentarios cargados: ' + id);
                    $("#comentarios").html(msg)
                    //                    console.log ( "Data Saved: " + msg );
            });
            var urlget2 = "{{url('educamedia/rating/telesecundaria')}}";
            var _url2 = urlget2 + '/' + id;
            $.ajax({
                method: "GET",
                url: _url2,
                error: function (ts) {
                    console.log(ts.responseText);
                }}).done(function (msg) {
                    @if(Auth::check())
						refrescaRating(msg);
                    @endif
            });

        }
        
        function refrescaRating(valRating){

        $("#divRating").empty();
        $("#divRating").append('<input type="number" name="rating" id="star-rating" data-icon-lib="fa" data-active-icon="fa-star" data-inactive-icon="fa-star-o" onchange="guardaRating(this.value)" value="' + parseInt(valRating) + '"/>');
        $("#star-rating").rating({value: parseInt(valRating)});
        }
        
        $(document).ready(function () {
            @if(Auth::check())
				refrescaRating({!! Auth::user()->ratingTelesecundaria ($videos[0] -> id) !!});
            @endif
            /* Se guarda la información de los videos para cambiarla cuando dan click*/
            var videos = {!!(string)$videos!!}
            var _videos = {};
            for (i = 0; i < videos.length; i++) {
            _videos[videos[i].id] = videos[i];
            }
			@if(Auth::check())
				loadComments ({{$videos[0] -> id}});
			@endif

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

        

//                                                    $('#star-rating').change(function () {
//                                                        $.ajax({
//                                                            method: "POST",
//                                                            url: "{{url('educamedia/rate')}}",
//                                                            data: {nivel: $("#nivel").val(), id: $("#video-id").val(), rating: $("#star-rating").val(), _token: "{{csrf_token()}}"},
//                                                            error: function (ts) {
//                                                                console.log(ts.responseText);
//                                                            }})
//                                                                .done(function (msg) {
//                                                                    console.log("Data Saved: " + msg);
//                                                                    loadComments($("#video-id").val());
//                                                                });
//                                                    });
        


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
			@if(Auth::check())
				loadComments(_id);
			@endif
            var ligaDescargaVideo = '{{ url("descarga/getvideo.php")}}' + "/yt/getvideo.mp4?videoid=" + data + "&format=best";
            $('#ligaDescargaYoutube').attr('href', ligaDescargaVideo);
        });

        $(document).on('click', "a.linkComentar", function () {
            var $element = $(this);
            var partes = $element.attr('id').split('_');
            var respuesta = $('#responde_' + partes[1]).val();
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
                    });
        });

        $('#btn-comentar').click(function () {
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
       
        //console.log("http://ventana.televisioneducativa.gob.mx/{{Request::path()}}");
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