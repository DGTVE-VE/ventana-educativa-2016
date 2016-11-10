@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="width:75%; padding-left:15%; padding-top:30px;">

    <h1>Editar {{ $adminnews->titulo }}</h1>
<!--
    {!! Form::model($adminnews, [
        'method' => 'PATCH',
        'url' => ['/admin/news', $adminnews->id],
        'class' => 'form-horizontal',
				'files' => true
    ]) !!} -->

{!! Form::open(['url' => '/admin/news', 'class' => 'form-horizontal', 'files' => true, 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                {!! Form::label('titulo', 'Titulo', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
                <div class="form-group {{ $errors->has('url_imagen') ? 'has-error' : ''}}">
                {!! Form::label('url_imagen', 'Imagen', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('url_imagen', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('url_imagen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url_pdf') ? 'has-error' : ''}}">
                {!! Form::label('url_pdf', 'PDF', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('url_pdf', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('url_pdf', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
                {!! Form::label('url', 'Dirección electrónica', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            	<a href="{{url('admin/news')}}" class="btn btn-danger form-control">Regresar</a>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection
