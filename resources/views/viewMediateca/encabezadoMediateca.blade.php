<!--nuevo encabezado-->
<link rel="stylesheet" href="{{asset('css/mediateca/encabezado.css')}}"></style>
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
                    <li id="li-R" class="dropdown col-xs-6 col-sm-6 col-md-6" style="float:left;">
                        <div class=" divli dropdown-toggle" data-toggle="dropdown">
                            @if (Auth::guest())
                            <button type="button" class="btn btn-default" class="img-circle">Ingresar <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
                            <!-- {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}} -->
                            @elseif (File::exists ('uploaded/avatares/'.Auth::user()->id.'.png'))
                            {{ HTML::image('uploaded/avatares/'.Auth::user()->id.'.png', 'Avatar usuario', ['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @else
                            {{ HTML::image('imagenes/mediateca/encabezado/usuario.png','Logo Usuario',['class'=>'img-circle iconoApp', 'id'=>'img-usuario'] )}}
                            @endif

                        </div>
                        <ul id="menuVentanaRegistro" class="dropdown-menu fondoRegistro">
                            <li class="panel-body col-xs-12 col-sm-12">
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
                                                    <div class="col-md-5" id="image_preview"><img height="100px" id="previewing" src="{{url('imagenes/ventana/encabezado/noimage.png')}}" /></div>
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
<script src="{{url('js/mediateca/encabezado.js')}}"></script>
<script>
    /*	----------	Manipula imagenes del centro del aro en telesecundaria	----------	*/

    var gifs = [
            @for ($i = 1; $i <= 8;
            $i++
            )
            "{{asset ('imagenes/mediateca/Inicio/gifs/'.$i.'.gif')}}",
            @endfor
    ];
</script>