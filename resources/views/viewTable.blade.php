@section('title')
Tablas Red Mesoamericana
@stop
@extends('home')
@section('cuerpo')
<div>
    
    <h1>Colaboradores</h1>
    <ul>
    @foreach ($colaboradores as $colaborador)
      <li>{{{ $colaborador->resena }}}</li>
      <li>{{{ $colaborador->url_foto }}}</li>
    @endforeach
    </ul>
    <h1>Proyectos</h1>
    <p> {{ $proyectos }}</p>
    
    <h1>Banners</h1>
    <p>{{ $banners}}</p>
    
    <h1>Newsletter</h1>
    <p>{{$newsletter}}</p>
</div>
@endsection