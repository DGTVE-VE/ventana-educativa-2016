	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h3 class="text-uppercase">Colaboradores</h3>
		</div>
	</div>
		@foreach($colaboradores as $colaborador)
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-11">
				<div class="col-md-1">
					<img src="{{$colaborador->url_foto}}" alt="Fotografia Colaborador" class="img-responsive">
				</div>
				<div class="col-md-3">
					<h4>{{$colaborador->name}} {{$colaborador->a_paterno}} {{$colaborador->a_materno}}</h4>
					<p>{{$colaborador->puesto}}</p>
					<p>{{$colaborador->area}}</p>
					<p>{{$colaborador->dependencia}}</p>
				</div>
				<div class="col-md-7 text-justify">
					<p>{{$colaborador->resena}}</p>
				</div>
				<div class="col-md-1">
					<button onclick="guardaDecision({{$colaborador->user_id}}, '1')" type="button" class="btn btn-default" style="width:90px;">Acepta</button>
					<button onclick="guardaDecision({{$colaborador->user_id}}, '0')" type="button" class="btn btn-default" style="width:90px;">Rechaza</button>
				</div>
			</div>
		</div>
		@endforeach

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