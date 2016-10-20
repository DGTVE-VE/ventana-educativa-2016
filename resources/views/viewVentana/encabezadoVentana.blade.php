<!--nuevo encabezado-->
<link rel="stylesheet" type="text/css" href="{{url('css/ventana/encabezado.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{url('css/ventana/menuVentana.css')}}"/>
<nav id="navegacionVentana" class="navbar navbar-default navbar-fixed-top  menuVentana" role="navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-ventana">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{url('ventana_educativa')}}">
                        {{ HTML::image('imagenes/ventana/encabezado/logoventana.png','Ventana Educativa', ['class'=>'img-responsive imgLogo', 'id'=>'imagenLogoVentana']) }}
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-4" id="frmBuscarMenu">
                <ul class="nav navbar-nav collapse navbar-collapse collapseBarra margenNav">
                    <li class="liBuscar">
                        <form action="" class="search-form anchoFormaBuscar">
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
                <ul id="navbar-collapse-ventana" class="nav navbar-nav navbar-right collapse navbar-collapse collapseBarra margenNav">
                    <li class="dropdown col-xs-12 col-sm-3 col-md-6 paddDropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            {{ HTML::image('imagenes/ventana/encabezado/iconoApps.png','Diversas aplicaciones de contenido educativo',['class'=>'iconoApp appsLogo','id'=>'iconoManuApps'])}}
                        </div>
                        <ul id="menuVentanaApps" class="dropdown-menu img-responsive menuVentanaApps">
                            <table id="mueveTablaApps" class="mueveTabla">
                                <tr>
                                    <td class="divApp centered center-block">
                                        <a href="{{url('educaplay')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appVOD.png','Educaplay: Videos educativos')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a href="{{url('educamedia')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appMediateca.png','Mediateca: Videos de telesecundaria')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a href="{{url('redmite')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appRed.png','Redmite',['class'=>'appRed'])}}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="divApp centered">
                                        <a href="{{url('cultura')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appCultura.png','Cultura: Conoce las diversas páginas de cultura a nivel Centro América')}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a href="{{url('biblioteca')}}">
                                            {{ HTML::image('imagenes/ventana/encabezado/appBiblioteca.png','Bibliotecas de Centro América')}}
                                        </a>
                                    </td>
                                     <td class="divApp centered">
                                        <a href="http://www.promocion.salud.gob.mx/dgps/interior1/programas/escuela_salud.html"target="_blank">
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
                                        <a href="http://www.ibe.tv/es/canal/iberoamericano/315/En-directo.htm" target="_blank" >
                                            {{ HTML::image('imagenes/ventana/encabezado/appIbero.png','Canal Iberoamericano',['class'=>'ocultaImgApp'])}}
                                        </a>
                                    </td>
                                    <td class="divApp centered">
                                        <a href="http://mexicox.gob.mx/" target="_blank">
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
                          <button id="btnIngresa" type="button" class="btn btn-default" class="img-circle">Ingresar <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle iconoApp AvatarUsuario', 'id'=>'img-usuario'] )}}
                            @else
                            {{ HTML::image('imagenes/ventana/encabezado/usuario.png','Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @endif

                        </div>
                        <ul id="menuVentanaRegistro" class="dropdown-menu fondoRegistro col-xs-12">
                            <li class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 bajaRegistro">
                                        @if (Auth::guest ())
                                        <form id="login-form" action="{{url('sessions')}}" method="POST" role="form" class="block">
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
                                                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-sm colorBlanco" value="Entrar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6 text-center">
                                                    <a href="{{url('password/email')}}" tabindex="5" class="forgot-password colorBlanco">Olvide mi contraseña</a>
                                                </div>

                                                <div class=" col-md-6 text-center">
                                                    <a href="{{url('registro')}}"  tabindex="5" class="forgot-password colorBlanco">Registrate</a>
                                                </div>
                                            </div>
                                        </form>
                                        @else

                                        <h5 class="text-center colorBlanco">
                                            <!--Iniciaste sesión como:-->
                                        </h5>
                                        <h4 class="text-center colorBlanco">{{Auth::user()->email}}</h4>

                                        <div class="col-md-6 text-center">
                                            <a href="{{url('logout')}}" tabindex="5" class="forgot-password fuenteRojoBold">
                                                Cerrar Sesión
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <a id="link-cambia-avatar" class="fuenteBlacoBold" >Cambiar avatar</a>
                                        </div>
                                        <div>
                                            <!--link para abrir formulario de registro de integrante de la RedMITE-->
                                            @if (Auth::user()->is_researcher)
                                            <div class="col-md-12 text-center">
                                                <a href="{{url('redmite/admin/integrantes')}}" tabindex="5" class="forgot-password fuenteOlvido">
                                                    Registro integrante RedMITE
                                                </a>
                                            </div>
                                            @endif
                                            <hr id="line">
                                            <div id="form-avatar" class="hidden center-block colorBlanco">
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
                                        <div id="message" class="col-md-12 mensaje"></div>
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

<script src="{{url('js/ventana/encabezado.js')}}"></script>
