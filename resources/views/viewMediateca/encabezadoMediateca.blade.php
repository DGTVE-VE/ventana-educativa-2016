<!--nuevo encabezado-->
<style>
	.bajaFila{
		position:relative; top:80px; z-index:10;
	}
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
	.textoTitulo{
		color: black;
		font-family:'Ubuntu';
		font-size:17px;
	}
/*	----------	Estilo pagina de telesecundaria	----------	*/
	.telesecPrimero{
		position:absolute; top:-80px; left:-25px; z-index:1; visibility:hidden;
	}
	.telesecSegundo{
		position: absolute; top:23px; left:193px; z-index:1; visibility:hidden;
	}
	.telesecTercero{
		position:absolute; top:151px; left:-6px; z-index:1; visibility:hidden;
	}
	.imgTelesecCentro{
		position: absolute; top:150px; left:150px; width:215px; height: 140px; z-index:0; visibility: hidden;
	}
/*	------------	Estilo Primer grado	----------	*/
	.ArtesI{
		position:absolute; top:146%; left:33.5%; width:22.5%; height: 58%; z-index:1;
	}
	.OrientacionI{
		position: absolute; top:98.3%; left:27.3%; width:24.2%; height: 61%; z-index:1;
	}
	.GeografiaI{
		position:absolute; top:49.3%; left:32.6%; width:24.3%; height: 62%; z-index:1;
	}
	.EspanolI{
		position:absolute; top:29.6%; left:48.2%; width:25%; height: 61.5%; z-index:1;
	}
	.Matematicas1{
		position: absolute; top:35.6%; left:70%; width:24%; height: 62%; z-index:1;
	}
	.CienciasI{
		position:absolute; top:68%; left:80%; width:24%; height: 62%; z-index:1;
	}
	.LenguaI{
		position:absolute; top:124.2%; left:80.1%; width:24%; height: 61%; z-index:1;
	}
	.EducacionFisicaI{
		position: absolute; top:156.2%; left:70.5%; width:24%; height: 62%; z-index:1;
	}
	.TecnologiaI{
		position:absolute; top:163%; left:48.6%; width:25.5%; height: 61.2%; z-index:1;
	}
	.imgPrimeroCentral{
		position: absolute; top:90%; left:50%; width:30%; height: 75%; z-index:0; visibility: hidden;
	}
/*	------------	Estilo Segundo grado	----------	*/
	.ArtesII{
		position:absolute; top:144.0%; left:34.7%; width:24%; height: 62%; z-index:1;
	}
	.FormacionCivicaI{
		position: absolute; top:96.8%; left:29.1%; width:24%; height: 62%; z-index:1;
	}
	.OrientacionII{
		position:absolute; top:48%; left:34.4%; width:24%; height: 62%; z-index:1;
	}
	.HistoriaI{
		position:absolute; top:27.7%; left:50%; width:24%; height: 62%; z-index:1;
	}
	.EspanolII{
		position: absolute; top:34%; left:71%; width:24%; height: 62%; z-index:1;
	}
	.Matematicas2{
		position:absolute; top:66.8%; left:81%; width:24%; height: 62%; z-index:1;
	}
	.CienciasII{
		position:absolute; top:123.6%; left:81.1%; width:24%; height: 62%; z-index:1;
	}
	.InglesII{
		position: absolute; top:156.6%; left:71.3%; width:24%; height: 62%; z-index:1;
	}
	.EducacionFisicaII{
		position:absolute; top:163.3%; left:50.8%; width:24%; height: 62%; z-index:1;
	}
	.imgSegundoCentral{
		position: absolute; top:92%; left:52%; width:30%; height: 75%; z-index:0; visibility: hidden;
	}
/*	------------	Estilo Tercer grado	----------	*/	
	.FormacionCivicaII{
		position:absolute; top:42.7%; left:26.2%; width:36%; height: 88%; z-index:1;
	}
	.HistoriaII{
		position: absolute; top:14%; left:49.7%; width:36%; height: 88%; z-index:1;
	}
	.EspanolIII{
		position:absolute; top:43%; left:73%; width:36%; height: 88%; z-index:1;
	}
	.Matematicas3{
		position:absolute; top:119.7%; left:72.9%; width:36%; height: 88%; z-index:1;
	}
	.CienciasIII{
		position: absolute; top:147.6%; left:48.9%; width:36%; height: 88%; z-index:1;
	}
	.InglesIII{
		position:absolute; top:118.7%; left:26%; width:36%; height: 88%; z-index:1;
	}
	.imgTerceroCentral{
		position: absolute; top:92%; left:54%; width:30%; height: 75%; z-index:0; visibility: hidden;
	}
