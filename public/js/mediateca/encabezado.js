    /************ CAMBIAR AVATAR **************/
    $(document).ready(function (e) {
        $("#link-cambia-avatar").click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            $("#form-avatar").removeClass('hidden');

        });
        $("#uploadimage").on('submit', (function (e) {
            e.preventDefault();
            $("#message").empty();
            $('#loading').show();
            $.ajax({
                url: "cambiaAvatar", // Url to which the request is send
                type: "POST", // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false, // The content type used when sending data to the server.
                cache: false, // To unable request pages to be cached
                processData: false, // To send DOMDocument or non processed data file it is set to false
                success: function (data)   // A function to be called if request succeeds
                {
                    $('#loading').hide();
                    $("#form-avatar").addClass('hidden');
//                    $("#message").html(data);
                    $('#img-usuario').attr('src', data + '?' + (new Date()));
                    /*$('#img-usuario').attr('width', '30px');
                     $('#img-usuario').attr('height', '30px');*/
                },
                error: function (data)
                {
                    console.log(data);
                }
            });
        }));

// Function to preview image after validation
        $(function () {
            $("#file").change(function () {
                $("#message").empty(); // To remove the previous error message
                var file = this.files[0];
                        var imagefile = file.type;
                var match = ["image/jpeg", "image/png", "image/jpg"];
                // Si la imagen no es de tipo válido
                if (match.indexOf(imagefile) === -1)
                {
                    $('#previewing').attr('src', '{{url("imagenes/ventana/encabezado/noimage.png")}}');
                    $("#message").html("<p id='error'>Por favor seleccione un tipo de imagen correcto" + "<br>  Nota: Solo se pueden usar imágenes en formato jpeg, jpg y png.</p>");
                    return false;
                }
                else
                {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        function imageIsLoaded(e) {
            $("#file").css("color", "green");
            $('#image_preview').css("display", "block");
            $('#previewing').attr('src', e.target.result);
            $('#previewing').attr('width', '100px');
            $('#previewing').attr('height', '100px');
        }
        ;
    });
    /************ CAMBIAR AVATAR **************/

    function resaltaImgSecu(prefijo, idImg) {
        var idImgHover = "#" + idImg + "Hover";
        $(idImgHover).css("visibility", "visible");
        var idImgCentro = "#" + idImg + "Centro";
        if (prefijo === 'Inicio') {
            var random = Math.floor((Math.random() * 8));
            $(idImgCentro).attr("src", gifs[random]);
        }
        $(idImgCentro).addClass("bounceIn");
        $(idImgCentro).addClass("animated");
        $(idImgCentro).css("visibility", "visible");
        $(idImgCentro).fadeIn();
    }
    function normalImgSecu(prefijo, idImg) {
        var idImgHover = "#" + idImg + "Hover";
        $(idImgHover).css("visibility", "hidden");
        var idImgCentro = "#" + idImg + "Centro";
        $(idImgCentro).css("visibility", "hidden");
        $(idImgCentro).fadeOut();
        $(idImgCentro).removeClass("animated");
        $(idImgCentro).removeClass("bounceIn");
    }
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

    /* ------    Se llama la función que redimensiona mapas de imagenes responsivas -----  */
    $(document).ready(function (e) {
        $('img[usemap]').rwdImageMaps();
    });