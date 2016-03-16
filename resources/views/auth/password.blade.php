@extends('indexVentana')
@section('titleVentana')
Ventana Educativa
@stop

@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
@if (session('status'))
Te llegará un email con la liga para que cambies tu password.
@else
<div class = "panel panel-default frmRegistro col-lg-offset-2 col-md-8">
    <br><br>
    <br><br>
    <form method="POST" action="{{url ('password/email')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="">        
        </div>
        <button type="submit" class="btn btn-primary">
            Envíame un email para resetear mi password.
        </button>
    </form>
    <br><br><br><br>
    <br><br>
</div>
@endif
@endsection
@section('pieVentana')
@include('viewVentana.pieVentana')
@endsection