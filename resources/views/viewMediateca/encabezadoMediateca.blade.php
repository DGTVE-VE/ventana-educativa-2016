<!--nuevo encabezado-->
<nav class="navbar navbar-default navbar-fixed-top lo menuVentana" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>    
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/mediateca/encabezado/logoventana.png','Logo Ventana Educativa', ['class'=>'image-responsive imgLogo']) }}
                    </a>
                </div> 
            </div>
            <!--<div class="col-md-1"></div>-->
            <div class="col-md-3">
                <!--                <ul class="nav navbar-nav collapse navbar-collapse collapseBarra">
                                    <li class="liBuscar">
                                        <form action="" class="search-form" style="width: 200px;">
                                            <div class="form-group has-feedback">
                                                <label for="search" class="sr-only">Buscar</label>
                                                <input type="text" class="form-control" name="buscar" id="buscar" placeholder="buscar">
                                                <span class="glyphicon glyphicon-search form-control-feedback spanbuscar"></span>
                                            </div>
                                        </form>
                                    </li>
                                </ul>-->
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <ul class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra">
                    <li class="dropdown col-md-6">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            {{ HTML::image('imagenes/mediateca/encabezado/iconoApps.png','Icono Apps',['width'=>'33px','height'=>'23px','class'=>'iconoApp'])}}
                        </div>
                        <ul class="dropdown-menu img-responsive menuVentanaApps">
                            <table class="mueveTabla">
                                <tr>
							        <td class="divApp centered center-block">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appVOD.png','logo VOD')}}
                                        </a>
                                    </td>                        
                                    <td class="divApp centered">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appIdiomas.png','logo Idiomas')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appMediateca.png','logo Mediateca')}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="divApp centered">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appPrimaria.png','logo Primaria')}}
                                        </a>
                                    </td>
								    <td class="divApp centered">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appDocentes.png','logo Docentes')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a class="" href="#">
                                            {{ HTML::image('imagenes/ventana/encabezado/appPadres.png','logo Padres')}}
                                        </a>
                                    </td>
                               </tr>
                            </table>                                       
                        </ul>
                    </li>
                    <li id="li-R" class="dropdown col-md-6">
                        <div class=" divli dropdown-toggle" data-toggle="dropdown">
                            @if (Auth::guest())
                            {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle', 'id'=>'img-usuario'] )}}                        
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))                        
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle', 'id'=>'img-usuario', 'width'=>'30px'] )}}
                            @else
                            {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle', 'id'=>'img-usuario'] )}}
                            @endif

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
                                                    <a href="{{url('registro')}}"  tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
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

                                                    @if (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png')))
                                                    <div id="image_preview"><img height="100px" id="previewing" src="{{url('uploaded/avatares/'.Auth::user()->id.'.png')}}" /></div>
                                                    @else
                                                    <div id="image_preview"><img height="100px" id="previewing" src="imagenes/mediateca/encabezado/noimage.png" /></div>
                                                    @endif
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
                    $("#message").html(data);
                    $('#img-usuario').attr('src', data + '?' + (new Date()));
                    $('#img-usuario').attr('width', '30px');
                    $('#img-usuario').attr('height', '30px');
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
                    $('#previewing').attr('src', 'noimage.png');
                    $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
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
</script>
	<?php
		function generaBreadCrumbs(){
			$uri = $_SERVER['REQUEST_URI'];
			$uriActual = explode('/',$uri);
			$elemsURI= count($uriActual);
			$j=$elemsURI-1;
			while($uriActual[$j]!='mediateca'){
				$j--;
			}
			echo '<a href="'?>{{url($uriActual[$j])}}<?php echo '">'.strtoupper($uriActual[$j]).'</a>';
			$hrefCompleta = $uriActual[$j];
			$j++;
			for($i=$j; $i<$elemsURI;$i++){
				$hrefCompleta = $hrefCompleta."/".$uriActual[$i];
				echo ' / ';
				echo '<a href="'?>{{url($hrefCompleta)}}<?php echo'">'.strtoupper($uriActual[$i]).'</a>';
			}
		}
	?>
