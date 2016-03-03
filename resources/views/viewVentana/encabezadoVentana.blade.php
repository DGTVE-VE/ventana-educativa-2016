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
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Registro</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form">
                    <fieldset>
                        <hr class="colorgraph">
                        <div class="form-group">
                            <input type="text" name="nombre" id="nombre" class="form-control input-lg" placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <input type="email" name="correoUsu" class="form-control input-lg" placeholder="Correo Electrónico">
                        </div>
                        <div class="form-group">
                            <input type="password" name="passwordUsu" class="form-control input-lg" placeholder="Contraseña">
                        </div>                        
                        <div class="form-group">
                            <input type="date" name="Fecha de Nacimiento" id="nacimiento" class="form-control input-lg" placeholder="Fecha de Nacimiento">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ciudad" id="ciudad" class="form-control input-lg" placeholder="Ciudad">
                        </div>
                        <div class="form-group">
                            <select class="form-control input-lg selectColor"  name="pais" required aria-required="true">
                                <option value="">--</option>
                                <option value="AF">Afganistán</option>
                                <option value="AL">Albania</option>
                                <option value="DE">Alemania</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguila </option>
                                <option value="AQ">Antártida</option>
                                <option value="AG">Antigua y Barbuda</option>
                                <option value="SA">Arabia Saudita</option>
                                <option value="DZ">Argelia</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaiyán</option>
                                <option value="BS">Bahamas</option>
                                <option value="BD">Bangladés</option>
                                <option value="BB">Barbados</option>
                                <option value="BH">Baréin</option>
                                <option value="BE">Bélgica</option>
                                <option value="BZ">Belice</option>
                                <option value="BJ">Benín</option>
                                <option value="BM">Bermudas</option>
                                <option value="BY">Bielorrusia</option>
                                <option value="MM">Birmania</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, San Eustaquio y Saba</option>
                                <option value="BA">Bosnia y Herzegovina</option>
                                <option value="BW">Botsuana</option>
                                <option value="BR">Brasil</option>
                                <option value="BN">Brunéi</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="BT">Bután</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Camboya</option>
                                <option value="CM">Camerún</option>
                                <option value="CA">Canadá</option>
                                <option value="QA">Catar</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoras</option>
                                <option value="CG">Congo</option>
                                <option value="KP">Corea del Norte</option>
                                <option value="KR">Corea del Sur</option>
                                <option value="CI">Costa de Marfil</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croacia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curazao</option>
                                <option value="DK">Dinamarca</option>
                                <option value="DM">Dominica</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egipto</option>
                                <option value="SV">El Salvador</option>
                                <option value="AE">Emiratos Árabes Unidos</option>
                                <option value="ER">Eritrea</option>
                                <option value="SK">Eslovaquia</option>
                                <option value="SI">Eslovenia</option>
                                <option value="ES">España</option>
                                <option value="PS">Estado de Palestina</option>
                                <option value="FM">Estados Federados de Micronesia</option>
                                <option value="US">Estados Unidos</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Etiopia</option>
                                <option value="PH">Filipinas</option>
                                <option value="FI">Finlandia</option>
                                <option value="FJ">Fiyi</option>
                                <option value="FR">Francia</option>
                                <option value="GA">Gabón</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GD">Granada </option>
                                <option value="GR">Grecia</option>
                                <option value="GL">Groenlandia</option>
                                <option value="GP">Guadalupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GF">Guayana Francesa</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GQ">Guinea Ecuatorial</option>
                                <option value="GW">Guinea-Bisáu</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haití</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungría</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IQ">Irak</option>
                                <option value="IR">Irán</option>
                                <option value="IE">Irlanda</option>
                                <option value="BV">Isla Bouvet</option>
                                <option value="IM">Isla de Man</option>
                                <option value="CX">Isla de Navidad</option>
                                <option value="NF">Isla Norfolk</option>
                                <option value="IS">Islandia</option>
                                <option value="KY">Islas Caimanes</option>
                                <option value="CC">Islas Cocos (Keeling)</option>
                                <option value="CK">Islas Cook</option>
                                <option value="AX">Islas de Åland</option>
                                <option value="FO">Islas Feroe</option>
                                <option value="GS">Islas Georgias del Sur y Sandwich del Sur</option>
                                <option value="HM">Islas Heard y McDonald</option>
                                <option value="FK">Islas Malvinas</option>
                                <option value="MP">Islas Marianas del Norte</option>
                                <option value="MH">Islas Marshall</option>
                                <option value="PN">Islas Pitcairn</option>
                                <option value="SB">Islas Salomón</option>
                                <option value="TC">Islas Turcas y Caicos</option>
                                <option value="UM">Islas Ultramarinas de Estados Unidos</option>
                                <option value="VG">Islas Vírgenes Británicas</option>
                                <option value="VI">Islas Vírgenes de los Estados Unidos</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italia</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japón</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordania</option>
                                <option value="KZ">Kazajistán</option>
                                <option value="KE">Kenia</option>
                                <option value="KG">Kirguistán</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="LA">Laos</option>
                                <option value="LS">Lesoto</option>
                                <option value="LV">Letonia</option>
                                <option value="LB">Líbano</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituania</option>
                                <option value="LU">Luxemburgo</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malasia</option>
                                <option value="MW">Malaui</option>
                                <option value="MV">Maldivas</option>
                                <option value="ML">Malí</option>
                                <option value="MT">Malta</option>
                                <option value="MA">Marruecos</option>
                                <option value="MQ">Martinica</option>
                                <option value="MU">Mauricio</option>
                                <option value="MR">Mauritania</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">México</option>
                                <option value="MD">Moldavia</option>
                                <option value="MC">Mónaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Níger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NO">Noruega</option>
                                <option value="NC">Nueva Caledonia</option>
                                <option value="NZ">Nueva Zelanda</option>
                                <option value="OM">Omán</option>
                                <option value="NL">Países Bajos</option>
                                <option value="PK">Pakistán</option>
                                <option value="PW">Palaos</option>
                                <option value="PA">Panam</option>
                                <option value="PG">Papúa Nueva Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Perú</option>
                                <option value="PF">Polinesia Francesa</option>
                                <option value="PL">Polonia</option>
                                <option value="PT">Portugal</option>
                                <option value="AD">Principado de Andorra</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="GB">Reino Unido de Gran Bretaña y Irlanda del Norte</option>
                                <option value="CZ">República Checa</option>
                                <option value="CF">República de África Central</option>
                                <option value="CY">República de Chipre</option>
                                <option value="DJ">República de Yibuti</option>
                                <option value="TD">República del Chad</option>
                                <option value="CD">República Democrática del Congo</option>
                                <option value="DO">República Dominicana</option>
                                <option value="RE">Reunión</option>
                                <option value="RO">Romania</option>
                                <option value="RW">Ruanda</option>
                                <option value="RU">Rusia</option>
                                <option value="EH">Sahara Occidental</option>
                                <option value="WS">Samoa</option>
                                <option value="AS">Samoa Americana</option>
                                <option value="BL">San Bartolomé</option>
                                <option value="KN">San Cristóbal y Nieves</option>
                                <option value="SM">San Marino</option>
                                <option value="MF">San Martín (Parte Francesa)</option>
                                <option value="SX">San Martín (Parte Holandesa)</option>
                                <option value="PM">San Pedro y Miquelón</option>
                                <option value="VC">San Vicente y las Granadinas</option>
                                <option value="SH">Santa Elena, Ascensión y Tristán de Acuña</option>
                                <option value="LC">Santa Lucía</option>
                                <option value="VA">Santa Sede</option>
                                <option value="ST">Santo Tomé y Príncipe</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leona</option>
                                <option value="SG">Singapur</option>
                                <option value="SY">Siria</option>
                                <option value="SO">Somalia</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SZ">Suazilandia</option>
                                <option value="ZA">Sudáfrica</option>
                                <option value="SD">Sudán</option>
                                <option value="SS">Sudán del Sur</option>
                                <option value="SE">Suecia</option>
                                <option value="CH">Suiza</option>
                                <option value="SR">Surinam</option>
                                <option value="SJ">Svalbard y Jan Mayen</option>
                                <option value="TH">Tailandia</option>
                                <option value="TW">Taiwan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TJ">Tayikistán</option>
                                <option value="IO">Territorio británico del océano Índico</option>
                                <option value="TF">Tierras Australes y Antárticas Francesas</option>
                                <option value="TL">Timor Oriental</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad yTobago</option>
                                <option value="TN">Túnez</option>
                                <option value="TM">Turkmenistán</option>
                                <option value="TR">Turquía</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UA">Ucrania</option>
                                <option value="UG">Uganda</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistán</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis y Futuna</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabue</option>
                            </select>
                        </div>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
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