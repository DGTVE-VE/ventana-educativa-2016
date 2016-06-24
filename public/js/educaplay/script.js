    $(document).ready(function () {
//        $().mouseover ({
//            $.ajax (){
//                url : 
//            }
//        });
        /* Additional Javascript (required) */
        $('#carouselVod').carousel({
            pause: 'none'
        })
        $('#carreteSerie1').carousel({
            interval: false
        })
        $('#carreteSerie2').carousel({
            interval: false
        })
    });
    function muestraDetalle(numDiv,serieId) {
		var nombreDivDetalle = '#detalleSerie' + numDiv;
		var urlget = "educaplay/descripciones";
		var _url = urlget + '/' + serieId;
		$.ajax({
			async: true,
			method: "GET",
			url: _url,
			error: function (ts) {
				console.log(ts.responseText);
			}})
			.done(function (msg) {
				console.log('Comentarios cargados: ' + serieId);
				$(nombreDivDetalle).html(msg);
				$(nombreDivDetalle).css('display', 'block');
				var btnCerrarDesc = '#btnCerrarDesc' + numDiv;
				$(btnCerrarDesc).css('display', 'block');
				var windowTop = $(nombreDivDetalle).offset().top - '300';
				$(document).scrollTop(windowTop);
				//                    console.log ( "Data Saved: " + msg );
			});
    }

    function cierraDetalle(numDiv) {
        var nombreDivDetalle = '#detalleSerie' + numDiv;
        $(nombreDivDetalle).css('display', 'none');
		var btnCerrarDesc = '#btnCerrarDesc' + numDiv;
        $(btnCerrarDesc).css('display', 'none');
    }
    function muestraTitulo(idTitulo) {
        var divTitulo = '#titulo' + idTitulo;
        $(divTitulo).removeClass('escondeTitulo');
		var nombreImg = "#imagen"+ idTitulo;
		console.log(nombreImg);
		var nombreImgHover = $(nombreImg).attr('src').replace('.jpg','_hover.jpg');
		$(nombreImg).attr('src', nombreImgHover);
    }
    function ocultaTitulo(idTitulo) {
        var divTitulo = '#titulo' + idTitulo;
        $(divTitulo).addClass('escondeTitulo');
		var nombreImg = "#imagen"+ idTitulo;
		var nombreImgHover = $(nombreImg).attr('src').replace('_hover.jpg','.jpg');
		$(nombreImg).attr('src', nombreImgHover);
    }