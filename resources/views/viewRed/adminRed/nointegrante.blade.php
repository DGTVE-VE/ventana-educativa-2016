@section('titleRedmite')
Busca Usuario
@stop
@extends('indexRed')
@section('menuRedmite')
@include('viewRed.seccionheader')
@endsection
@section('cuerpoRedmite')
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
</div>
@include('viewRed.seccionpie')
@stop