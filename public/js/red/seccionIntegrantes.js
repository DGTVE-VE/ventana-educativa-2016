    function saleMouseInte() {
        document.getElementById('nombrepais').innerHTML = '';
        document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/gris.png';
    }
    function entraPais(v) {
        nombrepais = document.getElementById('nombrepais');
        if (v === 1) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/colombia.png';
            nombrepais = document.getElementById('nombrepais');
            nombrepais.innerHTML = 'Colombia';
        }
        if (v === 2) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/costarica.png';
            nombrepais.innerHTML = 'Costa Rica';
        }
        if (v === 3) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/dominicana.png';
            nombrepais.innerHTML = 'República Dominicana';
        }
        if (v === 4) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/elsalvador.png';
            nombrepais.innerHTML = 'El Salvador';
        }
        if (v === 5) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/guatemala.png';
            nombrepais.innerHTML = 'Guatemala';
        }
        if (v === 6) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/honduras.png';
            nombrepais.innerHTML = 'Honduras';
        }
        if (v === 7) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/mexico.png';
            nombrepais.innerHTML = 'México';
        }
        if (v === 8) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/nicaragua.png';
            nombrepais.innerHTML = 'Nicaragua';
        }
        if (v === 9) {
            document.getElementById('imagenMapa').src = 'imagenes/red/integrantes/panama.png';
            nombrepais.innerHTML = 'Panamá';
        }
    }
    $("#sliderinte").on('slide.bs.carousel', function (evt) {
        var step = $(evt.relatedTarget).index();
        $('#slider_captions .carousel-caption:not(#caption-' + step + ')').fadeOut('fast', function () {
            $('#caption-' + step).fadeIn();
        });
    });
    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
    });