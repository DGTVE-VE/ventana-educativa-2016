@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:1800px;'><div id='gmap_canvas' style='height:400px;width:1800px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https:/disclaimergenerator.net">disclaimer example</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(19.4416309,-99.11507610000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.4416309,-99.11507610000001)});infowindow = new google.maps.InfoWindow({content:'<strong>Dirección General de Televisión Educativa</strong><br>Av. Circunvalación  s/n Esq. Tabiqueros Morelos Ciudad de México, D.F. México<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBc5-sIZ0xVCNqOD5orQ2pIKlXaFgT9-Ms "></script> 
@endsection