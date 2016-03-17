    /*	---------------------------------------	Sección Usabilidad. Agregar animación de entrada a imagenes 	--------------------------------*/
    function opacaImgs() {
        var elems = $('.imgColor');    //elementos que quiero saber si estan en el área visible
        elems.each(function () {
            $(this).addClass("imgOpaca");
        });
    }
    function coloreaImgs() {
        var elems = $('.imgColor');    //elementos que quiero saber si estan en el área visible
        elems.each(function () {
            $(this).removeClass("imgOpaca");
        });
    }

    function aumentaTam(imagenCubo) {
        var ancho = Math.round($(imagenCubo).width() * 1.15);
        var alto = Math.round($(imagenCubo).height() * 1.15);
        $(imagenCubo).width(ancho);
        $(imagenCubo).height(alto);
        var top = $(imagenCubo).offset().top - 15;
        var left = $(imagenCubo).offset().left - 15;
        $(imagenCubo).offset({top: top, left: left});
    }

    function disminuyeTam(imagenFoto) {
        var ancho = Math.round($(imagenFoto).width() / 1.15);
        var alto = Math.round($(imagenFoto).height() / 1.15);
        $(imagenFoto).width(ancho);
        $(imagenFoto).height(alto);
        var top = $(imagenFoto).offset().top + 15;
        var left = $(imagenFoto).offset().left + 15;
        $(imagenFoto).offset({top: top, left: left});
    }
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
    function quitaEfxDifumina(clase) {
        var elems = $(clase);    //elementos que quiero saber si estan en el área visible
        elems.each(function () {
            $(this).removeClass("difumina");
        });
    }
    function muestraCubos() {
        var Intervalo4 = $('.Intervalo4');    //elementos que quiero saber si estan en el área visible
        Intervalo4.each(function () {
            var cubo = $(this);
            setTimeout(function () {
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo4');
                }, 750);
            }, 1000);
        });
        var Intervalo3 = $('.Intervalo3');    //elementos que quiero saber si estan en el área visible
        Intervalo3.each(function () {
            var cubo = $(this);
            setTimeout(function () {
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo3');
                }, 750);
            }, 750);
        });
        var Intervalo2 = $('.Intervalo2');    //elementos que quiero saber si estan en el área visible
        Intervalo2.each(function () {
            var cubo = $(this);
            setTimeout(function () {
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo2');
                }, 750);
            }, 500);
        });
        var Intervalo1 = $('.Intervalo1');    //elementos que quiero saber si estan en el área visible
        Intervalo1.each(function () {
            var cubo = $(this);
            setTimeout(function () {
                cubo.addClass("animated");
                cubo.css("visibility", "visible");
                cubo.fadeIn();
                setTimeout(function () {
                    quitaEfxDifumina('.Intervalo1');
                }, 750);
            }, 250);
        });
    }
    $(function () {
        var elems = $('.oculta');    //elementos que quiero saber si estan en el área visible
        elems.each(function () {
            $(this).fadeOut();
        });
        muestraCubos();
    })
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
            var elems = $('.oculta');    //elementos que quiero saber si estan en el área visible
            elems.each(function () {
                $(this).fadeOut();
            });
            muestraCubos();
        });

        /* ------    Se llama la función que redimensiona mapas de imagenes responsivas -----  */
        $(document).ready(function (e) {
            $('img[usemap]').rwdImageMaps();
        });
    })