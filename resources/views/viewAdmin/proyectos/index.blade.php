@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Proyectos <a href="{{ url('/admin/proyectos/create') }}" class="btn btn-primary btn-xs" title="Agregar nuevo proyecto"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Titulo </th><th> Banner </th><th> Descripcion </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($proyectos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->titulo }}</td><td>{{ $item->banner }}</td><td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ url('/admin/proyectos/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Proyecto"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/proyectos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Modifica Proyecto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/proyectos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Proyecto" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Proyecto',
                                    'onclick'=>'return confirm("Desea eliminar proyecto?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $proyectos->render() !!} </div>
    </div>

</div>
@endsection
