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
                <div class="controls">
                    <ul class="nav col-md-12">
                        <div  class="col-md-8">
                        @foreach ($videos as $item => $video)
                        <li data-target="#custom_carousel" data-slide-to="{{$item}}" class="item {{ ($item) ? '' : ' active' }}">
                            <a href="#">
                                <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg">
                                <!--<small>{{ $video->titulo_programa}}</small>-->
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
                        </div>
                    </ul>
                    <ul class="pagination col-md-12">
                        <li class="disabled">
                            <a href="#">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="#">1 <span class="sr-only"></span></a>
                        </li>
                             <li>
                            <a href="#">1 <span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>                
            </div>
            
            <!-- End Carousel -->
        </div>
    </div>
</div>

@endsection
<script>
   $(function() {
      $('#custom_carousel').on('slid.bs.carousel', function () {
         alert("This event fires immediately when the slide instance method" +"is invoked.");
      });
   });
</script>

