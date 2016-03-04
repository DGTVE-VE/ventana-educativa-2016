<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a target="_blank" href="#" class="navbar-brand"><img class="logoVentana" src="imagenes/ventana/encabezado/logoventana.png" width="150" height="50"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="fotoUsuario text-center">R</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <strong>Usuario</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login login">
                                <hr>
                                <form class="login-inner">
                                    <input type="email" class="form-control email" id="email-input" placeholder= "Correo Electrónico">
                                    <input type="password" class="form-control password" id="password-input" placeholder="Contraseña">
                                    <input class="btn btn-block btn-lg btn-success submit" type="submit" value="Entrar">
                                </form>
                                <a href="#" class="btn btn-sm btn-primary register"  data-toggle="modal" data-target="#registrarmeModal">Registrarme</a>
                                <a href="#" class="btn btn-sm btn-default forgot">¿Olvide mi contraseña?</a>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="col-lg-12">
                                    <p>
                                        <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img class="iconoApps" src="imagenes/ventana/encabezado/iconoapps.png">
                    </a>
                    <ul class="dropdown-menu menuVentana">
                        <li class="text-center">
                            <a class="" href="#">
                                <img src="imagenes/ventana/encabezado/logoventana.png" height="50" width="150">
                            </a>
                        </li>
                        <hr>
                        <li class="text-center">
                            <a class="" href="#">
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
                        <!--                        <li><a href="#">Mediateca</a></li>
                                                <hr>
                                                <li><a href="#">VOD</a></li>
                                                <hr>
                                                <li><a href="#">Padres</a></li>
                                                <hr>
                                                <li><a href="#">Idiomas</a></li>
                                                <hr>
                                                <li><a href="#">Docentes</a></li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="registrarmeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title text-center" id="myModalLabel">Registro</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form">
                    <fieldset>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="email" name="correoUsu" class="form-control input-lg" placeholder="Correo Electrónico">
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" name="passwordUsu" class="form-control input-lg" placeholder="Contraseña">
                        </div>     
                        <div class="form-group">
                            <label for="contraseñarep">Repetir Contraseña:</label>
                            <input type="password" name="passwordUsu" class="form-control input-lg" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="nacimiento">Fecha de Nacimiento</label>
                            <input type="date" data-format="y-m-d" data-date="today" name="Fecha de Nacimiento" id="nacimiento" class="form-control input-lg bfh-datepicker" placeholder="Fecha de Nacimiento">
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad:</label>
                            <input type="text" name="ciudad" id="ciudad" class="form-control input-lg" placeholder="Ciudad">
                        </div>
                        
                        <div class="form-group">
                            <label for="intereses">Selecciona un Tema de Interes:</label>
                            <select class="form-control" name="intereses">
                                <option>Español</option>
                                <option>Matemáticas</option>
                                <option>Ciencias</option>
                                <option>Audiovisual</option>
                                <option>Juegos Educativos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero:</label>
                            <div class="radio">
                                <label class="checkbox-inline"><input type="radio" name="optradio">Mujer</label>
                                <label class="checkbox-inline"><input type="radio" name="optradio">Hombre</label>
                            </div>
                        </div>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Enviar">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="" class="btn btn-lg btn-primary btn-block">Cancelar</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
//    $(function () {
//        $('.button-checkbox').each(function () {
//            var $widget = $(this),
//                    $button = $widget.find('button'),
//                    $checkbox = $widget.find('input:checkbox'),
//                    color = $button.data('color'),
//                    settings = {
//                        on: {
//                            icon: 'glyphicon glyphicon-check'
//                        },
//                        off: {
//                            icon: 'glyphicon glyphicon-unchecked'
//                        }
//                    };
//
//            $button.on('click', function () {
//                $checkbox.prop('checked', !$checkbox.is(':checked'));
//                $checkbox.triggerHandler('change');
//                updateDisplay();
//            });
//
//            $checkbox.on('change', function () {
//                updateDisplay();
//            });
//
//            function updateDisplay() {
//                var isChecked = $checkbox.is(':checked');
//                // Set the button's state
//                $button.data('state', (isChecked) ? "on" : "off");
//
//                // Set the button's icon
//                $button.find('.state-icon')
//                        .removeClass()
//                        .addClass('state-icon ' + settings[$button.data('state')].icon);
//
//                // Update the button's color
//                if (isChecked) {
//                    $button
//                            .removeClass('btn-default')
//                            .addClass('btn-' + color + ' active');
//                }
//                else
//                {
//                    $button
//                            .removeClass('btn-' + color + ' active')
//                            .addClass('btn-default');
//                }
//            }
//            function init() {
//                updateDisplay();
//                // Inject the icon if applicable
//                if ($button.find('.state-icon').length == 0) {
//                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
//                }
//            }
//            init();
//        });
//    });


    /*Progressive button on login*/
    $(document).ready(function () {
        $('.modal-footer button').click(function () {
            var button = $(this);

            if (button.attr("data-dismiss") != "modal") {
                var inputs = $('form input');
                var title = $('.modal-title');
                var progress = $('.progress');
                var progressBar = $('.progress-bar');

                inputs.attr("disabled", "disabled");

                button.hide();

                progress.show();

                progressBar.animate({width: "100%"}, 100);

                progress.delay(1000)
                        .fadeOut(600);

                button.text("Close")
                        .removeClass("btn-primary")
                        .addClass("btn-success")
                        .blur()
                        .delay(1600)
                        .fadeIn(function () {
                            title.text("Log in is successful");
                            button.attr("data-dismiss", "modal");
                        });
            }
        });

        $('#myModal').on('hidden.bs.modal', function (e) {
            var inputs = $('form input');
            var title = $('.modal-title');
            var progressBar = $('.progress-bar');
            var button = $('.modal-footer button');

            inputs.removeAttr("disabled");

            title.text("Log in");

            progressBar.css({"width": "0%"});

            button.removeClass("btn-success")
                    .addClass("btn-primary")
                    .text("Ok")
                    .removeAttr("data-dismiss");

        });
    });

    /*Fin de Progressive button on login*/

</script>