@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create New Proyecto</h1>
    <hr/>

    {!! Form::open(['url' => '/admin/proyectos', 'class' => 'form-horizontal']) !!}

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
            <div class="form-group {{ $errors->has('descripción') ? 'has-error' : ''}}">
                {!! Form::label('descripción', 'Descripción', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripción', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('descripción', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('created_at') ? 'has-error' : ''}}">
                {!! Form::label('created_at', 'Created At', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'created_at', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('updated_at') ? 'has-error' : ''}}">
                {!! Form::label('updated_at', 'Updated At', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'updated_at', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('updated_at', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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