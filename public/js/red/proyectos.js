    jQuery(document).ready(function ($) {

        $('#myCarouselProyecto').carousel({
            interval: false
        });

        $('#carousel-text').html($('#slide-content-0').html());
//Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            var id = parseInt(id);
            $('#myCarouselProyecto').carousel(id);
        });
// When the carousel slides, auto update the text
        $('#myCarouselProyecto').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
//Obtener texto de dirección
        var URL = document.location.hash;
        var proyecto = URL.substr(URL.indexOf("#") + 1, 1);

//Elegir diapositiva de carousel dependiendo opción recibida
        switch (proyecto) {
            case '0':
                $('#myCarouselProyecto').carousel(0);
                break;
            case '1':
                $('#myCarouselProyecto').carousel(1);
                break;
            case '2':
                $('#myCarouselProyecto').carousel(2);
                break;
            default:
                $('#myCarouselProyecto').carousel(0);
                break;
        }
    })