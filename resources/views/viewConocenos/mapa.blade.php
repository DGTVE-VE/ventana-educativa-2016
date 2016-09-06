<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12 contenedorMapa">
        <div class="triangulo"></div>
        <div class="text-center"><h4>CONTACTO</h4></div>
        <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
            <div class="col-md-7 col-lg-12 col-sm-12 col-sx-12 contactoConocenos">                    
                <h4><strong>Dudas, comentarios o sugerencias</strong></h4>
                <form action="guardaContactoConocenos" method="post">
                    {!!csrf_field()!!}
                    <table class="table table-responsive tableContacto">                                       
                        <tr><td><input type="text" size="45" class="form-conocenos" name="nombre_contacto" required placeholder="Nombre (requerido)"></td></tr>
                        <tr><td><input type="email" size="45" class="form-conocenos" required name="correo" placeholder="Correo (requerido)"></td></tr>
                        <tr><td><input type="text" size="45" class="form-conocenos" required name="asunto" placeholder="Asunto"></td></tr>
                        <tr><td><textarea  class="form-conocenos" rows="8" cols="43" required name="mensaje" ></textarea></td></tr>
                        <tr><td><button class="btn btnContacto" type="submit">Enviar</button></td></tr>
                    </table>
                </form>                        
            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:640px;width:1800px;'><div id='gmap_canvas' style='height:660px;width:1800px;'></div><div><small><a href="http://www.embedgooglemaps.com">The fastest way to get a Google Map on your website!									Haga clic aquí									Let your customers know where your business is located!</a></small></div><div><small><a href="http://noleggioauto.zone/">noleggio auto lungo termine</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17, center:new google.maps.LatLng(19.4416309, - 99.11499498439714), mapTypeId: google.maps.MapTypeId.ROADMAP}; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(19.4416309, - 99.11499498439714)}); infowindow = new google.maps.InfoWindow({content:'<strong>DGTVE</strong><br>Avenida Anillo de Circunvalación, Esquina Tabiqueros s/n, Ciudad de México, Colonia Morelos, Delegación Venustiano Carranza<br>'}); google.maps.event.addListener(marker, 'click', function(){infowindow.open(map, marker); }); infowindow.open(map, marker); }google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>

    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBc5-sIZ0xVCNqOD5orQ2pIKlXaFgT9-Ms "></script> 
