    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
	
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
	
	function preparaInfoVideo(urlVideo, idVideo, serieId){
		cargaRating(idVideo);
		IdVideoYoutube = urlVideo;
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