<div class="container-fluid">
    <div id="background-carousel-vod">
        <div id="carouselVod" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url('{{asset('imagenes/vod/series/ciudad_de_los_dioses.png')}}')"></div>
                <div class="item" style="background-image:url('{{asset('imagenes/vod/series/ciudad_de_los_dioses.png')}}')"></div>
                <div class="item" style="background-image:url('{{asset('imagenes/vod/series/ciudad_de_los_dioses.png')}}')"></div>        
            </div>
        </div>
    </div>
    <div id="content-wrapper-vod">
        <!-- PAGE CONTENT -->
        <div class="container">
            <div>
                <div class="btn btn-danger text-uppercase"><span class="fa fa-play" aria-hidden="true"></span>&nbsp;&nbsp;Reproducir</div>
                <div class="btn btn-info text-uppercase"><span class="fa fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Mi lista</div>            
            </div><!-- End Well -->
        </div><!-- End Container -->
        <!-- PAGE CONTENT -->
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
