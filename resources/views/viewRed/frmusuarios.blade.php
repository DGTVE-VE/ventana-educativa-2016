@section('titleRedmite')
Registro de Usuarios
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection  
<div class="row" style="margin-top: 6%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Registro</h3>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre"
                                   placeholder="Nombre">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="password1">Contraseña</label>
                            <input type="password" class="form-control" id="password1"
                                   placeholder="Contraseña">
                        </div>

                        <div class="form-group">
                            <label for="password2">Repetir Contaseña</label>
                            <input type="password" class="form-control" id="imagen"
                                   placeholder="Reperit Contraseña">
                        </div>
                    <hr>
                        <input class="btn  btn-primary" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@include('viewRed.seccionpie')