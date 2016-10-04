@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>biblioteca {{ $biblioteca->id }}
        <a href="{{ url('Admin/biblioteca/' . $biblioteca->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit biblioteca"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Admin/biblioteca', $biblioteca->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete biblioteca',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $biblioteca->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $biblioteca->nombre }} </td></tr><tr><th> Url Tomo </th><td> {{ $biblioteca->url_tomo }} </td></tr><tr><th> Url Descripcion </th><td> {{ $biblioteca->url_descripcion }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
