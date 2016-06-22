<!--	Libreria Parallax	-->
<script src="js/parallax.js-1.4.2/parallax.min.js"></script>

<div class="row fondo_Obscuro" style="margin-top:-20px;">
    <div class="col-md-12 text-center text-uppercase">
        <p class="pleca"> Proyectos </p>
    </div>
</div>
<div class="row fondo_Transparente text-center parallax-window" data-parallax="scroll" data-speed="0.3" data-image-src= {{url('imagenes/red/proyectos/fondo-proyectos.jpg')}} data-position="0px -20px">
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <!-- Imagnes proyectos -->

    @foreach($proyectos as $key)

    <div class="col-sm-6 col-md-4">
        <a href="{{url('redmite/proyectos#0')}}">
            {{ HTML::image($key->banner,$key->titulo, array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div>

    @endforeach

    <!--♠ <div class="col-sm-6 col-md-4">
        <a href="{{('redmite/proyectos#1')}}">
            {{ HTML::image('imagenes/red/proyectos/proyectos-03.jpg','sección3 proyectos', array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a href="{{url('redmite/proyectos#2')}}">
            {{ HTML::image('imagenes/red/proyectos/proyectos-02.jpg','sección2 proyectos', array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div> -->
    <!--  Imagenes proyectos -->
    <div class="col-sm-12 col-md-12">
        <div class="division"></div>
    </div>
</div>
<script>
	$('.parallax-window').parallax({
		naturalWidth:1600,
		naturalHeight:500
	});
</script>
