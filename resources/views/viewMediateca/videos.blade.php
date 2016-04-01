@section('titleMediateca')
Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<div class="container">
    <div class="row">
        <div class="col-md-12 transparenciaVideos">
            <div><h3 class="textoBlanco">Materia</h3></div>
            <hr>
            <div class="col-md-6">
                <iframe width="100%" height="350" src="http://www.youtube.com/embed/DuoWIRDptWM"></iframe>

            </div>
            <div class="col-md-6 textoBlanco">
                <li class="list-unstyled">Serie</li>
                <li class="list-unstyled">Grado</li>
                <li class="list-unstyled">Bloque</li>
                <li class="list-unstyled">Sinopsis</li>
                <li class="list-unstyled">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</li>
            </div>                
            <div class="col-md-12">
                <div class="well-none">
                                            <br>
                    <div class="col-md-1">
                        <a class="left carousel-control" href="#carouselVideos" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
                    </div>
                    <div id="carouselVideos" class="carousel slide col-md-10">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 col-md-3"><a href="#x">
                                            <img src="http://img.youtube.com/vi/DuoWIRDptWM/2.jpg" alt="Image" class="img-responsive"></a>
                                        <p class="textoBlanco">Título</p>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 col-md-3"><a href="#x">
                                            <img src="http://img.youtube.com/vi/XCeTWXAp3Ho/2.jpg" alt="Image" class="img-responsive"></a>
                                        <p class="textoBlanco">Título</p>
                                    </div>

                                    <div class="col-sm-3 col-xs-6 col-md-3"><a href="#x">
                                            <img src="http://img.youtube.com/vi/H7WB6nf35wg/2.jpg" alt="Image" class="img-responsive"></a>
                                        <p class="textoBlanco">Título</p>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 col-md-3"><a href="#x">
                                            <img src="http://img.youtube.com/vi/za3BDlRGbFg/2.jpg" alt="Image" class="img-responsive"></a>
                                        <p class="textoBlanco">Título</p>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>

                    </div>
                    <!--/carousel-inner--> 
                    <div class="col-md-1">
                        <a class="right carousel-control" href="#carouselVideos" data-slide="next">
                            <i class="fa fa-chevron-right  fa-2x"></i>
                        </a>
                    </div> 
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>
    </div>
</div>

@endsection