<nav class="navbar navbar-default navbar-fixed-top menuVentana" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>    
        <a href="ventana_educativa"><img class="image-responsive " src="imagenes/ventana/encabezado/logoventana.png"></a>
    </div> 
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="col-md-pull-12 col-xs-pull-4 col-sm-pull-2 libuscar">
                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control inputSearch" placeholder="Buscar...">
                        <span class="input-group-btn ">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="dropdown liApp">
                <div class=" divli dropdown-toggle" data-toggle="dropdown">
                    <img class="iconoApps"  src="imagenes/ventana/encabezado/iconoApps.png">
                </div>
                <ul class="dropdown-menu image-responsive menuVentanaApps">
                    <table>
                        <tr>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>                            
                        </tr>
                        <tr>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>
                            <td class="divApp">
                                <a class="" href="#"><img src="http://placehold.it/50x50"></a>
                                <label class="etiquetaApp">Ventana</label>
                            </td>                            
                        </tr>                        
                    </table>                                       
                </ul>
            </li>
            <li class="dropdown">
                <div class=" divli dropdown-toggle" data-toggle="dropdown">
                    <div class="fotoUsuario text-center">R</div>
                </div>
                <ul class="dropdown-menu fondoRegistro">
                    <li class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                @if (Auth::guest ())
                                  <form id="login-form" action="sessions" method="POST" role="form" style="display: block;">
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="form-group">
                                        <input type="email" name="email"  tabindex="1" class="form-control" placeholder="Usuario" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  tabindex="2" class="form-control" placeholder="Contraseña">
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
                                                    <a href="registro"  tabindex="5" style="color: white;" class="forgot-password">Registrate</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      									
                                </form>
								@else
                                    loggeado
                                       {{Auth::user()->email}}
                                       <a href="logout" tabindex="5" style="color: white;" class="forgot-password">Cerrar Sesión</a>
                                    @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

    <script>
        // bootstrap-datepicker
        $('#nacimiento').datepicker({
            changeMonth: true,
            changeYear: true,
            altFormat: "yy-mm-dd"
        }).on(
                'show', function () {
                    // Obtener valores actuales z-index de cada elemento
                    var zIndexModal = $('#modalRegistro').css('z-index');
                    var zIndexFecha = $('.datepicker').css('z-index');

                    // alert(zIndexModal + zIndexFEcha);

                    // Re asignamos el valor z-index para mostrar sobre la ventana modal
                    $('.datepicker').css('z-index', zIndexModal + 1);
                });
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
            $("#nacimiento").datepicker();
        });
    </script>