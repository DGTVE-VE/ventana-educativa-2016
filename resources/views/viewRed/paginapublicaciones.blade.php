@section('titleRedmite')
Publicaciones
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')

<div class="row">  <!--row inicial -->
    <div class="col-md-12 fondo_Obscuro text-center text-uppercase">
        <p class="pleca">Publicaciones</p>
    </div>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#todos" role="tab" data-toggle="tab">TODOS</a></li>
                    <li><a href="#mexico" role="tab" data-toggle="tab">MÉXICO</a></li>
                    <li><a href="#guatemala" role="tab" data-toggle="tab">GUATEMALA</a></li>
                    <li><a href="#elsalvador" role="tab" data-toggle="tab">EL SALVADOR</a></li>
                    <li><a href="#honduras" role="tab" data-toggle="tab">HONDURAS</a></li>
                    <li><a href="#nicaragua" role="tab" data-toggle="tab">NICARAGUA</a></li>
                    <li><a href="#costarica" role="tab" data-toggle="tab">COSTA RICA</a></li>
                    <li><a href="#panama" role="tab" data-toggle="tab">PANAMÁ</a></li>
                    <li><a href="#colombia" role="tab" data-toggle="tab">COLOMBIA</a></li>
                    <li><a href="#repdominicana" role="tab" data-toggle="tab">REP. DOMINICANA</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">

                    <!--TODOS-->
                    <div class="tab-pane fade in active" id="todos">

                        @for($i = 0; $i < sizeof($publicaciones); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicaciones[$i]->url_descarga)}}"  target="_blank">
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicaciones[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicaciones[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicaciones[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicaciones[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicaciones)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN TODOS-->

                    <!--Mexico-->
                    <div class="tab-pane fade" id="mexico">

                        @for($i = 0; $i < sizeof($publicacionesmx); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesmx[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesmx[$i]->imagen, $publicacionesmx[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesmx[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesmx[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesmx[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesmx[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesmx)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN México-->

                    <!--Guatemala-->
                    <div class="tab-pane fade" id="guatemala">

                        @for($i = 0; $i < sizeof($publicacionesgu); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesgu[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesgu[$i]->imagen, $publicacionesgu[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesgu[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesgu[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesgu[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesgu[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesgu)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Guatemala-->

                    <!--El Salvador-->
                    <div class="tab-pane fade" id="elsalvador">

                        @for($i = 0; $i < sizeof($publicacionessv); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionessv[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionessv[$i]->imagen, $publicacionessv[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionessv[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionessv[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionessv[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionessv[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionessv)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN El Salvador-->

                    <!-- Honduras-->
                    <div class="tab-pane fade" id="honduras">

                        @for($i = 0; $i < sizeof($publicacionesho); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesho[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesho[$i]->imagen, $publicacionesho[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesho[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesho[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesho[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesho[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesho)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Honduras-->

                    <!-- Nicaragua-->
                    <div class="tab-pane fade" id="nicaragua">

                        @for($i = 0; $i < sizeof($publicacionesni); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesni[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesni[$i]->imagen, $publicacionesni[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesni[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesni[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesni[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesni[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesni)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Nicaragua-->

                    <!-- Costa Rica-->
                    <div class="tab-pane fade" id="costarica">

                        @for($i = 0; $i < sizeof($publicacionescr); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionescr[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionescr[$i]->imagen, $publicacionescr[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionescr[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionescr[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionescr[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionescr[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionescr)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Costa Rica-->

                    <!-- Panama-->
                    <div class="tab-pane fade" id="panama">

                        @for($i = 0; $i < sizeof($publicacionespa); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionespa[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionespa[$i]->imagen, $publicacionespa[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionespa[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionespa[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionespa[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionespa[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionespa)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Panama-->


                    <!-- Colombia-->
                    <div class="tab-pane fade" id="colombia">

                        @for($i = 0; $i < sizeof($publicacionesco); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesco[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesco[$i]->imagen, $publicacionesco[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesco[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesco[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesco[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesco[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesco)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Colombia-->

                    <!-- Republica Dominicana-->
                    <div class="tab-pane fade" id="repdominicana">

                        @for($i = 0; $i < sizeof($publicacionesdo); $i++)

                          @if($i == 0)
                            <div class="row">
                          @endif

                            <div class="col-xs-12 col-sm-6 col-md-4 col-xl-3 hvr-pulse-grow animated bounceIn">
                                <a href="{{url($publicacionesdo[$i]->url_descarga)}}"  target="_blank">
                                    <!-- {{ HTML::image($publicacionesdo[$i]->imagen, $publicacionesdo[$i]->titulo, array('class'=>'image-responsive tamaho-thumbnail-publicaciones'))}} -->
                                    {{ HTML::image($publicaciones[$i]->imagen, $publicaciones[$i]->titulo, array('width' => '100%'))}}
                                </a>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item text-justify">Título: {{$publicacionesdo[$i]->titulo}}</li>
                                    <li class="list-group-item text-justify">Autor: {{$publicacionesdo[$i]->autor}}</li>
                                    <li class="list-group-item text-justify">Categoría: {{$publicacionesdo[$i]->categoria}}</li>
                                    <li class="list-group-item text-justify"><a href="{{url($publicacionesdo[$i]->url_descarga)}}" download="">
                                            Material de descarga</a></li>
                                </ul>
                            </div>

                            @if(($i+1)%3 == 0)
                            </div>
                              <div class="row">
                            @endif

                            @if($i == sizeof($publicacionesdo)-1)
                              </div>
                            @endif

                        @endfor
                    </div>
                    <!--FIN Republica Dominicana-->


                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

@include('viewRed.seccionpie')
@stop
