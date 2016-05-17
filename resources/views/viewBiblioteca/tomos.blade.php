@section('titleBiblioteca')
Biblioteca
@stop
@extends('indexBiblioteca')
@section('menuBiblioteca')
@include('viewVentana.encabezadoVentana')

<script>
    $('#buscar').css('display', 'none');
    $('#iconoBuscar').css('display', 'none');
    $('#navegacionVentana').css('height', '55px');
    $('.imgLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/ventanaEducativa.png")}}');
    $('.appsLogo').attr('src', '{{url("imagenes/biblioteca/imgMenu/menu.png")}}');
    $('#img-usuario').attr('src', '{{url("imagenes/biblioteca/imgMenu/registro.png")}}');
    $(window).scroll(function () {
        var scroll_v = this.pageYOffset;
        if (scroll_v > 10) {
            $('#navegacionVentana').css('background', 'rgba(0, 0, 0, .3)');
        }
        if (scroll_v < 10) {
            $('#navegacionVentana').css('background', 'transparent');
        }
    });
</script>        

@endsection
@section('cuerpoBiblioteca')
<div class="container">
    <div class="row">
        <br><br>
        <h2 class="text-center"><a style="text-decoration: none; color: black;" href="{{asset('biblioteca')}}">Biblioteca</a></h2>
        <br>

        <!-- Carousel
================================================== -->
        <div id="CarouselTomo" class="carousel slide">
            <div class="carousel-inner">           
                <figure class="item active">
                    <div class="accordion">
                        <ul>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/bajacalifornia.jpg')}})">
                                <div> 
                                    <img src="{{asset('imagenes/biblioteca/tomos/hoverTomos/biblioteca-01.png')}}">
                                    <a class="hrefTomos" href="#">Ver página</a>
                                </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/bejaminfranklin.jpg')}})">
                                <div> <a href="#">
                                        <h4>2Lorem Ipsum</h4>
                                        <p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/colegiomex.jpg')}})">
                                <div> <a href="#">
                                        <h4>3Lorem Ipsum</h4>
                                        <p>3Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/conevyt.jpg')}})">
                                <div> <a href="#">
                                        <h4>4Lorem Ipsum</h4>
                                        <p>4Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/congresounion.jpg')}})">
                                <div> <a href="#">
                                        <h4>5Lorem Ipsum</h4>
                                        <p>5Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/ecest.jpg')}})">
                                <div> <a href="#">
                                        <h4>6Lorem Ipsum</h4>
                                        <p>6Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </figure>
                <figure class="item">
                    <div class="accordion">
                        <ul>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/itam.jpg')}})">
                                <div> <a href="#">
                                        <h4>1Lorem Ipsum</h4>
                                        <p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/iteso.jpg')}})">
                                <div> <a href="#">
                                        <h4>2Lorem Ipsum</h4>
                                        <p>2Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/mundial.jpg')}})">
                                <div> <a href="#">
                                        <h4>3Lorem Ipsum</h4>
                                        <p>3Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/tecmonterrey.jpg')}})">
                                <div> <a href="#">
                                        <h4>4Lorem Ipsum</h4>
                                        <p>4Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/unamcienciastierra.jpg')}})">
                                <div> <a href="#">
                                        <h4>5Lorem Ipsum</h4>
                                        <p>5Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/unameduardogarcia.jpg')}})">
                                <div> <a href="#">
                                        <h4>6Lorem Ipsum</h4>
                                        <p>6Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </figure>  
                <figure class="item">
                    <div class="accordion">
                        <ul>
                            <li style="background-image: url({{asset('imagenes/biblioteca/tomos/unamjorgecarpizo.jpg')}})">
                                <div> <a href="#">
                                        <h4>1Lorem Ipsum</h4>
                                        <p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </figure>       

            </div>     
            <div class="carousel-controls">
                <a class="left carousel-control carousel-control-tomos" href="#CarouselTomo" data-slide="prev"><span class="flecha-izq-presentacion"><i class="fa fa-angle-left fa-lg"></i></span></a>
                <a class="right carousel-control carousel-control-tomos" href="#CarouselTomo" data-slide="next"><span class="flecha-der-presentacion"><i class="fa fa-angle-right fa-lg"></i></span></a>
            </div>
        </div><!-- End Carousel -->          
    </div>
</div>
@include('viewBiblioteca.menuBiblioteca')
@endsection
<script type="text/javascript">

</script> 