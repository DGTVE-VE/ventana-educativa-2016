@extends('indexVentana')
@section('titleVentana')
Ventana Educativa
@stop

@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
@if (session('status'))
<div class = "panel panel-default frmRegistro col-lg-offset-3 col-md-6">
    <br><br>
    <h4>Te llegará un correo con la liga para que cambies tu contraseña</h4> 
    <small>(En caso de no visualizar el correo en la bandeja de entrada revise el correo no deseado)</small>
    <br><br>    
</div>
@else
<div class = "panel panel-default frmRegistro col-lg-offset-3 col-md-6">
    <br><br>
    <br><br>
    <form method="POST" class="col-md-7 col-md-offset-2" action="{{url ('password/email')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group col-md-offset-2">
            <label for="email">Correo</label>
            <input type="email" class="form-control" name="email" value="">        
        </div>
        <div class="col-md-offset-2">
            <button type="submit" class="btn btn-success col-md-12">
                Envíame un correo para resetear mi contraseña.
            </button>
        </div>
        <br><br>
        <br><br><br><br>
    </form>
</div>
@endif
@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection