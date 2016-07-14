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
                    <label for="nombre">Nombre Completo:</label>
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
                <div class="form-group col-md-6 has-error">
                    <label for="correo">Correo Electrónico:</label>
                    <input style=" " id="email" autocomplete="off" type="email" required name="email" class="form-control input-medium" placeholder="Correo Electrónico">
                </div>

                <div class="form-group col-md-6">
                    <label for="nacimiento">Fecha de Nacimiento(dd/mm/aaaa):</label>
                    <input type="date" class="form-control input-medium" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento (dd/mm/aaaa)">
                </div>
                <div class="form-group col-md-3">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password"  required name="password" class="form-control input-medium" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-3">
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

                <div class="form-group col-md-3">
                    <label for="genero">Genero:</label>
                    <div class="radio">
                        <label class="checkbox"><input type="radio" required name="genero" value="mujer">Mujer</label>
                        <label class="checkbox"><input type="radio" required name="genero" value="hombre">Hombre</label>
                    </div>
                </div>

                <div class="form-group col-md-3 form-inline">
                    <label for="genero">Roles:</label><br>
                    <div class="checkbox">
                        <label><input type="checkbox" name='is_parent' id='is_parent'> Padre de familia</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name='is_teacher' id='is_teacher' onchange="muestraAdicional()"> Docente</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name='is_student' id='is_student'> Estudiante</label>
                    </div>
                </div>
				<div class="form-group col-md-3" id="ocultaCCT" style="display:none;">
					<label for="cct">C C T :</label>
					<input type="text" required name="cct" id="cct" class="form-control input-medium text-uppercase" placeholder="C C T">
				</div>
				<div class="form-group col-md-3" id="ocultaRFC"  style="display:none;">
					<label for="curpDocente">C U R P :</label>
					<input type="text" required name="curpDocente" id="curpDocente" class="form-control input-medium text-uppercase" placeholder="C U R P" onblur="ValidaCURP(this.value)" disabled>
				</div>
                <div class="col-md-6 centered">
                    <br>
                        <label>
                            <input type="checkbox" name="condiciones" required> <a href="#" style="text-decoration: none; color: white;">Acepto los términos y condiciones</a>
                        </label>
                </div>

                <div class="form-group col-md-12 text-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-1">
                        <a href="{{url ('/')}}"type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</a>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-1">
                        <button id="btnEnviar" type="submit" class="btn btn-default btn-success">Enviar</button>
                        <div>
                            <div class="col-md-4"></div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
	/************ Valida formato RFC ****************************************************/
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
		var strCorrecta;
		strCorrecta = curpStr;	
		var valid = "[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}" +
			"(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])" +
			"[HM]{1}" +
			"(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)" +
			"[B-DF-HJ-NP-TV-Z]{3}" +
			"[0-9A-Z]{1}[0-9]{1}$";
		var validRfc=new RegExp(valid);
		var matchArray=strCorrecta.match(validRfc);
		if (matchArray==null) {
			mensajeCURP(true,'C U R P','curpDocente');
		}
		else{
			mensajeCURP(false,'C U R P','curpDocente');
		}
	}
	/************ Muestra campos de RFC y CCT para docente ****************************************************/
	function muestraAdicional(){
		if($("#is_teacher").is(':checked')){
			$("#ocultaRFC").css('display','block');
			$("#ocultaCCT").css('display','block');
		}
		else{
			$("#ocultaRFC").css('display','none');
			$("#ocultaCCT").css('display','none');
		}
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
    function consultaCCT(url, mensaje, componente) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
				console.log('respuesta ' + xhttp.responseText);
                if (xhttp.responseText == '[]') { // cct no existe
                    resaltaCampo(true, mensaje, componente);
                } else {
                    resaltaCampo(false, mensaje, componente);
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
</script>

@endsection
@section('pieVentana')

@endsection
