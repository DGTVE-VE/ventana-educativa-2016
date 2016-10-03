<div class="navbar"></div>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="collapse navbar-collapse col-md-3" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="fa fa-bars" style="color:white;" aria-hidden="true"></span></button></li>
                </ul>
            </div><!-- bs-example-navbar-collapse-1 -->

            <div class="col-md-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/ventana/encabezado/logoventana.png','Ventana Educativa', ['class'=>'image-responsive imgLogo']) }}
                    </a>
                </div>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-7">
                <ul class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra">
                    <li id="li-R" class="dropdown col-md-12">
                        <div class=" divli dropdown-toggle" data-toggle="dropdown">
                            @if (Auth::guest())
                            {{ HTML::image('imagenes/ventana/encabezado/usuario.png','Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle iconoApp', 'id'=>'img-usuario', 'width'=>'35px'] )}}
                            @else
                            {{ HTML::image('imagenes/ventana/encabezado/usuario.png','Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
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
                                                <input type="email" name="email"  tabindex="1" class="form-control inputLogin" placeholder="Correo Electrónico" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"  tabindex="2" class="form-control inputLogin" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-md-offset-3">
                                                        <input type="submit" name="login-submit" style="color: black;" id="login-submit" tabindex="4" class="form-control btn btn-sm" value="Entrar">
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
@if(Auth::check ())
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li class="active">
                <a href="{{url('admin')}}"><span class="fa-stack fa-lg pull-left"><i class="fa  fa-home fa-stack-1x "></i></span> Inicio</a>
            </li>
            <li class="">
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa  fa-book fa-stack-1x "></i></span> Biblioteca</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#">link1</a></li>
                    <li><a href="#">link2</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-binoculars fa-stack-1x "></i></span> Conocenos</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span> Cultura</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span> Educamedia</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-film fa-stack-1x "></i></span> Educaplay</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-globe fa-stack-1x "></i></span> Redmite</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
					<li onclick="muestraColaboradores()"><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Colaboradores</a></li>
                    <li><a href="{{url('admin/publicaciones')}}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Publicaciones</a></li>
                    <li><a href="{{url('admin/proyectos')}}"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>Proyectos</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user-md fa-stack-1x "></i></span> Salud</a>
                <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link1</a></li>
                    <li><a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-flag fa-stack-1x "></i></span>link2</a></li>

                </ul>
            </li>
        </ul>
    </div><!-- /#sidebar-wrapper -->
</div>
@endif
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

		/************ Carga lista colaboradores **************/
	function muestraColaboradores(){
		var urlget = "{{url('redmite/administra/listaColabora')}}";
		$.ajax({
			method: "GET",
			url: urlget,
			error: function (ts) {
				console.log(ts.responseText);
		}})
		.done(function (msg) {
			console.log('Colaboradores cargados: ');
			$("#contenidoPrincipal").html(msg)
		});
	}
    </script>
