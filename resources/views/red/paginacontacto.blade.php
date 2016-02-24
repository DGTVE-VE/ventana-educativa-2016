@section('title')
Contacto
@stop
@extends('home')
@section('menu')
<a name="redesconocimiento"></a>
@include('red.seccionheader')
@endsection
@section('cuerpo')
<div class="row" style="margin-top: 5%;" >        
    <div class="col-md-12"><hr></div>    
    <div class="col-md-12 textoContacto">        
        <h4 class="col-md-12 text-uppercase">Dirección General de Televisión Educativa</h4>
        <!--        <div class="col-md-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt shareContacto"></i></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="fa fa-google-plus btnShare text-center"></span>     Compartir por Google+</a></li>
                                <li><a href="#"><span class="fa fa-facebook btnShare text-center"></span>      Compartir por Facebook</a></li>
                                <li><a href="#"><span class="fa fa-twitter btnShare text-center"></span>     Compartir por Twitter</a></li>
                                <li><a href="#"><span class="fa fa-envelope btnShare text-center"></span>     Compartir por correo eletrónico</a></li>
                            </ul>
                        </li>
                    </ul>
        
                </div>-->
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
            <form action="guardaContacto" method="post">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" name="nombre_contacto" required placeholder="Nombre (requerido)" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">@</span>
                    <input type="text" class="form-control" required name="correo" placeholder="Correo (requerido)" aria-describedby="basic-addon2">
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
<script type='text/javascript'>
    function init_map() {
        var myOptions = {zoom: 10, center: new google.maps.LatLng(19.4462044, -99.1195181), mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(19.4462044, -99.1195181)});
        infowindow = new google.maps.InfoWindow({content: '<strong>Televisión Educativa</strong><br>Av. Circunvalación s/n,Venustiano Carranza,Morelos,15270 Ciudad de México, D.F.<br>'});
        google.maps.event.addListener(marker, 'click',
                function () {
                    infowindow.open(map, marker);
                });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>

@include('red.seccionpie')
@stop
