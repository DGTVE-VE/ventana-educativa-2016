<!-- Modal -->
<div id="modalMexico" class="modal modal-fullscreen fade centraCont" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title textoModalIntegrante text-center">Colaborador de la Red Mesoamericana en México</h4>
                <!--<img  src="imagenes/red/integrantes/tache.png"/>-->
                <button type="button" class="close closeInt" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div id="sliderinte" class="carousel slide col-xs-12 col-md-12 col-lg-12" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators indicadorInt">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1" class=""></li>
                        <li data-target="#slider" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner innerInt col-xs-12 col-md-3 col-lg-12">
                        <div class="item active">
                            <!--<img alt="First slide" src="imagenes/red/integrantes/GIBZKARODRIGUEZ.png">-->   
                            {{ HTML::image('imagenes/red/integrantes/GIBZKARODRIGUEZ.png','First slide')}}
                        </div>
                        <div class="item">
                            <!--<img alt="Second slide" src="imagenes/red/integrantes/anaguilma.png">-->  
                            {{ HTML::image('imagenes/red/integrantes/anaguilma.png','Second slide')}}
                        </div>
                        <div class="item">
                            <!--<img alt="Third slide" src="imagenes/red/integrantes/GIBZKARODRIGUEZ.png">-->
                            {{ HTML::image('imagenes/red/integrantes/GIBZKARODRIGUEZ.png','Third slide')}}
                        </div>
                    </div>

                    <div id="slider_captions" class="col-xs-9 col-md-9 col-lg-9 captionContent">
                        <div>
                            <div id="caption-0" class="carousel-caption captionint">
                                <h2>Title 1</h2>
                                <h3>Title 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            </div>
                            <div id="caption-1" class="carousel-caption captionint">
                                <h2>Title 2</h2>
                                <h3>Title 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            </div>
                            <div id="caption-2" class="carousel-caption captionint">
                                <h2>Title 3</h2>
                                <h3>Title 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <div class="controlsInstegrantes col-md-12">
                        <a class="left carousel-control controlInt" href="#sliderint" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control controlInt" href="#sliderint" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!--fin modal-->