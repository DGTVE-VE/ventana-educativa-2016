@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')

<div class="container">

    <div class = "frmRegistro col-lg-offset-2 col-md-8">
        <h3 class = "panel-title tituloRegistro text-center text-uppercase">
            Registro
        </h3>


        <div class = "panel-body">
            <form role="form" action="{{url('registraUsuario')}}" method="post">
                <input type="hidden" name="back_url" value="{{ $back_url }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div id='mensaje-error' class="alert alert-danger hidden" >
                </div>
                <div>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="nombre">Nombre(s):</label>
                    <input type="text" required name="name" id="nombre" class="form-control input-medium" placeholder="Nombre Completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="ApPaterno">Apellido paterno:</label>
                    <input type="text" required name="ApPaterno" id="ApPaterno" class="form-control input-medium" placeholder="Apellido paterno">
                </div>
                <div class="form-group col-md-6">
                    <label for="ApMaterno">Apellido materno:</label>
                    <input type="text" name="ApMaterno" id="ApMaterno" class="form-control input-medium" placeholder="Apellido materno">
                </div>

                <div class="form-inline col-md-6" style="padding:10px;">

                    <label for="genero" class="col-md-4">Genero:</label>
                    <div class="radio">
                        <label class="checkbox col-md-4 col-md-offset-2"><input type="radio" required name="genero" value="mujer">Mujer</label>
                        <label class="checkbox col-md-4 col-md-offset-2"><input type="radio" required name="genero" value="hombre">Hombre</label>
                    </div>
                </div>

                <div class="col-md-12"></div>

                <div class="form-group col-md-6">
                    <label for="nacimiento">Fecha de Nacimiento(aaaa/mm/dd):</label>
                    <input type="text" class="form-control" id="datepicker" name="nacimiento" placeholder="Fecha de Nacimiento (aaaa/mm/dd)">
                    <!-- <input type="date" class="form-control input-medium" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento (dd/mm/aaaa)"> -->
                </div>
                <div class="form-group col-md-6 has-error">
                    <label for="correo">Correo Electrónico:</label>
                    <input style=" " id="email" autocomplete="off" type="email" required name="email" class="form-control input-medium" placeholder="Correo Electrónico">
                </div>
                <div class="form-group col-md-6">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password"  required name="password" class="form-control input-medium" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label for="contraseñarep">Repetir Contraseña:</label>
                    <input type="password" required name="password_confirmation" class="form-control input-medium" placeholder="Contraseña">
                </div>

                <div class="form-group col-md-6">
                    <label for="pais">País:</label>
                    <select required id="countries_states1" name="pais"  class="form-control input-medium bfh-countries" data-country="MX"></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Estado/Región:</label>
                    <select required name="ciudad" class="input-medium bfh-states form-control" data-country="countries_states1"></select>
                </div>

                <div class="form-inline col-md-12" style="padding:10px;">

                    <div class="col-md-3">
                        <label for="genero">Roles:</label><br>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" name='is_parent' id='is_parent'> Padre de familia</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" name='is_teacher' id='is_teacher' onchange="muestraDocente()"> Docente</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="checkbox">
                            <label><input type="checkbox" name='is_student' id='is_student'> Estudiante</label>
                        </div>
                    </div>

                </div>

                <!--  -->
                <div class="form-inline col-md-12" id="ocultaDocente" style="visibility:hidden;" style="padding:10px;">

                    <div class="col-md-3">
                        <label for="tipo_docente">Tipo docente:</label>
                    </div>

                    <div class="radio col-md-9">
                        <label class="checkbox col-md-5"><input type="radio" name="tipo_docente" value="basica" id="basica" onclick="ocultaAdicional()" value="2">Educación Básica</label>
                        <label class="checkbox col-md-4"><input type="radio" name="tipo_docente" value="telesecundaria" id="telesecundaria" onclick="muestraAdicional()" value="1">Telesecundaria</label>
                        <label class="checkbox col-md-3"><input type="radio" name="tipo_docente" value="otro" id="otro" onclick="ocultaAdicional()" value="3">Otro</label>
                    </div>
                </div>

                <!--  -->
                <div class="form-inline col-md-12" id="ocultaDiv" style="visibility:hidden;">

                    <div class="col-md-6">
                        <br>
                        <label for="cct">CCT: </label>
                        <input type="text" name="cct" id="cct" class="form-control input-medium text-uppercase" oninput="VerificaCCT()" placeholder="C C T">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label for="curpDocente">CURP: </label>
                        <input type="text" name="curpDocente" id="curpDocente" class="form-control input-medium text-uppercase" placeholder="C U R P" onblur="ValidaCURP(this.value)" disabled>
                        <a href="https://consultas.curp.gob.mx/CurpSP/"  target="_blank" style="color:white;" title="Consulta tu CURP <a href='https://consultas.curp.gob.mx/CurpSP/'  target='_blank'>aquí</a>"><span class="glyphicon glyphicon-question-sign"></span></a>
                    </div>
                </div>

                <div class="col-md-12" id="OcultaNombreCCT" style="visibility:hidden;">
                    <br>
                    <p id="cctnombre" style="padding:5px;"></p>
                </div>

                <div class="col-md-12 text-center">
                    <label>
                        <input type="checkbox" name="condiciones" required>He leído el <a data-toggle="modal" href="#modal-terminos-conciciones" style="text-decoration: none; color: #EA7647";>aviso de privacidad</a>
                    </label>
                </div>

                <div class="col-md-12">
                    <br>
                </div>

                <div class="form-group col-md-12 text-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <a href="{{url ('/')}}"type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                    </div>
                    <div class="col-md-2">
                        <button id="btnEnviar" type="submit" class="btn btn-default btn-success">Enviar</button>
                    </div>
                    <div class="col-md-4"></div>

                </div>
        </div>
        </form>
    </div>