/*	------------	Estilo telebachillerato página inicial	----------	*/	
	.formaPropedeutica{
		position: absolute; top:25.5%; left:94.7%; width:30%; height: 79%;
	}
	.bachSemI{
		position: absolute; top:29.5%; left:68.4%; width:30.5%; height: 79%;
	}
	.bachSemII{
		position: absolute; top:-23.4%; left:58.4%; width:30.5%; height: 79%;
	}
	.bachSemIII{
		position: absolute; top:36.8%; left:64.5%; width:30%; height: 79%;
	}
	.bachSemVI{
		position: absolute; top:63%; left:108%; width:30.5%; height: 79%;
	}
	.bachSemV{
		position: absolute; top:28%; left:106.1%; width:30%; height: 79%;
	}
	.bachSemIV{
		position: absolute; top:53.7%; left:87.3%; width:30%; height: 79%;
	}
/*	------------	Estilo telebachillerato primer semestre	----------	*/
	.InformaticaI{
		position: absolute; top:53.3%; left:29.1%; width:30.5%; height: 75%;
	}
	.TallerLectura{
		position: absolute; top:26.3%; left:47.4%; width:30%; height: 75%;
	}
	.IntroCS{
		position: absolute; top:39.8%; left:71.6%; width:30%; height: 75%;
	}
	.EticaValoresI{
		position: absolute; top:98.4%; left:78.2%; width:30.5%; height: 75%;
	}
	.MatematicasI{
		position: absolute; top:145%; left:68.9%; width:30%; height: 75%;
	}
	.LenguaAdicionalI{
		position: absolute; top:151.8%; left:43.7%; width:30%; height: 75%;
	}
	.QuimicaI{
		position: absolute; top:120.5%; left:28%; width:30.3%; height: 75%;
	}
/*	------------	Estilo telebachillerato segundo semestre	----------	*/
	.InformaticaII{
		position: absolute; top:53%; left:29%; width:30.5%; height: 75%;
	}
	.TallerLecturaII{
		position: absolute; top:26%; left:47.3%; width:30%; height: 75%;
	}
	.HistoriaMexicoI{
		position: absolute; top:39.5%; left:71.6%; width:30%; height: 75%;
	}
	.EticaValoresII{
		position: absolute; top:98%; left:78.2%; width:30.5%; height: 75%;
	}
	.MatematicasII{
		position: absolute; top:145%; left:68.8%; width:30%; height: 75%;
	}
	.LenguaAdicionalII{
		position: absolute; top:152%; left:43.7%; width:30%; height: 75%;
	}
	.QuimicaII{
		position: absolute; top:120.3%; left:28%; width:30.2%; height: 75%;
	}
/*	------------	Estilo telebachillerato tercer semestre	----------	*/
	.BiologiaI{
		position:absolute; top:95%; left:25%; width:34%; height: 87%;
	}
	.LiteraturaI{
		position: absolute; top:30.1%; left:32.8%; width:34%; height: 87%;
	}
	.HistoriaMexicoII{
		position:absolute; top:22.5%; left:61.8%; width:34%; height: 87%;
	}
	.FisicaI{
		position:absolute; top:72.6%; left:76.1%; width:34%; height: 87%;
	}
	.MatematicasIII{
		position: absolute; top:137.3%; left:68.3%; width:34%; height: 87%;
	}
	.LenguaAdicionalIII{
		position:absolute; top:144.7%; left:39.2%; width:34%; height: 87%;
	}
/*	------------	Estilo telebachillerato cuarto semestre	----------	*/
	.BiologiaII{
		position:absolute; top:95%; left:24.1%; width:34%; height: 87%;
	}
	.LiteraturaII{
		position: absolute; top:30%; left:32%; width:34%; height: 87%;
	}
	.Estructura{
		position:absolute; top:22.5%; left:61%; width:34%; height: 87%;
	}
	.FisicaII{
		position:absolute; top:72.3%; left:75.2%; width:34%; height: 87%;
	}
	.MatematicasIV{
		position: absolute; top:137%; left:67.4%; width:34%; height: 87%;
	}
	.LenguaAdicionalIV{
		position:absolute; top:144.6%; left:38.3%; width:34%; height: 87%;
	}
