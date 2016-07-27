@section('titleConocenos')
Conocenos
@stop
@extends('indexConocenos')
@section('cuerpoConocenos')
<section id="carousel">    				
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>-->
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <div class="col-md-12">
                        <!-- Carousel indicators -->
                        <div class="col-md-2"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="0"> <a class="first after" href="#">Colaboradores</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="1"> <a class="first after" href="#">Antecedentes</a></div>
                        <div class="col-md-1"></div>
                        <div class="botonConocenosSlide col-md-2" data-target="#fade-quote-carousel" data-slide-to="2"> <a class="first after" href="#">Alineación del Proyecto</a></div>
                        <div class="col-md-2"></div>                        
                    </div>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                            </blockquote>	
                        </div>
                        <div class="item">
                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                        <div class="active item">
                            <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                            </blockquote>
                        </div>
                    </div>                    
                </div>
            </div>							
        </div>
    </div>
</section>

@endsection
