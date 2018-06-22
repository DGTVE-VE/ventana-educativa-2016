@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')

<style media="screen">
.ui-datepicker-year{
  color:black;
}
</style>

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
                <p>Fecha de actualizaci&oacute;n: 01 de junio de 2018</p>
                <p>Con fundamento en lo previsto en la Ley General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados, 
                    la Secretar&iacute;a de Educaci&oacute;n P&uacute;blica (SEP), a trav&eacute;s de la Direcci&oacute;n General de Televisi&oacute;n 
                    Educativa (DGTVE), es responsable del tratamiento al que ser&aacute;n sometidos sus datos personales y protecci&oacute;n de los mismos,
                     mediante la plataforma Ventana Educativa, tal como se encuentra establecido en el aviso de privacidad integral que se puede consultar
                      en el siguiente sitio web: <a href="http://www.televisioneducativa.gob.mx/avisosdeprivacidad" target="_blank"> www.televisioneducativa.gob.mx/avisosdeprivacidad</a></p>
                <p>&iquest;Con qu&eacute; finalidad se recaban datos personales? Los datos personales que recabemos ser&aacute;n utilizados para 
                permitir el acceso a la plataforma digital que pone a disposici&oacute;n de los usuarios contenidos educativos actuales, creativos
                 y confiables, desde los videos del curr&iacute;culo de ense&ntilde;anza para telesecundaria y telebachillerato, hasta material 
                 cultural y de entretenimiento para alumnos, docentes y padres de familia a trav&eacute;s de la plataforma Ventana educativa.</p>
                <p>Transferencia de datos personales Se hace su conocimiento que sus datos personales podr&aacute;n ser transmitidos a otros 
                sujetos obligados, en t&eacute;rminos de lo dispuesto en los art&iacute;culos 70, fracciones II, III, IV, y VI; 71 de la Ley 
                General de Protecci&oacute;n de Datos Personales en Posesi&oacute;n de Sujetos Obligados, siempre y cuando los datos se utilicen
                 para el ejercicio de facultades propias de la Direcci&oacute;n General de Televisi&oacute;n Educativa, adem&aacute;s de otras 
                 transmisiones previstas en la Ley. Tambi&eacute;n se informa que no se realizar&aacute;n transferencias de datos personales que 
                 requieran de su consentimiento. Cuando se realicen transferencias de datos personales que requieran su consentimiento, se 
                 informar&aacute;: a) Las autoridades, poderes, entidades, &oacute;rganos y organismos gubernamentales de los tres &oacute;rdenes
                  de gobierno y las personas f&iacute;sicas o morales a las que se transfieren los datos personales, y b) Las finalidades de estas 
                  transferencias. </p>
                  
                  <p>Consulta el  <a href="{{url('pdf/aviso_privacidad_ventana_educativa.pdf')}}" target="_blank" >Aviso de Privacidad Extendido</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div> <!-- Fin modal Términos y condiciones-->
</div>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.0/jquery-ui.js"></script>
<script>
    $("#cct").focusout(function () {
        var _url = "{{url('existeCCT')}}" + '/' + $('#cct').val();
        consultaCCT(_url, 'cct', 'cct');
    });
    $("#email").focusout(function () {
        var _url = "{{url('user/existEmail')}}" + '/' + $('#email').val();
        console.log(_url);
        loadDoc(_url, 'correo', 'email');
    });
    $("#nick").focusout(function () {
        var _url = "{{url('user/existNick')}}" + '/' + $('#nick').val();
        console.log(_url);
        loadDoc(_url, 'nombre de usuario', 'nick');
    });
</script>
<script type="text/javascript" src="{{url('js/ventana/registro.js')}}"></script>

@endsection
@section('pieVentana')

@endsection
