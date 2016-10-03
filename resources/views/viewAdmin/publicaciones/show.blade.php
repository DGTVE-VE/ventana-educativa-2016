@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Publicacion {{ $Publicacion->id }}
        <a href="{{ url('admin/publicaciones/' . $Publicacion->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Publicacion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/publicaciones', $Publicacion->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Publicacion',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $Publicacion->id }}</td>
                </tr>
                <tr><th> Imagen </th><td> {{ $Publicacion->imagen }} </td></tr><tr><th> Titulo </th><td> {{ $Publicacion->titulo }} </td></tr><tr><th> Autor </th><td> {{ $Publicacion->autor }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
