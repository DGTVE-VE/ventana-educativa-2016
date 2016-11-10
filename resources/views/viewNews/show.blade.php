@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="width:75%; padding-left:15%; padding-top:30px;">

    <h1> {{ $adminnews->titulo }}
        <a href="{{ url('admin/news/' . $adminnews->id . '/edit') }}" class="btn btn-primary btn-xs" title="Activar o Desactivar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['admin/news', $adminnews->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Eliminar',
                    'onclick'=>'return confirm("Desea eliminar?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $adminnews->id }}</td>
                </tr>
                <tr><th> Imagen </th><td> {{ $adminnews->url_imagen }} </td></tr>
								<tr><th> PDF </th><td> {{ $adminnews->url_pdf }} </td></tr>
								<tr><th> Dirección electrónica </th><td> {{ $adminnews->url }} </td></tr>
								<tr><th> Activo </th><td> {{ $adminnews->is_active }} </td></tr>
            </tbody>
        </table>

				<div class="form-group">
						<div class="col-sm-offset-3 col-sm-3">
									<a href="{{url('admin/news')}}" class="btn btn-danger form-control">Regresar</a>
						</div>
				</div>
    </div>

</div>
@endsection
