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
            <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">                    
                    @foreach ($videos as $item => $video)
                    <div class="item {{ ($item) ? '' : ' active' }}">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12"><h3>{{$video->serie}}</h2></div>
                                <div class="col-md-7">
                                    <iframe type="text/html" width="640" height="390" src="http://www.youtube.com/embed/{{ $video->url }}?enablejsapi=1" frameborder="0"></iframe>
                                </div>
                                <div class="col-md-5">
                                    <li class="list-unstyled"><h4>{{ $video->subtitulo_serie.' '.$video->subtitulo_programa}}<h3></li>
                                    <li class="list-unstyled"><h4>{{ $video->titulo_programa }}<h3></li>                                                
                                    <li class="list-unstyled"><h4>Grado: {{ $video->grado }}</h4></li>
                                    <li class="list-unstyled"><h4>Sinopsis</h4></li>
                                    <li class="list-unstyled text-justify">{{ $video->sinopsis }}</li>
                                </div>
                            </div>
                        </div>            
                    </div> 
                    @endforeach
                    
                    <!-- End Item -->
                </div>
                <!-- End Carousel Inner -->
                 <div class="controls" id="custom_controls">
                    <ul>
                        @foreach ($videos as $item => $video)
                        <li data-target="#custom_carousel" data-slide-to="{{$item}}" class="item {{ ($item) ? '' : ' active' }}">
                            <a href="#">
                                <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg">
                                <small>
                                    @if (strlen($video->titulo_programa) > 20)
                                       {{ $titulo= substr($video->titulo_programa, 0, 20).'...'}}                                 
                                    @else
                                        {{$video->titulo_programa}}
                                    @endif
                                </small>
                            </a>
                        </li>
                        @endforeach 

                    </ul>                   
                </div> 
<!--                <a class="left carousel-control" href="#custom_controls" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#custom_controls" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!--<h5 class="textoBlanco">Bloque</h5>-->
                            <ul class="pager">
                                @foreach ($paginacion as $item => $bloquePagina)
                                    <li class="{{ ($item) ? '' : ' active' }}">
                                        <a href="{{url($url.'/'.$bloquePagina->bloque)}}">
                                            {{$bloquePagina->bloque}}
                                        </a>
                                    </li>                        
                                 @endforeach 
                            </ul>
                        </div>
                    </div>    
                </div>
            </div>
            
            <!-- End Carousel -->
        </div>
    </div>
</div>

@endsection
<script>
$('.carousel-control.left').click(function() {
  $('#custom_controls').carousel('prev');
});

$('.carousel-control.right').click(function() {
  $('#custom_controls').carousel('next');
});
</script>

