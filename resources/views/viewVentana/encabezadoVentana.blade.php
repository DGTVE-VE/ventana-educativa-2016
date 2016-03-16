<!--nuevo encabezado-->
<nav class="navbar navbar-default navbar-fixed-top menuVentana" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>    
        <a href="ventana_educativa"><img class="image-responsive imgLogo " src="imagenes/ventana/encabezado/logoventana.png"></a>
    </div> 
    <ul class="nav navbar-nav collapse navbar-collapse collapseBarra">
        <li class="liBuscar">
            <form action="" class="search-form" style="width: 200px;">
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Buscar</label>
                    <input type="text" class="form-control" name="buscar" id="buscar" placeholder="buscar">
                    <span class="glyphicon glyphicon-search form-control-feedback spanbuscar"></span>
                </div>
            </form>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra">
        <li class="dropdown col-md-6">
            <div class="dropdown-toggle" data-toggle="dropdown">
                <img class="iconoApp" width="30px" height="20px" src="imagenes/ventana/encabezado/iconoApps.png">
            </div>
            <ul class="dropdown-menu image-responsive menuVentanaApps">
                <table class="">
                    <tr>
                        <td class="divApp centered">
                            <a class="text-center" href="ventana_educativa"><img src="imagenes/ventana/encabezado/appVentana.png" class="img-responsive"></a>
                            <label class="etiquetaApp text-center">Ventana Educativa</label>
                        </td>
                        <td class="divApp centered">
                            <a class="text-center" href="http://redmite.televisioneducativa.gob.mx/" target="_blank"><img src="imagenes/ventana/encabezado/appRed.png" class="img-responsive"></a>
                            <label class="etiquetaApp text-center">Red <br> Mesoamericana</label>
                        </td>
                        <td class="divApp centered">
                            <a class="text-center" href="http://mx.televisioneducativa.gob.mx" target="_blank"><img src="imagenes/ventana/encabezado/appMexico.png" class="img-responsive"></a>
                            <label class="etiquetaApp text-center">MéxicoX</label>
                        </td>                            
                    </tr>
                    <tr>
                        <td class="divApp centered" style="vertical-align:middle !important;">
                            <a class="text-center" target="_blank" href="http://www.ibe.tv/es/canal/iberoamericano/756/Iberoam%C3%A9rica-al-d%C3%ADa-1032016.htm"><img class="img-responsive" src="imagenes/ventana/encabezado/appIbero.png"></a>
                            <label class="etiquetaApp text-center">Canal <br> Iberoamericano</label>
                        </td>
                        <td class="divApp centered">
                            <a class="" href="#"><img class="img-responsive" src="imagenes/ventana/encabezado/appDocentes.png"></a>
                            <label class="etiquetaApp text-center center-block">Docentes</label>
                        </td>
                        <td class="divApp centered">
                            <a class="" href="#"><img class="img-responsive" src="imagenes/ventana/encabezado/appIdiomas.png"></a>
                            <label class="etiquetaApp text-center">Idiomas</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="divApp centered">
                            <a class="" href="#"><img class="img-responsive" src="imagenes/ventana/encabezado/appMediateca.png"></a>
                            <label class="etiquetaApp text-center center-block">Mediateca</label>
                        </td>
                        <td class="divApp centered">
                            <a class="" href="#"><img class="img-responsive" src="imagenes/ventana/encabezado/appPadres.png"></a>
                            <label class="etiquetaApp text-center center-block">Padres</label>
                        </td>
                        <td class="divApp centered">
                            <a class="" href="#"><img class="img-responsive" src="imagenes/ventana/encabezado/appPrimaria.png"></a>
                            <label class="etiquetaApp text-center">Primaria</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="divApp centered center-block">
                            <a class="" href="#"><img src="imagenes/ventana/encabezado/appVOD.png"></a><br>
                            <label class="etiquetaApp text-center">VOD</label>
                        </td>                        
                        <td></td>

                    </tr>                      
                </table>                                       
            </ul>
        </li>
        <li id="li-R" class="dropdown col-md-6">
            <div class=" divli dropdown-toggle" data-toggle="dropdown">
                <img src="imagenes/ventana/encabezado/usuario.png">
            </div>
            <ul class="dropdown-menu fondoRegistro">
                <li class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @if (Auth::guest ())
                            <form id="login-form" action="sessions" method="POST" role="form" style="display: block;">
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
                                        <a href="registro"  tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
                                    </div>
                                </div>
                            </form>
                            @else                            
                            Iniciaste sesión como: {{Auth::user()->email}}                            
                            <div>
                                <!--<div id="link-cambia-avatar"> Cambiar Avatar</div>-->
                                <button id="link-cambia-avatar" type="button">Cambiar avatar</button>
                                <!--<a id="link-cambia-avatar" href="#" tabindex="5" style="color: white;" class="forgot-password">Cambiar imagen</a>-->
                                <div id="form-avatar" class="hidden" >
                                    <form id="uploadimage" action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div id="image_preview"><img height="100px" id="previewing" src="noimage.png" /></div>
                                        <hr id="line">
                                        <div id="selectImage">
                                            <label>Selecciona tu imagen</label><br/>
                                            <input type="file" name="image" id="file" required />
                                            <input type="submit" value="Upload" class="submit" />
                                        </div>                                        
                                    </form>
                                    <h4 id='loading' >Cargando...</h4>
                                    <div id="message"></div>
                                </div>
                            </div>
                            <div>
                                <a href="logout" tabindex="5" style="color: white;" class="forgot-password">Cerrar Sesión</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
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
                    $("#message").html(data);
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
                if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2])))
                {
                    $('#previewing').attr('src', 'noimage.png');
                    $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
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
</script>