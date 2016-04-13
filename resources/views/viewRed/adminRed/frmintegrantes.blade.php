@section('titleRedmite')
Publicaciones
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Integrantes</h3>
                </div>
                <div class="panel-body">
                    <form action="{{url('redmite/admin/buscaIntegrantes')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div> 
                        <hr>
                        @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <input class="btn  btn-primary" type="submit" value="Buscar Usuario">                                    
                    </form>
                    <div class="form-group">
                        
                        <label for="nombre"></label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                </div>
            </div>
            <hr>
        </div>

    </div>

</div>
@include('viewRed.seccionpie')
@stop