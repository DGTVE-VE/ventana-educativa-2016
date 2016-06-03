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
		var srcIframe = "educaplay/descripciones/"+ serieId;
		$(nombreDivDetalle).attr('src', srcIframe);
        $(nombreDivDetalle).css('display', 'block');
		var btnCerrarDesc = '#btnCerrarDesc' + numDiv;
        $(btnCerrarDesc).css('display', 'block');
        var windowTop = $(nombreDivDetalle).offset().top - '300';
        $(document).scrollTop(windowTop);
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