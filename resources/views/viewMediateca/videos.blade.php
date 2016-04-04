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
            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="1000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                                <div class="col-md-9">
                                    <h2>Slide 1</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                                </div>
                            </div>
                        </div>            
                    </div> 
                    <div class="item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                                <div class="col-md-9">
                                    <h2>Slide 2</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                                </div>
                            </div>
                        </div>            
                    </div> 
                    <div class="item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                                <div class="col-md-9">
                                    <h2>Slide 3</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                                </div>                                
                            </div>
                        </div>           
                    </div> 
                    <div class="item">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3"><img src="http://placehold.it/350x250" class="img-responsive"></div>
                                <div class="col-md-9">
                                    <h2>Slide 4</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                                </div>                                
                            </div>
                        </div>           
                    </div> 
                    <!-- End Item -->
                </div>
                <!-- End Carousel Inner -->
                <div class="controls">
                    <ul class="nav">
                        <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="http://placehold.it/50x50"><small>Slide One</small></a></li>
                        <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Two</small></a></li>
                        <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Three</small></a></li>
                        <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="http://placehold.it/50x50"><small>Slide Four</small></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Carousel -->
        </div>
    </div>
</div>

@endsection
<script>
 $(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
</script>