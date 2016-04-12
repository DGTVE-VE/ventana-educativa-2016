@section('titleVentana')
Ventana Educativa
@stop
@extends('indexVentana')
@section('menuVentana')
@include('viewVentana.encabezadoVentana')
@endsection
@section('cuerpoVentana')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="presentacion" class="carousel slide" data-interval="false">
                <div class="carousel-inner">           
                    <div class="item active">
                        {{HTML::image('imagenes/ventana/presentacion/lamina1.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>       
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina2.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina3.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina4.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>    
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina5.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina6.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                    <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina7.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                     <div class="item">
                        {{HTML::image('imagenes/ventana/presentacion/lamina8.png','Presentación Ventana',['class'=>'image-responsive'])}}
                    </div>  
                </div>          
                <div class="carousel-controls">
                    <a class="left carousel-control carousel-control-presentacion" href="#presentacion" data-slide="prev"><span class="flecha-izq-presentacion"><i class="fa fa-angle-left fa-lg"></i></span></a>
                    <a class="right carousel-control carousel-control-presentacion" href="#presentacion" data-slide="next"><span class="flecha-der-presentacion"><i class="fa fa-angle-right fa-lg"></i></span></a>
                </div>

            </div>   
        </div>
    </div>
</div>
<script>
    $('#presentacion').carousel({
        interval: false;
    });
</script>
@endsection


