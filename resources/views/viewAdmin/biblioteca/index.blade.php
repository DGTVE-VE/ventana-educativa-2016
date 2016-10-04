@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Bibliotecas <a href="{{ url('/Admin/biblioteca/create') }}" class="btn btn-primary btn-xs" title="Add New biblioteca"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Url Tomo </th><th> Url Descripcion </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($biblioteca as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombre }}</td><td>{{ $item->url_tomo }}</td><td>{{ $item->url_descripcion }}</td>
                    <td>
                        <a href="{{ url('/Admin/biblioteca/' . $item->id) }}" class="btn btn-success btn-xs" title="View biblioteca"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Admin/biblioteca/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit biblioteca"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Admin/biblioteca', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete biblioteca" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete biblioteca',
                                    'onclick'=>'return confirm("Desea borrar elemento?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $biblioteca->render() !!} </div>
    </div>

</div>
@endsection
