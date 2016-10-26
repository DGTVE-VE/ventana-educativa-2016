<link rel="stylesheet" href="{{asset('css/red/seccionUsabilidad.css')}}"/>

<div class="row fondo_Obscuro">
    <div class="col-md-12 text-center text-uppercase">
        <p class="pleca"> Modelo de Usabilidad Pedagógica de las TIC</p>
    </div>
</div>
<div class="row fondo_Obscuro visible-xs-block">
    <div class="division">
        <!--	***********************************************		-->
    </div>
</div>
<div class="row fondo_Claro">
    <div class="col-sm-12 visible-sm-block">
        <div class="division">
            <!--	***********************************************		-->
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="division">
            <!--	***********************************************		-->
        </div>
    </div>
    <div class="col-sm-2 col-md-4 col-lg-3 col-lg-offset-1">
        <!--	-------------------------------		Elementos para resolucion pequeña Texto	------------------------	-->
        <div class="visible-sm-block text-justify contenedorTexto1">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto1-01.png','texto1', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="visible-sm-block text-justify contenedorTexto2">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto2-01.png','texto2', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
    </div>
    <div class="col-xs-3 col-sm-8 col-md-5 col-lg-5" style="position:relative;">
		{{ HTML::image('imagenes/red/ModeloUsabilidad/anillos-modelo-usabilidad.png','anillos usabilidad', array('class'=>'img-responsive hidden-xs', 'style'=>'float:left;'))}}
        {{ HTML::image('imagenes/red/ModeloUsabilidad/funcionalidadEdu.png','funedu', array('id'=>'imgFuncionalidad','class'=>'img-responsive imgFuncionalidadEdu','onmouseenter'=>'imgResalta("funcionalidad")','onmouseleave'=>'imgNormal("funcionalidad")'))}}
        {{ HTML::image('imagenes/red/ModeloUsabilidad/disposicionExpectativas.png','expectativas', array('id'=>'imgExpectativas','class'=>'img-responsive imgExpectativas','onmouseenter'=>'imgResalta("expectativas")','onmouseleave'=>'imgNormal("expectativas")'))}}
        {{ HTML::image('imagenes/red/ModeloUsabilidad/saberesDigitales.png','saberes dig', array('id'=>'imgSaberesDig','class'=>'img-responsive imgSaberesDig', 'onmouseenter'=>'imgResalta("saberesDig")','onmouseleave'=>'imgNormal("saberesDig")'))}}
        {{ HTML::image('imagenes/red/ModeloUsabilidad/apropiacionIncorporacionEdu.png','apropiacionEdu', array('id'=>'imgApropiacion','class'=>'img-responsive imgApropiacion', 'onmouseenter'=>'imgResalta("apropiacion")','onmouseleave'=>'imgNormal("apropiacion")'))}}

        <!--	-------------------------------		Resolución grande - Extra - grande Texto	----------------------------------	-->
        <div  class="hidden-xs hidden-sm">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto1-01.png','texto01', array('id'=>'txtFuncionalidad','class'=>'estoy-visible slideInLeft imgTexto1'))}}
        </div>
        <div class="hidden-xs hidden-sm">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto2-01.png','texto02', array('id'=>'txtExpectativas','class'=>'estoy-visible slideInLeft imgTexto2'))}}
        </div>
        <div class="hidden-xs hidden-sm text-justify">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto3-01.png','texto03', array('id'=>'txtSaberesDig','class'=>'estoy-visible slideInRight imgTexto3'))}}
        </div>
        <div class="hidden-xs hidden-sm text-justify">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto4-01.png','texto04', array('id'=>'txtApropiacion','class'=>'estoy-visible slideInRight imgTexto4'))}}
        </div>
        <!-- ------------------------------------		resolucion pequeña Lineas		------------------------------------------------- -->
        <div class="visible-sm-block text-justify" style="font-size:6px; width:120px; position:absolute; top:10px; left:75px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo1-01.png','nodo1', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="visible-sm-block text-justify" style="font-size:6px; width:150px; position:absolute; top:190px; left:-70px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo2-01.png','nodo2', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="visible-sm-block text-justify" style="font-size:6px; width:120px; position:absolute; top:170px; left:415px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo3-01.png','nodo3', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>
        <div class="visible-sm-block text-justify" style="font-size:6px; width:150px; position:absolute; top:360px; left:300px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo4-01.png','nodo4', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>
        <!-- ------------------------------------		resolucion grande Lineas 		------------------------------------------------- -->
        <div class="hidden-xs hidden-sm text-justify contenedorLinea1">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo1-01.png','nod01', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="hidden-xs hidden-sm text-justify contenedorLinea2">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo2-01.png','nod02', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="hidden-xs hidden-sm text-justify contenedorLinea3">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo3-01.png','nod03', array('class'=>'estoy-visible slideInRight img-responsive', 'style'=>'float:left;'))}}
        </div>
        <div class="hidden-xs hidden-sm text-justify contenedorLinea4">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/nodo4-01.png','nod04', array('class'=>'estoy-visible slideInRight img-responsive', 'style'=>'float:left;'))}}
        </div>
    </div>
    <div class="col-xs-9 col-sm-2 col-md-3 col-lg-3" style="height:550px;">
        <!--	-------------------------------		Resolucion Extra pequeña Texto	------------------------	-->
        <div class="visible-xs-block text-justify" style="width:210px; position: relative; top:10px;">
            <p class="visible-xs-block text-uppercase">Funcionalidad Educativa</p>
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto1-01.png','tex01', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="visible-xs-block text-justify" style="width:210px; position: relative; top:40px;">
            <p class="visible-xs-block text-uppercase">Disposición y Expectativas Docentes</p>
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto2-01.png','tex02', array('class'=>'estoy-visible slideInLeft img-responsive'))}}
        </div>
        <div class="visible-xs-block text-justify" style="width:210px;  position: relative; top:70px;">
            <p class="visible-xs-block text-uppercase">Saberes Digitales Básicos</p>
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto3-01.png','tex03', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>
        <div class="visible-xs-block text-justify" style="width:210px;  position: relative; top:100px;">
            <p class="visible-xs-block text-uppercase">Apropiación e Incorporación Educativa</p>
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto4-01.png','tex04', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>
        <!--	-------------------------------		Resolucion pequeña Texto	------------------------	-->
        <div class="visible-sm-block text-justify" style="width:270px; position: relative; top:-50px; left:-170px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto3-01.png','text01', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>
        <div class="visible-sm-block text-justify" style="width:270px; position:relative; top:400px; left: -200px;">
            {{ HTML::image('imagenes/red/ModeloUsabilidad/texto4-01.png','text04', array('class'=>'estoy-visible slideInRight img-responsive'))}}
        </div>       
    </div>
    <div class="col-md-12" style="margin-top:-8%;"><label class="textoTitulo pull-left">Modelo de Usabilidad Pedagógica de las TIC. <br>SEP-Indautor.<br> Registro Público: 03-2016-042011572200-01</label></div>
</div>