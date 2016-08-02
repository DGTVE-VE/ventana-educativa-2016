<!--nuevo encabezado-->
<style>
/*	----------	Estilo encabezado	----------*/
	.ocultaImgApp{
		visibility:hidden;
		width:0px;
		height:0px;
	}
	.iconoGde{
		color:white;
		font-size:14px;
		cursor:pointer;
	}
	
	@media (min-width: 250px) { 
		.logoBarraTVE{
			width: 33px;
			height: 13px;
		}
		.logoBarraSEP{
			width: 33px;
			height: 10px;
		}
		.textoTitulo{
			color: black;
			font-family:'Ubuntu';
			font-size:10px;
		}
		.contenedorAro{
			width:283px; height:283px; margin:auto; position: relative;
		}
	/*	----------	Estilo pagina Inicio telesecundaria	----------	*/
		.imgTelesecCentro{
			position: absolute; top:75px; left:65px; width: 150px; height: 150px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
		.iniImgCentro{
			position: absolute; top:57px; left:58px; width:170px; height:169px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo General todos los grados	----------*/
		.imgPrimeroCentral{
			position: absolute; top:95px; left:95px; width:100px; height: 100px; z-index:0; visibility: hidden;
		}
	}

	@media (min-width: 350px) {
		.logoBarraTVE{
			width: 33px;
			height: 13px;
		}
		.logoBarraSEP{
			width: 33px;
			height: 10px;
		}
		.textoTitulo{
			color: black;
			font-family:'Ubuntu';
			font-size:10px;
		}
		.contenedorAro{
			width:283px; height:283px; margin:auto; position: relative;
		}
	/*	----------	Estilo pagina Inicio telesecundaria	----------	*/
		.imgTelesecCentro{
			position: absolute; top:75px; left:65px; width: 150px; height: 150px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
		.iniImgCentro{
			position: absolute; top:57px; left:58px; width:170px; height:169px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo General todos los grados	----------*/
		.imgPrimeroCentral{
			position: absolute; top:95px; left:95px; width:100px; height: 100px; z-index:0; visibility: hidden;
		}
	}
	@media (min-width: 768px) { 
		.logoBarraTVE{
			width: 65px;
			height: 25px;
		}
		.logoBarraSEP{
			width: 65px;
			height: 20px;
		}
			.textoTitulo{
			color: black;
			font-family:'Ubuntu';
			font-size:16px;
		}
		.contenedorAro{
			width:483px; height:483px; margin:auto; position: relative;
		}
	/*	----------	Estilo pagina Inicio telesecundaria	----------	*/
		.imgTelesecCentro{
			position: absolute; top:150px; left:130px; width: 230px; height: 230px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
		.iniImgCentro{
			position: absolute; top:95px; left:98px; width:288px; height:292px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo General todos los grados	----------*/
		.imgPrimeroCentral{
			position: absolute; top:130px; left:130px; width:225px; height: 225px; z-index:0; visibility: hidden;
		}
	}

	@media (min-width: 1024px) {
		.logoBarraTVE{
			width: 65px; 
			height: 25px;
		}
		.logoBarraSEP{
			width: 65px;
			height: 20px;
		}
		.textoTitulo{
			color: black;
			font-family:'Ubuntu';
			font-size:19px;
		}
		.contenedorAro{
			width:483px; height:483px; margin:auto; position: relative;
		}
	/*	----------	Estilo pagina Inicio telesecundaria	----------	*/
		.imgTelesecCentro{
			position: absolute; top:150px; left:130px; width: 230px; height: 230px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
		.iniImgCentro{
			position: absolute; top:95px; left:98px; width:286px; height:292px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo General todos los grados	----------*/
		.imgPrimeroCentral{
			position: absolute; top:130px; left:130px; width:225px; height: 225px; z-index:0; visibility: hidden;
		}
	}

	@media (min-width: 1200px) {
		.logoBarraTVE{
			width: 131px;
			height: 50px;
		}
		.logoBarraSEP{
			width: 166px;
			height: 50px;
		}
		.contenedorAro{
			width:483px; height:483px; margin:auto; position: relative;
		}
	/*	----------	Estilo pagina Inicio telesecundaria	----------	*/
		.imgTelesecCentro{ 
			position: absolute; top:150px; left:130px; width: 230px; height: 230px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
		.iniImgCentro{
			position: absolute; top:95px; left:98px; width:286px; height:292px; z-index:0; visibility: hidden;
		}
	/*	----------	Estilo General todos los grados	----------*/
		.imgPrimeroCentral{
			position: absolute; top:130px; left:130px; width:225px; height: 225px; z-index:0; visibility: hidden;
		}
	}
/*	----------	Estilo General todos los grados	----------*/
	.posicionInicial{
		position: absolute; top:0; left:0; z-index:2;
	}
	.resaltaImg{
		position: absolute; top:0; left:0; z-index:3; visibility: hidden; 
	}
	.posicionMapa{
		position: absolute; top:0; left:0; z-index:5;
	}


/*	----------	Estilo pagina Inicio Educamedia	----------	*/	
	.telesecundaria{
		position: absolute; top:0px; left:15px;  z-index:5; visibility: hidden;
	}
	.telebachillerato{
		position: absolute; top:240px; left:15px; z-index:5; visibility: hidden; 
	}

</style>
<nav id="navegacionMediateca" class="navbar navbar-default navbar-fixed-top lo menuVentana" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="navbar-header">
                    <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button-->    
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/mediateca/encabezado/logoventana.png','Logo Ventana Educativa', ['class'=>'image-responsive imgLogo']) }}
                    </a>
                </div> 
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="http://www.gob.mx/sep" target="_blank">
                    {{ HTML::image('imagenes/mediateca/encabezado/sepcolor.png','Icono Apps',['class'=>'logoBarraSEP'])}}
                </a>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-center">
                <a href="http://www.televisioneducativa.gob.mx" target="_blank">
                    {{ HTML::image('imagenes/mediateca/encabezado/tvecolor.png','Icono Apps',['class'=>'logoBarraTVE'])}}
                </a>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <ul class="nav navbar-nav navbar-right">
                    <li id="li-R" class="dropdown col-xs-6 col-sm-6 col-md-6" style="float:right;">
                        <div class=" divli dropdown-toggle" data-toggle="dropdown">
                            @if (Auth::guest())
                            {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))                        
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @else
                            {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @endif

                        </div>
                        <ul id="menuVentanaRegistro" class="dropdown-menu fondoRegistro">
                            <li class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        @if (Auth::guest ())
                                        <form id="login-form" action="{{url('sessions')}}" method="POST" role="form" style="display: block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <div class="form-group">
                                                <input type="email" name="email"  tabindex="1" class="form-control inputLogin" placeholder="Usuario" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"  tabindex="2" class="form-control inputLogin" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-md-offset-3">
                                                        <input type="submit" name="login-submit" style="color: white;" id="login-submit" tabindex="4" class="form-control btn btn-sm" value="Entrar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6 text-center">
                                                    <a href="{{url('password/email')}}" tabindex="5" style="color: white;" class="forgot-password">Olvide mi contraseña</a>
                                                </div>

                                                <div class=" col-md-6 text-center">
                                                    <a href="{{url('registro')}}"  tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
                                                </div>
                                            </div>
                                        </form>
                                        @else 

                                        <h5 style="color: white;" class="text-center">
                                            <!--Iniciaste sesión como:--> 
                                        </h5>
                                        <h4 style="color: white;" class="text-center">{{Auth::user()->email}}</h4>                            

                                        <div class="col-md-6 text-center">
                                            <a href="{{url('logout')}}" tabindex="5" style="color: red; font-weight: bold;" class="forgot-password">
                                                Cerrar Sesión
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <a id="link-cambia-avatar" style="color: white; font-weight: bold;" >Cambiar avatar</a>
                                        </div>
                                        <div>
                                            <!--link para abrir formulario de registro de integrante de la RedMITE-->
                                            @if (Auth::user()->is_researcher)
                                            <div class="col-md-12 text-center">
                                                <a href="{{url('redmite/admin/integrantes')}}" tabindex="5" style="color: #00B6F1; font-weight: bold;" class="forgot-password">
                                                    Registro integrante RedMITE
                                                </a>
                                            </div>
                                            @endif
                                            <hr id="line">
                                            <!--<a id="link-cambia-avatar" href="#" tabindex="5" style="color: white;" class="forgot-password">Cambiar imagen</a>-->
                                            <div id="form-avatar" class="hidden center-block" style="color: white;">
                                                <form id="uploadimage" action="" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                                    @if (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                                                    <div class="col-md-5" id="image_preview"><img height="100px" id="previewing" src="{{url('uploaded/avatares/'.Auth::user()->id.'.png')}}" /></div>
                                                    @else
                                                    <div class="col-md-5" id="image_preview"><img height="100px" id="previewing" src="imagenes/ventana/encabezado/noimage.png" /></div>
                                                    @endif
                                                    <div class="col-md-7" id="selectImage">
                                                        <!--<label for="file">Selecciona tu imagen</label><br/>-->
                                                        <span class="btn btn-file-avatar">
                                                            Seleccionar imagen <input type="file" name="image" class="inputLogin" id="file" required />
                                                        </span>                                                    
                                                        <br><br>                                      
                                                        <input type="submit" value="Subir Imagen" class="submit btn btn-info" />
                                                        <!--<h4 id='loading' >Cargando...</h4>-->
                                                    </div>  

                                                </form>
                                            </div>
                                        </div>
                                        <div id="message" class="col-md-12" style="color: white; font-size: 9px;"></div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>

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
                    $('#previewing').attr('src', 'imagenes/ventana/encabezado/noimage.png');
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
	
/*	----------	Manipula imagenes del centro del aro en telesecundaria	----------	*/

                var gifs = [
                @for ($i = 1; $i<= 8; $i++)
                   "{{asset ('imagenes/mediateca/Inicio/gifs/'.$i.'.gif')}}",
                @endfor
                ];
		function resaltaImgSecu(prefijo, idImg){
                    var idImgHover = "#" + idImg + "Hover";                        
                    $(idImgHover).css("visibility", "visible");
                    var idImgCentro = "#" + idImg + "Centro";
                    console.log (prefijo);
                    if (prefijo === 'Inicio'){
                        var random = Math.floor((Math.random() * 8));
                        $(idImgCentro).attr("src", gifs[random]);
                    }    
                    $(idImgCentro).addClass("bounceIn");
                    $(idImgCentro).addClass("animated");
                    $(idImgCentro).css("visibility", "visible");
                    $(idImgCentro).fadeIn();
		}
		function normalImgSecu(prefijo, idImg){
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
</script>