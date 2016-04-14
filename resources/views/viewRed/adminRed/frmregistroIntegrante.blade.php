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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Busca Usuario</h3>
                </div>
                <div class="panel-body">
                    <form action="{{url('redmite/admin/buscaIntegrantes')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div> 
                        <input class="btn  btn-primary" type="submit" value="Buscar Usuario">                                    
                    </form>
                    <hr>
                </div>
            </div>
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif


            @if (isset($integrante))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Integrante de la RedMITE</h3>
                </div>                
                @foreach ($integrante as $integrantes)
                <div class="col-md-12"><h3>{{$integrantes->email}}</h2></div>
                @endforeach                
                <form action="{{url('redmite/admin/guardaIntegrantes')}}" method="post" role="form">
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
                    <input class="btn  btn-success" type="submit" value="Registra Integrante">
                </form>
            </div>
            @endif                              
        </div>
        <hr>
    </div>

</div>

</div>
@include('viewRed.seccionpie')
@stop