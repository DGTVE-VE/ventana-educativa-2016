<div class="container-fluid">
    <div id="background-carousel-vod">
        <div id="carouselVod" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <img class="item active" src="{{asset('imagenes/vod/series/ciudad_de_los_dioses.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/cocinando_mexico.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/corteyqueda.png')}}"/>        
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/el_chango_y_la_chancla.png')}}"/> 
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/el_saber_del_deporte.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/las_culturas.png')}}"/> 
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/mujeres_que_hacen_historia.png')}}"/> 
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/oigadoctor.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/que_onda_con_el_sexo.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/telebachillerato.png')}}"/>
                <img class="item img-responsive" src="{{asset('imagenes/vod/series/un_nuevo_significado.png')}}"/>
            </div>
        </div>
    <div id="content-wrapper-vod">
        <!-- PAGE CONTENT -->
        <div class="container">
            <div class="btn btn-danger text-uppercase"><span class="fa fa-play" aria-hidden="true"></span>&nbsp;&nbsp;Reproducir</div>
            <div class="btn btn-info text-uppercase"><span class="fa fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Mi lista</div>            
        </div><!-- End Well -->
    </div><!-- End Container -->
    <!-- PAGE CONTENT -->        
    </div>
</div>
<script>
    $(document).ready(function () {
        /* Additional Javascript (required) */
        $('#carouselVod').carousel({
            pause: 'none'
        })
    });
</script>

</div>
