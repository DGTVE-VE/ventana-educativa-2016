@extends('indexEducaplay')
@section('cuerpoEducaplay')
	@if($comentariosVideo!='[]')
		@foreach($comentariosVideo as $elemComentario)
			<p style="color:white;">Temporada {{$elemComentario->temporada}}. Capitulo {{$elemComentario->capitulo}}</p>
			<p style="color:white;">{{$elemComentario->comment}}</p>
		@endforeach
	@else
		<p style="color:white;"> AUN NO HAY COMENTARIOS PARA ESTA SERIE</p>
	@endif
@endsection