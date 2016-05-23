@section('titleRedmite')
Quienes Somos
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="row fondo_Obscuro">
    <div class="col-xs-12 col-sm-12">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center text-uppercase">
        <p class="pleca">¿Quiénes Somos?</p>
    </div>
</div>
<div class="row backpaquienes txtQuienesSomos text-justify" style="padding-top:2%; padding-bottom:2%;">
    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
        <h4>¿QUIÉNES SOMOS?</h4>
        <p>
            Las Tecnologías de la Información y Comunicación (TIC) han modificado los modelos y las formas de 
            comunicación entre las personas, el cómo hacen negocios, trabajan, estudian, se informan y se divierten,
            por lo que se ha convertido en un elemento fundamental para la vida cotidiana.
        </p>
        <p>
            La Red Mesoamericana de Investigación y Tecnología Educativa, nace de las propuestas resultantes del
            Primer Encuentro de Investigadores, Evaluadores y Técnicos en el Diseño de Recursos Educativos,
            celebrado en Costa Rica, el pasado 2015; en donde se destacó la importancia de conformar un espacio
            para que los profesionales en educación realicen estudios, artículos, propuestas y análisis, en torno al uso
            de las TIC en la educación básica, su funcionamiento como medio articulador de la comunidad escolar, la
            renovación del papel docente, así como la identificación de mecanismos orientados a nuevas
            metodologías y modelos pedagógicos, que permitan ofrecer una calidad educativa en la región
            mesoamericana.
        </p><br>
        <h4>MISIÓN</h4>
        <p>
            Integrar una red de expertos académicos e investigadores que analicen, propongan y compartan
            aspectos relevantes para la generación de una educación básica de calidad e inclusiva en la región
            mesoamericana, a través de investigación, experiencias, modelos pedagógicos y nuevas metodologías 
            que contribuyan a la mejora del nivel del desarrollo humano de la sociedad ante el escenario global.
        </p><br>
        <h4>VISIÓN</h4>
        <p>
            Ser la primera Red Mesoamericana de Investigación y Tecnología Educativa reconocida a nivel
            internacional por su contribución al análisis y mejora del sector educativo, así como a la aportación al
            conocimiento científico, a la innovación y el desarrollo mesoamericano, a partir de la cooperación entre
            expertos académicos, investigadores, instituciones y ministerios de la región.
        </p>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding-left:5%">
        <h4>OBJETIVOS GENERALES</h4>
        <P>
            Integrar un espacio para el encuentro, difusión e impulso de la investigación educativa por
            académicos y profesionales, enfocada al uso y aprovechamiento de las Tecnologías de la
            Información y Comunicación (TIC) en la educación básica, así como para la identificación de nuevos
            enfoques y modelos pedagógicos, que permitan generar una educación inclusiva y de calidad en
            la región mesoamericana.
        </P><br>
        <h4>OBJETIVOS ESPECÍFICOS</h4>
        <ul>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Impulsar la primera red mesoamericana de especialistas
                en la educación para el fortalecimiento de los procesos de enseñanza y aprendizaje.</li>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Fomentar el desarrollo de habilidades digitales para
                el docente ante la era digital.</li>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Impulsar a través de este espacio la profesionalización,
                actualización e innovación del docente ante el nuevo contexto tecnológico.</li>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Crear aportes científicos que favorezcan a nuevas metodologías
                y tendencias para el proceso de enseñanza y aprendizaje.</li>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Proveer al docente de recursos que le permitan articular desde
                su labor, la configuración de la comunidad escolar (alumno-profesor-padre de familia).</li>
            <li class="list-unstyled"><span class="fa fa-minus"></span> Generar un espacio que permita compartir experiencias y puntos en
                común entre los miembros de la Red.</li>
        </ul>
    </div>
</div>
@include('viewRed.seccionpie')
@stop


