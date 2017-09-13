    /*		*****	Cambio de color iconos redes sociales		*****		*/
    if($(window).width()<'992'){
        $('.cambiacolorredesSociales').addClass('iconoBlanco');
        $('.cambiacolorredesSociales').removeClass('cambiacolorredesSociales');
    }
    /*if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1 ){document.body.style.backgroundAttachment = 'scroll';}else{}*/

    /*		*****	Llamada a función que imprime breadcrumbs		*****		*/
    function imprimeBreadCrumbs(urlActual){
        var paginaActual = window.location.href;
        //console.log(paginaActual);
        $.ajax({
            method: "GET",
            url: urlActual,
            data: {url: paginaActual},
            error: function (ts) {
                console.log(ts.responseText);
            }})
            .done(function (msg) {
                    //console.log("Correcto breadcrumbs: " + msg);
                    $('#parrafoBreadcrumb').html(msg);
            });
    }