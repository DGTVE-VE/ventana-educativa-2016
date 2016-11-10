@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<!-- <div style="width:550px; heigth:150px">

</div> -->
<div class="container" style="width:75%; padding-left:15%; padding-top:30px;">

    <h1>Noticias <a href="{{ url('/admin/news/create') }}" class="btn btn-primary btn-xs" title="Add New AdminNews"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th><th> Titulo </th><th> Imagen </th><th> PDF </th><th> Dirección electrónica </th><th>Activa</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($adminnews as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->titulo }}</td><td>{{ $item->url_imagen }}</td><td>{{ $item->url_pdf }}</td><td>{{ $item->url }}</td><td>{{ $item->is_active}}</td>
                    <td>
                        <a href="{{ url('/admin/news/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/admin/news/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Activar o desactivar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/admin/news', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Eliminar" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Eliminar',
                                    'onclick'=>'return confirm("Desea eliminarla?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $adminnews->render() !!} </div>
    </div>

</div>
@endsection
