	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h4>Colaboradores</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		{{--*/ $i=0; /*--}}
		@foreach($colaboradores as $colaborador)
			<div class="col-md-3">
				<div class="thumbnail">
					<img src="{{$colaborador->url_foto}}" alt="Fotografia Colaborador">
					<div class="caption text-justify">
						<h4>{{$colaborador->name}} {{$colaborador->a_paterno}} {{$colaborador->a_materno}}</h4>
						<p>{{$colaborador->puesto}}</p>
						<p>{{$colaborador->area}}</p>
						<p>{{$colaborador->dependencia}}</p>
						<p>{{$colaborador->resena}}</p>
					</div>
					<button onclick="guardaDecision({{$colaborador->user_id}}, '1')" type="button" class="btn btn-default">Acepta</button>
					<button onclick="guardaDecision({{$colaborador->user_id}}, '0')" type="button" class="btn btn-default">Rechaza</button>
				</div>
			</div>
			{{--*/ $i++; /*--}}
			@if($i % 3 == 0 && $i != 0)
				</div>
				<div class="row">
					<div class="col-md-2">
					</div>
			@endif
		@endforeach
	</div>
	<div id="alertaExito" class="alert alert-success" role="alert" style="position: fixed; top:50%; left: 45%; padding: 50px; display:none;">Registro modificado con exito</div>
	<div id="alertaError" class="alert alert-warning" role="alert" style="position: fixed; top:50%; left: 45%; padding: 50px; display:none;">Error al modificar el registro</div>
	<script>
		function guardaDecision(id_usuario, decision){
			var urlget = "{{url('redmite/administra/guardaDecision')}}";
			_url = urlget + "/" + id_usuario + "/" + decision;
			$.ajax({
				method: "GET",
				url: _url,
				error: function (ts) {
					$("#alertaError").css("display","block");
					setTimeout(function(){
						$("#alertaError").css("display","none");
					},3000);
					console.log('error al guardar ' + ts.responseText);
			}})
			.done(function (msg) {
				$("#alertaExito").css("display","block");
				setTimeout(function(){
					$("#alertaExito").css("display","none");
				},3000);
			});
		}
	</script>