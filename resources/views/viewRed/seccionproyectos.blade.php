<!--	Libreria Parallax	-->
<script src="js/parallax.js-1.4.2/parallax.min.js"></script>

<div class="row fondo_Obscuro" style="margin-top:-20px;">
    <div class="col-md-12 text-center text-uppercase">
        <p class="pleca"> Proyectos </p>
    </div>
</div>
<div class="row fondo_Transparente text-center parallax-window"  data-parallax="scroll" data-image-src= {{url('imagenes/red/proyectos/fondo-proyectos.jpg')}} speed="0.3" >
    <div class="col-md-12">
        <div class="division">
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <a href="{{url('redmite/proyectos#0')}}">
            {{ HTML::image('imagenes/red/proyectos/proyectos-01.jpg','sección1 proyectos', array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a href="{{('redmite/proyectos#1')}}">
            {{ HTML::image('imagenes/red/proyectos/proyectos-03.jpg','sección3 proyectos', array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a href="{{url('redmite/proyectos#2')}}">
            {{ HTML::image('imagenes/red/proyectos/proyectos-02.jpg','sección2 proyectos', array('class'=>'img-responsive img-rounded imgAbajo10'))}}
        </a>
    </div>
    <div class="col-sm-12 col-md-12">
        <div class="division"></div>
    </div>
</div>
