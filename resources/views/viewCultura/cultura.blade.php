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
		$(window).scroll(function(){
			var scroll_v = this.pageYOffset;
			if(scroll_v > 10){
				$('#navegacionVentana').css('background','rgba(0, 0, 0, .3)');
			}
			if(scroll_v < 10){
				$('#navegacionVentana').css('background','transparent');
			}
		});
	</script>        
@endsection
@section('cuerpoCultura')
<br><br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h2>Catálogo Digital Cultural</h2>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a lectus eget enim vehicula malesuada a ut quam. Donec eget quam a augue iaculis rhoncus. Mauris tellus risus, faucibus et ex id, aliquam congue ante. Integer pellentesque molestie mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus porttitor eros lacinia risus porttitor, luctus fermentum leo blandit. Duis elementum purus eu justo suscipit, eget lacinia elit iaculis. Morbi varius cursus tortor, vitae viverra quam consequat vitae. Nunc quis leo vitae ipsum molestie congue. Sed facilisis tincidunt nisi, ac luctus massa imperdiet at. Ut finibus nisl erat, a tempor nibh efficitur in. Aliquam eu lacus nisl. Etiam vitae dapibus nibh. Aliquam erat volutpat.</p>
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

