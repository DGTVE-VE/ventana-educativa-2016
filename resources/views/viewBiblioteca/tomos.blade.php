<?php
	use App\Http\Controllers\BibliotecaController;
	$clasificacionActual = BibliotecaController::obtieneClasificacion();
        
        if($clasificacionActual =='Nacionales'){
           $imagenCat ='imagenes/biblioteca/tomos/nacionales.png'; 
        }else{
            if($clasificacionActual=="Universitarias"){
                $imagenCat = 'imagenes/biblioteca/tomos/universitarias.png';
            }else{
                if($clasificacionActual=="Escolares"){
                    $imagenCat = 'imagenes/biblioteca/tomos/escolares.png';
                }else{
                    if($clasificacionActual=="Públicas"){
                        $imagenCat = 'imagenes/biblioteca/tomos/publicas.png';
                    }else{
                        if($clasificacionActual=="Especializadas"){
                            $imagenCat = 'imagenes/biblioteca/tomos/especializadas.png';
                        }else{
                            if($clasificacionActual=="Investigación"){
                                $imagenCat = 'imagenes/biblioteca/tomos/investigacion.png';
                            }else{
                                if($clasificacionActual=="Todos"){
                                    $imagenCat = '';
                                    print 'Todos';
                                }
                            }
                        }
                    }
                }
            }
        }
?>
@section('titleBiblioteca')
	Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')
<style>
    .fondoDegradadoMenuInicial{
        background: rgba(0, 0, 0, .5);
        /*background: #000;*/
        border: none;
    }
    .fondoDegradadoMenu{
        background: rgba(0, 0, 0, .7);
        border: none;
    }
    .reduceFlecha{
        width:20px;
    }
    .contenedor{
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
    .imagenDescribe{
        position:absolute; top:0px; left: 25%; display: none; z-index:-1;
    }
	.textoEstante{
		position: absolute;
		left: 0;
		width: 100%;
		text-align: center;
		font-size: 18px;
		color:white;
	}
	.estanteSuperior{
		bottom: 4%;
	}
	.estanteInferior{
		bottom: 2%;
	}
	.imgMadera{
		width:100%;
	}
	.posiciona{
		position:relative;
	}
	.padTop55px{
		padding-top:55px;
	}
	.pad10px{
		padding:10px;
	}
	.textoLigaBiblio{
		 position: absolute; bottom:5%; right: 7%; display:none;
	}
</style>
<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $('.imgLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/ventanaEducativa.png")}}');
    $('.appsLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/menu.png")}}');
    $('#img-usuario').attr('src', '{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
    $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
    $(window).scroll(function () {
        var scroll_v = this.pageYOffset;
        if (scroll_v > 10) {
            $('#navegacionVentana').removeClass('fondoDegradadoMenuInicial');
            $('#navegacionVentana').addClass('fondoDegradadoMenu');
        }
        if (scroll_v < 10) {
            $('#navegacionVentana').removeClass('fondoDegradadoMenu');
            $('#navegacionVentana').addClass('fondoDegradadoMenuInicial');
        }
    });
    $(document).ready(function () {
        var contenedor = '#contenedor11';
        anchoCol = $(contenedor).width() * 1.3;
        anchoAumenta = anchoCol * 3.2;
        altoLomos = $('#imagenLomo1').height();
        anchoLomos = $('#imagenLomo1').width();
        $('.imagenLomo').css('height', altoLomos);
        $('.imagenLomo').css('width', anchoLomos);
        $('.imagenDescribe').css('height', altoLomos);
    });
    function muestraDescripcion(elem, libro) {
        var contenedor = '#contenedor' + elem + libro;
        $(contenedor).css('width', anchoAumenta);
        var colMargen = '#columnaMargen' + elem;
        $(colMargen).css('display', 'none');
        var contenedorDescr = '#descripcion' + elem + libro;
        $(contenedorDescr).css('display', 'block');
		var textoLigaBiblio = '#ligaBiblioteca' + elem + libro;
        $(textoLigaBiblio).css('display', 'block');
    }
    function ocultaDescripcion(elem, libro) {
        var contenedor = '#contenedor' + elem + libro;
        $(contenedor).css('width', anchoCol);
        var colMargen = '#columnaMargen' + elem;
        $(colMargen).css('display', 'block');
        var contenedorDescr = '#descripcion' + elem + libro;
        $(contenedorDescr).css('display', 'none');
		var textoLigaBiblio = '#ligaBiblioteca' + elem + libro;
        $(textoLigaBiblio).css('display', 'none');
    }
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="row padTop55px">
    <div class="col-md-12">
    </div>
</div>
<div class="row pad10px">
    <div class="col-md-12">
        <h2 class="text-center">Biblioteca</h2>
    </div>
</div>
<div class="row posiciona">
    <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 posiciona">
		<?php $i=0; ?>
			@foreach ($tomos as $item => $tomo)
				@if($item % 10 === 0)
					<?php $i++; ?>
					<div class="row posiciona">
						<div class="hidden-xs hidden-sm col-sm-1 col-md-1" id="columnaMargen{{$i}}">
						</div>
				@endif
				@if(($item % 2 === 0) && $item!=0)
					<div class="visible-xs-block col-xs-12 posiciona">
						<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
						<div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}"style="width:18%;"></div>
					</div>
				@endif
				@if(($item % 4 === 0) && $item!=0)
					<div class="visible-sm-block col-sm-12 posiciona">
						<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
						<div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}"style="width:18%;"></div>
					</div>
				@endif
					<div id="contenedor{{$i}}{{$item}}" class="col-xs-3 col-sm-2 col-md-1 col-lg-1 contenedor" onmouseenter="muestraDescripcion({{$i}},{{$item}})" onmouseleave="ocultaDescripcion({{$i}},{{$item}})">
						<a id="ligaBiblioteca{{$i}}{{$item}}" href="{{$tomo->link_consulta}}" class="textoLigaBiblio" target="_blank">
                                                    <img src="{{ asset('imagenes/biblioteca/tomos/ir_biblioteca.png')}}" alt="Ir a la Biblioteca"></a>
						<img id="imagenLomo{{$i}}" src="{{url($tomo->url_tomo)}}" class="img-responsive imagenLomo" alt="...">
						<img id="descripcion{{$i}}{{$item}}" src="{{url($tomo->url_descripcion)}}" class="img-responsive imagenDescribe" alt="...">
					</div>
				@if(($item+1) % 10 === 0)
					<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="hidden-xs imgMadera"/>
                                        <div class="textoEstante estanteSuperior text-uppercase"> <img src="{{asset($imagenCat)}}" style="width:18%;"></div>
					</div>
					
				@endif
			@endforeach
		</div>
		@if($i===0)
			<div class="textoEstante text-uppercase" style="color:black;"> NO HAY BIBLIOTECAS PARA ESTA CLASIFICACI&#211;N </div>
		@else
			<img src="{{ asset('imagenes/biblioteca/tomos/plecaMadera1.jpg') }}" class="imgMadera"/>
                        <div class="textoEstante estanteInferior text-uppercase"><img src="{{asset($imagenCat)}}"style="width:18%;" ></div>
		@endif
	</div>
</div>
@include('viewBiblioteca.menuBiblioteca')
@endsection