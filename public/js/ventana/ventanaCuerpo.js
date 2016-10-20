    /*	--------------------------------	Cambia opacidad en rombos no seleccionados 	---------------------------*/
    function opacaImgs() {
        var elems = $('.imgColor');
        elems.each(function () {
            $(this).addClass("imgOpaca");
        });
    }
    function coloreaImgs() {
        var elems = $('.imgColor');
        elems.each(function () {
            $(this).removeClass("imgOpaca");
        });
    }
	/*	----------------------------	Cambiar tama�o del rombo seleccionado	-------------------------------------*/
    function aumentaTam(nombreCubo) {
        var ancho = Math.round($(nombreCubo).width() * 1.15);
        var alto = Math.round($(nombreCubo).height() * 1.15);
        $(nombreCubo).width(ancho);
        $(nombreCubo).height(alto);
		if(nombreCubo=='#CUBO07'){
			var desplazaMenos = 20;
		}
		else{
			var desplazaMenos = 15;
		}
        var arriba = $(nombreCubo).offset().top - desplazaMenos;
        var izquierda = $(nombreCubo).offset().left - desplazaMenos;
		if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1 || navigator.userAgent.toLowerCase().indexOf('firefox') > -1 || navigator.userAgent.toLowerCase().indexOf('safari') > -1){
			$(nombreCubo).offset({top: arriba, left: izquierda});
		}
    }

    function disminuyeTam(nombreFoto) {
        var ancho = Math.round($(nombreFoto).width() / 1.15);
        var alto = Math.round($(nombreFoto).height() / 1.15);
        $(nombreFoto).width(ancho);
        $(nombreFoto).height(alto);
		if(nombreFoto=='#CUBO07'){
			var desplazamas = 20;
		}
		else{
			var desplazamas = 15;
		}
		var arriba = $(nombreFoto).offset().top + desplazamas;
        var izquierda = $(nombreFoto).offset().left + desplazamas;
		if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1 || navigator.userAgent.toLowerCase().indexOf('firefox') > -1 || navigator.userAgent.toLowerCase().indexOf('safari') > -1){
			$(nombreFoto).offset({top: arriba, left: izquierda});
		}
    }
	/*	----------------------------	Cambiar orden en que se muestra el rombo	-------------------------------------*/
    function cambiaFrente(imagenCubo, imagen) {
        $(imagenCubo).removeClass("imgColor");
        var imagenIcono = '#iconoRombo' + imagen;
        zIndexIcono = $(imagenIcono).css('z-index');
        $(imagenIcono).css('zIndex', '11');
        $(imagenIcono).removeClass("imgColor");

        zIndexPrincipal = $(imagenCubo).css('z-index');
        $(imagenCubo).css('zIndex', '10');
    }
    function cambiaAtras(imagenFoto, imagen) {
        $(imagenFoto).css('zIndex', zIndexPrincipal);
        $(imagenFoto).addClass("imgColor");
        var imagenIcono = '#iconoRombo' + imagen;
        $(imagenIcono).css('z-index', zIndexIcono);
        $(imagenIcono).addClass("imgColor");
    }
	/*	----------------------------	Cambiar imagen de rombos	-------------------------------------*/
    function cambiaImgFoto(imagen) {
        var imagenCubo = '#CUBO' + imagen;
		cambiaFrente(imagenCubo, imagen);
		imagen = imagen.replace("SM", "");
        var imagenFoto = 'imagenes/ventana/homeventana/FOTO-' + imagen + '.png';
        $(imagenCubo).attr('src', imagenFoto);
		aumentaTam(imagenCubo);
		opacaImgs();
    }
    function cambiaImgCubo(imagen) {
        var imagenFoto = '#CUBO' + imagen;
		cambiaAtras(imagenFoto, imagen);
		imagen = imagen.replace("SM", "");
        var imagenCubo = 'imagenes/ventana/homeventana/CUBO-' + imagen + '.png';
        $(imagenFoto).attr('src', imagenCubo);
		disminuyeTam(imagenFoto);
		coloreaImgs();
    }
	/*	---------------------------------------	Quita efecto de desenfoque en rombos despu�s de la entrada 	--------------------------------*/
    function quitaEfxDifumina(clase) {
        var elems = $(clase);
        elems.each(function () {
            $(this).removeClass("difumina");
        });
    }
	/*	---------------------------------------	Agregar animaci�n de entrada a imagenes 	--------------------------------*/
    function muestraCubos() {
        var Intervalo4 = $('.Intervalo4');    				//Selecciona elementos que entraran en el cuarto intervalo
        Intervalo4.each(function () {
            var cubo = $(this);
            setTimeout(function () {					//programa tiempo de entrada elementos del cuarto intervalo
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo4');
                }, 750);
            }, 1000);
        });
        var Intervalo3 = $('.Intervalo3');    				//Selecciona elementos que entraran en el tercer intervalo
        Intervalo3.each(function () {
            var cubo = $(this);
            setTimeout(function () {					//programa tiempo de entrada elementos del tercer intervalo
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo3');
                }, 750);
            }, 750);
        });
        var Intervalo2 = $('.Intervalo2');    				//Selecciona elementos que entraran en el segundo intervalo
        Intervalo2.each(function () {
            var cubo = $(this);
            setTimeout(function () {					//programa tiempo de entrada elementos del segundo intervalo
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo2');
                }, 750);
            }, 500);
        });
        var Intervalo1 = $('.Intervalo1');    				//Selecciona elementos que entraran en el primer intervalo
        Intervalo1.each(function () {
            var cubo = $(this);
            setTimeout(function () {					//programa tiempo de entrada elementos del primer intervalo
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo1');
                }, 750);
            }, 250);
        });
    }
	/* *********	Redimensionar mapas de imagen	********** */
            /* rwdImageMaps jQuery plugin v1.5
             *
             * Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
             *
             * Copyright (c) 2013 Matt Stow
             * https://github.com/stowball/jQuery-rwdImageMaps
             * http://mattstow.com
             * Licensed under the MIT license
             */
            ;
    (function ($) {
        $.fn.rwdImageMaps = function () {
            var $img = this;

            var rwdImageMap = function () {
                $img.each(function () {
                    if (typeof ($(this).attr('usemap')) == 'undefined')
                        return;

                    var that = this,
                            $that = $(that);

                    // Since WebKit doesn't know the height until after the image has loaded, perform everything in an onload copy
                    $('<img />').load(function () {
                        var attrW = 'width',
                                attrH = 'height',
                                w = $that.attr(attrW),
                                h = $that.attr(attrH);

                        if (!w || !h) {
                            var temp = new Image();
                            temp.src = $that.attr('src');
                            if (!w)
                                w = temp.width;
                            if (!h)
                                h = temp.height;
                        }

                        var wPercent = $that.width() / 100,
                                hPercent = $that.height() / 100,
                                map = $that.attr('usemap').replace('#', ''),
                                c = 'coords';

                        $('map[name="' + map + '"]').find('area').each(function () {
                            var $this = $(this);
                            if (!$this.data(c))
                                $this.data(c, $this.attr(c));

                            var coords = $this.data(c).split(','),
                                    coordsPercent = new Array(coords.length);

                            for (var i = 0; i < coordsPercent.length; ++i) {
                                if (i % 2 === 0)
                                    coordsPercent[i] = parseInt(((coords[i] / w) * 100) * wPercent);
                                else
                                    coordsPercent[i] = parseInt(((coords[i] / h) * 100) * hPercent);
                            }
                            $this.attr(c, coordsPercent.toString());
                        });
                    }).attr('src', $that.attr('src'));
                });
            };
            $(window).resize(rwdImageMap).trigger('resize');

            return this;
        };
    })(jQuery);
//* End image maps to be used in a responsive design by recalculating the area coordinates**//

    $(document).ready(function () {
        $(function () {
            var elems = $('.oculta');    //Oculta rombos y llama funci�n que activa entrada de rombos
            elems.each(function () {
                $(this).fadeOut();
            });
            muestraCubos();
        });
		/* ------    Se llama la funci�n que redimensiona mapas de imagenes responsivas -----  */
		$('img[usemap]').rwdImageMaps();
    })