@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Modifica Proyecto {{ $proyecto->id }}</h1>

    {!! Form::model($proyecto, [
        'method' => 'PATCH',
        'url' => ['/admin/proyectos', $proyecto->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                {!! Form::label('titulo', 'Titulo', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('titulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('banner') ? 'has-error' : ''}}">
                {!! Form::label('banner', 'Banner', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('banner', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('banner', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
                {!! Form::label('thumbnail', 'Thumbnail', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('thumbnail', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('thumbnail', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
                {!! Form::label('activo', 'Activo', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('activo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('liga') ? 'has-error' : ''}}">
                {!! Form::label('liga', 'Liga', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('liga', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('liga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Actualiza', ['class' => 'btn btn-primary form-control']) !!}
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