/*  -----   Cambio de color de iconos de menú de ventana para ajustar a tema de biblioteca  -----   */
    $('.imgLogo').attr('src','imagenes/biblioteca/imgMenu/ventanaEducativa.png');
    $('.appsLogo').attr('src','imagenes/biblioteca/imgMenu/menu.png');
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
    $('#navegacionVentana').css('z-index','3');

/*  -----   Ajuste de tamaño del menú de ventana para resoluciones grandes    -----   */
    if($(window).width()>'1799'){
        $('#navegacionVentana').css('height', '85px');
        $('#btnIngresa').addClass('btn-lg');
    }else{
        $('#navegacionVentana').css('height', '55px');	
    }
/*  -----   reemplazo de clases para cambiar el color de fondo del menú de ventana     -----   */
    $(window).scroll(function(){
        var scroll_v = this.pageYOffset;
        if(scroll_v > 10){
            $('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
            $('#navegacionVentana').addClass('fondoDegradadoMenu');
        }
        if(scroll_v < 10){
            $('#navegacionVentana').removeClass('fondoDegradadoMenu');
            $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
        }
    });