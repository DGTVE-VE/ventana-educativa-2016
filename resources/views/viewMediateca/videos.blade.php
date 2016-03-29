@section('titleMediateca')
Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewVentana.encabezadoVentana')
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
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="350" src="http://www.youtube.com/embed/loFtozxZG0s"></iframe>
                <div id="videoscarousel" class="carousel slide col-md-12">
                    <ol class="carousel-indicators">
                        <li data-target="#videoscarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#videoscarousel" data-slide-to="1"></li>
                        <li data-target="#videoscarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row-fluid">
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->

                        <div class="item">
                            <div class="row-fluid">
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->

                        <div class="item">
                            <div class="row-fluid">
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                            </div><!--/row-fluid-->
                        </div><!--/item-->

                    </div><!--/carousel-inner-->

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