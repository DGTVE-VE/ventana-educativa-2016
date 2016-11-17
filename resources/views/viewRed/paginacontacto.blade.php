@section('titleRedmite')
Contacto
@stop
@extends('indexRed')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 margenPlecaMD">
        <div class="division textoContacto">
            <h4 class="text-uppercase"><br>Dirección General de <br class="visible-xs-inline"> Televisión Educativa</h4>
        </div>
    </div>
    <div class="col-md-12">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
        <div style='overflow:hidden;height:450px;width:100%;'>
            <div id='gmap_canvas' style='height:450px;width:100%;'>                
            </div><div><small><a href="http://embedgooglemaps.com"></a></small>
            </div>
            <div><small><a href="http://www.freedirectorysubmissionsites.com/">link directories</a></small>
            </div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        </div>
        <hr><br>
    </div>

    <div class="col-md-12 text-center"><h3>PONTE EN CONTACTO</h3></div>
    <hr>    
    <div class="panel-body col-md-12">
        <div class="row col-sm-5 col-md-offset-4">
            <div><h4>Envíanos tus dudas, comentarios o sugerencias.</h4></div>
            <form action="guardaContactoConocenos" method="post">
                {!!csrf_field()!!}
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" name="nombre_contacto" required placeholder="Nombre (requerido)" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="email" class="form-control" required name="correo" placeholder="Correo (requerido)" aria-describedby="basic-addon2">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="text" class="form-control" required name="asunto" placeholder="Asunto" aria-describedby="basic-addon3">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-align-justify"></span></span>
                    <textarea class="form-control" rows="5" required name="mensaje" aria-describedby="basic-addon4"></textarea>
                </div>
                <br>
                <div><button class="btn btn-info" type="submit">Enviar</button></div>
                </br></br>
            </form>
        </div>

    </div>
    <div class="col-md-2"></div>
</div>
<script type='text/javascript' src="{{url('js/red/contacto.js')}}"></script>

@include('viewRed.seccionpie')
@stop