</div>
<!--Modal para Términos y condiciones -->
<div class="modal fade" id="modal-terminos-conciciones" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Aviso de privacidad</h4>
            </div>
            <div class="modal-body cuerpoTerminos text-justify">
                <p>Dirección General de Televisión Educativa, mejor conocido como DGTVE, con domicilio ubicado en
                    calle Av. Circunvalación s/n esquina Tabiqueros, Col. Morelos, Delegación Venustiano Carranza,
                    C.P. 15270, México, CDMX, es el responsable del uso y protección de sus datos personales, y al
                    respecto le informamos lo siguiente:
                </p>
                <p> ¿Para qué fines utilizaremos sus datos personales?</p>
                <p>
                    Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que
                    son necesarias para:
                </p>
                <p>
                <li>Verificar la identidad del usuario</li>
                <li>Proveer los servicios que ofrecemos</li>
                <li>Informar sobre nuevos productos o servicios</li>
                <li>Para fines estadísticos y de mejora del servicio</li>
                </p>
                <p>
                    ¿Qué datos personales utilizaremos para estos fines?
                </p>                    
                <p>
                    Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los
                    siguientes datos personales:
                </p>
                <p>
                <li>Nombre completo</li>
                <li>Clave única de Registro de Población (CURP)  </li>
                <ol>Opcional</ol>                  
                <li>Correo electrónico</li>
                <li>Fecha de Nacimiento</li>
                <li>Genero</li>
                <li>Referencia Geográfica (País - región)</li>
                </p>
                <p>
                    ¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso?
                </p>
                <p>
                    Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y

                    las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de

                    su información personal en caso de que esté desactualizada, sea inexacta o incompleta

                    (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la

                    misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus

                    datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos

                    ARCO.
                </p>
                <p>
                    Los datos de contacto del departamento de datos personales, que está a cargo de dar trámite a las

                    solicitudes de derechos ARCO, son los siguientes:
                </p>
                <p>
                    Dirección General de Televisión Educativa
                    <br>
                    Lugar: Av. Circunvalación S/n esquina Tabiqueros, Col. Morelos, Delegación Venustiano
                    <br>    
                    Carranza, C.P. 15270, México, CDMX. E-Mail: ventana@televisioneducativa.gob.mx
                    <br>

                    Número Telefónico: 01 (55) 3601 8100 ext. 56696
                    <br>
                    Horario: 9:00 a.m. - 18:00 p.m. en días hábiles.
                    <br>
                    Para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, ponemos a su

                    disposición el siguiente medio:
                </p>
                <p class="text-center">
                    <a href="http://inicio.ifai.org.mx/Publicaciones/01GuiaPracticaEjercerelDerecho.pdf" target="_blank">http://inicio.ifai.org.mx/Publicaciones/01GuiaPracticaEjercerelDerecho.pdf</a>
                </p>
                <p>   
                    Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de

                    sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos

                    podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por

                    alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá

                    considerar que para ciertos fines, la revocación de su consentimiento implicará que no le podamos

                    seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.
                </p>
                <p>
                    Para revocar su consentimiento deberá presentar su solicitud a través del siguiente medio:
                </p>

                <li>Solicitud escrita, que identifique su usuario, al E-Mail: ventana@televisioneducativa.gob.mx</li>
                <p>
                    Con relación al procedimiento y requisitos para la revocación de su consentimiento, le informamos

                    lo siguiente:
                </p>
                <p>
                    <strong>Requisitos:</strong> El trámite es personalísimo, es decir, que para ejercerlo, se debe presentar el titular de

                    los datos personales o el representante legal del titular de esos datos.
                </p>
                <p>
                    Presentar la solicitud de Acceso, Rectificación, Cancelación y Oposición de datos personales ante la

                    Dirección General de Televisión Educativa por escrito, la cual deberá contener cuando menos los

                    siguientes datos:
                </p>
                <ol>1. Establecer claramente cuál es el Derecho que se desea ejercer (acceso, rectificación,

                    cancelación u oposición de datos personales).</ol>
                <ol>2. El nombre completo del (la) interesado(a); en su caso, el de su representante legal.</ol>
                <ol>3. El medio para acreditar su identidad y personalidad es presentando cualquiera de los

                    documentos siguientes:</ol>
                <p>
                <ol>a). Original de la credencial para votar;</ol>                        
                <ol>b). Pasaporte;</ol>             
                <ol>c). Cédula profesional;</ol>                 
                <ol>d). Cartilla militar.</ol>
                </p>
                <p>
                    Debe entregar copia fotostática del documento para cotejo, misma que quedará agregada a la

                    solicitud.
                </p>
                <ol>4. En el caso de representante legal, además de las anteriores, debe presentar:</ol>
                <p>
                <ol>
                    a). Documento legal que acredite la representación. (Poder o mandato en términos de la

                    legislación civil aplicable).
                </ol>
                </p>
                <p>
                    Debiendo entregar copia fotostática del documento para cotejo, misma que se agregará a la
                    solicitud.
                </p>
                <p>
                <ol>5. Descripción clara y precisa de los datos personales respecto de los que se busca ejercer alguno
                    de los derechos, así como cualquier otra información que facilite su localización.</ol>
                <ol>6. El domicilio de (la) interesado(a) o en su caso, de su representante legal, el que debe
                    encontrarse, o en su caso, medio electrónico para recibir notificaciones y acuerdos de trámite.</ol>
                </p>
                <p>
                    <strong>Procedimiento:</strong> Este trámite se realiza solamente de manera personal, por lo que debe acudir el
                    titular de los datos personales o su representante legal.
                    <br>
                    Presentar la solicitud de Derecho de Acceso a Datos Personales, ante la Dirección General de
                    Televisión Educativa y los documentos que acrediten su personalidad, en términos de los puntos 4
                    y 5 de los requisitos citados.
                </p>
                <p>
                    <strong>Derecho de Acceso:</strong> Procede el derecho de Acceso cuando se requiere obtener información de los
                    datos de carácter personal sometidos a tratamiento, del origen de estos datos y de las
                    transmisiones realizadas o que se prevén hacer, en términos de Ley.
                </p>
                <p>
                    <strong>Derecho de Rectificación:</strong> Procede el derecho de Rectificación cuando los datos del titular, sean
                    inexactos incorrectos, incompletos o inadecuados. Cuando los datos que se pretenden rectificar.
                </p>
                <p>
                    <strong>Derecho de Cancelación:</strong> Procede el derecho de cancelación cuando el tratamiento de los mismos
                    no se sujete a lo dispuesto en la Ley o cuando se hubiere ejercido el derecho de oposición.
                    <br>
                    El inicio y durante la substanciación de la solicitud de la cancelación, da origen al bloqueo de los
                    datos personales en posesión de la Dirección General de Televisión Educativa, para después de
                    cumplido el procedimiento de cancelación sean eliminados. No procede la eliminación cuando
                    exista una obligación legal de conservar dichos datos.
                </p>
                <p>
                    <strong>Destinatario:</strong> Personas físicas que hayan ingresado datos personales a cualquiera de los Sistemas
                    de Datos Personales de la Dirección General de Televisión Educativa.
                </p>
                <p>
                    <strong>Tiempo de respuesta:</strong> Dentro de los 5 días hábiles posteriores a la presentación de la solicitud, se
                    prevendrá al solicitante para que aclare o complete su solicitud en el caso de que ésta no sea
                    clara.
                </p>
                <p>
                    La procedencia de la solicitud se hará del conocimiento del titular de los datos personales, a los 15
                    días hábiles desde la presentación de la misma.
                </p>
                <p>
                    En el caso de que a la solicitud de rectificación o cancelación le recaiga acuerdo favorable, éste
                    deberá hacerse efectivo dentro de los 15 días hábiles siguientes a aquel en el que fue notificado el
                    acuerdo, para que el titular de los datos o se representante legal acredite su identidad y se
                    proceda a la rectificación o cancelación correspondiente.
                </p>
                <p>
                    Se podrá ampliar por una sola vez el plazo de 15 días hábiles.
                </p>
                <p>
                    El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas
                    de nuevos requerimientos legales; de nuestras propias necesidades por los servicios que
                    ofrecemos; de nuestras prácticas de privacidad o por otras causas.
                </p>
                <p>
                    Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente
                    aviso de privacidad, a través de: http://ventana.televisioneducativa.gob.mx/
                </p>
                <p>
                    <strong>Modificaciones al aviso de privacidad</strong>
                </p>
                Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al
                presente aviso de privacidad, para la atención de novedades legislativas, políticas internas o
                nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos. Estas
                modificaciones estarán disponibles al público a través de los siguientes medios: (I) en nuestra
                página de Internet <a href="http://ventana.televisioneducativa.gob.mx/registro">[http://ventana.televisioneducativa.gob.mx/registro]</a>; (II) o se las haremos
                llegar al último correo electrónico que nos haya proporcionado.
                </p>
                <p>
                    <strong>Uso de cookies y web beacons</strong>
                </p>
                <p>
                    Las cookies son archivos de texto que son descargados automáticamente y almacenados en el

                    disco duro del equipo de cómputo del usuario al navegar en una página de Internet específica, que

                    permiten recordar al servidor de Internet algunos datos sobre este usuario, entre ellos, sus

                    preferencias para la visualización de las páginas en ese servidor, nombre y contraseña. Por su

                    parte, las web beacons son imágenes insertadas en una página de Internet o correo electrónico,

                    que puede ser utilizado para monitorear el comportamiento de un visitante, como almacenar

                    información sobre la dirección IP del usuario, duración del tiempo de interacción en dicha página y

                    el tipo de navegador utilizado, entre otros Le informamos que utilizamos cookies y web beacons

                    para obtener información personal de usted, como la siguiente: Su tipo de navegador y sistema

                    operativo. Las páginas de Internet que visita. Los vínculos que sigue. La dirección IP. El sitio que

                    visitó antes de entrar al nuestro. Estas cookies y otras tecnologías pueden ser deshabilitadas,

                    recomendamos consultar la configuración del prestador de servicio de correo electrónico.
                </p>
                <p>
                    ¿Ante quién puede presentar sus quejas y denuncias por el tratamiento indebido de sus datos

                    personales?
                </p>
                <p>
                    Si usted considera que su derecho de protección de datos personales ha sido lesionado por alguna

                    conducta de nuestros empleados o de nuestras actuaciones o respuestas, presume que en el

                    tratamiento de sus datos personales existe alguna violación a las disposiciones previstas en la Ley

                    Federal de Protección de Datos Personales en Posesión de los Particulares, podrá interponer la

                    queja o denuncia correspondiente ante el IFAI, para mayor información visite www.ifai.org.mx
                </p>
            </div>
        </div>
    </div>
</div> <!-- Fin modal Términos y condiciones-->
</div>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.js"></script>
<script>
                            /************ Valida formato CURP ****************************************************/
                            function mensajeCURP(flag, mensaje, componente) {
                                if (flag) {
                                    document.getElementById(componente).style.backgroundColor = 'lightpink';
                                    document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' tiene un formato incorrecto';
                                    $('#mensaje-error').removeClass('hidden');
                                    document.getElementById('btnEnviar').disabled = true;
                                } else {
                                    document.getElementById(componente).style.backgroundColor = 'white';
                                    document.getElementById('mensaje-error').innerText = '';
                                    document.getElementById('btnEnviar').disabled = false;
                                    $('#mensaje-error').addClass('hidden');
                                }
                            }
                            function ValidaCURP(curpStr) {
                                if (curpStr != '') {
                                    var strCorrecta;
                                    strCorrecta = curpStr;
                                    var valid = "[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}" +
                                            "(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])" +
                                            "[HM]{1}" +
                                            "(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)" +
                                            "[B-DF-HJ-NP-TV-Z]{3}" +
                                            "[0-9A-Z]{1}[0-9]{1}$";
                                    var validRfc = new RegExp(valid);
                                    var matchArray = strCorrecta.match(validRfc);

                                    if (matchArray == null) {
                                        mensajeCURP(true, 'C U R P', 'curpDocente');
                                    } else {
                                        mensajeCURP(false, 'C U R P', 'curpDocente');
                                    }
                                }
                            }
                            /************ Muestra campos de CURP y CCT para docente ****************************************************/
                            function muestraDocente() {
                                if ($("#is_teacher").is(':checked')) {
                                    $("#ocultaDocente").css('visibility', 'visible');
                                    document.getElementById("ocultaDocente").required = true;
                                    document.getElementById('basica').required = true;
                                } else {
                                    document.getElementById("ocultaDocente").required = false;
                                    $("#ocultaDocente").css('visibility', 'hidden');
                                    $("#ocultaDiv").css('visibility', 'hidden');
                                    document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
                                    document.getElementById('basica').required = false;
                                }
                            }
                            function muestraAdicional() {
                                if ($("#telesecundaria").is(':checked')) {
                                    $("#ocultaDiv").css('visibility', 'visible');
                                    document.getElementById("curpDocente").required = true;
                                    document.getElementById("cct").required = true;
                                } else if ($("#basica").is(':checked')) {
                                    document.getElementById("curpDocente").required = false;
                                    document.getElementById("cct").required = false;
                                    $("#ocultaDiv").css('visibility', 'hidden');
                                }
                            }
                            function ocultaAdicional() {
                                document.getElementById("curpDocente").required = false;
                                document.getElementById("cct").required = false;
                                $("#ocultaDiv").css('visibility', 'hidden');
                                document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
                            }
                            /************ Valida si existe CCT capturado ****************************************************/
                            function resaltaCampo(flag, mensaje, componente) {
                                if (flag) {
                                    document.getElementById(componente).style.backgroundColor = 'lightpink';
                                    document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' no existe';
                                    $('#mensaje-error').removeClass('hidden');
                                    document.getElementById('btnEnviar').disabled = true;
                                    document.getElementById('curpDocente').disabled = true;
                                } else {
                                    document.getElementById(componente).style.backgroundColor = 'white';
                                    document.getElementById('mensaje-error').innerText = '';
                                    document.getElementById('btnEnviar').disabled = false;
                                    document.getElementById('curpDocente').disabled = false;
                                    $('#mensaje-error').addClass('hidden');
                                }
                            }

                            function VerificaCCT() {
                                document.getElementById('cct').value;
                            }

                            function consultaCCT(url, mensaje, componente) {
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                                        console.log('respuesta ' + xhttp.responseText);
                                        if (xhttp.responseText == 0) { // cct no existe
                                            resaltaCampo(true, mensaje, componente);
                                            document.getElementById('OcultaNombreCCT').style.visibility = "hidden";
                                        } else {
                                            resaltaCampo(false, mensaje, componente);
                                            document.getElementById('OcultaNombreCCT').style.visibility = "visible";
                                            document.getElementById('cctnombre').innerHTML = xhttp.responseText;
                                        }
                                    }
                                };
                                xhttp.open("GET", url, true);
                                xhttp.send();
                            }
                            $("#cct").focusout(function () {
                                var _url = "{{url('existeCCT')}}" + '/' + $('#cct').val();
                                consultaCCT(_url, 'cct', 'cct');
                            });
                            /************ Valida correo existente en el formulario ****************************************************/
                            function muestraError(flag, mensaje, componente) {
                                console.log('entro a cambiar clase');
                                if (flag) {
                                    document.getElementById(componente).style.backgroundColor = 'lightpink';
                                    document.getElementById('mensaje-error').innerText = 'El ' + mensaje + ' ya existe';
                                    $('#mensaje-error').removeClass('hidden');
                                    document.getElementById('btnEnviar').disabled = true;
                                } else {
                                    document.getElementById(componente).style.backgroundColor = 'white';
                                    document.getElementById('mensaje-error').innerText = '';
                                    document.getElementById('btnEnviar').disabled = false;
                                    $('#mensaje-error').addClass('hidden');
                                }
                            }

                            function loadDoc(url, mensaje, componente) {
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                                        if (xhttp.responseText != 'null') { // el correo ya existe
                                            muestraError(true, mensaje, componente);
                                        } else {
                                            muestraError(false, mensaje, componente);
                                        }
                                    }
                                };
                                xhttp.open("GET", url, true);
                                xhttp.send();
                            }
                            $("#email").focusout(function () {
                                var _url = "{{url('user/existEmail')}}" + '/' + $('#email').val();
                                console.log(_url);
                                loadDoc(_url, 'correo', 'email');
                            });
                            $("#email").on('input', function () {
                                muestraError(false, '', 'email');
                            });
                            $("#nick").focusout(function () {
                                var _url = "{{url('user/existNick')}}" + '/' + $('#nick').val();
                                console.log(_url);
                                loadDoc(_url, 'nombre de usuario', 'nick');
                            });
                            $("#nick").on('input', function () {
                                muestraError(false, '', 'nick');
                            });
                            /************ Valida correo existente en el formulario ****************************************************/
                            $(function () {
                                $(document).tooltip({
                                    content: function () {
                                        return $(this).prop('title');
                                    },
                                    show: null,
                                    close: function (event, ui) {
                                        ui.tooltip.hover(
                                                function () {
                                                    $(this).stop(true).fadeTo(400, 1);
                                                },
                                                function () {
                                                    $(this).fadeOut("400", function () {
                                                        $(this).remove();
                                                    })
                                                });
                                    }
                                });
                            });

                            $(function ($) {
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
                                    dateFormat: 'yy/mm/dd',
                                    firstDay: 1,
                                    isRTL: false,
                                    showMonthAfterYear: false,
                                    yearSuffix: ''
                                };
                                $.datepicker.setDefaults($.datepicker.regional['es']);
                                $('#datepicker').datepicker();
                            });
</script>

@endsection
@section('pieVentana')

@endsection
