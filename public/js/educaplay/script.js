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
	
	function abreDivDetalle(respuesta, filaDiv){
		var nombreDivDetalle = '#detalleSerie' + filaDiv;
		$(nombreDivDetalle).html(respuesta);
		$(nombreDivDetalle).css('display', 'block');
		var btnCerrarDesc = '#btnCerrarDesc' + filaDiv;
		$(btnCerrarDesc).css('display', 'block');
		var windowTop = $(nombreDivDetalle).offset().top - '300';
		$(document).scrollTop(windowTop);
	}
	
    function muestraDetalle(numDiv,serieId) {
		var urlget = "educaplay/descripciones";
		var _url = urlget + '/' + serieId;
		$.ajax({
			async: true,
			method: "GET",
			url: _url,
			error: function (ts) {
				var msjSinDatos = '<div class="col-md-4 col-md-offset-4" style="padding:80px;"><p style="color:white; font-size:2em;"> P R Ó X I M A M E N T E </p></div>';
				abreDivDetalle(msjSinDatos, numDiv);
				console.log(ts.responseText);
			}})
			.done(function (msg) {
				console.log('Comentarios cargados: ' + serieId);
				abreDivDetalle(msg, numDiv);
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