/*	------------	Estilo telebachillerato quinto semestre	----------	*/
    .Geografia{
        position: absolute; top:9%; left:65%; width:70%; height: 95%; z-index:1;
    }
    .HistoriaUniv{
        position: absolute; top:96.5%; left:65%; width:70%; height: 95%; z-index:1;
    }
    .telebachilleratoCentro{
        position: absolute; top:35%; left:72%; width:55%; height: 120%;	z-index:0; visibility: hidden;
    }
    .telesecundariaCentro{
        position: absolute; top:35%; left:73%; width:55%; height: 120%; z-index:0; visibility: hidden;
    }
/*	------------	Estilo telebachillerato sexto semestre	----------	*/
    .Ecologia{
        position:absolute; top:15.8%; left:22.2%; width:60%; height: 152%;
    }
    .Filosofia{
        position: absolute; top:29%; left:56%; width:60%; height: 152%;
    }
    .Metodologia{
        position:absolute; top:98.2%; left:33.5%; width:60%; height: 152%;
    }
/*	------------	Estilo telebachillerato semestre pedagogico	----------	*/
	.CienciasSaludII{
        position:absolute; top:51.1%; left:30.7%; width:26%; height: 66%;
    }
    .CienciasSaludI{
        position:absolute; top:29.5%; left:48.2%; width:26%; height: 66%;
    }
    .CienciasComunicacionI{
        position: absolute; top:40.7%; left:69.7%; width:26%; height: 66%;
    }
    .CienciasComunicacionII{
        position:absolute; top:85%; left:78%; width:26%; height: 66%;
    }
    .ProbabilidadI{
        position:absolute; top:139%; left:73.7%; width:26%; height: 66%;
    }
    .ProbabilidadII{
        position: absolute; top:160.5%; left:56.3%; width:26%; height: 66%;
    }
    .PsicologiaII{
        position:absolute; top:149.6%; left:34.8%; width:26%; height: 66%;
    }
    .PsicologiaI{
        position: absolute; top:105.5%; left:26.6%; width:26%; height: 66%;
    }
    .imgPrimeroCentral{
        position: absolute; top:90%; left:50%; width:30%; height: 75%; z-index:0; visibility: hidden;
    }
