@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<div class="container">
    <div class="row">
        <div class="col-md-12 contenedorMapa">
            <div class="triangulo"></div>
            <div class="text-center"><h4>CONTACTO</h4></div>
            <div class="col-md-12">
                <div class="col-md-7 contactoConocenos">                    
                    <h3><strong>Dudas, comentarios o sugerencias</strong></h3>
                    <form action="guardaContactoConocenos" method="post">
                        {!!csrf_field()!!}
                        <table class="table table-responsive tableContacto">                                       
                            <tr><td><input type="text" size="45" class="form-conocenos" name="nombre_contacto" required placeholder="Nombre (requerido)"></td></tr>
                            <tr><td><input type="email" size="45" class="form-conocenos" required name="correo" placeholder="Correo (requerido)"></td></tr>
                            <tr><td><input type="text" size="45" class="form-conocenos" required name="asunto" placeholder="Asunto"></td></tr>
                            <tr><td><textarea  class="form-conocenos" rows="4" cols="43" required name="mensaje" ></textarea></td></tr>
                            <tr><td><button class="btn btnContacto" type="submit">Enviar</button></td></tr>
                        </table>
                    </form>                        
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:360px;width:940px;'>
                        <div id='gmap_canvas' style='height:360px;width:940px;'>

                        </div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small>
                        </div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <script type='text/javascript'>function init_map() {
                            var myOptions = {zoom: 15, center: new google.maps.LatLng(19.4416309, -99.11507610000001), mapTypeId: google.maps.MapTypeId.ROADMAP};
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(19.4416309, -99.11507610000001)});
                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </div>
    </div>
   
</div>
  
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBc5-sIZ0xVCNqOD5orQ2pIKlXaFgT9-Ms "></script> 
@endsection