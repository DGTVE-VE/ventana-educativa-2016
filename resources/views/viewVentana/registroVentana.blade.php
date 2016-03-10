@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class = "panel panel-default frmRegistro col-lg-offset-3 col-md-6">
    <div class = "panel-heading">
        <h3 class = "panel-title">
            Registro
        </h3>
    </div>

    <div class = "panel-body">
        <form role="form" action="registraUsuario" method="post">
            <div class="form-group col-md-12">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" required name="name" id="nombre" class="form-control input-lg" placeholder="Nombre Completo">
            </div>
            <div class="form-group col-md-12">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" required name="email" class="form-control input-lg" placeholder="Correo Electrónico">
            </div>
            <div class="form-group col-md-6">
                <label for="contraseña">Contraseña:</label>
                <input type="password" required name="password" class="form-control input-lg" placeholder="Contraseña">
            </div>     
            <div class="form-group col-md-6">
                <label for="contraseñarep">Repetir Contraseña:</label>
                <input type="password" required name="password_confirmation" class="form-control input-lg" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-12">
                <label for="genero">Genero:</label>
                <div class="radio">
                    <label class="checkbox-inline"><input type="radio" required name="genero" value="mujer">Mujer</label>
                    <label class="checkbox-inline"><input type="radio" required name="genero" value="hombre">Hombre</label>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="intereses">Interes Educativo:</label>
                <select class="form-control" required name="intereses_edu">
                    <option value="1">Español</option>
                    <option value="2">Matemáticas</option>
                    <option value="3">Ciencias</option>
                    <option value="4">Audiovisual</option>
                    <option value="5">Juegos Educativos</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="nacimiento">Fecha de Nacimiento:</label>
                <input required type="text" name="nacimiento" id="nacimiento" class="form-control clsDatePicker"> 
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="pais">País:</label>
                    <select required id="countries_states1" name="pais"  class="form-control bfh-countries" data-country="MX"></select>
                </div>
                <div class="form-group col-md-6">
                    <label for="ciudad">Ciudad:</label>
                    <select required name="ciudad" class="input-medium bfh-states form-control" data-country="countries_states1"></select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>



@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection