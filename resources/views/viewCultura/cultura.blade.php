@section('titleCultura')
Cultura
@stop
@extends('indexCultura')
        <link rel="stylesheet" href="{{ asset('css/red/hover.css') }}" >
@section('menuCultura')
	@include('viewVentana.encabezadoVentana')
	<script>
		$('#buscar').css('display','none');
		$('#iconoBuscar').css('display','none');
		$('#navegacionVentana').css('height','55px');
		$('.imgLogo').attr('src','{{url("imagenes/cultura/imgMenu/ventanaEducativa.png")}}');
		$('.appsLogo').attr('src','{{url("imagenes/cultura/imgMenu/menu.png")}}');
		$('#img-usuario').attr('src','{{url("imagenes/cultura/imgMenu/registro.png")}}');
		$(window).scroll(function () {
			var scroll_v = this.pageYOffset;
			if (scroll_v > 10) {
				$('#navegacionVentana').css('background', 'rgba(0, 0, 0, .3)');
			}
			if (scroll_v < 10) {
				$('#navegacionVentana').css('background', 'transparent');
			}
		});
	</script>        
@endsection
@section('cuerpoCultura')
<br><br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2>Agenda Cultural Mesoamericana</h2>
            <p class="text-justify">Es un espacio de cooperaci&#243;n entre los ministerios de cultura de la regi&#243;n, para la promoci&#243;n 
			y difusi&#243;n cultural de los diferentes bienes y servicios culturales, as&#237; como los proyectos de las Industrias Creativas y 
			Culturales que se realizan desde cada pa&#237;s, con el fin de favorecer la cohesi&#243;n social y el fortalecimiento de la econom&#237;a 
			creativa.</p>
			<p class="text-justify">Los contenidos de dicha secci&#243;n estar&#225;n enfocados en: patrimonio cultural (artesan&#237;a, expresi&#243;n
			cultural tradicional, festivales y celebraciones), artes dram&#225;ticas (M&#250;sica, teatro, bailes cl&#225;sicos, etc.), audiovisual 
			(cine, televisi&#243;n y radio), servicios creativos (arquitectura y publicidad), nuevos medios (contenido digital, software, juegos y 
			animaci&#243;n), diseño (de moda, interior,	gr&#225;fico y de joyas), editoriales y medios impresos (libros, prensa y otras publicaciones),
			artes visuales (pintura, escultura y fotograf&#237;a).<sup>1</sup></p>
			<table style="border-top: solid 1px;"><thead></thead>
				<tbody>
                    <tr>
						<td style="padding:10px;">
							<p class="text-justify"><small><sup>1</sup>Clasificación de las Industrias Creativas y Culturales por la UNCTAD</small></p>
						</td>
					</tr>
				</tbody>
			</table>
			
            <table class="table table-responsive">
                <thead></thead>
                <tbody>
                    <tr>
                        <td><a href="#" target= "_blank"><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/logos/secCulturaMexico.png')}}"/></a></td>                        
                        <td><a href="#" target= "_blank"><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/logos/ceccSica.png')}}"/></a></td>                                                
                        <td></td>
                        <td><a href="#" target= "_blank"><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/logos/culturaJuventud.png')}}"/></a></td>                        
                    </tr>
                </tbody>
            </table>
        </div>
        <!--<div class="col-md-1"></div>-->
        <div class="col-md-7">
            <table class="table table-responsive text-center">
                <thead></thead>
                <tbody>
                    <tr>
                        <td><a href="http://www.mcj.go.cr/" target="_blank" class="hvr-push"><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/costarica.png')}}"/></a><br><br></td>                        
                        <td><a href="http://www.mincultura.gov.co/" class="hvr-push" target="_blank" ><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/colombia.png')}}"/></a><br><br></td>                                                
                        <td><a href="http://www.cultura.gob.sv/" target="_blank"  class="hvr-push"><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/elsalvador.png')}}"/></a><br><br></td>                        
                        <td><a href="http://mcd.gob.gt/" class="hvr-push" target="_blank" ><br><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/guatemala.png')}}"/></a><br><br></td>
                    </tr>
                    <tr>
                        <td><a href="http://sichonduras.hn/" target="_blank" class="hvr-push"><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/honduras.png')}}"/></a><br><br></td>
                        <td><a href="http://www.mexicoescultura.com/" target="_blank" class="hvr-push"><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/mexico.png')}}"/></a><br><br></td>
                        <td><a href="http://www.inc.gob.ni/" target="_blank" class="hvr-push"><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/nicaragua.png')}}"/></a><br><br></td>
                        <td><a href="http://www.inac.gob.pa/" target="_blank" class="hvr-push"><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/panama.png')}}"/></a><br><br></td>                        
                    </tr>                    
                    <tr>
                        <td><a href="http://cultura.gob.do/" target="_blank" class="hvr-push"><img class="animated zoomIn img-responsive" src="{{asset('imagenes/cultura/pais/republicadominicana.png')}}"/></a><br><br></td>
                    </tr>                           
                </tbody>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>  
@include('viewMediateca.barraSociales')
@endsection

