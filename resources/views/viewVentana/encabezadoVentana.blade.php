<!--nuevo encabezado-->

<link rel="stylesheet" type="text/css" href="{{url('css/ventana/menuVentana.css')}}"/>
<nav id="navegacionVentana" class="navbar navbar-default navbar-fixed-top  menuVentana" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/ventana/encabezado/logoventana.png','Ventana Educativa', ['class'=>'image-responsive imgLogo', 'id'=>'imagenLogoVentana']) }}
                    </a>
                </div>
            </div>
            <!--<div class="col-md-1"></div>-->

            <div class="col-md-3 col-sm-4" id="frmBuscarMenu">
                <ul class="nav navbar-nav collapse navbar-collapse collapseBarra margenNav">
                    <li class="liBuscar">
                        <form action="" class="search-form" style="width: 200px;">
                            <div class="form-group has-feedback" id="formaBuscar">
                                <label for="search" class="sr-only">Buscar</label>
                                <input type="text" class="form-control" name="buscar" id="buscar" placeholder="buscar">
                                <span id="iconoBuscar" class="glyphicon glyphicon-search form-control-feedback spanbuscar"></span>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
                <ul class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra margenNav">
                    <li class="dropdown col-xs-12 col-sm-3 col-md-6 paddDropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            {{ HTML::image('imagenes/ventana/encabezado/iconoApps.png','Diversas aplicaciones de contenido educativo',['width'=>'30px','height'=>'20px','class'=>'iconoApp appsLogo','id'=>'iconoManuApps'])}}
                        </div>
                        <ul id="menuVentanaApps" class="dropdown-menu img-responsive menuVentanaApps">
                            <table id="mueveTablaApps" class="mueveTabla">
                                <tr>
                                    <td class="divApp centered center-block">
                                        <a class="" href="{{url('educaplay')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appVOD.png','Educaplay: Videos educativos')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="{{url('educamedia')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appMediateca.png','Mediateca: Videos de telesecundaria')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="{{url('redmite')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appRed.png','Redmite',['width'=>'75%', 'height'=>'75%'])}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="divApp centered">
                                        <a class="" href="{{url('cultura')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appCultura.png','Cultura: Conoce las diversas páginas de cultura a nivel Centro América')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="{{url('biblioteca')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appBiblioteca.png','Bibliotecas de Centro América')}}
                                        </a>
                                    </td>
                                     <td class="divApp centered">
                                        <a class="" href="http://www.promocion.salud.gob.mx/dgps/interior1/programas/escuela_salud.html"target="_blank">
                                            {{ HTML::image('imagenes/ventana/encabezado/appSalud.png','Salud')}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class="text-center">
                                        <p class="iconoGde" onclick="muestraMasIconos(event)"><span id="etiquetaMas">M&aacute;s</span></p>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="divApp centered">
                                        <a class="" href="http://www.ibe.tv/es/canal/iberoamericano/315/En-directo.htm" target="_blank" >
                                            {{ HTML::image('imagenes/ventana/encabezado/appIbero.png','Canal Iberoamericano',['class'=>'ocultaImgApp'])}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="http://mexicox.gob.mx/" target="_blank">
                                            {{ HTML::image('imagenes/ventana/encabezado/appMexico.png','MexicoX',['class'=>'ocultaImgApp'])}}
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </ul>
                    </li>
                    <li id="li-R" class="dropdown col-xs-12 col-sm-7 col-md-6">
                        <div class=" divli dropdown-toggle col-xs-5 col-sm-6 col-xs-offset-7" data-toggle="dropdown">
                            @if (Auth::guest())
                          <button type="button" class="btn btn-default" class="img-circle">Ingresar <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
                            <!-- {{ HTML::image('imagenes/ventana/encabezado/usuario.png','Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}} -->
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle iconoApp', 'id'=>'img-usuario', 'width'=>'35px'] )}}
                            @else
                            {{ HTML::image('imagenes/ventana/encabezado/usuario.png','Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @endif

                        </div>
                        <ul id="menuVentanaRegistro" class="dropdown-menu fondoRegistro col-xs-12">
                            <li class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 bajaRegistro">
                                        @if (Auth::guest ())
                                        <form id="login-form" action="{{url('sessions')}}" method="POST" role="form" style="display: block;">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                            <div class="form-group">
                                                <input type="email" name="email"  tabindex="1" class="form-control inputLogin" placeholder="Correo Electrónico" value="">
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
    /*	-------------------------------------	Hace visible o invisible los iconos de apps adicionales	--------------------------------------	*/
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
</script>
