    /*  -----   Personalización estilos menú ventana    -----   */
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');

    /*  -----   El siguiente fragmento de codigo es para el uso de Facebook en la aplicación    -----   */
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
    /*  -----   fin codigo facebook -----*/

    /*  -----   sdk twitter -----*/
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
    /*  -----   fin sdk twitter -----*/

    function clicLigaComentar(ligaSeleccionada, urlVideoYT, idSerieComenta, csrfToken){
        var $element = ligaSeleccionada;
        var partes = $element.attr('id').split('_');
        var respuesta = $('#responde_' + partes[1]).val();
        console.log(respuesta);
        $.ajax({
            method: "POST",
            url: urlVideoYT,
            data: {comment: respuesta,
                video_id: $("#video-id").val(),
                comment_id: partes[1],
                serie_id: idSerieComenta,
                _token: csrfToken},
        error: function (ts) {
            console.log(ts.responseText);
        }})
        .done(function (msg) {
            $("#respuestas-" + partes[1]).prepend($(msg).fadeIn('slow'));
            $('#responde_' + partes[1]).val('');
            alert('Sus comentarios han sido enviados');
            console.log("Data Saved: " + msg);
        });
    }

    function guardaComentario(urlVideoComenta, idSerieComenta, csrfToken) {
        $.ajax({
            method: "POST",
            url: urlVideoComenta,
            data: {comment: $("#comment").val(),
                video_id: $("#video-id").val(),
                comment_id: 0,
                serie_id: idSerieComenta,
                _token: csrfToken},
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

    function leeComentarios(id, urlComentariosVideos){
        var urlget = urlComentariosVideos;
        var _url = urlget + '/' + id;
        $.ajax({
            method: "GET",
            url: _url,
            error: function (ts) {
            console.log(ts.responseText);
            }
        })
        .done(function (msg) {
            console.log('Comentarios cargados: ' + id);
            $("#comentarios").html(msg);
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

    function ponTexto(){
        $('#comment').val('');
        $('#comment').css('color', 'gray');
    }

    $(document).ready(function(){
        loadComments($("#video-id").val());
    });

    //	*******************		 Funciones para guardar el tiempo de reproducción transcurrido para un video		********************
    function guardaTiempoTranscurrido(urlFuncGuardaTiempo, csrfToken){
        $.ajax({
        method: "POST",
            url: urlFuncGuardaTiempo,
            data: { video_id: IdVideoYoutube, transcurrido: player.getCurrentTime(), _token:csrfToken },
            error: function(ts) {
            console.log (ts.responseText);
        }})
            .done(function(msg) {
            console.log ("Data Saved: " + msg);
        });
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
                controls: 1, // Los controles SI se muestran
                playsinline: 0, // Reproducción a pantalla completa
                iv_load_policy: 3, // Las anotaciones del video NO se muestran 
                modestbranding: 0, // Hace que el logo de youtube se muestre en un tamaño más chico en la barra de control
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