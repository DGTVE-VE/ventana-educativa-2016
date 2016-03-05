<div class="navbar navbar-default navbar-fixed-top menuVentana" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="#"><img class="image-responsive" src="imagenes/ventana/encabezado/logoventana.png"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="fotoUsuario text-center" style="color: #FFF;">R</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong style="color: #FFF;">Usuario</strong>
                        <span class="glyphicon glyphicon-chevron-down" style="color: #FFF;"></span>
                    </a>
                    <ul class="dropdown-menu fondoRegistro">
                        <li class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" action="entraUsuario" method="post" role="form" style="display: block;">
                                        <div class="form-group">
                                            <input type="text" name="name"  tabindex="1" class="form-control" placeholder="Usuario" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="email"  tabindex="2" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember" style="color: white;"> Recordarme</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="submit" name="login-submit" style="color: white;" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="#" tabindex="5" style="color: white;" class="forgot-password">Olvide mi contraseña</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="#" data-target="#modalRegistro"  data-toggle="modal" tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle iconoAppsImg" data-toggle="dropdown">
                        <img class="iconoApps" src="imagenes/ventana/encabezado/iconoApps.png">
                    </a>
                    <ul class="dropdown-menu image-responsive menuVentanaApps">
                        <li class="text-center">
                            <a class="" href="#">
                                <img src="imagenes/ventana/encabezado/logoventana.png" height="50" width="150">
                            </a>
                        </li>
                        <hr>
                        <li class="text-center">
                            <a class="" href="redmite">
                                <img src="imagenes/red/LogoRed/logoredmesoamericana.png" height="50" width="150">
                            </a>
                        </li>
                        <hr>
                        <li class="text-center">
                            <a class="" href="#">
                                <img src="imagenes/ventana/encabezado/mx.png" height="50" width="150">
                            </a>
                        </li>
                        <hr>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="modalRegistro" class="modal fade" tabindex="-1" data-width="760" >
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Registro</h3>
    </div>
    <div class="modal-body" data-focus-on="input:first">
        <div class="row-fluid">
            <form role="form" action="registraUsuario">
                <div class="form-group col-md-12 span12">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" name="name" id="nombre" class="form-control input-lg" placeholder="Nombre Completo">
                </div>
                <div class="form-group col-md-12 span12">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="email" class="form-control input-lg" placeholder="Correo Electrónico">
                </div>
                <div class="form-group col-md-6 span12">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" name="password" class="form-control input-lg" placeholder="Contraseña">
                </div>     
                <div class="form-group col-md-6 span12">
                    <label for="contraseñarep">Repetir Contraseña:</label>
                    <input type="password" name="repeat_password" class="form-control input-lg" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-12 span12">
                    <label for="genero">Genero:</label>
                    <div class="radio">
                        <label class="checkbox-inline"><input type="radio" name="genero">Mujer</label>
                        <label class="checkbox-inline"><input type="radio" name="genero">Hombre</label>
                    </div>
                </div>

                <div class="form-group col-md-6 span12">
                    <label for="intereses">Interes Educativo:</label>
                    <div class="form-group">
             
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="nacimiento" class="form-control input-lg" placeholder="Fecha de Nacimiento">
                    <!--<div class="bfh-datepicker" data-format="y-m-d" data-max="today" ></div>-->
                </div>

                <div class="form-group col-md-6">
                    <label for="pais">País:</label>
                    <select id="countries_states1" name="pais"  class="form-control bfh-countries" data-country="MX"></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad:</label>
                    <select name="ciudad" class="input-medium bfh-states form-control" data-country="countries_states1"></select>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
    </div>
</div>