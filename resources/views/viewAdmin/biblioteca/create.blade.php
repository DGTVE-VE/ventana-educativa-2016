@extends('indexAdmin')

@section('menuAdmin')
	@include('viewAdmin.encabezado')
@endsection
@section('cuerpoAdmin')
<div class="container" style="padding-left:80px;">

    <h1>Create New biblioteca</h1>
    <hr/>

    {!! Form::open(['url' => '/Admin/biblioteca', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('nombre', 'Nombre', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url_tomo') ? 'has-error' : ''}}">
                {!! Form::label('url_tomo', 'Url Tomo', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('url_tomo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('url_tomo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('url_descripcion') ? 'has-error' : ''}}">
                {!! Form::label('url_descripcion', 'Url Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('url_descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('url_descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pais') ? 'has-error' : ''}}">
                {!! Form::label('pais', 'Pais', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pais', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pais', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('link_consulta') ? 'has-error' : ''}}">
                {!! Form::label('link_consulta', 'Link Consulta', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('link_consulta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('link_consulta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('clasifica_id') ? 'has-error' : ''}}">
                {!! Form::label('clasifica_id', 'Clasifica Id', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('clasifica_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('clasifica_id', '<p class="help-block">:message</p>') !!}
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