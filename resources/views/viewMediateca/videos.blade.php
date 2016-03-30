@section('titleMediateca')
Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<br<br><br><br><br><br>
<!-- Button modal fullscreen -->
<button type="button" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-fullscreen">
    Ver video
</button>

<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade  force-fullscreen" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close textoBlanco" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                <label class="textoBlanco">Titulo de video</label>
            </div>
            <div class="modal-body">
                <div class="col-md-6">
                    <iframe width="100%" height="350" src="http://www.youtube.com/embed/loFtozxZG0s"></iframe>
                </div>
                <div class="col-md-6 textoBlanco">
                    <li class="list-unstyled">Materia</li>
                    <li class="list-unstyled">Grado</li>
                    <li class="list-unstyled">Bloque</li>
                    <li class="list-unstyled">Sinopsis</li>
                    <li class="list-unstyled">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</li>
                </div>                
                <div id="videoscarousel" class="carousel slide col-md-12 ">
                    <br><br><br>
                    <!-- Carousel items -->
                    <div class="carousel-inner col-md-12">
                        <div class="item active">
                            <div class="row-fluid">
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->

                        <div class="item">
                            <div class="row-fluid">
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>                                
                            </div><!--/row-fluid-->
                        </div><!--/item-->

                        <div class="item">
                            <div class="row-fluid">
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>                                
                            </div><!--/row-fluid-->
                        </div><!--/item-->
                    </div><!--/carousel-inner-->
                     <br><br><br> <br><br><br> 
                    <ol class="carousel-indicators">
                        <li data-target="#videoscarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#videoscarousel" data-slide-to="1"></li>
                        <li data-target="#videoscarousel" data-slide-to="2"></li>
                    </ol>
                      <br><br><br> <br><br><br>
                    <a class="left carousel-control" href="#videoscarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#videoscarousel" data-slide="next">›</a>
                </div><!--/myCarousel-->

            </div>
        </div>
    </div>
</div>
@endsection
@section('pieMediateca')
@include('viewMediateca.pieMediateca')
@endsection


<script>
    autoPlayYouTubeModal();

    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal() {
        var trigger = $("body").find('[data-toggle="modal"]');
        trigger.click(function () {
            var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function () {
                $(theModal + ' iframe').attr('src', videoSRC);
            });
        });
    }

    $(".modal-fullscreen").on('show.bs.modal', function () {
        setTimeout(function () {
            $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
        }, 0);
    });
    $(".modal-fullscreen").on('hidden.bs.modal', function () {
        $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
    });
</script>