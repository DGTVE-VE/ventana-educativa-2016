@section('titleRedmite')
Busca Usuario
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Para ser parte de la RedMITE se requiere que capture la siguinete información</h3>
                </div>                
                <form action="{{url('redmite/admin/guardaIntegrantes')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">                        
                        <label for="puesto"></label>
                        <input type="text" name="puesto" class="form-control" id="puesto" placeholder="Puesto">
                    </div>
                    <div class="form-group">                        
                        <label for="area"></label>
                        <input type="text" name="area" class="form-control" id="area" placeholder="Área">
                    </div>
                    <div class="form-group">                        
                        <label for="dependencia"></label>
                        <input type="text" name="dependencia" class="form-control" id="dependencia" placeholder="Dependencia">
                    </div>
                    <div class="form-group">                        
                        <label for="resena"></label>
                        <textarea cols="5" rows="5" name="resena" placeholder="Reseña" class="form-control"></textarea>
                    </div>
                    <div class="">
                        <span class="btn btn-file-avatar">
                            Seleccionar foto <input type="file" name="image" class="inputLogin" id="file" required />
                        </span> 
                    </div>
                    <hr>
                    <div class="text-center">
                        <input class="btn  btn-info" type="submit" value="Envía Registro">
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</div>
@include('viewRed.seccionpie')
@stop