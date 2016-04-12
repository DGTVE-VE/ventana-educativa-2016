@section('titleMediateca')
Mediateca
@stop
@extends('indexMediateca')
@section('menuMediateca')
@include('viewMediateca.encabezadoMediateca')
@endsection
@section('cuerpoMediateca')
<div class="container">
    <div class="row transparenciaVideos">   
        <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="col-md-8">
                <div class="carousel-inner">                    
                    @foreach ($videos as $item => $video)
                    <div class="item {{ ($item) ? '' : ' active' }}">
                        <div class="col-md-12"><h3>{{$video->serie}}</h2></div>
                        <div class="col-md-12">
                            <iframe type="text/html" width="640" height="390" src="http://www.youtube.com/embed/{{ $video->url }}?enablejsapi=1" frameborder="0"></iframe>                        
                            <li class="list-unstyled"><h4>{{ $video->subtitulo_serie.' '.$video->subtitulo_programa}}<h3></li>
                            <li class="list-unstyled"><h4>{{ $video->titulo_programa }}<h3></li>                                                
                            <li class="list-unstyled"><h4>Grado: {{ $video->grado }}</h4></li>
                            <li class="list-unstyled"><h4>Sinopsis</h4></li>
                            <li class="list-unstyled text-justify">{{ $video->sinopsis }}</li>                        
                        </div>
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 controls" id="custom_controls">
            <div class="col-md-12">
                <div class="col-md-3 centrarTextDiv"><h4>Bloque</h4></div>
                <ul class="pager col-md-9">
                    @foreach ($paginacion as $item => $bloquePagina)
                        <li class="{{ ($item) ? '' : ' active' }}">
                            <a href="{{url($url.'/'.$bloquePagina->bloque)}}">
                                {{$bloquePagina->bloque}}
                            </a>
                        </li>                        
                     @endforeach 
                </ul>
            </div>
            <div class="col-md-12 listVideos">
            <table class="table table-condensed">                
                @foreach ($videos as $item => $video)
                <tr>
                    <td data-target="#custom_carousel" data-slide-to="{{$item}}" class="item">
                            <img src="http://img.youtube.com/vi/{{ $video->url }}/2.jpg">                            
                    </td>
                    <td>{{$video->titulo_programa}}</td>
                </tr>                
                @endforeach 
            </table>
            </div>
        </div>
        <!-- End Carousel -->
    </div>                                                        

</div>
@endsection                                                

