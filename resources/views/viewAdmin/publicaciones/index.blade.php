@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Publicaciones <a href="{{ url('/admin/publicaciones/create') }}" class="btn btn-primary btn-xs" title="Agregar Publicación"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Imagen </th><th> Titulo </th><th> Autor </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($publicaciones as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->imagen }}</td><td>{{ $item->titulo }}</td><td>{{ $item->autor }}</td>
                    <td>
                        <a href="{{ url('/admin/publicaciones/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Publicación"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/publicaciones/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Modifica Publicación"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/publicaciones', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Elimina Publicación" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Publicacione',
                                    'onclick'=>'return confirm("Desea eliminar Publicación?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $publicaciones->render() !!} </div>
    </div>

</div>
@endsection