</style>
<script>
	/*	-------------------------------------	Hace visible o invisible los iconos de apps adicionales	--------------------------------------	*/
	imgOculto = true;
	function muestraMasIconos(){
		if(imgOculto){
			event.stopPropagation();
			$(".ocultaImgApp").css("width","100%");
			$(".ocultaImgApp").css("height","100%");
			$(".ocultaImgApp").css("visibility","visible");
			imgOculto = false;
		}
		else{
			event.stopPropagation();
			$(".ocultaImgApp").css("width","0%");
			$(".ocultaImgApp").css("height","0%");
			$(".ocultaImgApp").css("visibility","hidden");
			imgOculto = true;
		}
	}
	/*	----------	Manipula imagenes del centro del aro en telesecundaria	PRUEBA----------	*/
		function resaltaImgSecu(prefijo, idImg){
			var idImgHover = "#" + idImg + "Hover";
			$(idImgHover).css("visibility", "visible");
			var idImgCentro = "#" + idImg + "Centro";
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
	/*	----------	Manipula imagenes del centro del aro en telesecundaria	----------	*/
		function muestraImgCentroSecu(prefijo, idImg){
			document.getElementById(idImg).style.zIndex='5';
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria')}}" + "/" + prefijo + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).addClass("bounceIn");
			$(idImgCentro).addClass("animated");
			$(idImgCentro).css("visibility", "visible");
			$(idImgCentro).fadeIn();
			
		}
		function ocultaImgCentroSecu(prefijo, idImg){
			document.getElementById(idImg).style.zIndex='1';
			var idImgHover = "{{url('imagenes/mediateca/tsecundaria')}}" + "/" + prefijo + "/" + idImg + ".png";
			document.getElementById(idImg).src = idImgHover;
			var idImgCentro = "#" + idImg + "Centro";
			$(idImgCentro).css("visibility", "hidden");
			$(idImgCentro).fadeOut();
			$(idImgCentro).removeClass("animated");
			$(idImgCentro).removeClass("bounceIn");
		}
	/*	----------	Manipula imagenes del centro del aro en telebachillerato	----------	*/
		function muestraImgCentro(prefijo, idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato')}}" + "/" + prefijo + "/" + idImg + "Hover.png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "visible";*/
			
		}
		function ocultaImgCentro(prefijo, idImg){
			var idImgHover = "{{url('imagenes/mediateca/tbachillerato')}}" + "/" + prefijo + "/" + idImg + ".png";
			document.getElementById(idImg).src = idImgHover;
			/*var idImgCentro = idImg + "Centro";
			document.getElementById(idImgCentro).style.visibility = "hidden";*/
		}
	</script>
<nav id="navegacionMediateca" class="navbar navbar-default navbar-fixed-top lo menuVentana" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
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
            <div class="col-md-2 text-center">
                <a href="http://www.gob.mx/sep" target="_blank">
                    {{ HTML::image('imagenes/mediateca/encabezado/sepcolor.png','Icono Apps',['class'=>''])}}
                </a>
            </div>
            <div class="col-md-2 text-center">
                <a href="http://www.televisioneducativa.gob.mx" target="_blank">
                    {{ HTML::image('imagenes/mediateca/encabezado/tvecolor.png','Icono Apps',['class'=>''])}}
                </a>
            </div>
            <div class="col-md-4">
                <ul class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra">
                    <li class="dropdown col-md-6">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            {{ HTML::image('imagenes/mediateca/encabezado/iconoApps.png','Icono Apps',['width'=>'30px','height'=>'20px','class'=>'iconoApp'])}}
                        </div>
                        <ul class="dropdown-menu img-responsive menuVentanaApps">
                            <table id="menuVentanaApps" class="mueveTabla">
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
                        <ul id="menuVentanaRegistro" class="dropdown-menu fondoRegistro">
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

                                        <h5 style="color: white;" class="text-center">
                                            <!--Iniciaste sesión como:--> 
                                        </h5>
                                        <h4 style="color: white;" class="text-center">{{Auth::user()->email}}</h4>                            

                                        <div class="col-md-6 text-center">
                                            <a href="logout" tabindex="5" style="color: red; font-weight: bold;" class="forgot-password">
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
</script>

<?php

function seleccionaGrado($grado) {
    switch ($grado) {
        case '1': $grado = 'primergrado';
            break;
        case '2': $grado = 'segundogrado';
            break;
        case '3': $grado = 'tercergrado';
            break;
        case 'I': $grado = 'semestreI';
            break;
        case 'II': $grado = 'semestreII';
            break;
        case 'III': $grado = 'semestreIII';
            break;
        case 'IV': $grado = 'semestreIV';
            break;
        case 'V': $grado = 'semestreV';
            break;
        case 'VI': $grado = 'semestreVI';
            break;
        case 'VII': $grado = 'componente';
            break;
    }
    return $grado;
}

function generaBreadCrumbs() {
    $uri = $_SERVER['REQUEST_URI'];
    $uriActual = explode('/', $uri);
    $elemsURI = count($uriActual);
    $j = $elemsURI - 1;
    $termina = false;
    while ($uriActual[$j] != 'educamedia') {
        $j--;
    }
    echo '<a href="'
    ?>{{url($uriActual[$j])}}<?php
    echo '">' . strtoupper($uriActual[$j]) . '</a>';
    $hrefCompleta = $uriActual[$j];
    $j++;
    for ($i = $j; $i < $elemsURI; $i++) {
        if (strlen($uriActual[$i]) < 3) {
            $gradoURI = seleccionaGrado($uriActual[$i]);
            $termina = true;
        } else {
            $gradoURI = $uriActual[$i];
        }
        $hrefCompleta = $hrefCompleta . "/" . $gradoURI;
        echo ' / <a href="'
        ?>{{url($hrefCompleta)}}<?php
        echo'">' . strtoupper($gradoURI) . '</a>';
        if ($termina == true) {
            break;
        }
    }
}
?>
