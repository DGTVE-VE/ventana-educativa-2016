	/*	----------------------	Para resoluciones mayores a 1599px, aumenta el tamaño de botón inicia sesión --------------------------	*/
    if($(window).width()>'1799'){
	    $('#btnIngresa').addClass('btn-lg');
    }

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
                    $('#img-usuario').attr('width', '35px');
                    $('#img-usuario').attr('height', '35px');
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
                    $('#previewing').attr('src', 'imagenes/ventana/encabezado/noimage.png');
                    $("#message").html("<p id='error'>Por favor seleccione un tipo de imagen correcto" + "<br>  Nota: Solo se pueden usar imágenes en formato jpeg, jpg y png.</p>");
                    return false;
                } else
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
    /*	--------------------------------	Muestra u oculta los iconos de apps adicionales	en el menú de apps --------------------------------	*/
    imgOculto = true;
    function muestraMasIconos(event) {
        if (imgOculto) {
            event.stopPropagation();
            $(".ocultaImgApp").css("margin-left", "-40px");
            $(".ocultaImgApp").css("width", "75px");
            $(".ocultaImgApp").css("height", "75px");
            $(".ocultaImgApp").css("visibility", "visible");
			$("#etiquetaMas").html("Menos");
            imgOculto = false;
        } else {
            event.stopPropagation();
            $(".ocultaImgApp").css("width", "0px");
            $(".ocultaImgApp").css("height", "0px");
            $(".ocultaImgApp").css("visibility", "hidden");
			$("#etiquetaMas").html("M&aacute;s");
            imgOculto = true;
        }
    }