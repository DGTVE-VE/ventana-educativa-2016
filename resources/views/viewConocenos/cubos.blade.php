@section('titleConocenos')
Conocenos
@stop
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script  src="js/conocenos/jquery.imagecube.js"></script>
<script src="js/conocenos/jquery.plugin.js"></script>
<script>
    $(function () {
        $('#defaultCube').imagecube();
    });
</script>
@extends('indexConocenos')
@section('cuerpoConocenos')
<div class="container">
    <div class="row">
        <div class="col-md-4" id="defaultCube">
            <img src="imagenes/conocenos/cubos/docentes.png" alt="" title=""/>
            <img src="imagenes/conocenos/cubos/docentes2.png" alt="" title=""/>
        </div>
        <div class="col-md-4">
            {{HTML::image('imagenes/conocenos/cubos/estudiantes1.png','Estudiantes',array( 'width' => '100%'))}}
        </div>
        <div class="col-md-4">
            {{HTML::image('imagenes/conocenos/cubos/padres1.png','Padres',array( 'width' => '100%'))}}
        </div>        
    </div>
</div>
@endsection
