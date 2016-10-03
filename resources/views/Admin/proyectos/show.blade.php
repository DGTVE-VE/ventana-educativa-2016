@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Proyecto {{ $proyecto->id }}
        <a href="{{ url('admin/proyectos/' . $proyecto->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Proyecto"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/proyectos', $proyecto->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Proyecto',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $proyecto->id }}</td>
                </tr>
                <tr><th> Titulo </th><td> {{ $proyecto->titulo }} </td></tr><tr><th> Banner </th><td> {{ $proyecto->banner }} </td></tr><tr><th> Descripción </th><td> {{ $proyecto->descripción }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
